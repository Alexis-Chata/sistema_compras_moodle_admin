<?php

namespace App\Http\Livewire;

use App\Clases\UserMoodle;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class GestionarEstudiantes extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $perfil_imagen;
    public $iteration = 0;
    public User $user;
    public $suser;
    public $n_pagina = 5;
    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];
    public $modal_titulo = 'Crear';

    #escuchador
    protected $listeners = ['eliminar','reiniciar'];

    protected $rules = [
        'user.name' => 'required|string',
        'user.email' => 'required',
        'user.ap_paterno' => 'required',
        'user.ap_materno' => 'required',
    ];

    protected $validationAttributes = [
        'user.name' => 'Nombre',
        'user.email' => 'Correo Electronico',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    #metodo contructor
    public function mount(){
        $this->user = new User();
    }

    #validar
    public function validando($id = null){
        $this->validate([
            'user.name' => 'required|string',
            'user.email' => 'required|email|unique:users,email,'.$id,
        ]);
    }

    public function modal($user_id = null ){
        $this->reset('perfil_imagen');
        $this->iteration++;
        if($user_id == null)
        {
            $this->user = new User();
            $this->modal_titulo = 'Crear';
        }
        else {
            $this->user = User::find($user_id);
            $this->modal_titulo = 'Modificar';
        }
    }

    public function save()
    {
        $nusuario = false;
        if($this->modal_titulo == 'Crear'){
            $this->validate();
            $this->user->password = bcrypt($this->user->email);
        }
        elseif($this->modal_titulo == 'Modificar'){
            $this->validando($this->user->id);
        }
        $this->user->save();
        #crear cuenta moodle o modificar cuenta de moodle
        if ($this->modal_titulo == 'Crear') {
            $n_moodle = new UserMoodle($this->user->id);
            $nusuario = $n_moodle->crear_usuario();
        }
        elseif($this->modal_titulo == 'Modificar'){
            $n_moodle = UserMoodle::buscar($this->user->id);
            $n_moodle->modificar_usuario();
        }
        #subir imagen del usuario
        if($this->perfil_imagen != null)
        {
            $extension =  $this->perfil_imagen->extension();
            $this->eliminar_imagen();
            $this->subir_imagen($this->perfil_imagen);
            $n_moodle->subir_imagen('usuarios'.rand(1000,9999).$this->user->id.".".$extension,public_path($this->user->profile_photo_path));
        }
        #enviar respuesta
        if ($this->modal_titulo == 'Crear') {
            if ($nusuario)
            {
                $this->emit('notificar_creacion','se creó el usuario');
            }
            else {
                $this->user->delete();
                $this->emit('notificar_creacion','no se pudo crear el usuario');
            }
        }
        elseif($this->modal_titulo == 'Modificar'){
            $this->emit('notificar_creacion','se modifico el usuario');
        }

    }

    public function seleccionar_estudiante(User $user){
        $this->suser = $user;
    }
    public function eliminar_imagen()
    {
        if ($this->user->profile_photo_path == true)
        {
        $eliminar = str_replace('storage', 'public', $this->user->profile_photo_path);
        Storage::delete([$eliminar]);
        }
    }

    public function subir_imagen($imagen){
        $extension = $imagen->extension();
        $imagenperfil = $imagen->storeAs('public/usuarios', rand(1000,9999).'usuarios'.$this->user->id. "." . $extension);
        $this->user->profile_photo_path = Storage::url($imagenperfil);
        $this->user->save();
    }

    public function eliminar(User $user){
        if ($user->id == 1) {
            $mensaje = "No elimino el usuario.";
        }
        else {
            if(($user->comprobantes->count() == 0) && ($user->matriculas->count() == 0)){
                $user->delete();
                $mensaje = "Se elimino el usuario correctamente.";
            }
            else{
                $mensaje = "No elimino el usuario.";
            }
            $this->resetPage();
        }
        $this->emit('notificar_eliminacion',$mensaje);
    }

    public function reiniciar(User $user){
        if ($user->id == 1) {

        }
        else {
        $user->password = bcrypt($user->dni);
        $user->save();
        }
    }


    public function render()
    {
        $estudiantes = User::role('Estudiante')->Where(function($query) {
                        $query->Where('name', 'like', '%' . $this->search.'%')
                                ->orwhere('email','like','%' . $this->search.'%');
                    })->paginate($this->n_pagina);

        return view('livewire.gestionar-estudiantes',compact('estudiantes'));
    }
}

