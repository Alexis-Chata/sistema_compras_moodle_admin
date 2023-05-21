<div class="me-2 me-md-3 dropdown">
    <!-- Cart button -->
    <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
        data-bs-auto-close="outside">
        <i class="bi bi-cart3 fa-fw"></i>
    </a>
    <!-- badge / bolsa -->
    @livewire('bolsa-dropdown')

    <!-- Cart dropdown menu START -->
    <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
        <div class="card bg-transparent">
            <div class="card-header bg-transparent border-bottom py-4">
                <h5 class="m-0">Carrito</h5>
            </div>

            @livewire('carrito-dropdown')

            <!-- Button -->
            <div
                class="card-footer bg-transparent border-top py-3 text-center d-flex justify-content-between position-relative">
                <a href="{{ route('carrito') }}" class="btn btn-sm btn-light mb-0">Ver Carrito</a>
                <a href="#" class="btn btn-sm btn-success mb-0">Checkout</a>
            </div>
        </div>
    </div>
    <!-- Cart dropdown menu END -->
</div>
