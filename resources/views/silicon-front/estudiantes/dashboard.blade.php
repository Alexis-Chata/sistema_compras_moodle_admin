@extends('silicon-front.estudiantes.main')

@push('stilos')
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/choices.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/assets/vendor/aos/aos.css') }}">
@endpush

@push('javascripts')
    <script src="{{ asset('silicon-front/silicon/choices.min.js') }}"></script>
    <script src="{{ asset('silicon-front/assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('silicon-front/assets/vendor/aos/aos.js') }}"></script>
@endpush

@section('main-content-estudiantes')

    <div class="col-xl-9">

        <!-- Counter boxes START -->
        <div class="row mb-4">
            <!-- Counter item -->
            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <div class="d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3">
                    <span class="display-6 lh-1 text-orange mb-0"><i class="fas fa-tv fa-fw"></i></span>
                    <div class="ms-4">
                        <div class="d-flex">
                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="{{ $cursos->total() }}" data-purecounter-delay="200">0</h5>
                        </div>
                        <p class="mb-0 h6 fw-light">Total Courses</p>
                    </div>
                </div>
            </div>
            <!-- Counter item -->
            {{-- <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3">
                    <span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-clipboard-check fa-fw"></i></span>
                    <div class="ms-4">
                        <div class="d-flex">
                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="52" data-purecounter-delay="200">0</h5>
                        </div>
                        <p class="mb-0 h6 fw-light">Complete lessons</p>
                    </div>
                </div>
            </div> --}}
            <!-- Counter item -->
            {{-- <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <div class="d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3">
                    <span class="display-6 lh-1 text-success mb-0"><i class="fas fa-medal fa-fw"></i></span>
                    <div class="ms-4">
                        <div class="d-flex">
                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="8" data-purecounter-delay="300">0</h5>
                        </div>
                        <p class="mb-0 h6 fw-light">Achieved Certificates</p>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Counter boxes END -->

        @if (session()->has('success'))
            <!-- Alert -->
            <div class="alert alert-success alert-dismissible d-flex justify-content-between align-items-center fade show py-2 pe-2" role="alert">
                <div>
                    {{-- <i class="bi bi-exclamation-octagon-fill me-2"></i> --}}
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" class="btn btn-link mb-0 text-primary-hover text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
        @endif

        @include('silicon-front.partes.mi-lista-cursos')
    </div>

@stop
