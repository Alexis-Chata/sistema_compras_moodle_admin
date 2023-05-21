<div class="table-responsive border-0 rounded-3">
    <!-- Table START -->
    <table class="table align-middle p-4 mb-0">
        <!-- Table head -->
        <!-- Table body START -->
        <tbody class="border-top-0">
            @foreach (Cart::content() as $item)
            <!-- Table item -->
            <tr>
                <!-- Course item -->
                <td>
                    <div class="d-lg-flex align-items-center">
                        <!-- Image -->
                        <div class="w-100px w-md-80px mb-2 mb-md-0">
                            <img src="silicon-front/silicon/{{ isset($item->options) && $item->options->imagen != '' ? $item->options->imagen : '08.jpg' }}" class="rounded"
                                alt="">
                        </div>
                        <!-- Title -->
                        <h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">
                            <a href="#" _msttexthash="992043" _msthash="128">{{ $item->name }}</a>
                        </h6>
                    </div>
                </td>

                <!-- Amount item -->
                <td class="text-center">
                    <h5 class="text-success mb-0" _msttexthash="21021" _msthash="129">S/. {{ $item->price }}
                    </h5>
                </td>
                <!-- Action item -->
                <td>
                    <a href="#"
                        class="btn btn-sm btn-success-soft px-2 me-1 mb-1 mb-md-0"><i
                            class="far fa-fw fa-edit"></i>{{ $item->qty }}</a>
                    <button class="btn btn-sm btn-danger-soft px-2 mb-0" wire:click="eliminar_producto('{{ $item->rowId }}')" wire:loading.attr="disabled"><i
                            class="fas fa-fw fa-times"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
