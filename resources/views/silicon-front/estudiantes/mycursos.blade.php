@extends('silicon-front.estudiantes.main')

@push('stilos')
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/choices.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/assets/vendor/aos/aos.css') }}">
@endpush

@push('javascripts')
    <script src="{{ asset('silicon-front/silicon/choices.min.js') }}"></script>
    <script src="{{ asset('silicon-front/assets/vendor/aos/aos.js') }}"></script>
@endpush

@section('main-content-estudiantes')

    <div class="col-xl-9">
        @include('silicon-front.partes.mi-lista-cursos')
    </div>
@stop
