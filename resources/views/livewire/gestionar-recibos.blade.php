<div class="col container mt-4">
    <div class="card card-secondary mb-4">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col col-md-3">
                    <h5 class="m-0" id="card-header-recibo">{{ $card_header_recibo }}</h5>
                </div>
            </div>
        </div>

        <div class="card-body p-inherit table-responsive">

            <div class="row">
                <div class="col">
                    <h3 class="mb-3">Datos del cliente</h3><hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <p><strong>Cliente : </strong>{{ $hcliente->name . ' ' . $hcliente->paterno . ' ' . $hcliente->materno }}</p>
                    <p><strong>Email : </strong>{{ ' ' . $hcliente->email }}</p>
                    <p><strong>Celular : </strong>{{ ' ' . $hcliente->celular }}</p>
                </div>
                <div class="col">
                    <p>
                        <strong>Doc : </strong>
                        <select class="form-select" name="tdocumento_name" id="tdocumento_id" wire:model='tdocumento'>
                            <option value="1">Recibo</option>
                            <option value="2">Devolucion</option>
                        </select>
                    </p>
                    <p><strong>Fecha :</strong> <input type="date" class="form form-control" wire:model="f_emision"></p>
                        <div class="form-group row p-0">
                            <label for="inputCodigo" class="col-auto"><strong>Forma de pago :</strong></label>
                            @foreach ( $formaPago as $f_Pago )
                                <div class="form-check col">
                                    <input class="form-check-input" type="radio" wire:model="forma_pago" name="forma_pago" id="forma_pago{{$f_Pago}}" value="{{$f_Pago}}">
                                    <label class="form-check-label" for="forma_pago{{$f_Pago}}" role=button>{{$f_Pago}}</label>
                            </div>
                            @endforeach
                            <x-input-error for="forma_pago"/>
                        </div>
                        @if ($forma_pago == "Deposito")
                        <div class="form-group row p-0">
                            <label for="imagen_deposito" class="col-auto"><strong>Adjuntar Pago :</strong></label>
                            <input type="file" id="imagen_deposito-{{$iteration}}" class="form-control" wire:model="imagen_deposito">
                            <x-input-error for="imagen_deposito"/>
                        </div>
                        @endif
                </div>
            </div>
            @if (isset($hcliente->id))

                @if ($tdocumento == 1)
                <div class="card card-secondary m-3 ">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col col-md-3">
                                <h5 id="card-header-servicio">{{ $card_header_servicio }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-inherit table-responsive">
                        <form>
                            <div class="row align-items-center g-2">
                                <div class="col-sm-3 col-md">
                                    <div wire:self.defer>
                                        <label for="bestudiante">Buscar Usuario</label>
                                        <input type="text" id='bestudiante1' class="form-control" wire:model='bestudiante'>
                                    </div>
                                </div>
                                @if ($busuario == true)
                                <div class="col-sm-3 col-md">
                                    <div wire:self.defer>
                                        <label for="bctegoria">Elegir Categoria</label>
                                        <select  id="bctegoria" class="form-select" wire:model='bcategoria'>
                                            <option value="">Elegir</option>
                                            @foreach ($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endif
                                @if ($bcategoria != '')
                                <div class="col-sm-3 col-md">
                                    <div wire:self.defer>
                                        <label for="bcurso">Elegir Curso</label>
                                        <select  id="bcurso" class="form-select" wire:model='bcurso'>
                                            <option value="">Elegir</option>
                                            @foreach ($cursos as $curso)
                                            <option value="{{$curso->id}}">{{$curso->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if ($bcurso != '')
                                <div class="col-sm-3 col-md">
                                    <div wire:self.defer>
                                        <label for="bmodalidad">Elegir Modalidad</label>
                                        <select  id="bmodalidad" class="form-select" wire:model='bmodalidad'>
                                            <option value="">Elegir</option>
                                            @foreach ($modalidades as $modalidad)
                                            <option value="{{$modalidad->id}}">{{$modalidad->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endif
                                @if ($bmodalidad != '')
                                <div class="col-sm-3 col-md">
                                    <div wire:self.defer>
                                        <label for="bcuota">Elegir Cuota</label>
                                        <select  id="bcuota" class="form-select" wire:model='bcuota'>
                                                <option value="">Elegir</option>
                                            @foreach ($cuotas as $cuota)
                                                <option value="{{$cuota->id}}">{{$cuota->name."-".$cuota->monto}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endif
                                @if ($bcuota != '')
                                <div class="col-sm">
                                    <button class="btn btn-success" wire:click.prevent="agregar_item({{ $editar_detalle_id }})" wire:loading.attr="disabled" id="card-body-btn-servicio">{{ $card_body_btn_servicio }}</button>
                                    <x-input-error for="cliente" />
                                </div>
                                @endif
                                @endif
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                        <form>
                            <div class="row align-items-end g-2">
                                <div class="col-12 col-sm-3">
                                    <div wire:self.defer>
                                        <label for="descuento">Agregar Descuento</label>
                                        <input type="number" step="0.01" id='des_monto' class="form-control" wire:model='des_monto'>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div wire:self.defer>
                                        <label for="descuento">Descripción</label>
                                        <input type="text" id='des_des' class="form-control" wire:model='des_des'>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <button class="btn btn-success" wire:click.prevent="agregar_descuento" wire:loading.attr="disabled" id="card-body-btn-descuento">Agregar Descuento</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <x-input-error for="des_monto" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-light">
                        <tr style="border-bottom: 3px solid black;">
                            <th scope="col" class="text-center">Descripcion</th>
                            <th scope="col" class="text-center">Cantidad</th>
                            <th scope="col" class="text-center">Precio</th>
                            <th scope="col" class="text-center">Importe</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($detallePedido->count())
                            @foreach ($detallePedido as $indice=>$item)
                                <tr>
                                    <td scope="row" class="align-middle text-center">{{ $item['descripcion'] }}</td>
                                    <td scope="row" class="align-middle text-center">{{ $item['cantidad'] }}</td>
                                    <td scope="row" class="align-middle text-center">{{ 'Q. '.number_format($item['precio'], 2) }}</td>
                                    <td scope="row" class="align-middle text-center">{{ 'Q. '.number_format($item['importe'], 2) }}</td>
                                    <td scope="row" class="align-middle text-center">
                                        <button class="align-middle btn btn-danger" wire:click="eliminarItem({{ $indice }})" wire:loading.attr="disabled"><i class="far fa-trash-alt"
                                                aria-hidden="true"></i></button>
                                        <!--
                                        <button class="align-middle btn btn-warning" wire:click="editarItem({{ $indice }})" wire:loading.attr="disabled"><i class="far fa-edit"
                                                aria-hidden="true"></i></button>
                                        -->
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td scope="row" class="text-center" colspan="100%"> Agregar un servicio </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="row justify-content-end mt-3">
                    <div class="col-auto">
                        <span><strong>Total: </strong> Q. {{ number_format($total, 2) }}</span>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" wire:click="generar_comprobante({{ $editar_comprobante_id }})" wire:loading.attr="disabled">{{ $card_body_btn_generar_comprobante }}</button>
                        <x-input-error for="cliente" />
                        <x-input-error for="detalle" />
                        <x-input-error for="editandoItem" />
                    </div>
                </div>
                @elseif($tdocumento == 2)
                <div class="card card-secondary m-3 ">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col col-md-3">
                                <h5 id="card-header-servicio">Devolución</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-inherit table-responsive">
                        <form>
                            <div class="row align-items-end g-2">
                                <div class="col-12 col-sm-3">
                                    <div wire:self.defer>
                                        <label for="dev_monto">Monto de Devolución</label>
                                        <input type="number" step="0.01" id='dev_monto' class="form-control" wire:model='dev_monto'>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div wire:self.defer>
                                        <label for="dev_serie">Recibo de Referencia</label>
                                        <select class="form-select" wire:model='dev_serie'>
                                            <option value="">Elegir</option>
                                            @foreach ($lcomprobantes as $comp)
                                            <option value="{{$comp->id}}">REC-{{$comp->correlativo}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <button class="btn btn-success" wire:click.prevent="agregar_devolucion" wire:loading.attr="disabled" id="card-body-btn-descuento">Generar Devolución</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-3">
                                    <x-input-error for="dev_monto" />

                                </div>
                                <div class="col-12 col-sm-3">
                                    <x-input-error for="dev_serie" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
            @endif
        </div>
    </div>

    <div class="card card-secondary">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-12 col-md-3 text-center">
                    <h5>HISTORIAL DE RECIBO</h5>
                </div>
                <div class="col-12 col-md-3 text-center my-2 my-md-0"><button class="btn btn-success" wire:loading.attr="disabled" wire:target="descargar_historial" wire:click="descargar_historial"><i class="fas fa-download"></i> Descargar Informe</button></div>
            </div>
        </div>
        <div class="card-body p-inherit table-responsive">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">Recibo</th>
                        <th scope="col" class="text-center">F. Emisión</th>
                        <th scope="col" class="text-center">Termino</th>
                        <th scope="col" class="text-center">Total</th>
                        <th scope="col" class="text-center">Detalles</th>
                        <th scope="col" class="text-center">Estado</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hcliente->comprobantes->where('femision','>=',$finicio)->where('femision','<=',$ffinal)->sortByDesc('correlativo')->sortByDesc('created_at') as $recibo)
                        <tr>
                            <td scope="row" class="text-center">
                                @if ($recibo->tipo_comprobante == 1)
                                    REC - {{ $recibo->correlativo }}
                                @elseif($recibo->tipo_comprobante == 2)
                                    DEV - {{ $recibo->correlativo }}
                                @endif
                            </td>
                            <td scope="row" class="text-center">{{ date('d-m-Y', strtotime($recibo->femision)) }}
                            </td>
                            <td scope="row" class="text-center">
                                @if ($recibo->termino == 'Deposito')
                               <a href="{{asset($recibo->imagen_deposito)}}" target="_blank">{{ $recibo->termino }}</a>
                                @else
                                {{ $recibo->termino }}
                                @endif
                            </td>
                            <td scope="row" class="text-center">Q.{{ $recibo->total }}</td>
                            <td scope="row" class="text-center"><button
                                    class="btn btn-primary" onclick="openModelPDF('{{asset('storage/'.$recibo->path_pdf)}}')">{{ $recibo->detalles->count() }}</button></td>
                            <td scope="row" class="text-center"> @if ($recibo->estado == 1)
                                Cancelado
                            @elseif($recibo->estado == 0)
                               Anulado
                            @endif</td>
                            <td scope="row" class="text-center">
                                <button class="btn btn-danger" wire:loading.attr="disabled" wire:target="reenviar"
                                    wire:click="reenviar('{{ $recibo->id }}')"><i class="fas fa-envelope"></i></button>
                                <button class="btn btn-secondary" wire:click="editarComprobante('{{ $recibo->id }}')" wire:loading.attr="disabled"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-success" wire:loading.attr="disabled"
                                    wire:target="descargar_recibo"
                                    wire:click="descargar_recibo('{{ $recibo->id }}')"><i class="fas fa-download"></i></button>
                                    <button class="btn btn-danger" id="eliminar-recibo-{{$recibo->id}}" wire:loading.attr="disabled" wire:target="eliminar"
                                        wire:click="$emit('eliminar',{{$recibo->id}})"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="modal_detalle_recibo" tabindex="-2" aria-labelledby="detallerecibo" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="detallerecibo">Descripción del Recibo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
        </div>
    </div>
    <script>
        function openModelPDF(url)
        {
            $('#modal_detalle_recibo').modal('show');
            $('#iframePDF').attr('src',url);
        }
    </script>
    <script>
        window.onload = function() {
            $(document).ready(function() {
                $('#listaServicios').select2();
                $('#listaServicios').on('change', function() {
                    let valor = $('#listaServicios').select2('val');
                    let texto = $('#listaServicios option:selected').text();
                    @this.set('servicioSeleccionado', texto);
                });
            })
        }
    </script>

@push('css')
<style>
    span.select2.select2-container.select2-container--default{
        width: 100% !important;
    }
</style>
@endpush
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.livewire.on('eliminar', comprobante_id =>{
                    Swal.fire({
            title: 'Estas Seguro',
            text: "Una vez eliminado el Recibo no se podra recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, !Eliminar!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.livewire.emitTo('gestionar-recibos','eliminar_comprobante',comprobante_id);
            }
            })
    })
</script>
<script>
        window.livewire.on('notificar_eliminar', accion => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: accion,
                showConfirmButton: false,
                timer: 1500
            })
        });

        window.livewire.on('notificar_error_usuario', accion => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: accion,
                showConfirmButton: false,
                timer: 1500
            })
        });
</script>
<script>
        window.livewire.on('actualizar_lista', accion =>  {
                    $('#listaServicios').select2();
                    $('#listaServicios').on('change', function() {
                        let valor = $('#listaServicios').select2('val');
                        let texto = $('#listaServicios option:selected').text();
                        @this.set('servicioSeleccionado', texto);
                    });
        });
</script>
@endpush
</div>
