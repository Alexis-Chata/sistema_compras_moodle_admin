<div class="col-lg-4">
    <!-- Card total START -->
    <div class="card card-body p-4 shadow">
        <!-- Title -->
        <h4 class="mb-3">Total del carrito</h4>

        <!-- Price and detail -->
        <ul class="list-group list-group-borderless mb-2">
            <li class="list-group-item px-0 d-flex justify-content-between">
                <span class="h6 fw-light mb-0">Precio original</span>
                <span class="h6 fw-light mb-0 fw-bold">$
                    {{ Cart::instance('carrito')->subtotal() }}</span>
            </li>
            <li class="list-group-item px-0 d-flex justify-content-between">
                <span class="h6 fw-light mb-0">Descuento de
                    cupón</span>
                <span class="text-danger">{{ Cart::instance('carrito')->discount() }}</span>
            </li>
            <li class="list-group-item px-0 d-flex justify-content-between">
                <span class="h5 mb-0">Total</span>
                <span class="h5 mb-0">$ {{ Cart::instance('carrito')->total() }}</span>
            </li>
        </ul>

        <!-- Button -->
        <div class="d-grid">
            <a href="#" class="btn btn-lg btn-success" wire:click="pago">Proceder al proceso de pago</a>
        </div>
        <!-- Content -->
        <p class="small mb-0 mt-2 text-center">Al completar su compra, usted acepta estos <a href="#" _istranslated="1"><strong _istranslated="1">Términos
            de Servicio</strong></a></p>
    </div>
    <!-- Card total END -->
</div>
