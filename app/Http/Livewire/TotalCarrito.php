<?php

namespace App\Http\Livewire;

use App\Models\Cmatricula;
use App\Models\Mpago;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TotalCarrito extends Component
{
    protected $listeners = ['actualizar' => 'render'];

    public function pago()
    {
        //if (Auth::check()) {
            $modalidad_ids = Cart::instance('carrito')->content()->pluck('options');
            dd($modalidad_ids);
            foreach ($modalidad_ids as $key => $modalidad_id) {
                $matricula = [
                    "user_id" => Auth::user()->id,
                    "modalidad_id" => $modalidad_id,
                ];
                $rol = ["rol" => 4];
                $cmatricula = Cmatricula::firstorcreate($matricula, $rol);
                Mpago::create(['cmatricula_id' => $cmatricula->id, 'cuota_id' => 1 , 'detalle_id' => 1]);
            }
            Cart::instance('carrito')->erase(Auth::user()->id);
            Cart::instance('carrito')->destroy();
            Auth::user()->assignRole(['Estudiante']);
            $this->emit('actualizar');
            redirect()->route('mycursos');
        //}
    }

    public function render()
    {
        return view('livewire.total-carrito');
    }
}
