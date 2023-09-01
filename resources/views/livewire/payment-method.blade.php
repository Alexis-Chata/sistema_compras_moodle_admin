<div>
    <!-- Add Payment method START -->
    <div class="card bg-transparent border rounded-3 mb-4 z-index-9">
        <!-- Card header START -->
        <div class="card-header bg-transparent d-sm-flex justify-content-sm-between align-items-center border-bottom">
            <h3 class="mb-2 mb-sm-0">Agregar Método de pago</h3>
            {{-- <a href="#" class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addNewcard">Add new card</a> --}}
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">
            <div class="accordion accordion-circle" id="accordioncircle">
                <!-- Credit or debit card START -->
                <div class="accordion-item mb-3">
                    <h6 class="accordion-header font-base" id="heading-1">
                        <button class="accordion-button bg-white rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                            aria-controls="collapse-1">
                            Tarjeta de crédito o débito
                        </button>
                    </h6>
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
                                    Agregar Método de Pago
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
                                                @this.addPaymentMethod(setupIntent.payment_method);
                                            }
                                        });
                                    </script>
                                @endpush
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Credit or debit card END -->

            </div>
        </div>
        <!-- Card body START -->
    </div>
    <!-- Add Payment method END -->

    <div class="mb-4 justify-content-center" wire:target='addPaymentMethod,defaultPaymentMethod,deletePaymentMethod' wire:loading.flex>

        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Payment address START -->
    <div class="card bg-transparent border rounded-3 mb-4">
        <!-- Card header START -->
        <div class="card-header bg-transparent d-sm-flex justify-content-sm-between align-items-center border-bottom">
            <h3 class="mb-2 mb-sm-0">Métodos de pago</h3>
            {{-- <a href="#" class="btn btn-sm btn-primary-soft mb-0">Add new address</a> --}}
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">
            @forelse ($PaymentMethods as $PaymentMethod)
                <!-- Address 1 START -->
                <div class="bg-body border border-1 p-3 rounded-3 d-sm-flex justify-content-sm-between align-items-center mb-4" wire:key="{{ $PaymentMethod->id }}">

                    <!-- Radio button button -->
                    <div class="form-check">
                        <input class="form-check-input mb-1 d-none" type="radio" name="address" id="address{{ $PaymentMethod->id }}">
                        <label class="form-check-label mb-0 h5" for="address{{ $PaymentMethod->id }}">{{ ucwords($PaymentMethod->card->brand) }} - •••• {{ $PaymentMethod->card->last4 }}
                            @if ($this->defaultPaymentMethod->id == $PaymentMethod->id)
                                <a href="#" class="badge bg-info bg-opacity-10 text-info">Predeterminado</a>
                            @endif
                        </label>
                        <p class="mb-0">Caduca {{ \Carbon\Carbon::createFromDate($PaymentMethod->card->exp_year, $PaymentMethod->card->exp_month)->translatedFormat('M Y') }}</p>
                    </div>
                    @if ($this->defaultPaymentMethod->id != $PaymentMethod->id)
                    <!-- Button -->
                    <div>
                        <button class="btn btn-sm btn-warning-soft mb-0" wire:click="defaultPaymentMethod('{{ $PaymentMethod->id }}')" wire:target="defaultPaymentMethod('{{ $PaymentMethod->id }}')"
                            wire:loading.attr='disabled'><i class="far fa-star text-warning"></i></button>
                        <button class="btn btn-sm btn-danger mb-0" wire:click="deletePaymentMethod('{{ $PaymentMethod->id }}')" wire:target="deletePaymentMethod('{{ $PaymentMethod->id }}')"
                            wire:loading.attr='disabled'><i class="bi bi-trash"></i></button>
                    </div>
                    @endif
                </div>
                <!-- Address 1 END -->
            @empty
            <div class="bg-body border border-1 p-3 rounded-3 d-sm-flex justify-content-sm-between align-items-center mb-4">
                <div class="form-check">
                    <label class="form-check-label mb-0 h5">Aun sin metodos de pago</label>
                </div>
            </div>
            @endforelse
        </div>
        <!-- Card body START -->
    </div>
    <!-- Payment address END -->
</div>
