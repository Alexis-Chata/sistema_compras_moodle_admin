<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CarritoDropdown extends Component
{
    protected $listeners = ['actualizar'=>'render'];

    public function eliminar_producto($rowId){
        $carrito = Cart::instance('carrito');
        $user = auth()->user();
        $userCheck = auth()->check();

        if($userCheck) { $carrito->erase($user->id); }
        $carrito->remove($rowId);
        $this->emit('actualizar');
        $this->emit('actualizarcuota');
        if (!$carrito->count()) {
            $this->emit('actualizarContenido');
        }
        if($userCheck) { $carrito->store($user->id); }
    }

    public function render()
    {
        //dd($carrito->content());
        return view('livewire.carrito-dropdown');
    }
}
