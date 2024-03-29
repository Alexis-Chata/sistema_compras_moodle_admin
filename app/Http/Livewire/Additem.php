<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\Modalidad;
use Gloudemans\Shoppingcart\Facades\Cart;
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
        $carrito = Cart::instance('carrito');
        $user = auth()->user();
        $userCheck = auth()->check();

        if ($userCheck) {
            $carrito->erase($user->id);
        }

        $options = [
            'imagen' => $this->curso->imagen,
            'curso' => $this->curso->name,
            'curso_id' => $this->curso->id,
            'modalidad' => $this->modalidad->name,
            'modalidad_id' => $this->modalidad->id
        ];

        if (!$this->buscaEnCarrito()) {

            $carrito->add($this->modalidad->cuotas()->first(), 1, $options);
            $this->buscaEnCarrito();
        } else {
            $carrito->update($this->rowId, $this->modalidad->cuotas()->first(),);
            $carrito->update($this->rowId, 1);
            $carrito->update($this->rowId, ['options'  => $options]);
            $this->buscaEnCarrito();
        }
        if ($userCheck) {
            $carrito->store($user->id);
        }
        //$carrito->destroy();
        $this->emit('actualizar');
    }

    public function buscaEnCarrito()
    {
        $carrito = Cart::instance('carrito');
        $this->encarrito = false;
        if ($carrito->search(function ($cartItem, $rowId) {
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
        $carrito = Cart::instance('carrito');
        $carrito->setGlobalTax(0);
        return view('livewire.additem');
    }
}
