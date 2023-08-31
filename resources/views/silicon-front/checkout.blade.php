@extends('silicon-front.main')

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

                <div class="row g-4 g-sm-5">
                    <!-- Main content START -->
                    <div class="col-xl-8 mb-4 mb-sm-0">
                        <!-- Alert -->
                        <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show py-2 pe-2" role="alert">
                            <div>
                                <i class="bi bi-exclamation-octagon-fill me-2"></i>
                                Already have an account? <a href="#" class="text-reset btn-link mb-0 fw-bold">Log in</a>
                            </div>
                            <button type="button" class="btn btn-link mb-0 text-primary-hover text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                        </div>

                        <!-- Personal info START -->
                        <div class="card card-body shadow p-4">
                            <!-- Title -->
                            <h5 class="mb-0">Personal Details</h5>

                            <!-- Form START -->
                            <form class="row g-3 mt-0">
                                <!-- Name -->
                                <div class="col-md-6 bg-light-input">
                                    <label for="yourName" class="form-label">Your name *</label>
                                    <input type="text" class="form-control" id="yourName" placeholder="Name">
                                </div>
                                <!-- Email -->
                                <div class="col-md-6 bg-light-input">
                                    <label for="emailInput" class="form-label">Email address *</label>
                                    <input type="email" class="form-control" id="emailInput" placeholder="Email">
                                </div>
                                <!-- Number -->
                                <div class="col-md-6 bg-light-input">
                                    <label for="mobileNumber" class="form-label">Mobile number *</label>
                                    <input type="text" class="form-control" id="mobileNumber" placeholder="Mobile number">
                                </div>
                                <!-- Country option -->
                                <div class="col-md-6 bg-light-input">
                                    <label for="mobileNumber" class="form-label">Select country *</label>
                                    <select class="form-select js-choice" aria-label=".form-select-lg">
                                        <option value="">Select country</option>
                                        <option>India</option>
                                        <option>China</option>
                                        <option>USA</option>
                                        <option>Canada</option>
                                        <option>Paris</option>
                                        <option>Australia</option>
                                        <option>Japan</option>
                                        <option>Brazil</option>
                                    </select>
                                </div>
                                <!-- State option -->
                                <div class="col-md-6 bg-light-input">
                                    <label for="mobileNumber" class="form-label">Select state *</label>
                                    <select class="form-select js-choice" aria-label=".form-select-lg">
                                        <option value="">Select state</option>
                                        <option>Maharashtra</option>
                                        <option>Delhi</option>
                                        <option>Punjab</option>
                                        <option>London</option>
                                        <option>New york</option>
                                        <option>California</option>
                                    </select>
                                </div>
                                <!-- Postal code -->
                                <div class="col-md-6 bg-light-input">
                                    <label for="postalCode" class="form-label">Postal code *</label>
                                    <input type="text" class="form-control" id="postalCode" placeholder="PIN code">
                                </div>
                                <!-- Address -->
                                <div class="col-md-6 bg-light-input">
                                    <label for="address" class="form-label">Address *</label>
                                    <input type="text" class="form-control" id="address" placeholder="Address">
                                </div>
                                <!-- Cards -->
                                <div class="col-12">
                                    <label class="form-label">Your saved cards *</label>
                                    <div class="row g-2">
                                        <div class="col-2 col-sm-1 border rounded me-2">
                                            <a href="#"><img src="assets/images/client/mastercard.svg" alt=""></a>
                                        </div>
                                        <div class="col-2 col-sm-1 border rounded me-2">
                                            <a href="#"><img src="assets/images/client/visa.svg" alt=""></a>
                                        </div>
                                        <div class="col-2 col-sm-1 border rounded me-2">
                                            <a href="#"><img src="assets/images/client/ae-card.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary mb-0" disabled>Save changes</button>
                                </div>
                            </form>
                            <!-- Form END -->

                            <!-- Payment method START -->
                            <div class="row g-3 mt-4">
                                <!-- Title -->
                                <h5 class="">Payment method</h5>
                                <div class="col-12">
                                    <div class="accordion accordion-circle" id="accordioncircle">
                                        <!-- Credit or debit card START -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header" id="heading-1">
                                                <button class="accordion-button rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                                    aria-controls="collapse-1">
                                                    Credit or Debit Card
                                                </button>
                                            </h6>
                                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordioncircle">
                                                <!-- Accordion body -->
                                                <div class="accordion-body">
                                                    <!-- Form START -->
                                                    <form class="row g-3">

                                                        <!-- Card number -->
                                                        <div class="col-12">
                                                            <label class="form-label">Card Number <span class="text-danger">*</span></label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" placeholder="xxxx xxxx xxxx xxxx">
                                                                <img src="assets/images/client/visa.svg" class="w-40px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <!-- Expiration Date -->
                                                        <div class="col-md-6">
                                                            <label class="form-label">Expiration date <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" maxlength="2" placeholder="Month">
                                                                <input type="text" class="form-control" maxlength="4" placeholder="Year">
                                                            </div>
                                                        </div>
                                                        <!--Cvv code  -->
                                                        <div class="col-md-6">
                                                            <label class="form-label">CVV / CVC <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" maxlength="3" placeholder="xxx">
                                                        </div>
                                                        <!-- Card name -->
                                                        <div class="col-12">
                                                            <label class="form-label">Name on Card <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" aria-label="name of card holder" placeholder="Enter card holder name">
                                                        </div>
                                                    </form>
                                                    <!-- Form END -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Credit or debit card END -->

                                        <!-- Net banking START -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header" id="heading-2">
                                                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                                    aria-controls="collapse-2">
                                                    Pay with Net Banking
                                                </button>
                                            </h6>
                                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordioncircle">
                                                <!-- Accordion body -->
                                                <div class="accordion-body">
                                                    <!-- Form START -->
                                                    <form class="row text-start g-3">
                                                        <p class="mb-1">In order to complete your transaction, we will transfer you over to Eduport secure servers.</p>
                                                        <p class="my-0">Select your bank from the drop-down list and click proceed to continue with your payment.</p>
                                                        <!-- Select bank -->
                                                        <div class="col-md-6">
                                                            <select class="form-select form-select-sm js-choice border-0" aria-label=".form-select-sm">
                                                                <option value="">Please choose one</option>
                                                                <option>Bank of America</option>
                                                                <option>Bank of India</option>
                                                                <option>Bank of London</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                    <!-- Form END -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Net banking END -->
                                    </div>
                                </div>
                            </div>
                            <!-- Payment method END -->
                        </div>
                        <!-- Personal info END -->
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-xl-4">
                        <div class="row mb-0">
                            <div class="col-md-6 col-xl-12">
                                <!-- Order summary START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-4">Resumen del pedido</h4>

                                    <!-- Coupon START -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Código de transacción</span>
                                            <p class="mb-0 h6 fw-light">AB12365E</p>
                                        </div>
                                        <div class="input-group mt-2">
                                            <input class="form-control form-control" placeholder="Codigo de Cupon">
                                            <button type="button" class="btn btn-primary">Aplicar</button>
                                        </div>

                                    </div>
                                    <hr>
                                    <!-- Coupon END -->
                                    @foreach (Cart::instance('carrito')->content() as $item)
                                    <!-- Course item START -->
                                    <div class="row g-3">
                                        <!-- Image -->
                                        <div class="col-sm-4">
                                            <img class="rounded" src="{{ isset($item->options) && $item->options->imagen != '' ? $item->options->imagen : 'silicon-front/silicon/08.jpg' }}" alt="">
                                        </div>
                                        <!-- Info -->
                                        <div class="col-sm-8">
                                            <h6 class="mb-0"><a href="#">{{ $item->options->curso }} / {{ $item->options->modalidad }} - {{ $item->name }}</a></h6>
                                            <!-- Info -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <!-- Price -->
                                                <span class="text-success">S/. {{ number_format($item->price, 2, '.', ',') }}</span>

                                                <!-- Remove and edit button -->
                                                <div class="text-primary-hover">
                                                    <a href="#" class="text-body me-2"><i class="bi bi-trash me-1"></i>Remove</a>
                                                    {{-- <a href="#" class="text-body me-2"><i class="bi bi-pencil-square me-1"></i>Edit</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Course item END -->

                                    <hr> <!-- Divider -->
                                    @endforeach
                                    <!-- Course item START -->
                                    <div class="row g-3">
                                        <!-- Image -->
                                        <div class="col-sm-4">
                                            <img class="rounded" src="assets/images/courses/4by3/18.jpg" alt="">
                                        </div>
                                        <!-- Info -->
                                        <div class="col-sm-8">
                                            <h6 class="mb-0"><a href="#">The Complete Video Production Bootcamp</a></h6>
                                            <!-- Info -->
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <!-- Price -->
                                                <span class="text-success">$350</span>

                                                <!-- Remove and edit button -->
                                                <div class="text-primary-hover">
                                                    <a href="#" class="text-body me-2"><i class="bi bi-trash me-1"></i>Remove</a>
                                                    {{-- <a href="#" class="text-body me-2"><i class="bi bi-pencil-square me-1"></i>Edit</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Course item END -->

                                    <hr> <!-- Divider -->

                                    <!-- Price and detail -->
                                    <ul class="list-group list-group-borderless mb-2">
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">Precio original</span>
                                            <span class="h6 fw-light mb-0 fw-bold">$ {{ Cart::instance('carrito')->subtotal() }}</span>
                                        </li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">Descuento de cupón</span>
                                            <span class="text-danger">{{ Cart::instance('carrito')->discount() }}</span>
                                        </li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="h5 mb-0">Total</span>
                                            <span class="h5 mb-0">$ {{ Cart::instance('carrito')->total() }}</span>
                                        </li>
                                    </ul>

                                    <!-- Button -->
                                    <div class="d-grid">
                                        @auth
                                            <a href="#" wire:click="pago" class="btn btn-lg btn-success">Proceder al proceso de pago</a>
                                        @endauth
                                        @guest
                                            <a href="{{ url('/login?redirect_to=' . route('carrito')) }}" class="btn btn-lg btn-success">Proceder al proceso de pago</a>
                                        @endguest
                                    </div>

                                    <!-- Content -->
                                    <p class="small mb-0 mt-2 text-center">Al completar su compra, usted acepta estos <a href="#"><strong>Términos de Servicio</strong></a></p>

                                </div>
                                <!-- Order summary END -->
                            </div>

                        </div><!-- Row End -->
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
        </section>
        <!-- ======================= Page content END -->

    </main>

@stop
