<?php

namespace App\Http\Livewire;

use App\Models\Cmatricula;
use App\Models\Comprobante;
use App\Models\Detalle;
use App\Models\Mpago;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TotalCarrito extends Component
{
    protected $listeners = ['actualizar' => 'render'];

    public function pago()
    {
        //if (Auth::check()) {
            $carrito = Cart::instance('carrito');
            $options = $carrito->content()->pluck('options', 'id');
            $comprobante = Comprobante::create(['cliente_id' => Auth::user()->id, 'femision' => now() , 'termino' => 'termino', 'total' => $carrito->total()]);
            foreach ($carrito->content() as $key => $item) {
                //dd($item->options);
                $matricula = [
                    "user_id" => Auth::user()->id,
                    "modalidad_id" => $item->options->modalidad_id,
                    "rol" => 4
                ];
                $detalle = Detalle::create(['descripcion' => $item->curso.' '.$item->name, 'cantidad' => $item->qty, 'precio' => $item->price, 'importe' => $item->qty * $item->price, 'comprobante_id' => $comprobante->id]);
                $cmatricula = Cmatricula::create($matricula);
                Mpago::create(['cmatricula_id' => $cmatricula->id, 'cuota_id' => $item->id , 'detalle_id' => $detalle->id, 'fpago' => now()]);
            }
            $carrito->erase(Auth::user()->id);
            $carrito->destroy();
            Auth::user()->assignRole(['Estudiante']);
            $this->emit('actualizar');
            redirect()->route('mycursos');
        //}
    }

    public function render()
    {
        return view('livewire.total-carrito');
    }
}
