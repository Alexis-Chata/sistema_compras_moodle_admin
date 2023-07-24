<div class="col-sm-6 col-lg-4 col-xl-3">
    <div class="card shadow h-100">
        <a href="{{ route('curso', $curso->id) }}">
            <!-- Image -->
            <img src="{{ asset($curso->imagen) }}" class="card-img-top" alt="course image">
        </a>
        <!-- Card body -->
        <div class="card-body pb-0">
            <!-- Badge and favorite -->
            {{-- <div class="d-flex justify-content-between mb-2">
                <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                <a href="#" class="h6 mb-0"><i class="far fa-heart"></i></a>
            </div> --}}
            <!--
                <div class="d-flex justify-content-between mb-2">
                    <a href="#" class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                    <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                </div>
            -->
            <!-- Title -->
            <h5 class="card-title fw-normal"><a href="{{ route('curso', $curso->id) }}">{{ $curso->name }}</a>
            </h5>
            <p class="mb-2 text-truncate-2">
                {{ $curso->descripcion }}
            </p>
            <!-- Rating star -->
            {{-- <ul class="list-inline mb-0">
                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                </li>
                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                </li>
                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                </li>
                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i>
                </li>
                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i>
                </li>
                <li class="list-inline-item ms-2 h6 fw-light mb-0">
                    {{ $curso->calificacion }}/5.0</li>
            </ul> --}}
        </div>
        <!-- Card footer -->
        <div class="card-footer pt-0 pb-3">
            {{--
            <hr>
            <div class="d-flex justify-content-between">
                <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>{{
                    $curso->hora . 'h ' . $curso->min . 'm' }}</span>
                <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>{{
                    $curso->lecturas . ' lecturas' }}</span>
            </div> --}}
        </div>
    </div>
</div>
