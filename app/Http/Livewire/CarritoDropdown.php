<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CarritoDropdown extends Component
{
    protected $listeners = ['actualizar'=>'render'];

    public function eliminar_producto($rowId){
        Cart::instance('carrito')->remove($rowId);
        $this->emit('actualizar');
        if (!Cart::instance('carrito')->count()) {
            $this->emit('actualizarContenido');
        }
    }

    public function render()
    {
        return view('livewire.carrito-dropdown');
    }
}
