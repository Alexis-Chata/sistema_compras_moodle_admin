<div class="card bg-transparent border rounded-3">
    <!-- Card header START -->
    <div class="card-header bg-transparent border-bottom">
        <h3 class="mb-0">Mi Lista de Cursos</h3>
    </div>
    <!-- Card header END -->

    <!-- Card body START -->
    <div class="card-body">

        <!-- Search and select START -->
        <div class="row g-3 align-items-center justify-content-between mb-4">
            <!-- Content -->
            <div class="col-md-8">
                <form class="rounded position-relative">
                    <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                    <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                        <i class="fas fa-search fs-6 "></i>
                    </button>
                </form>
            </div>

            <!-- Select option -->
            <div class="col-md-3">
                <!-- Short by filter -->
                <form>
                    <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
                        <option value="">Sort by</option>
                        <option>Free</option>
                        <option>Newest</option>
                        <option>Most popular</option>
                        <option>Most Viewed</option>
                    </select>
                </form>
            </div>
        </div>
        <!-- Search and select END -->

        <!-- Course list table START -->
        <div class="table-responsive border-0">
            <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                <!-- Table head -->
                <thead>
                    <tr>
                        <th scope="col" class="border-0 rounded-start">Curso</th>
                        <th scope="col" class="border-0">Total Lectures</th>
                        <th scope="col" class="border-0">Completed Lecture</th>
                        <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                </thead>

                <!-- Table body START -->
                <tbody>

                    @forelse ($cursos as $curso)
                        <!-- Table item -->
                        <tr>
                            <!-- Table data -->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!-- Image -->
                                    <div class="w-100px">
                                        <img src="{{ asset($curso->imagen) }}" class="rounded" alt="">
                                    </div>
                                    <div class="mb-0 ms-2">
                                        <!-- Title -->
                                        <h6 class="table-responsive-title"><a href="{{ route('curso', $curso->id) }}">{{ $curso->name }}</a></h6>
                                        <!-- Info -->
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0 text-end">60%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos aos-init" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000"
                                                    data-aos-easing="ease-in-out" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Table data -->
                            <td>28</td>

                            <!-- Table data -->
                            <td>12</td>

                            <!-- Table data -->
                            <td>
                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Continue</a>
                            </td>
                        </tr>

                    @empty

                        <!-- Table item -->
                        <tr>
                            <!-- Table data -->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!-- Image -->
                                    <div class="w-100px">
                                        <img src="silicon-front/assets/images/courses/4by3/03.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="mb-0 ms-2">
                                        <!-- Title -->
                                        <h6 class="table-responsive-title"><a href="#">Create a Design System in
                                                Figma</a></h6>
                                        <!-- Info -->
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0 text-end">100%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos " role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000"
                                                    data-aos-easing="ease-in-out" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Table data -->
                            <td>42</td>

                            <!-- Table data -->
                            <td>42</td>

                            <!-- Table data -->
                            <td>
                                <button class="btn btn-sm btn-success me-1 mb-1 mb-x;-0 disabled"><i class="bi bi-check me-1"></i>Complete</button>
                                <a href="#" class="btn btn-sm btn-light me-1"><i class="bi bi-arrow-repeat me-1"></i>Restart</a>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
                <!-- Table body END -->
            </table>
        </div>
        <!-- Course list table END -->

        <!-- Pagination START -->
        <div class="col-12">
            {{ $cursos->links('silicon-front.pagination.silicon-front-tailwind') }}
        </div>
        <!-- Pagination END -->
    </div>
    <!-- Card body START -->
</div>
