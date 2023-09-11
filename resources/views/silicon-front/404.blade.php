@extends('silicon-front.main')

@push('stilos')
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('silicon-front/silicon/glightbox.css') }}">
@endpush

@push('javascripts')
    <script src="{{ asset('silicon-front/silicon/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('silicon-front/silicon/tiny-slider.js') }}"></script>
    <script src="{{ asset('silicon-front/silicon/glightbox.js') }}"></script>
@endpush

@section('main-content')

    <main>
        <section class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Image -->
                        <img src="assets/images/element/error404-01.svg" class="h-200px h-md-400px mb-4" alt="">
                        <!-- Title -->
                        <h1 class="display-1 text-danger mb-0">404</h1>
                        <!-- Subtitle -->
                        <h2>Oh no, something went wrong!</h2>
                        <!-- info -->
                        <p class="mb-4">Either something went wrong or this page doesn't exist anymore.</p>
                        <!-- Button -->
                        <a href="index.html" class="btn btn-primary mb-0">Take me to Homepage</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop
