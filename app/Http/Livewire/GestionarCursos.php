<?php

namespace App\Http\Livewire;

use App\Clases\CourseMoodle;
use App\Clases\UserMoodle;
use App\Models\Categoria;
use App\Models\Cuota;
use App\Models\Curso;
use App\Models\Gcuota;
use App\Models\Grupo;
use App\Models\Modalidad;
use App\Models\Mpago;
use App\Rules\ValidarCuotas;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class GestionarCursos extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public Curso $curso;
    public Grupo $grupo;
    public Modalidad $modalidad;
    public Cuota $cuota;
    public Gcuota $gcuota;
    public $curso_imagen;
    public $scuota;
    public $scurso;
    public $mensaje;
    public $imagen_curso, $iteration = 1;
    public $n_pagina = 5;
    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];
    public $modal_titulo = 'Crear';
    public $modal_titulo_grupo = 'Crear';
    public $modal_titulo_modalidad = 'Crear';
    public $modal_titulo_cuota = 'Crear';

    public $lista_grupos;


    #escuchador
    protected $listeners = ['eliminar', 'reiniciar','eliminar_gcuota'];

    protected $rules = [
        'curso.name' => '',
        'curso.shortname' => '',
        'curso.descripcion' => '',
        'curso.categoria_id' => '',
        'curso.resumen' => '',
        'curso.imagen' => '',
        'curso.link_video' => '',
        'curso.duracion' => '',
        'curso.idioma' => '',
        'curso.certificado' =>'',
        'grupo.name' => '',
        'grupo.descripcion' => '',
        'modalidad.name' => '',
        'modalidad.descripcion' => '',
        'cuota.name' => '',
        'cuota.monto' => '',
        'cuota.fvencimiento' => '',
        'gcuota.grupo_id' => '',

    ];
    protected $rules_curso = [
        'curso.name' => 'required|string',
        'curso.shortname' => 'required|unique:cursos,shortname',

    ];
    protected $rules_grupo = [
        'grupo.name' => 'required|string',
        'grupo.descripcion' => 'required',
    ];

    protected $rules_modalidad = [
        'modalidad.name' => 'required',
        'modalidad.descripcion' => 'required',
    ];

    protected $rules_cuota = [
        'cuota.name' => 'required',
        'cuota.monto' => 'required',
        'cuota.fvencimiento' => 'required',
    ];
    protected $rules_gcuota = [
        'gcuota.grupo_id' => 'required',
    ];

    protected $validationAttributes = [
        'curso.name' => 'Nombre',
        'curso.categoria_id' => 'Categoria',
        'curso.shortname' => 'El nombre del curso no se puede repetir',
        'grupo.name' => 'Nombre',
    ];

    public function updatedCursoName($value)
    {
        $this->curso->shortname = str_replace(" ", "_", $this->curso->name);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    #metodo contructor
    public function mount()
    {
        $this->curso = new Curso();
        $this->grupo = new Grupo();
        $this->modalidad = new Modalidad();
        $this->cuota = new Cuota();
        $this->gcuota = new Gcuota();
    }


    #validar
    #validar
    public function validando($id = null)
    {
        $this->validate([
            'curso.name' => 'required|string',
            'curso.shortname' => 'required|unique:cursos,shortname,' . $id,
        ]);
    }

    public function modal($curso_id = null)
    {
        $this->iteration++;
        $this->reset('curso_imagen');
        if ($curso_id == null) {
            $this->curso = new Curso();
           $this->curso->descripcion = '';
            $this->modal_titulo = 'Crear';
            $this->emit('nuevo_editor');
        } else {
            $this->curso = Curso::find($curso_id);
            $this->modal_titulo = 'Modificar';
            $this->emit('editar_editor',$this->curso->resumen);
        }
    }

    public function modal_grupo($grupo_id = null)
    {
        $this->iteration++;
        $this->reset('imagen_curso');
        if ($grupo_id == null) {
            $this->grupo = new Grupo();
            $this->modal_titulo_grupo = 'Crear';
            $this->emit('nuevo_editor_grupo');
        } else {
            $this->grupo = Grupo::find($grupo_id);
            $this->modal_titulo_grupo = 'Modificar';
            $this->emit('editar_editor_grupo',$this->grupo->descripcion);
        }
    }

    public function modal_modalidad($modalidad_id = null ){
        $this->reset('scuota');
        #reiniciar cuotoa
        $this->cuota = new Cuota();
        $this->modal_titulo_cuota = 'Crear';

        if($modalidad_id == null)
        {
            $this->modalidad = new Modalidad();
            $this->modal_titulo_modalidad = 'Crear';
        } else {
            $this->modalidad = Modalidad::find($modalidad_id);
            $this->modal_titulo_modalidad = 'Modificar';
        }
    }

    public function editar_cuota($cuota_id){
            $this->cuota = Cuota::find($cuota_id);
            $this->modal_titulo_cuota = 'Modificar';
    }

    public function agregar_gcuota($cuota_id)
    {
        $this->scuota = Cuota::find($cuota_id);
        $this->gcuota = new Gcuota();
        $this->gcuota->cuota_id = $cuota_id;
        $this->gcuota->grupo_id = '';
        $this->lista_grupos = Grupo::where('curso_id',$this->scurso->id)->whereNotExists(function ($query)  {
            $query->select()
                  ->from('gcuotas')
                  ->whereColumn('grupos.id', 'gcuotas.grupo_id')
                  ->where('gcuotas.cuota_id',$this->scuota->id);
        })->get();
    }

    public function save()
    {
        $nusuario = false;
        if ($this->modal_titulo == 'Crear') {
            $this->validate($this->rules_curso);
        } elseif ($this->modal_titulo == 'Modificar') {
            $this->validando($this->curso->id);

            if($this->curso->certificado == false){
                $this->curso->certificado = null;
            }
            else {
                $this->curso->certificado = 1;
            }
        }
        $this->curso->save();
        #subir imagen

        if($this->curso_imagen != null)
        {
            $extension =  $this->curso_imagen->extension();
            $this->eliminar_imagen_curso();
            $this->subir_imagen_curso($this->curso_imagen);
        }


        #crear curso en  moodle o modificar curso de moodle
        if ($this->modal_titulo == 'Crear') {
            //crear curso moodle
            $n_curso = new CourseMoodle();
            $n_curso->name = $this->curso->name;
            $n_curso->shortname = $this->curso->shortname;
            $n_curso->categoryid = 1;
            $idcurso = $n_curso->crear();
            $this->curso->id_moodle_course = $idcurso;
            $this->curso->estado = 1;
            $this->curso->save();
        }
        elseif ($this->modal_titulo == 'Modificar') {
            //modificar el curso en moodle
            $a_moodle = CourseMoodle::buscar($this->curso->id_course_moodle);
            $a_moodle->name = $this->curso->name;
            $a_moodle->shortname = $this->curso->shortname;
            $a_moodle->actualizar();
        }

        #enviar respuesta
        if ($this->modal_titulo == 'Crear') {
            if ($idcurso) {
                $this->emit('notificar_creacion', 'se creó el curso');
            } else {
                $this->curso->delete();
                $this->emit('notificar_creacion', 'no se pudo crear el curso');
            }
        } elseif ($this->modal_titulo == 'Modificar') {
            $this->emit('notificar_creacion', 'se modifico el curso');
        }
    }

    public function eliminar_imagen_curso()
    {
        if ($this->curso->imagen == true)
        {
        $eliminar = str_replace('storage', 'public', $this->curso->imagen);
        Storage::delete([$eliminar]);
        }
    }

    public function subir_imagen_curso($imagen){
        $extension = $imagen->extension();
        $imgcurso = $imagen->storeAs('public/cursos', 'curso-'.$this->curso->id."-".rand(100000,999999).".".$extension);
        $this->curso->imagen = Storage::url($imgcurso);
        $this->curso->save();
    }


    public function save_grupo()
    {
        $this->validate($this->rules_grupo);
        $this->grupo->curso_id = $this->scurso->id;
        $this->grupo->save();

        #crear curso en  moodle o modificar curso de moodle
        if ($this->modal_titulo_grupo == 'Crear') {
            //crear usuario moodle
            $curso_moodle = CourseMoodle::buscar($this->scurso->id_moodle_course);
            $id_grupo = $curso_moodle->crear_grupo($this->grupo->name);
            $this->grupo->id_moodle_group = $id_grupo;
            $this->grupo->save();
        } elseif ($this->modal_titulo_grupo == 'Modificar') {
        }

        #subir imagen del usuario
        if ($this->imagen_curso != null) {
            $extension =  $this->imagen_curso->extension();
            $this->eliminar_imagen();
            $this->subir_imagen($this->imagen_curso);
        }

        #enviar respuesta
        if ($this->modal_titulo_grupo == 'Crear') {
            if ($id_grupo) {
                $this->emit('notificar_creacion_grupo', 'se creó el grupo');
            } else {
                $this->grupo->delete();
                $this->emit('notificar_creacion_grupo', 'no se pudo crear el grupo');
            }
        } elseif ($this->modal_titulo_grupo == 'Modificar') {
            $this->emit('notificar_creacion_grupo', 'se modifico el grupo');
        }
        #selecionar grupo
        $this->seleccionar_curso($this->scurso);
    }

    public function save_modalidad()
    {
        $this->validate($this->rules_modalidad);
        if ($this->modal_titulo_modalidad == 'Crear') {
            $this->modalidad->curso_id = $this->scurso->id;
        }
        $this->modalidad->save();
        $this->seleccionar_curso($this->scurso);

        #enviar respuesta
        if ($this->modal_titulo_modalidad == 'Crear') {
            $this->emit('notificar_accion_modalidad', 'Se creo el plan');
        } elseif ($this->modal_titulo_modalidad == 'Modificar') {
            $this->emit('notificar_accion_modalidad', 'se modifico el plan');
        }
    }

    public function save_cuota()
    {   $this->validate($this->rules_cuota);
        if ($this->modal_titulo_cuota == 'Crear')
        {
            $this->cuota->modalidad_id = $this->modalidad->id;
        }
        $this->cuota->save();
        $this->cuota = new Cuota();
        $this->modal_titulo_cuota = 'Crear';
        $this->modal_modalidad($this->modalidad->id);
    }

    public function save_gcuota()
    {
        $this->validate(['gcuota.grupo_id' => ['required',new ValidarCuotas($this->modalidad->id,$this->gcuota->grupo_id)]]);
        $this->gcuota->cuota_id = $this->scuota->id;
        $this->gcuota->save();
        $this->modal_modalidad($this->modalidad->id);
        //$this->agregar_gcuota($this->scuota->id);
    }

    public function seleccionar_curso(Curso $curso){
        $curso = Curso::find($curso->id);
        $this->scurso = $curso;
    }

    public function eliminar_grupo(Grupo $grupo)
    {
        $this->reset('mensaje');
        if ($grupo->gmatriculas->count() == 0) {
            $grupo->delete();
        } else {
            $this->mensaje = "no se puede eliminar un grupo que tiene inscritos solicitar  administración";
        }
    }

    public function eliminar_cuota(Cuota $cuota)
    {
        $mpagos = Mpago::where('cuota_id',$cuota->id)->get();
        if ($mpagos->count() == 0) {
            $cuota->delete();
        }
    }

    public function eliminar_imagen()
    {
        if ($this->grupo->imagen == true) {
            $eliminar = str_replace('storage', 'public', $this->grupo->imagen);
            Storage::delete([$eliminar]);
        }
    }

    public function subir_imagen($imagen)
    {
        $extension = $imagen->extension();
        $imagenperfil = $imagen->storeAs('public/grupos', rand(1000, 9999) . 'grupos' . $this->grupo->id . "." . $extension);
        $this->grupo->imagen = Storage::url($imagenperfil);
        $this->grupo->save();
    }

    public function eliminar(Curso $curso)
    {

        if ($curso->grupos->count() == 0) {
            $curso->delete();
            $mensaje = "Se elimino el usuario correctamente.";
        } else {
            $mensaje = "No se elimino el Curso.";
        }
        $this->resetPage();

        $this->emit('notificar_eliminacion', $mensaje);
    }

    public function eliminar_modalidad(Modalidad $modalidad)
    {
        if ($modalidad->cmatriculas->count() == 0) {
            $modalidad->delete();
            $this->seleccionar_curso($this->scurso);
        }
    }

    public function render()
    {
        $categorias = Categoria::all();
        $cursos =Curso::Where(function($query) {
                        $query->Where('name', 'like', '%' . $this->search.'%');
                    })->paginate($this->n_pagina);

        return view('livewire.gestionar-cursos',compact('cursos','categorias'));
    }

    public function eliminar_gcuota(Gcuota $gcuota)
    {
        $scuota = $gcuota->cuota->id;
        $gcuota->delete();
        $this->modal_modalidad($this->modalidad->id);
        $this->agregar_gcuota($scuota);
    }
}
