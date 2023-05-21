<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ContenidoCarrito extends Component
{
    protected $listeners = ['actualizarContenido'=>'render'];

    public function render()
    {
        if (Cart::count()){
            return view('livewire.contenido-carrito');
        }
        return view('livewire.contenido-carrito2');
    }
}
