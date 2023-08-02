<div class="col container mt-4">
    <button type="button" class="btn btn-success" id="ventana_usuario" data-bs-toggle="modal"
        data-bs-target="#modal_crear_actualizar_cliente" wire:click="modal('Crear')">
        <i class="fas fa-plus-circle"></i> Gestionar Usuarios
    </button>
    <!-- Modal crear periodo-->
    <div wire:ignore.self class="modal fade" id="modal_crear_actualizar_cliente" tabindex="-3"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gestionar Usuarios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a wire:ignore.self class="nav-link active" data-toggle="tab" href="#tasks"
                                        role="tab" aria-controls="tasks" aria-selected="true"
                                        id="1_pestana">{{ $modal_titulo }} Cliente </a>
                                </li>
                                <li class="nav-item">
                                    <a wire:ignore.self class="nav-link" data-toggle="tab" href="#files" role="tab"
                                        aria-controls="files" aria-selected="false" id="1_listado">Lista de Clientes</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="tab-content">
                                <div wire:ignore.self class="tab-pane fade active show" id="tasks" role="tabpanel"
                                    data-filter-list="card-list-body">
                                    <div class="row content-list-head">
                                        <div class="col-12 p-4">
                                            <div class="row">

                                                    <div class="col-12">
                                                        <label for="cliente_name" class="fw-bold">Nombre : <span
                                                                class="text-danger">(*)</span></label>
                                                        <input type="text" id="cliente_name" class="form-control"
                                                            wire:model="cliente.name">
                                                        @error('cliente.name')
                                                            <div class="p-1"> {{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="cliente_paterno" class="fw-bold">Ape Paterno :
                                                        </label>
                                                        <input type="text" id="cliente_paterno"
                                                            class="form-control" wire:model="cliente.ap_paterno">
                                                        @error('cliente.ap_paterno')
                                                            <div class="p-1"> {{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="cliente_materno" class="fw-bold">Ape Materno :</label>
                                                        <input type="text" id="cliente_materno"
                                                            class="form-control" wire:model="cliente.ap_materno">
                                                        @error('cliente.ap_materno')
                                                            <div class="p-1"> {{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="cliente_email" class="fw-bold">Email : <span
                                                                class="text-danger">(*)</span></label>
                                                        <input type="text" id="cliente_email" class="form-control"
                                                            wire:model="cliente.email">
                                                        @error('cliente.email')
                                                            <div class="p-1"> {{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="cliente_celular" class="fw-bold">Celular :</label>
                                                        <input type="text" id="cliente_celular"
                                                            class="form-control" wire:model="cliente.celular">
                                                        @error('cliente.celular')
                                                            <div class="p-1"> {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div wire:ignore.self class="tab-pane fade" id="files" role="tabpanel"
                                    data-filter-list="dropzone-previews">
                                    <div class="content-list">
                                        <div class="row mt-2">
                                            <div class="container mb-4">
                                                <div class="col-12">
                                                    <label for="buscar_cliente">Buscar Cliente :</label>
                                                    <input type="text" class="form-control" id="buscar_cliente"
                                                        wire:model='bcliente'>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($gclientes != null)
                                            @if ($gclientes->count() > 0)
                                                <div class="container table-responsive">
                                                    <table class="table">
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th>N°</th>
                                                                <th>Nombres y Apellidos</th>
                                                                <th class="text-center">Email</th>
                                                                <th class="text-center">Comprobantes</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-secondary">
                                                            @foreach ($gclientes as $key => $gcliente)
                                                                <tr>
                                                                    <td>{{$key+1}}</td>
                                                                    <td>{{ $gcliente->name . ' ' . $gcliente->ap_paterno . ' ' . $gcliente->ap_materno }}
                                                                    </td>
                                                                    <td class="text-center">{{ $gcliente->email }}</td>
                                                                    <td class="text-center">{{ $gcliente->comprobantes->count() }}</td>
                                                                    <td>
                                                                            <button class="btn btn-success text-white"
                                                                            id="generar-{{ $gcliente->id }}"
                                                                            wire:click="$emit('clienteIdToRecibo', {{ $gcliente->id }})"><i class="fas fa-plus-circle"></i></button>
                                                                            <button class="btn btn-secondary"
                                                                            id="select-{{ $gcliente->id }}"
                                                                            wire:click="obtener_datos('{{ $gcliente->id }}')"><i class="fas fa-edit"></i></button>
                                                                            <button class="btn btn-danger"
                                                                            id="eliminar-{{ $gcliente->id }}"
                                                                            wire:click="eliminar('{{ $gcliente->id }}')"
                                                                            wire:target="eliminar"
                                                                            wire:loading.attr="disabled"><i class="fas fa-trash"></i></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @else
                                                <div class="row">no hay resultados</div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" wire:target="save"
                            wire:click="save('{{ $modal_titulo }}')"
                            wire:loading.attr="disabled">{{ $modal_titulo }} Cliente
                        </button>
                </div>
            </div>
        </div>
    </div>
</div>
