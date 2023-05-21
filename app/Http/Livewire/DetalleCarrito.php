<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DetalleCarrito extends Component
{
    protected $listeners = ['actualizar'=>'render'];

    public function eliminar_producto($rowId){
        Cart::remove($rowId);
        $this->emit('actualizar');
        if (!Cart::count()) {
            $this->emit('actualizarContenido');
        }
    }

    public function render()
    {
        return view('livewire.detalle-carrito');
    }
}
