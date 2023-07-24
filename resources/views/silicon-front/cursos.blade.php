@extends('silicon-front.main')

@section('main-content')

<main>

    <!-- =======================
    Page Banner START -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 text-center rounded-3">
                        <h1 class="m-0">Cursos</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="{{ env('APP_URL') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cursos</li>
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
    <section class="pt-0">
        <div class="container">

            <!-- Filter bar START -->
            <form class="bg-light border p-4 rounded-3 my-4 z-index-9 position-relative">
                <div class="row g-3">
                    <!-- Input -->
                    <div class="col-xl-3">
                        <input class="form-control me-1" type="search" placeholder="Enter keyword">
                    </div>

                    <!-- Select item -->
                    <div class="col-xl-8">
                        <div class="row g-3">
                            <!-- Select items -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice"
                                    aria-label=".form-select-sm example">
                                    <option value="">Categories</option>
                                    <option>All</option>
                                    <option>Development</option>
                                    <option>Design</option>
                                    <option>Accounting</option>
                                    <option>Translation</option>
                                    <option>Finance</option>
                                    <option>Legal</option>
                                    <option>Photography</option>
                                    <option>Writing</option>
                                    <option>Marketing</option>
                                </select>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice"
                                    aria-label=".form-select-sm example">
                                    <option value="">Price level</option>
                                    <option>All</option>
                                    <option>Free</option>
                                    <option>Paid</option>
                                </select>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice"
                                    aria-label=".form-select-sm example">
                                    <option value="">Skill level</option>
                                    <option>All levels</option>
                                    <option>Beginner</option>
                                    <option>Intermediate</option>
                                    <option>Advanced</option>
                                </select>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice"
                                    aria-label=".form-select-sm example">
                                    <option value="">Language</option>
                                    <option>English</option>
                                    <option>Francas</option>
                                    <option>Russian</option>
                                    <option>Hindi</option>
                                    <option>Bengali</option>
                                    <option>Spanish</option>
                                </select>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                    <!-- Button -->
                    <div class="col-xl-1">
                        <button type="button" class="btn btn-primary mb-0 rounded z-index-1 w-100"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div> <!-- Row END -->
            </form>
            <!-- Filter bar END -->

            <div class="row mt-3">
                <!-- Main content START -->
                <div class="col-12">

                    <!-- Course Grid START -->
                    <div class="row g-4">

                        @foreach ($cursos as $curso)
                        <!-- Card item START -->
                        @include('silicon-front.partes.card-item-curso')
                        <!-- Card item END -->
                        @endforeach
                    </div>
                    <!-- Course Grid END -->

                    <!-- Pagination START -->
                    <div class="col-12">
                        {{ $cursos->links('silicon-front.pagination.silicon-front') }}
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

    <!-- =======================
    Newsletter START -->
    <section class="pt-0">
        <div class="container position-relative overflow-hidden">
            <!-- SVG decoration -->
            <figure class="position-absolute top-50 start-50 translate-middle ms-3">
                <svg>
                    <path class="fill-white opacity-2"
                        d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z">
                    </path>
                    <path class="fill-white opacity-2"
                        d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z">
                    </path>
                    <path class="fill-white opacity-2"
                        d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z">
                    </path>
                    <path class="fill-white opacity-2"
                        d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z">
                    </path>
                </svg>
            </figure>
            <!-- Svg decoration -->
            <figure class="position-absolute bottom-0 end-0 mb-5 d-none d-sm-block">
                <svg class="rotate-130" width="258.7px" height="86.9px" viewBox="0 0 258.7 86.9">
                    <path stroke="white" fill="none" stroke-width="2"
                        d="M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5">
                    </path>
                    <path stroke="white" fill="none" stroke-width="2"
                        d="M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5">
                    </path>
                </svg>
            </figure>

            <div class="bg-grad-blue p-3 p-sm-5 rounded-3">
                <div class="row justify-content-center position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-50 start-0 translate-middle-y">
                        <svg width="141px" height="141px">
                            <path class="fill-white opacity-1"
                                d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z">
                            </path>
                        </svg>
                    </figure>
                    <!-- Newsletter -->
                    <div class="col-12 position-relative my-2 my-sm-3">
                        <div class="row align-items-center">
                            <!-- Title -->
                            <div class="col-lg-6">
                                <h3 class="text-white mb-3 mb-lg-0">Are you ready for a more great Conversation?
                                </h3>
                            </div>
                            <!-- Input item -->
                            <div class="col-lg-6 text-lg-end">
                                <form class="bg-body rounded p-2">
                                    <div class="input-group">
                                        <input class="form-control border-0 me-1" type="email"
                                            placeholder="Type your email here">
                                        <button type="button" class="btn btn-dark mb-0 rounded">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Newsletter END -->

</main>

@stop
