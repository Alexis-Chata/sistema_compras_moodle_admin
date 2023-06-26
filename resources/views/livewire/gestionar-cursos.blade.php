<div class="container">
    <!--buscador de estudiante-->
    <div class="card card-secondary">
        <div class="card-header" style="background: #0b4d87">
            <div class="row align-items-center">
                <div class="col col-md-3">
                    <h5>Buscador de Cursos</h5>
                </div>
                <div id="crear Curso" class="col col-md-3">
                    <button class="btn btn-secondary" id="crear_curso" data-bs-toggle="modal"
                        data-bs-target="#curso_modal"
                        wire:click="modal()"><i class="fas fa-plus-circle"></i> Crear Curso
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body p-inherit">
                    <div class="row m-1">
                        <div class="col-6 pb-4">
                            <label for="search">Buscar Curso</label>
                            <input class="form-control" id="search" placeholder="Buscar Curso" wire:model="search">
                        </div>
                        <div class="col-3 pb-4">
                            <label for="n_pagina">Paginación</label>
                            <select class="form-select" wire:model="n_pagina">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="{{$cursos->total()}}">Todo</option>
                            </select>
                        </div>
                    </div>
        </div>
    </div>
    <!--lista de cursos-->
    <div class="card card-secondary" id="lista_estudiante">
        <div class="card-header" id="lista_estudiante_header" style="background: #0b4d87">
            <div class="row align-items-center p-1">
                <div class="col col-md-3">
                    <h5>Listado de Cursos : {{$cursos->total()}}</h5>
                </div>
            </div>
        </div>
        <div class="card-body p-inherit" id="lista_estudiante_body">
            <div id="tabla_lista_estudiante" class="container mt-4 table-responsive">
                <table class="table">
                    <thead class="table table-dark">
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Grupos</th>
                            <th class="text-center">Planes</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        @foreach ($cursos as $key => $curso)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td class="text-center">{{$curso->name}}</td>
                                <td class="text-center">
                                    <button class="btn btn-success" id="grupos-{{ $curso->id }}"
                                        wire:click="seleccionar_curso({{ $curso->id }})">{{$curso->grupos->count()}}
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success" id="modalidad-{{ $curso->id }}"
                                        wire:click="seleccionar_curso({{ $curso->id }})">{{$curso->modalidads->count()}}
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success" id="editar-{{ $curso->id }}" data-bs-toggle="modal"
                                        data-bs-target="#curso_modal"
                                        wire:click="modal({{ $curso->id }})"><i class="bi bi-pencil-square"></i>
                                    </button>

                                        <button class="btn btn-danger" id="eliminar-{{ $curso->id }}"
                                        wire:click="$emit('eliminar_curso',{{ $curso->id }})"><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{$cursos->links()}}
                </div>
            </div>
        </div>
    </div>
    <!---grupos del curso-->
    @isset($scurso)
    <div class="card card-secondary" id="seleccionar_estudiante">
        <div class="card-header" id="seleccionar_estudiante_header" style="background: #0b4d87">
            <div class="row align-items-center p-1">
                <div class="col col-md-6">
                    <h5>Lista de Grupos del Curso : {{$scurso->name}}</h5>
                </div>
                <div id="crear_grupo" class="col col-md-3">
                    <button class="btn btn-secondary" id="crear_grupo" data-bs-toggle="modal"
                        data-bs-target="#grupo_modal"
                        wire:click="modal_grupo()"><i class="fas fa-plus-circle"></i> Crear Grupo
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body p-inherit" id="seleccionar_estudiante_body">
            <div id="selecio" class="container mt-4 table-responsive">
                <table id='tabla_selecionar_estudiante' class="table">
                    <thead class="table table-dark">
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Detalles</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        @foreach ($scurso->grupos as $key2 => $grupo   )
                            <tr>
                                <td class="text-center">{{ $key2 + 1 }}</td>
                                <td class="text-center">{{ $grupo->name}}</td>
                                <td class="text-center">Calificación : {{ $grupo->calificacion}}, Duración : {{$grupo->hora." ".$grupo->min}} y Lecturas : {{$grupo->lecturas}}</td>
                                <th class="text-center">
                                    <button data-bs-toggle="modal" data-bs-target="#grupo_modal"  id="editar-grupo-{{$grupo->id}}" class="btn btn-warning" wire:click="modal_grupo({{$grupo->id}})"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger" id='eliminar-grupo-{{$grupo->id}}' wire:click="eliminar_grupo({{$grupo->id}})"><i class="fas fa-trash"></i></button>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($mensaje)
                {{$mensaje}}
            @endif
        </div>
    </div>
    @endisset
    <!---->
    @isset($scurso)
    <div class="card card-secondary" id="seleccionar_estudiante">
        <div class="card-header" id="seleccionar_estudiante_header" style="background: #0b4d87">
            <div class="row align-items-center p-1">
                <div class="col col-md-6">
                    <h5>Lista de Planes del Curso : {{$scurso->name}}</h5>
                </div>
                <div id="crear_grupo" class="col col-md-3">
                    <button class="btn btn-secondary" id="crear_plan" data-bs-toggle="modal"
                        data-bs-target="#modalidad_modal"
                        wire:click="modal_modalidad()"><i class="fas fa-plus-circle"></i> Crear Plan
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body p-inherit" id="seleccionar_estudiante_body">
            <div id="selecio" class="container mt-4 table-responsive">
                <table id='tabla_selecionar_estudiante' class="table">
                    <thead class="table table-dark">
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Inscritos</th>
                            <th class="text-center">N° Cuotas</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        @foreach ($scurso->modalidads as $key2 => $lmodalidad   )
                            <tr>
                                <td class="text-center">{{ $key2 + 1 }}</td>
                                <td class="text-center">{{ $lmodalidad->name}}</td>
                                <td class="text-center">{{ $lmodalidad->descripcion}}</td>
                                <td class="text-center">{{ $lmodalidad->cmatriculas->count()}}</td>
                                <td class="text-center">{{ $lmodalidad->cuotas->count()}}</td>
                                <td class="text-center">
                                    <button class="btn btn-warning" id="modalidad-editar-{{$lmodalidad->id}}" data-bs-toggle="modal" data-bs-target="#modalidad_modal" wire:click="modal_modalidad({{$lmodalidad->id}})" ><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger"  id="modalidad-eliminar-{{$lmodalidad->id}}" wire:click='eliminar_modalidad({{$lmodalidad->id}})'><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td class="text-center table-dark" colspan="3" >Total</td>
                                <td class="text-center">{{$scurso->obtener_matriculas}}</td>
                                <td class="text-center table-dark"></td>
                                <td class="text-center table-dark"></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endisset
    <!-- Modal vista cursos -->
    <div wire:ignore.self class="modal fade" id="curso_modal" tabindex="-1" aria-labelledby="usuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="usuarioModalLabel">{{ $modal_titulo }} - Curso</h5>
                    <button type="button" id="cerrar_curso_modal" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <!--datos del Usuario-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-secondary">
                                    <div class="card-header" style="background: #0b4d87">
                                        <div class="row align-items-center p-1">
                                            <div class="col col-md-6">
                                                <h5>Datos Curso</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-inherit">
                                        <div class="row m-4">
                                            <div class="col-12 col-sm-4">
                                                <label for="curso_name" class="fw-bold">Nombre : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="curso_name" class="form-control" wire:model="curso.name">
                                                @error('curso.name')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="curso_name" class="fw-bold">Nombre Corto : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="curso_shortname" class="form-control" wire:model="curso.shortname">
                                                @error('curso.shortname')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="curso_categoria_id" class="fw-bold">Elegir Categoria : <span
                                                    class="text-danger">(*)</span></label>
                                                <select id="curso_categoria_id" class="form-control" wire:model="curso.categoria_id">
                                                    <option value="">Elegir</option>
                                                    @foreach ($categorias as $categoria)
                                                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('curso.categoria_id')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <label for="curso_name" class="fw-bold">Descripción del Curso : </label>
                                                <textarea  id="" class="form-control" wire:model="curso.descripcion"></textarea>
                                                @error('curso.descripcion')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:target="perfil_imagen, save" wire:click="save"
                        wire:loading.attr="disabled">{{ $modal_titulo }} Curso</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal vista grupos -->
    <div wire:ignore.self class="modal fade" id="grupo_modal" tabindex="-1" aria-labelledby="grupoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="grupoModalLabel">{{ $modal_titulo_grupo }} - Grupo</h5>
                    <button type="button" id="cerrar_grupo_modal" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <!--datos del grupo-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-secondary">
                                    <div class="card-header" style="background: #0b4d87">
                                        <div class="row align-items-center p-1">
                                            <div class="col col-md-6">
                                                <h5>Datos Grupo</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-inherit">
                                        <div class="row m-4">
                                            <div class="col-12 col-sm-4">
                                                <label for="grupo_name" class="fw-bold">Nombre : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="grupo_name" class="form-control" wire:model="grupo.name">
                                                @error('grupo.name')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="grupo_calificacion" class="fw-bold">Calificación : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="number" step="0.1" min="0.1" max="0.5" id="grupo_calificacion" class="form-control" wire:model="grupo.calificacion">
                                                @error('grupo.calificacion')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="grupo_hora" class="fw-bold">Hora : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="number"  min="1" max="100" id="grupo_hora" class="form-control" wire:model="grupo.hora">
                                                @error('grupo.hora')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="grupo_min" class="fw-bold">Minutos : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="number"  min="1" max="60" id="grupo_min" class="form-control" wire:model="grupo.min">
                                                @error('grupo.min')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="grupo_lecturas" class="fw-bold">lecturas : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="number"  min="1" max="60" id="grupo_min" class="form-control" wire:model="grupo.lecturas">
                                                @error('grupo.lecturas')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="grupo_descripcion" class="fw-bold">Descripcion : <span
                                                    class="text-danger">(*)</span></label>
                                                    <textarea id="grupo_descripcion" class="form-control" wire:model="grupo.descripcion"  ></textarea>
                                                @error('grupo.descripcion')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="imagen_curso" class="fw-bold">Imagen del Grupo :</label>
                                                <input type="file" id="imagen_curso-{{$iteration}}" class="form-control" wire:model="imagen_curso">
                                                    @if ($imagen_curso)
                                                    <div class="text-center"> Vista previa de la foto de perfil:<br>
                                                    <img src="{{ $imagen_curso->temporaryUrl() }}" width="128px">
                                                    </div>
                                                    @endif
                                                    @isset($grupo->imagen)
                                                    @if ($grupo->image)
                                                    <div class="text-center"> Imagen del Grupo<br>
                                                    <img src="{{asset($$grupo->image)}}" width="128px">
                                                    </div>
                                                    @endisset
                                                    @endif
                                                @error('imagen_curso') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:target="imagen_curso, save_grupo" wire:click="save_grupo"
                        wire:loading.attr="disabled">{{ $modal_titulo_grupo }} Grupo</button>
                </div>
            </div>
        </div>
    </div>
    <!--Modal vista Planes-->
    <div wire:ignore.self class="modal fade" id="modalidad_modal" tabindex="-1" aria-labelledby="plan_label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="plan_label">{{ $modal_titulo_modalidad }} - Plan</h5>
                    <button type="button" id="cerrar_modalidad_modal" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <!--datos del grupo-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-secondary">
                                    <div class="card-header" style="background: #0b4d87">
                                        <div class="row align-items-center p-1">
                                            <div class="col col-md-6">
                                                <h5>Datos del Plan</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-inherit">
                                        <div class="row m-4">
                                            <div class="col-12 col-sm-4">
                                                <label for="modalidad_name" class="fw-bold">Nombre : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="modalidad_name" class="form-control" wire:model="modalidad.name">
                                                @error('modalidad.name')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="modalidad_descripcion" class="fw-bold">Descripción : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="modalidad_descripcion" class="form-control" wire:model="modalidad.descripcion">
                                                @error('modalidad.descripcion')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--cuotas-->
                            @if ($modalidad->id != null)
                            <div class="col-12">
                                <div class="card card-secondary">
                                    <div class="card-header" style="background: #0b4d87">
                                        <div class="row align-items-center p-1">
                                            <div class="col col-md-6">
                                                <h5>Cuotas del Plan - {{$modalidad->name}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-inherit">
                                         <!--tabla de cuotas-->
                                        <div class="row m-4">
                                            <div class="col-12">
                                                <table class="table table-dark">
                                                    <thead>
                                                        <tr>
                                                            <td class="text-center">N°</td>
                                                            <td class="text-center">Nombre</td>
                                                            <td class="text-center">Monto</td>
                                                            <td class="text-center">Grupos</td>
                                                            <td class="text-center">fvencimiento</td>
                                                            <td class="text-center">Acciones</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-secondary">
                                                        @foreach ($modalidad->cuotas as $key => $lcuota)
                                                            <tr>
                                                                <td class="text-center">{{$key+1}}</td>
                                                                <td class="text-center">{{$lcuota->name}}</td>
                                                                <td class="text-center">{{$lcuota->monto}}</td>
                                                                <td class="text-center">{{$lcuota->descripcion}}</td>
                                                                <td class="text-center">{{$lcuota->fvencimiento}}</td>
                                                                <td class="text-center">
                                                                    <button class="btn btn-warning" id="editar-cuota-{{$lcuota->id}}" wire:click='editar_cuota({{$lcuota->id}})'><i class="fas fa-edit"></i></button>
                                                                    <button class="btn btn-danger" id="eliminar-cuota-{{$lcuota->id}}"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                         <!--crear editar cutoas-->
                                        <div class="row m-4 align-items-end">
                                            <div class="col-12 col-sm-3">
                                                <label for="cuota_name">Nombre</label>
                                                <input type="text"   class="form-control" id="cuota_name" wire:model='cuota.name'>
                                                @error('cuota.name')<div class="p-1"> {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label for="cuota_name" >Monto</label>
                                                <input type="number" class="form-control" step="0.01" id="cuota_monto" wire:model='cuota.monto'>
                                                @error('cuota.monto')<div class="p-1"> {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label for="cuota_fecha" >Fecha Vencimiento</label>
                                                <input type="date"  class="form-control"  id="cuota_fecha" wire:model='cuota.fvencimiento'>
                                                @error('cuota.fvencimiento')<div class="p-1"> {{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <button class="btn btn-primary" wire:target="save_cuota" wire:loading.attr="disabled" wire:click='save_cuota()'>
                                                    {{$modal_titulo_cuota}} Cuota
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:target="save_modalidad" wire:click="save_modalidad"
                        wire:loading.attr="disabled">{{ $modal_titulo_modalidad }} Crear Plan</button>
                </div>
            </div>
        </div>
    </div>
</div>
