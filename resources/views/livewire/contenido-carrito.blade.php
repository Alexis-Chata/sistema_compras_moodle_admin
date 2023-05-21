<section class="pt-5">
    <div class="container">

        <div class="row g-4 g-sm-5">
            <!-- Main content START -->
            <div class="col-lg-8 mb-4 mb-sm-0">
                <div class="card card-body p-4 shadow">
                    <!-- Alert -->
                    <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show py-3 pe-2"
                        role="alert">
                        <div>
                            <font _mstmutation="1" _msttexthash="15229032" _msthash="126"><span
                                    class="fs-5 me-1" _mstmutation="1" _istranslated="1">🔥</span> Estos cursos
                                tienen un descuento limitado, por favor pague dentro de<strong class="text-danger ms-1"
                                    _mstmutation="1" _istranslated="1">2 días y 18 horas</strong></font>
                        </div>
                        <button type="button" class="btn btn-link mb-0 text-primary-hover text-end"
                            data-bs-dismiss="alert" aria-label="Cerrar" _mstaria-label="59709" _msthash="127"><i
                                class="bi bi-x-lg"></i></button>
                    </div>

                    @livewire('detalle-carrito')

                    <!-- Coupon input and button -->
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input class="form-control form-control " placeholder="CÓDIGO DE CUPÓN"
                                    _mstplaceholder="111436" _msthash="132">
                                <button type="button" class="btn btn-primary" _msttexthash="235976"
                                    _msthash="133">Aplicar cupón</button>
                            </div>
                        </div>
                        <!-- Update button -->
                        <div class="col-md-6 text-md-end">
                            <button class="btn btn-primary mb-0" disabled="" _msttexthash="355693"
                                _msthash="134">Actualizar carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content END -->

            <!-- Right sidebar START -->
            @livewire('total-carrito')
            <!-- Right sidebar END -->

        </div><!-- Row END -->
    </div>
</section>
