@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <center>
        <h1></h1>
    </center>
@stop
@section('content')
    @livewire('gestionar-cursos')
@stop
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #0b4d87;
        border-color: #0b4d87;
        }
    </style>
        <!-- CSS only -->
@stop
@section('js')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        livewire.on('reiniciar_usuario', usuario_id => {
            Swal.fire({
                title: 'Estas Seguro',
                text: "Se reiniciara la contraseña del usuario",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, !Reiniciar Contraseña!'
            }).then((result) => {
                if (result.isConfirmed) {
                    livewire.emitTo('show-usuarios', 'reiniciar', usuario_id);
                    Swal.fire(
                        '!Reiniciado!',
                        'Se ha reiniciado la contraseña del Usuario',
                        'success'
                    )
                }
            })
        })
    </script>
    <script>
        livewire.on('eliminar_curso', usuario_id => {
            Swal.fire({
                title: 'Estas Seguro',
                text: "una vez se elimine no se podra restaurar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, !eliminar esto!'
            }).then((result) => {
                if (result.isConfirmed) {
                    livewire.emitTo('gestionar-cursos', 'eliminar', usuario_id);
                }
            })
        })
    </script>
    <script>
        livewire.on('notificar_eliminacion', accion => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: accion,
                showConfirmButton: false,
                timer: 3000
            })
        });
    </script>
    <!--script-->
    <script>
        livewire.on('notificar_creacion', accion => {
            document.getElementById("cerrar_curso_modal").click();
            //notificar que el usuario se creo
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: accion,
                showConfirmButton: false,
                timer: 1500
            })
        });

        livewire.on('notificar_creacion_grupo', accion => {
            document.getElementById("cerrar_grupo_modal").click();
            //notificar que el usuario se creo
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: accion,
                showConfirmButton: false,
                timer: 1500
            })
        });

        livewire.on('notificar_error', accion => {
            document.getElementById("cerrar_curso_modal").click();
            //notificar que el usuario se creo
            Swal.fire({
                position: 'center',
                icon: 'error',
                title:  accion ,
                showConfirmButton: false,
                timer: 2500
            })
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@stop
