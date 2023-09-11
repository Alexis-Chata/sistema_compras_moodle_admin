<?php

namespace App\Http\Livewire;

use App\Models\Cmatricula;
use App\Models\Comprobante;
use App\Models\Detalle;
use App\Models\Mpago;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Laravel\Cashier\Exceptions\IncompletePayment;
use Livewire\Component;

class PaymentMethod extends Component
{
    public $checkout;
    public $paymentMethodId;

    protected $listeners = ['actualizar' => 'render'];

    public function eliminar_producto($rowId)
    {
        $carrito = Cart::instance('carrito');
        $user = auth()->user();
        $userCheck = auth()->check();

        if ($userCheck) {
            $carrito->erase($user->id);
        }
        $carrito->remove($rowId);
        $this->emit('actualizar');
        if (!$carrito->count()) {
            $this->emit('actualizarContenido');
        }
        if ($userCheck) {
            $carrito->store($user->id);
        }
        if (!$carrito->count()) {
            redirect()->route('carrito');
        }
    }

    public function pago()
    {
        DB::beginTransaction();
        try {
            //if (auth()->check()) {
            $carrito = Cart::instance('carrito');
            $user = auth()->user();
            $comprobante = Comprobante::create(['cliente_id' => $user->id, 'femision' => now(), 'termino' => 'termino', 'total' => $carrito->total()]);
            foreach ($carrito->content() as $key => $item) {
                //dd($item->options);
                $matricula = [
                    "user_id" => $user->id,
                    "modalidad_id" => $item->options->modalidad_id,
                    "rol" => 4
                ];
                $detalle = Detalle::create(['descripcion' => $item->options->curso . ' / ' . $item->options->modalidad . ' - ' . $item->name, 'cantidad' => $item->qty, 'precio' => $item->price, 'importe' => $item->qty * $item->price, 'cuota_id' => $item->id, 'user_id' => $user->id, 'comprobante_id' => $comprobante->id]);
                $cmatricula = Cmatricula::firstOrCreate($matricula);
                Mpago::create(['cmatricula_id' => $cmatricula->id, 'cuota_id' => $item->id, 'detalle_id' => $detalle->id, 'fpago' => now()]);
            }


            try {
                $payment = auth()->user()->charge($carrito->total() * 100, $this->paymentMethodId);
            } catch (IncompletePayment $exception) {
                // Get the payment intent status...
                $exception->payment->status;

                // Check specific conditions...
                if ($exception->payment->requiresPaymentMethod()) {
                    // ...
                } elseif ($exception->payment->requiresConfirmation()) {
                    // ...
                }
                DB::rollback();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        $carrito->erase($user->id);
        $carrito->destroy();
        //dd($payment);
        $user->assignRole(['Estudiante']);
        $this->emit('actualizar');
        redirect()->route('dashboard')->with('success', 'Pago realizado con éxito, gracias por su compra');
        //}
    }

    public function getDefaultPaymentMethodProperty()
    {
        return auth()->user()->defaultPaymentMethod();
    }

    public function addPaymentMethod($paymentMethod)
    {
        auth()->user()->addPaymentMethod($paymentMethod);
        if (!auth()->user()->hasDefaultPaymentMethod()) {
            auth()->user()->updateDefaultPaymentMethod($paymentMethod);
        }
    }

    public function addPaymentMethodAndPago($paymentMethod)
    {
        $this->addPaymentMethod($paymentMethod);
        if (auth()->user()->hasDefaultPaymentMethod()) {
            $this->paymentMethodId = $this->paymentMethodId ?? $this->getDefaultPaymentMethodProperty()->id;
        }
        $this->pago();
    }

    public function deletePaymentMethod($paymentMethod)
    {
        auth()->user()->deletePaymentMethod($paymentMethod);
    }

    public function defaultPaymentMethod($paymentMethod)
    {
        auth()->user()->updateDefaultPaymentMethod($paymentMethod);
    }

    public function mount()
    {
        if (auth()->user()->hasDefaultPaymentMethod()) {
            $this->paymentMethodId = $this->paymentMethodId ?? $this->getDefaultPaymentMethodProperty()->id;
        }
    }

    public function render()
    {
        //dd(auth()->user()->defaultPaymentMethod());
        //dd(auth()->user()->hasDefaultPaymentMethod());
        if (in_array(request()->route()->getName(), ['checkout']) || $this->checkout == "-checkout") {
            $this->checkout = "-checkout";
        }
        //dd(request()->route()->getName());
        return view('livewire.payment-method' . $this->checkout, [
            'intent' => auth()->user()->createSetupIntent(),
            'PaymentMethods' => auth()->user()->PaymentMethods(),
        ]);
    }
}
