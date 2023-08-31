@extends('silicon-front.main')

@section('main-content')

<main>

    <!-- =======================
                Page Banner START -->
    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 text-center rounded-3">
                        <h1 class="m-0">Mi carrito</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="miga de pan">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('cursos') }}">Cursos</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Carro</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                Page Banner END -->

    <!-- =======================
                Page content START -->
    @livewire('contenido-carrito')
    <!-- =======================
                Page content END -->

</main>
@stop
