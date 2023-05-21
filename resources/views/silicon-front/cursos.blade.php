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
                                    <li class="breadcrumb-item"><a
                                            href="{{ env('APP_URL') }}">Home</a></li>
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
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select
                                            class="form-select form-select-sm js-choice choices__input"
                                            aria-label=".form-select-sm example" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="" data-custom-properties="[object Object]">
                                                Categories</option>
                                        </select>
                                        <div class="choices__list choices__list--single">
                                            <div class="choices__item choices__placeholder choices__item--selectable"
                                                data-item="" data-id="1" data-value=""
                                                data-custom-properties="[object Object]" aria-selected="true">
                                                Categories</div>
                                        </div>
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="Categories" placeholder="">
                                        <div class="choices__list" role="listbox">
                                            <div id="choices--2hkt-item-choice-3"
                                                class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="3" data-value=""
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">Categories</div>
                                            <div id="choices--2hkt-item-choice-1"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="1"
                                                data-value="Accounting" data-select-text="Press to select"
                                                data-choice-selectable="">Accounting</div>
                                            <div id="choices--2hkt-item-choice-2"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="2" data-value="All"
                                                data-select-text="Press to select" data-choice-selectable="">All
                                            </div>
                                            <div id="choices--2hkt-item-choice-4"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="4" data-value="Design"
                                                data-select-text="Press to select" data-choice-selectable="">
                                                Design</div>
                                            <div id="choices--2hkt-item-choice-5"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="5"
                                                data-value="Development" data-select-text="Press to select"
                                                data-choice-selectable="">Development</div>
                                            <div id="choices--2hkt-item-choice-6"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="6"
                                                data-value="Finance" data-select-text="Press to select"
                                                data-choice-selectable="">Finance</div>
                                            <div id="choices--2hkt-item-choice-7"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="7" data-value="Legal"
                                                data-select-text="Press to select" data-choice-selectable="">Legal
                                            </div>
                                            <div id="choices--2hkt-item-choice-8"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="8"
                                                data-value="Marketing" data-select-text="Press to select"
                                                data-choice-selectable="">Marketing</div>
                                            <div id="choices--2hkt-item-choice-9"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="9"
                                                data-value="Photography" data-select-text="Press to select"
                                                data-choice-selectable="">Photography</div>
                                            <div id="choices--2hkt-item-choice-10"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="10"
                                                data-value="Translation" data-select-text="Press to select"
                                                data-choice-selectable="">Translation</div>
                                            <div id="choices--2hkt-item-choice-11"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="11"
                                                data-value="Writing" data-select-text="Press to select"
                                                data-choice-selectable="">Writing</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select
                                            class="form-select form-select-sm js-choice choices__input"
                                            aria-label=".form-select-sm example" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="" data-custom-properties="[object Object]">Price
                                                level</option>
                                        </select>
                                        <div class="choices__list choices__list--single">
                                            <div class="choices__item choices__placeholder choices__item--selectable"
                                                data-item="" data-id="1" data-value=""
                                                data-custom-properties="[object Object]" aria-selected="true">
                                                Price level</div>
                                        </div>
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="Price level" placeholder="">
                                        <div class="choices__list" role="listbox">
                                            <div id="choices--r94e-item-choice-4"
                                                class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="4" data-value=""
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">Price level</div>
                                            <div id="choices--r94e-item-choice-1"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="1" data-value="All"
                                                data-select-text="Press to select" data-choice-selectable="">All
                                            </div>
                                            <div id="choices--r94e-item-choice-2"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="2" data-value="Free"
                                                data-select-text="Press to select" data-choice-selectable="">Free
                                            </div>
                                            <div id="choices--r94e-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="3" data-value="Paid"
                                                data-select-text="Press to select" data-choice-selectable="">Paid
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select
                                            class="form-select form-select-sm js-choice choices__input"
                                            aria-label=".form-select-sm example" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="" data-custom-properties="[object Object]">Skill
                                                level</option>
                                        </select>
                                        <div class="choices__list choices__list--single">
                                            <div class="choices__item choices__placeholder choices__item--selectable"
                                                data-item="" data-id="1" data-value=""
                                                data-custom-properties="[object Object]" aria-selected="true">
                                                Skill level</div>
                                        </div>
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="Skill level" placeholder="">
                                        <div class="choices__list" role="listbox">
                                            <div id="choices--7j4t-item-choice-5"
                                                class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="5" data-value=""
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">Skill level</div>
                                            <div id="choices--7j4t-item-choice-1"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="1"
                                                data-value="Advanced" data-select-text="Press to select"
                                                data-choice-selectable="">Advanced</div>
                                            <div id="choices--7j4t-item-choice-2"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="2"
                                                data-value="All levels" data-select-text="Press to select"
                                                data-choice-selectable="">All levels</div>
                                            <div id="choices--7j4t-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="3"
                                                data-value="Beginner" data-select-text="Press to select"
                                                data-choice-selectable="">Beginner</div>
                                            <div id="choices--7j4t-item-choice-4"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="4"
                                                data-value="Intermediate" data-select-text="Press to select"
                                                data-choice-selectable="">Intermediate</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                    aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                    <div class="choices__inner"><select
                                            class="form-select form-select-sm js-choice choices__input"
                                            aria-label=".form-select-sm example" hidden="" tabindex="-1"
                                            data-choice="active">
                                            <option value="" data-custom-properties="[object Object]">
                                                Language</option>
                                        </select>
                                        <div class="choices__list choices__list--single">
                                            <div class="choices__item choices__placeholder choices__item--selectable"
                                                data-item="" data-id="1" data-value=""
                                                data-custom-properties="[object Object]" aria-selected="true">
                                                Language</div>
                                        </div>
                                    </div>
                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                        <input type="search" name="search_terms"
                                            class="choices__input choices__input--cloned" autocomplete="off"
                                            autocapitalize="off" spellcheck="false" role="textbox"
                                            aria-autocomplete="list" aria-label="Language" placeholder="">
                                        <div class="choices__list" role="listbox">
                                            <div id="choices--emom-item-choice-5"
                                                class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                role="option" data-choice="" data-id="5" data-value=""
                                                data-select-text="Press to select" data-choice-selectable=""
                                                aria-selected="true">Language</div>
                                            <div id="choices--emom-item-choice-1"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="1"
                                                data-value="Bengali" data-select-text="Press to select"
                                                data-choice-selectable="">Bengali</div>
                                            <div id="choices--emom-item-choice-2"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="2"
                                                data-value="English" data-select-text="Press to select"
                                                data-choice-selectable="">English</div>
                                            <div id="choices--emom-item-choice-3"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="3"
                                                data-value="Francas" data-select-text="Press to select"
                                                data-choice-selectable="">Francas</div>
                                            <div id="choices--emom-item-choice-4"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="4"
                                                data-value="Hindi" data-select-text="Press to select"
                                                data-choice-selectable="">Hindi
                                            </div>
                                            <div id="choices--emom-item-choice-6"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="6"
                                                data-value="Russian" data-select-text="Press to select"
                                                data-choice-selectable="">Russian</div>
                                            <div id="choices--emom-item-choice-7"
                                                class="choices__item choices__item--choice choices__item--selectable"
                                                role="option" data-choice="" data-id="7"
                                                data-value="Spanish" data-select-text="Press to select"
                                                data-choice-selectable="">Spanish</div>
                                        </div>
                                    </div>
                                </div>
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
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/{{ isset($curso->imagen) && $curso->imagen != '' ? $curso->imagen : '08.jpg' }}"
                                            class="card-img-top" alt="course image"></a>
                                    <!-- Card body -->
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#"
                                                class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                                            <a href="#" class="h6 fw-light mb-0"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                        <!--
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        -->
                                        <!-- Title -->
                                        <h5 class="card-title"><a href="#">{{ $curso->name }}</a>
                                        </h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $curso->calificacion)
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fas fa-star text-warning"></i></li>
                                                @elseif ($i >= $curso->calificacion && $i - 1 <= $curso->calificacion)
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="fas fa-star-half-alt text-warning"></i></li>
                                                @else
                                                    <li class="list-inline-item me-0 small"><i
                                                            class="far fa-star text-warning"></i></li>
                                                @endif
                                            @endfor
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">
                                                {{ $curso->calificacion }}/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>{{ $curso->hora . 'h ' . $curso->min . 'm' }}</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>{{ $curso->lecturas . ' lecturas' }}</span>
                                        </div>
                                        <hr>
                                        @livewire('additem', ['curso' => $curso])
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        @endforeach
                    </div>
                    <!-- Course Grid END -->

                    <!-- Pagination START -->
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#"
                                        tabindex="-1"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item mb-0"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
                                            class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
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
                                        <button type="button"
                                            class="btn btn-dark mb-0 rounded">Subscribe</button>
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
