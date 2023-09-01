<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ResumenPedido extends Component
{
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
    }

    public function pago()
    {
        //if (auth()->check()) {
            $carrito = Cart::instance('carrito');
            $user = auth()->user();
            $comprobante = Comprobante::create(['cliente_id' => $user->id, 'femision' => now() , 'termino' => 'termino', 'total' => $carrito->total()]);
            foreach ($carrito->content() as $key => $item) {
                //dd($item->options);
                $matricula = [
                    "user_id" => $user->id,
                    "modalidad_id" => $item->options->modalidad_id,
                    "rol" => 4
                ];
                $detalle = Detalle::create(['descripcion' => $item->options->curso.' / '.$item->options->modalidad.' - '.$item->name, 'cantidad' => $item->qty, 'precio' => $item->price, 'importe' => $item->qty * $item->price, 'cuota_id' => $item->id, 'user_id' => $user->id, 'comprobante_id' => $comprobante->id]);
                $cmatricula = Cmatricula::firstOrCreate($matricula);
                Mpago::create(['cmatricula_id' => $cmatricula->id, 'cuota_id' => $item->id , 'detalle_id' => $detalle->id, 'fpago' => now()]);
            }
            $carrito->erase($user->id);
            $carrito->destroy();
            $user->assignRole(['Estudiante']);
            $this->emit('actualizar');
            redirect()->route('dashboard');
        //}
    }

    public function render()
    {
        return view('livewire.resumen-pedido');
    }
}
