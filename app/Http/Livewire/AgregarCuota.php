<?php

namespace App\Http\Livewire;

use App\Models\Cuota;
use App\Models\Curso;
use App\Models\Modalidad;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class AgregarCuota extends Component
{
    public Modalidad $modalidad;
    public Curso $curso;
    public Cuota $cuota;
    public bool $encarrito;
    public String $rowId;

    protected $listeners = ['actualizarcuota' => 'mount'];

    public function agregarCuota()
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
            'modalidad_id' => $this->modalidad->id,
            'cuota' => $this->cuota->name,
            'cuota_id' => $this->cuota->id
        ];

        if (!$this->buscaCuotaEnCarrito()) {

            $carrito->add($this->cuota, 1, $options);
            $this->buscaCuotaEnCarrito();
        } else {
            $carrito->update($this->rowId, $this->cuota);
            $carrito->update($this->rowId, 1);
            $carrito->update($this->rowId, ['options'  => $options]);
            $this->buscaCuotaEnCarrito();
        }
        if ($userCheck) {
            $carrito->store($user->id);
        }
        //$carrito->destroy();
        $this->emit('actualizar');
    }

    public function buscaCuotaEnCarrito()
    {
        $carrito = Cart::instance('carrito');
        $this->encarrito = false;
        if ($carrito->search(function ($cartItem, $rowId) {
            if ($cartItem->id === $this->cuota->id) {
                $this->rowId = $rowId;
            }
            return $cartItem->id === $this->cuota->id;
        })->count() > 0) {
            $this->encarrito = true;
        }
        return $this->encarrito;
    }

    public function mount()
    {
        $this->buscaCuotaEnCarrito();
    }

    public function render()
    {
        $carrito = Cart::instance('carrito');
        $carrito->setGlobalTax(0);
        return view('livewire.agregar-cuota');
    }
}
