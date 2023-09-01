<?php

namespace App\Http\Livewire;

use App\Models\Cmatricula;
use App\Models\Comprobante;
use App\Models\Detalle;
use App\Models\Mpago;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class TotalCarrito extends Component
{
    protected $listeners = ['actualizar' => 'render'];

    public function render()
    {
        return view('livewire.total-carrito');
    }
}
