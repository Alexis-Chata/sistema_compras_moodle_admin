<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Additem extends Component
{
    public $curso,$encarrito;

    public function addItem(){
        Cart::add(['id' => $this->curso->id, 'name' => $this->curso->name, 'qty' => 1, 'price' => $this->curso->costo, 'weight' => 550, 'options' => ['imagen' => $this->curso->imagen]]);
        //Cart::destroy();
        $this->emit('actualizar');

        $this->encarrito = "En Carrito";
    }

    public function render()
    {
        Cart::setGlobalTax(0);
        return view('livewire.additem');
    }
}
