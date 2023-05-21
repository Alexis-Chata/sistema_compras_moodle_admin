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
                        <h1 class="m-0" _msttexthash="136708" _msthash="121">Mi carrito</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="miga de pan" _mstaria-label="157144" _msthash="122">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}" _msttexthash="59059"
                                            _msthash="123">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('cursos') }}" _msttexthash="80366"
                                            _msthash="124">Cursos</a></li>
                                    <li class="breadcrumb-item active" aria-current="page" _msttexthash="60216"
                                        _msthash="125">Carro</li>
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
