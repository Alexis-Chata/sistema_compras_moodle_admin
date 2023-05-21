<div class="card-body p-0">
    @forelse (Cart::content() as $item)
        <!-- Cart item START -->
        <div class="row p-3 g-2">
            <!-- Image -->
            <div class="col-3">
                <img class="rounded-2"
                    src="silicon-front/silicon/{{ isset($item->options) ? $item->options->imagen : 'cart-04.jpg' }}"
                    alt="avatar">
            </div>

            <div class="col-9">
                <!-- Title -->
                <div class="d-flex justify-content-between">
                    <h6 class="m-0">{{ $item->name }}</h6>
                    <a href="#" class="small text-primary-hover rowId"
                        wire:click="eliminar_producto('{{ $item->rowId }}')" wire:loading.attr="disabled"><i class="bi bi-x-lg"></i></a>
                </div>
                <!-- Select item -->
                <form class="choices-sm pt-2 col-4">
                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="choices__inner"><select
                                class="form-select js-choice border-0 bg-transparent choices__input"
                                data-search-enabled="false" hidden="" tabindex="-1" data-choice="active">
                                <option value="1" data-custom-properties="[object Object]">1
                                </option>
                            </select>
                            <div class="choices__list choices__list--single">
                                <div class="choices__item choices__item--selectable" data-item="" data-id="1"
                                    data-value="1" data-custom-properties="[object Object]" aria-selected="true">1
                                </div>
                            </div>
                        </div>
                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                            <div class="choices__list" role="listbox">
                                <div id="choices--q0zc-item-choice-1"
                                    class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted"
                                    role="option" data-choice="" data-id="1" data-value="1"
                                    data-select-text="Press to select" data-choice-selectable="" aria-selected="true">1
                                </div>
                                <div id="choices--q0zc-item-choice-2"
                                    class="choices__item choices__item--choice choices__item--selectable" role="option"
                                    data-choice="" data-id="2" data-value="2" data-select-text="Press to select"
                                    data-choice-selectable="">2
                                </div>
                                <div id="choices--q0zc-item-choice-3"
                                    class="choices__item choices__item--choice choices__item--selectable" role="option"
                                    data-choice="" data-id="3" data-value="3" data-select-text="Press to select"
                                    data-choice-selectable="">3
                                </div>
                                <div id="choices--q0zc-item-choice-4"
                                    class="choices__item choices__item--choice choices__item--selectable" role="option"
                                    data-choice="" data-id="4" data-value="4" data-select-text="Press to select"
                                    data-choice-selectable="">4
                                </div>
                                <div id="choices--q0zc-item-choice-5"
                                    class="choices__item choices__item--choice choices__item--selectable" role="option"
                                    data-choice="" data-id="5" data-value="5" data-select-text="Press to select"
                                    data-choice-selectable="">5
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
