@extends('silicon-front.main')

@push('stilos')
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/choices.min.css') }}">
@endpush

@push('javascripts')
    <script src="{{ asset('silicon-front/silicon/choices.min.js') }}"></script>
@endpush

@section('main-content')

    <main>

        <!-- ======================= Page Banner START -->
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light p-4 text-center rounded-3">
                            <h1 class="m-0">Checkout</h1>
                            <!-- Breadcrumb -->
                            <div class="d-flex justify-content-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-dots mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('cursos') }}">Courses</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('carrito') }}">Cart</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Page Banner END -->

        <!-- ======================= Page content START -->
        <section class="pt-5">
            <div class="container">
                <livewire:payment-method>
            </div>
        </section>
        <!-- ======================= Page content END -->

    </main>

@stop
