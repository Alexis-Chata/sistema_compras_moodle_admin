@extends('adminlte::page')

@section('title', 'Dashboard')

@section('classes_body', 'layout-fixed layout-navbar-fixed sidebar-mini sidebar-collapse')

@section('content_header')
<h1></h1>
@stop
@section('content')
    @livewire('gestionar-clientes')
    @livewire('gestionar-recibos')
    @livewireScripts
@stop

@section('css')
    @livewireStyles
    <link href="{{asset('css/css_select2.min.css')}}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/jquery-ui-1.13.1/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/floating-labels.css">
    <style>
        .select2-container .select2-selection--single {
            height: 50px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 48px;
        }

        .select2-container--default .select2-selection--single {
            padding: 0.75rem .75rem;
        }
    </style>
    <!-- CSS only -->
@stop
@section('js')
    <script src="{{asset('js/select2/select2.min.js')}}"></script>
    <script src="{{asset('js/sweetalert2/sweetalert2.js')}}"></script>

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui-1.13.1/jquery-ui.min.js')}}"></script>

    <script src="{{asset('js/boostrap/bootstrap.bundle.min.js')}}"></script>
    <script>
        window.livewire.on('notificar_seleccion', accion => {
            document.getElementById("1_pestana").click();
        });

        window.livewire.on('notificar_listado', accion => {
            document.getElementById("1_listado").click();
        });

        window.livewire.on('notificar_seleccion_servicio', accion => {
            document.getElementById("1_pestana_s").click();
        });

        window.livewire.on('notificar_listado_servicio', accion => {
            document.getElementById("1_listado_s").click();
        });

        window.livewire.on('cerrar_modal', () => {
            $('#modal_crear_actualizar_cliente').modal('hide');
            Livewire.emit('modal')
        })

        window.livewire.on('abrir_modal', () => {
            $('#modal_crear_actualizar_cliente').modal('show');
            $('[href="#files"]').tab('show');
            Livewire.emit('modal')
        })

        window.livewire.on('updateDescripcionServicio', ($servicioDescripcion=null) => {
            if($servicioDescripcion){
                $('#select2-listaServicios-container').text($servicioDescripcion);
            }
        })

        window.livewire.on('activar_buscador', () => {

            $('#bestudiante1').autocomplete({
            source: function(request,response){
                $.ajax({
                url: '{{route("search.cliente")}}',
                dataType: 'json',
                data: {
                    term: request.term
                },
                success: function(data){
                    response(data)
                }
            });
            },
            minLength: 3,
            select: function(event,ui){
                setTimeout(() => {
                    $('#bestudiante1').val('');
                    $('#bestudiante1').val(ui.item.email);
                    $('#bestudiante1')[0].dispatchEvent(new Event('input'));
                }, 750);
            }
            });
        })

        </script>
@stop
