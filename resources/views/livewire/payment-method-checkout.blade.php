<div class="row g-4 g-sm-5">
    <!-- Main content START -->
    <div class="col-xl-8 mb-4 mb-sm-0">

        <!-- Personal info START -->
        <div class="card card-body shadow p-4">
            {{-- <!-- Title -->
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
            <!-- Form END --> --}}

            <!-- Payment method START -->

            <!-- Add Payment method START -->
            <div class="card bg-transparent border rounded-3 mb-4 z-index-9">
                <!-- Card header START -->
                <div class="card-header bg-transparent d-sm-flex justify-content-sm-between align-items-center border-bottom">
                    <h3 class="mb-2 mb-sm-0">Método de pago</h3>
                    {{-- <a href="#" class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addNewcard">Add new card</a> --}}
                </div>
                <!-- Card header END -->
                <style>
                    #heading-1 button.accordion-button::after,
                    #heading-1 button.accordion-button::before {
                        display: none;
                    }
                </style>
                <!-- Card body START -->
                <div class="card-body">
                    <div class="accordion accordion-circle" id="accordioncircle">
                        <!-- Credit or debit card START -->
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header font-base" id="heading-1">
                                <button class="accordion-button bg-white h5 px-3 rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                    aria-expanded="true" aria-controls="collapse-1">
                                    Tarjeta de crédito o débito
                                </button>
                            </h5>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordioncircle">
                                <!-- Accordion body -->
                                <div class="accordion-body">
                                    <div class="row text-start g-3">

                                        <div wire:ignore>

                                            <!-- Card name -->
                                            <div class="col-12 mb-3">
                                                <label class="form-label">Nombre en la tarjeta <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <input id="card-holder-name" type="text" class="form-control" placeholder="Introduzca el Nombre">
                                                    {{-- <img src="assets/images/client/visa.svg" class="w-40px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block" alt=""> --}}
                                                </div>
                                            </div>

                                            <!-- Stripe Elements Placeholder -->
                                            <div id="card-element" class="form-control"></div>
                                            <span id="card-error-message"></span>
                                        </div>

                                        <button id="card-button" data-secret="{{ $intent->client_secret }}" class="btn btn-sm btn-primary-soft mb-0">
                                            Agregar Método de Pago y Pagar
                                        </button>

                                        @push('billings')
                                            <script src="https://js.stripe.com/v3/"></script>

                                            <script>
                                                const stripe = Stripe("{{ env('STRIPE_KEY') }}");

                                                const elements = stripe.elements();
                                                const cardElement = elements.create('card');

                                                cardElement.mount('#card-element');
                                            </script>

                                            <script>
                                                const cardHolderName = document.getElementById('card-holder-name');
                                                const cardButton = document.getElementById('card-button');

                                                cardButton.addEventListener('click', async (e) => {

                                                    //deshabilitar boton
                                                    cardButton.disabled = true;

                                                    const clientSecret = cardButton.dataset.secret;

                                                    const {
                                                        setupIntent,
                                                        error
                                                    } = await stripe.confirmCardSetup(
                                                        clientSecret, {
                                                            payment_method: {
                                                                card: cardElement,
                                                                billing_details: {
                                                                    name: cardHolderName.value
                                                                }
                                                            }
                                                        }
                                                    );

                                                    cardButton.disabled = false;

                                                    if (error) {
                                                        let span = document.getElementById('card-error-message');
                                                        span.textContent = error.message;
                                                    } else {

                                                        //Limpiar formulariowire
                                                        cardHolderName.value = "";
                                                        cardElement.clear();
                                                        @this.addPaymentMethodAndPago(setupIntent.payment_method);
                                                    }
                                                });
                                            </script>
                                        @endpush
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Credit or debit card END -->

                        @forelse ($PaymentMethods as $PaymentMethod)
                            <!-- Address 1 START -->
                            <div class="bg-body border border-1 p-3 rounded-3 d-sm-flex justify-content-sm-between align-items-center mb-4" wire:key="{{ $PaymentMethod->id }}">

                                <!-- Radio button button -->
                                <div class="form-check">
                                    <input class="form-check-input mb-1" type="radio" name="paymentMethodId" wire:model.defer='paymentMethodId' value="{{ $PaymentMethod->id }}"
                                        id="paymentMethod-{{ $PaymentMethod->id }}">
                                    <label class="form-check-label mb-0 h5" for="paymentMethod-{{ $PaymentMethod->id }}">{{ ucwords($PaymentMethod->card->brand) }} - ••••
                                        {{ $PaymentMethod->card->last4 }}
                                        @if ($this->defaultPaymentMethod->id == $PaymentMethod->id)
                                            <a href="#" class="badge bg-info bg-opacity-10 text-info">Predeterminado</a>
                                        @endif
                                    </label>
                                    <p class="mb-0">Caduca {{ \Carbon\Carbon::createFromDate($PaymentMethod->card->exp_year, $PaymentMethod->card->exp_month)->translatedFormat('M Y') }}
                                    </p>
                                </div>
                            </div>
                            <!-- Address 1 END -->
                        @empty
                        @endforelse

                    </div>
                </div>
                <!-- Card body START -->
            </div>
            <!-- Add Payment method END -->

            <div class="mb-4 justify-content-center" wire:target='addPaymentMethodAndPago' wire:loading.flex>

                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
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
                    @forelse (Cart::instance('carrito')->content() as $item)
                        <!-- Course item START -->
                        <div class="row g-3">
                            <!-- Image -->
                            <div class="col-sm-4">
                                <img class="rounded" src="{{ isset($item->options) && $item->options->imagen != '' ? $item->options->imagen : 'silicon-front/silicon/08.jpg' }}"
                                    alt="">
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
                                        <a href="#" class="text-body me-2" wire:click="eliminar_producto('{{ $item->rowId }}')" wire:loading.attr="disabled"><i
                                                class="bi bi-trash me-1"></i>Remover</a>
                                        {{-- <a href="#" class="text-body me-2"><i class="bi bi-pencil-square me-1"></i>Edit</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course item END -->

                        <hr> <!-- Divider -->
                    @empty
                    @endforelse

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
