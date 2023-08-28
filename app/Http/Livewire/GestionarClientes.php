<?php

namespace App\Http\Livewire;

use App\Clases\UserMoodle;
use App\Models\Cmoodle;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class GestionarClientes extends Component
{
    public User $cliente;
    public $modal_titulo;
    public $sdominio;
    public $bcliente;
    public $gclientes;
    protected $listeners = ['modal'];
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

    public function mount(){
        $cmoodle = Cmoodle::find(1);
        $this->sdominio = $cmoodle->url;
    }

    #buscar listado de estudiante
    public function updatedBcliente()
    {
        $this->gclientes = User::Where(function($query) {
                        $query->where('email','like','%'.$this->bcliente.'%')
                                ->orWhere(DB::raw("CONCAT(`name`,' ',`ap_paterno`,' ',`ap_materno`)"), 'like', '%' . $this->bcliente.'%')
                                ->orwhere('name', 'like', '%' . $this->bcliente.'%')
                                ->orwhere('ap_paterno', 'like', '%' . $this->bcliente.'%')
                                ->orwhere('ap_materno', 'like', '%' . $this->bcliente.'%');
                    })->WhereNull('deleted_at')->orderBy('id', 'DESC')->get();
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
        if($cliente->comprobantes->count() == 0 && $cliente->cmatriculas->count() == 0){
            $moodle = UserMoodle::buscar($cliente->id);
            $moodle->eliminar();
            $cliente->delete();
            $this->updatedBcliente();
        }
        else{$this->emit('notificar_error_usuario','el usuario no se puede eliminar');}
    }
    #saved
    public function save($accion){
        if($accion == "Crear"){
            $this->validate();
        $this->cliente->password = bcrypt($this->cliente->email);
        }
        else {
            $this->validate(['cliente.email'=>'required|unique:users,email,'.$this->cliente->id]);
        }
        $this->cliente->save();

        #crear el usuario en moodle
        if($accion == "Crear")
        {
            $moodle = new UserMoodle($this->cliente->id);
            $n_user = $moodle->crear_usuario();
            if ($n_user) {$this->emit('notificar_listado');$this->updatedBcliente();}
            else{$this->emit('notificar_error_usuario','no se creo el usuario, verificar los datos escritos');}
        }

        else{
            $moodle = UserMoodle::buscar($this->cliente->id);
            $moodle->modificar_usuario();
            $this->emit('notificar_listado');$this->updatedBcliente();
        }

        $this->modal_titulo = "Crear";
        $this->cliente = new User();

    }
    #render
    public function render()
    {
        return view('livewire.gestionar-clientes');
    }
}
