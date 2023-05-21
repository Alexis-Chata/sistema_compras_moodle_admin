<div class="col-lg-4">
    <!-- Card total START -->
    <div class="card card-body p-4 shadow">
        <!-- Title -->
        <h4 class="mb-3" _msttexthash="290888" _msthash="135">Total del carrito</h4>

        <!-- Price and detail -->
        <ul class="list-group list-group-borderless mb-2">
            <li class="list-group-item px-0 d-flex justify-content-between">
                <span class="h6 fw-light mb-0" _msttexthash="258544" _msthash="136">Precio
                    original</span>
                <span class="h6 fw-light mb-0 fw-bold" _msttexthash="20644" _msthash="137">$
                    {{ Cart::subtotal() }}</span>
            </li>
            <li class="list-group-item px-0 d-flex justify-content-between">
                <span class="h6 fw-light mb-0" _msttexthash="358956" _msthash="138">Descuento de
                    cupón</span>
                <span class="text-danger" _msttexthash="19929" _msthash="139">{{ Cart::discount() }}</span>
            </li>
            <li class="list-group-item px-0 d-flex justify-content-between">
                <span class="h5 mb-0" _msttexthash="60814" _msthash="140">Total</span>
                <span class="h5 mb-0" _msttexthash="21476" _msthash="141">$ {{ Cart::total() }}</span>
            </li>
        </ul>

        <!-- Button -->
        <div class="d-grid">
            <a href="checkout.html" class="btn btn-lg btn-success" _msttexthash="567736"
                _msthash="142">Proceder al proceso de pago</a>
        </div>

        <!-- Content -->
        <p class="small mb-0 mt-2 text-center" _msttexthash="2555514" _msthash="143">Al completar
            su
            compra, usted acepta estos <a href="#" _istranslated="1"><strong
                    _istranslated="1">Términos
                    de Servicio</strong></a></p>

    </div>
    <!-- Card total END -->
</div>
