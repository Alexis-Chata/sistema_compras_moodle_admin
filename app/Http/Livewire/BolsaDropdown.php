<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BolsaDropdown extends Component
{
    protected $listeners = ['actualizar'=>'render'];

    public function render()
    {
        return view('livewire.bolsa-dropdown');
    }
}
