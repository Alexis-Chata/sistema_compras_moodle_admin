<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DetalleCarrito extends Component
{
    protected $listeners = ['actualizar'=>'render'];

    public function eliminar_producto($rowId){
        if(Auth::check()) { Cart::instance('carrito')->erase(Auth::user()->id); }
        Cart::instance('carrito')->remove($rowId);
        $this->emit('actualizar');
        if (!Cart::instance('carrito')->count()) {
            $this->emit('actualizarContenido');
        }
        if(Auth::check()) { cart::instance('carrito')->store(Auth::user()->id); }
    }

    public function render()
    {
        //dd(Cart::instance('carrito')->content());
        return view('livewire.detalle-carrito');
    }
}
