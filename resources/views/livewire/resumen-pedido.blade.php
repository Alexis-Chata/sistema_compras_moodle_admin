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
                                <a href="#" class="text-body me-2" wire:click="eliminar_producto('{{ $item->rowId }}')" wire:loading.attr="disabled"><i class="bi bi-trash me-1"></i>Remover</a>
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
