<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\Modalidad;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Additem extends Component
{
    public Modalidad $modalidad;
    public Curso $curso;
    public bool $encarrito;
    public String $rowId;

    protected $listeners = ['actualizar' => 'mount'];

    public function addItem()
    {
        if (Auth::check()) {
            Cart::instance('carrito')->erase(Auth::user()->id);
        }

        $options = [
            'imagen' => $this->curso->imagen,
            'curso' => $this->curso->name,
            'curso_id' => $this->curso->id,
            'modalidad' => $this->modalidad->name,
            'modalidad_id' => $this->modalidad->id
        ];

        if (!$this->buscaEnCarrito()) {

            Cart::instance('carrito')->add($this->modalidad->cuotas()->first(), 1, $options);
            $this->buscaEnCarrito();
        } else {
            Cart::instance('carrito')->update($this->rowId, $this->modalidad->cuotas()->first(),);
            Cart::instance('carrito')->update($this->rowId, 1);
            Cart::instance('carrito')->update($this->rowId, ['options'  => $options]);
            $this->buscaEnCarrito();
        }
        if (Auth::check()) {
            cart::instance('carrito')->store(Auth::user()->id);
        }
        //Cart::instance('carrito')->destroy();
        $this->emit('actualizar');
    }

    public function buscaEnCarrito()
    {
        $this->encarrito = false;
        if (Cart::instance('carrito')->search(function ($cartItem, $rowId) {
            if ($cartItem->options->curso_id === $this->curso->id) {
                $this->rowId = $rowId;
            }
            return $cartItem->options->curso_id === $this->curso->id;
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
        Cart::instance('carrito')->setGlobalTax(0);
        return view('livewire.additem');
    }
}
