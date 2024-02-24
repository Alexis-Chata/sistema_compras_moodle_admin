<div class="container">
    <!--buscador de estudiante-->
    <div class="card card-secondary">
        <div class="card-header" style="background: #0b4d87">
            <div class="row align-items-center">
                <div class="col col-md-3">
                    <h5>Buscador de Estudiantes</h5>
                </div>
                <div id="crear usuario" class="col col-md-3">
                    <button class="btn btn-secondary" id="crear_usuario" data-bs-toggle="modal"
                        data-bs-target="#usuario_modal"
                        wire:click="modal()"><i class="fas fa-plus-circle"></i> Crear Usuario
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body p-inherit">
                    <div class="row m-1">
                        <div class="col-6 pb-4">
                            <label for="search">Buscar Estudiantes</label>
                            <input class="form-control" id="search" placeholder="Buscar Usuario" wire:model="search">
                        </div>
                        <div class="col-3 pb-4">
                            <label for="n_pagina">Paginación</label>
                            <select class="form-select" wire:model="n_pagina">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="{{$estudiantes->total()}}">Todo</option>
                            </select>
                        </div>
                    </div>
        </div>
    </div>
    <!--lista de estudiantes-->
    <div class="card card-secondary" id="lista_estudiante">
        <div class="card-header" id="lista_estudiante_header" style="background: #0b4d87">
            <div class="row align-items-center p-1">
                <div class="col col-md-3">
                    <h5>Listado de Estudiantes : {{$estudiantes->total()}}</h5>
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
                            <th class="text-center">Email</th>
                            <th class="text-center">Cursos</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        @foreach ($estudiantes as $key => $estudiante)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td class="text-center">{{$estudiante->name." ".$estudiante->ap_paterno." ".$estudiante->ap_materno }}</td>
                                <td class="text-center">{{$estudiante->email }}</td>
                                <td class="text-center">
                                    <button class="btn btn-success" id="editar-{{ $estudiante->id }}"
                                        wire:click="seleccionar_estudiante({{ $estudiante->id }})">{{$estudiante->cmatriculas->count()}}
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success" id="editar-{{ $estudiante->id }}" data-bs-toggle="modal"
                                        data-bs-target="#usuario_modal"
                                        wire:click="modal({{ $estudiante->id }})"><i class="bi bi-pencil-square"></i>
                                    </button>
                                        <button class="btn btn-dark" id="reiniciar-{{ $estudiante->id }}"
                                        wire:click="$emit('reiniciar_usuario',{{ $estudiante->id }})"><i class="bi bi-arrow-clockwise"></i></button>
                                        <button class="btn btn-danger" id="eliminar-{{ $estudiante->id }}"
                                        wire:click="$emit('eliminar_usuario',{{ $estudiante->id }})"><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{$estudiantes->links()}}
                </div>
            </div>
        </div>
    </div>
    <!---grupos matriculados-->
    @isset($suser)
    <div class="card card-secondary" id="seleccionar_estudiante">
        <div class="card-header" id="seleccionar_estudiante_header" style="background: #0b4d87">
            <div class="row align-items-center p-1">
                <div class="col-12">
                    <h5>Lista de cursos del estudiante : {{$suser->name}}</h5>
                </div>
            </div>
        </div>
        <div class="card-body p-inherit" id="seleccionar_estudiante_body">
            <div id="selecio" class="container mt-4 table-responsive">
                <table id='tabla_selecionar_estudiante' class="table">
                    <thead class="table table-dark">
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">Modalidad</th>
                            <th class="text-center">Curso</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        @foreach ($suser->cmatriculas as $key2 => $cmatricula   )
                            <tr>
                                <td class="text-center">{{ $key2 + 1 }}</td>
                                <td class="text-center">{{ $cmatricula->modalidad->name}}</td>
                                <td class="text-center">{{ $cmatricula->modalidad->curso->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endisset
    <!-- Modal vista usuarios -->
    <div wire:ignore.self class="modal fade" id="usuario_modal" tabindex="-1" aria-labelledby="usuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="usuarioModalLabel">{{ $modal_titulo }} - Estudiante</h5>
                    <button type="button" id="cerrar_usuario_modal" class="btn-close" data-bs-dismiss="modal"
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
                                                <h5>Datos Personales</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-inherit">
                                        <div class="row m-4">
                                            @if ($user->profile_photo_path != null)
                                            <div class="col-12 text-center">
                                                <img src="{{asset($user->profile_photo_path)}}" alt="" width="220px;"><hr>
                                            </div>
                                            @endif
                                            <div class="col-12 col-sm-4">
                                                <label for="u_name" class="fw-bold">Nombre : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="u_name" class="form-control" wire:model="user.name">
                                                @error('user.name')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="user_ap_paterno" class="fw-bold">Apellido Paterno : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="user_ap_paterno" class="form-control" wire:model="user.ap_paterno">
                                                @error('user.name')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="user_ap_materno" class="fw-bold">Apellido Materno : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="user_ap_materno" class="form-control" wire:model="user.ap_materno">
                                                @error('user.name')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <label for="u_dni" class="fw-bold">Email : <span
                                                    class="text-danger">(*)</span></label>
                                                <input type="text" id="u_email" class="form-control" wire:model="user.email">
                                                @error('user.email')
                                                    <div class="p-1"> {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="perfil_imagen" class="fw-bold">Imagen de Perfil :</label>
                                                <input type="file" id="perfil_imagen-{{$iteration}}" class="form-control" wire:model="perfil_imagen">
                                                    @if ($perfil_imagen)
                                                    <div class="text-center"> Vista previa de la foto de perfil:<br>
                                                    <img src="{{ $perfil_imagen->temporaryUrl() }}" width="128px">
                                                    </div>
                                                    @endif
                                                    @isset($u_imagen_perfil)
                                                    @if ($u_imagen_perfil)
                                                    <div class="text-center"> Imagen del Estudiante<br>
                                                    <img src="{{asset($u_imagen_perfil)}}" width="128px">
                                                    </div>
                                                    @endisset
                                                    @endif
                                                @error('perfil_imagen') <span class="error">{{ $message }}</span> @enderror
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
                        wire:loading.attr="disabled">{{ $modal_titulo }} Usuario</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
