<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\Modalidad;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Additem extends Component
{
    public $modalidad;
    public Curso $curso;
    public bool $encarrito;
    public String $rowId;

    protected $listeners = ['actualizar'=>'mount'];

    public function addItem()
    {
        if (!$this->buscaEnCarrito()) {
            Cart::add(['id' => $this->curso->id, 'name' => $this->curso->name, 'qty' => 1, 'price' => isset($this->curso->costo) ? $this->curso->costo : 10, 'weight' => 550, 'options' => ['imagen' => $this->curso->imagen, 'modalidad' => $this->modalidad]]);
            $this->buscaEnCarrito();
        }
        //Cart::destroy();
        $this->emit('actualizar');
    }

    public function buscaEnCarrito()
    {
        $this->encarrito = false;
        if (Cart::search(function ($cartItem, $rowId) {
            if($cartItem->id === $this->curso->id){
                $this->rowId = $rowId;
            }
            return $cartItem->id === $this->curso->id;
        })->count() > 0) {
            $this->encarrito = true;
        }
        return $this->encarrito;
    }

    public function mount()
    {
        $this->buscaEnCarrito();
    }

    public function render()
    {
        Cart::setGlobalTax(0);
        return view('livewire.additem');
    }
}
