<div class="d-flex justify-content-between">
    <span class="h6 fw-light mb-0">
        <button type="button"
            class="course-card-btn small s-border-none background transparent-color s-cursor-pointer s-cross-center s-nowrap base"
            style="background-color: transparent; border: none; padding: 0;"  wire:click="addItem" wire:loading.attr="disabled">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 20 21"
                class="svg-icon normal s-mr-05 fill blue-500 undefined text-danger" fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1.66663 2.89306C1.66663 2.43283 2.03972 2.05973 2.49996 2.05973H4.16663C4.56386 2.05973 4.90587 2.34011 4.98378 2.72963L5.18313 3.7264H17.5C17.7888 3.7264 18.057 3.87594 18.2088 4.12162C18.3607 4.3673 18.3745 4.67408 18.2453 4.93241L14.912 11.5991C14.7708 11.8814 14.4823 12.0597 14.1666 12.0597H6.17847L4.5118 13.7264L14.1666 13.7264C15.5473 13.7264 16.6666 14.8457 16.6666 16.2264C16.6666 17.6071 15.5473 18.7264 14.1666 18.7264C12.7859 18.7264 11.6666 17.6071 11.6666 16.2264C11.6666 15.9342 11.7168 15.6537 11.8089 15.3931H8.19104C8.28316 15.6537 8.33329 15.9342 8.33329 16.2264C8.33329 17.6071 7.214 18.7264 5.83329 18.7264C4.45258 18.7264 3.33329 17.6071 3.33329 16.2264C3.33329 15.8296 3.42572 15.4545 3.59022 15.1212C2.77429 14.5792 2.53374 13.3474 3.33329 12.5479L4.92868 10.9525L3.48346 3.7264H2.49996C2.03972 3.7264 1.66663 3.3533 1.66663 2.89306ZM6.51646 10.3931H13.6516L16.1516 5.39306H5.51646L6.51646 10.3931ZM5.83329 15.3931C5.37306 15.3931 4.99996 15.7662 4.99996 16.2264C4.99996 16.6866 5.37306 17.0597 5.83329 17.0597C6.29353 17.0597 6.66663 16.6866 6.66663 16.2264C6.66663 15.7662 6.29353 15.3931 5.83329 15.3931ZM14.1666 15.3931C13.7064 15.3931 13.3333 15.7662 13.3333 16.2264C13.3333 16.6866 13.7064 17.0597 14.1666 17.0597C14.6269 17.0597 15 16.6866 15 16.2264C15 15.7662 14.6269 15.3931 14.1666 15.3931Z">
                </path>
            </svg>
            <span class="color s-font-semibold blue-500 s-whitespace-nowrap undefined">S/
                {{ $curso->costo }} SOLES</span>
        </button>
    </span>
    @if (Cart::count())
        <span class="h6 fw-light mb-0">{{ $encarrito }}</span>
    @endif
</div>
