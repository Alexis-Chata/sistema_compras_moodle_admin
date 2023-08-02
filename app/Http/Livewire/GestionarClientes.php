<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class GestionarClientes extends Component
{
    public User $cliente;
    public $modal_titulo;
    public $bcliente;
    public $gclientes;

    protected $rules = [
        'cliente.name' => 'required|string',
        'cliente.ap_paterno' => '',
        'cliente.ap_materno' => '',
        'cliente.email' => 'required|email',
        'cliente.celular' => '',
    ];

    protected $validationAttributes = [
        'cliente.name' => 'Nombre',
        'cliente.ap_paterno' => 'Apellido Paterno',
        'cliente.ap_materno' => 'Apellido Materno',
        'cliente.email' => 'Email',
        'cliente.direccion' => 'Dirección',
        'cliente.celular' => 'Celular',
    ];

    #buscar listado de estudiante
    public function updatedBcliente()
    {
        $this->gclientes = User::Where(function($query) {
                        $query->where('email','like','%'.$this->bcliente.'%')
                                ->orWhere(DB::raw("CONCAT(`name`,' ',`ap_paterno`,' ',`ap_materno`)"), 'like', '%' . $this->bcliente.'%')
                                ->orwhere('name', 'like', '%' . $this->bcliente.'%')
                                ->orwhere('ap_paterno', 'like', '%' . $this->bcliente.'%')
                                ->orwhere('ap_materno', 'like', '%' . $this->bcliente.'%');
                    })->orderBy('id', 'DESC')->get();
    }
    #obtener datos
    public function obtener_datos($usuario){
        $this->cliente = User::find($usuario);
        $this->modal_titulo = "Modificar";
        $this->emit('notificar_seleccion');
    }
    #modal
    public function modal($accion = 'Crear'){
        if($accion == 'Crear')
        {
            $this->cliente = new User();
            $this->modal_titulo = $accion;
        }
        $this->updatedBcliente();
    }
    #eliminar
    public function eliminar(User $cliente){
        if($cliente->comprobantes->count() == 0){
            $cliente->delete();
            $this->updatedBcliente();
        }
    }

    public function save($accion){
        if($accion == "Crear"){
            $this->validate();

        $this->cliente->password = bcrypt($this->cliente->email);
        }
        else {
            $this->validate(['cliente.email'=>'required|unique:users,email,'.$this->cliente->id]);
        }
        $this->cliente->save();
        $this->modal_titulo = "Crear";
        $this->cliente = new User();
        $this->emit('notificar_listado');
        $this->updatedBcliente();
    }

    protected $listeners = ['modal'];

    public function render()
    {
        return view('livewire.gestionar-clientes');
    }
}
