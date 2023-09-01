<div class="col-lg-4">
    @guest
        <!-- Alert -->
        <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show py-2 pe-2" role="alert">
            <div>
                <i class="bi bi-exclamation-octagon-fill me-2"></i>
                ¿Ya tienes una cuenta? <a href="{{ url('/login?redirect_to=' . route('carrito')) }}" class="text-reset btn-link mb-0 fw-bold">Inicia sesión</a>
            </div>
            <button type="button" class="btn btn-link mb-0 text-primary-hover text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        </div>
    @endguest
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
            @auth
                <a href="{{ route('checkout') }}" class="btn btn-lg btn-success">Proceder al proceso de pago</a>
            @endauth
            @guest
                <a href="{{ url('/login?redirect_to=' . route('checkout')) }}" class="btn btn-lg btn-success">Proceder al
                    proceso de pago</a>
            @endguest
        </div>
        <!-- Content -->
        <p class="small mb-0 mt-2 text-center">Al completar su compra, usted acepta estos <a href="#"><strong>Términos
                    de Servicio</strong></a></p>
    </div>
    <!-- Card total END -->
</div>
