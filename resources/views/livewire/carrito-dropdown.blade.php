<div class="card-body p-0">
    @forelse (Cart::instance('carrito')->content() as $item)
        <!-- Cart item START -->
        <div class="row p-3 g-2">
            <!-- Image -->
            <div class="col-3">
                <img class="rounded-2"
                    src="{{ isset($item->options) ? $item->options->imagen : 'silicon-front/silicon/cart-04.jpg' }}"
                    alt="avatar">
            </div>

            <div class="col-9">
                <!-- Title -->
                <div class="d-flex justify-content-between">
                    <h6 class="m-0">{{ $item->options->curso }} - {{ $item->options->cuota??$item->options->modalidad }}</h6>
                    <a href="#" class="small text-primary-hover rowId"
                        wire:click="eliminar_producto('{{ $item->rowId }}')" wire:loading.attr="disabled"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
        </div>
        <!-- Cart item END -->
        <!-- Divider -->
        <hr class="m-0">
    @empty
        <div class="row p-3 g-2">
            <div class="col-9">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0">Carrito vacio, Agregue algo</h6>
                </div>
            </div>
        </div>
    @endforelse

</div>
