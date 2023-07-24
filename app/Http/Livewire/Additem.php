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
        if (!$this->buscaEnCarrito()) {
            Cart::instance('carrito')->add([
                'id' => $this->curso->id,
                'name' => $this->curso->name,
                'qty' => 1,
                'price' => $this->modalidad->cuotas->first()->monto,
                'weight' => 550,
                'options' => [
                    'imagen' => $this->curso->imagen,
                    'modalidad' => $this->modalidad->name,
                    'modalidad_id' => $this->modalidad->id
                ]
            ]);
            $this->buscaEnCarrito();
        }else{
            Cart::instance('carrito')->update($this->rowId, [
                'price' => $this->modalidad->cuotas->first()->monto,
                'options'  => [
                    'imagen' => $this->curso->imagen,
                    'modalidad' => $this->modalidad->name,
                    'modalidad_id' => $this->modalidad->id
            ]]);
            $this->buscaEnCarrito();
        }
        cart::instance('carrito')->store(Auth::user()->id);
        //Cart::instance('carrito')->destroy();
        $this->emit('actualizar');
    }

    public function buscaEnCarrito()
    {
        $this->encarrito = false;
        if (Cart::instance('carrito')->search(function ($cartItem, $rowId) {
            if ($cartItem->id === $this->curso->id) {
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
