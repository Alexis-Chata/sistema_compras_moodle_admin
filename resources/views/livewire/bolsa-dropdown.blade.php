<div class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-dark mt-xl-2 ms-n1" {{ empty(Cart::count())? 'style=display:none' : "" }}>
    {{ Cart::count() }}
    <span class="visually-hidden">mensajes no leídos</span>
</div>
