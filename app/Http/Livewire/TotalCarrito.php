<?php

namespace App\Http\Livewire;

use App\Models\Cmatricula;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TotalCarrito extends Component
{
    protected $listeners = ['actualizar'=>'render'];

    public function pago()
    {

    }

    public function render()
    {
        return view('livewire.total-carrito');
    }
}
