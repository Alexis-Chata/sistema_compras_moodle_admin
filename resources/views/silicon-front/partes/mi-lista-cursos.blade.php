<div class="card bg-transparent border rounded-3">
    <!-- Card header START -->
    <div class="card-header bg-transparent border-bottom">
        <h3 class="mb-0">My Courses List</h3>
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
                    <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                        <div class="choices__inner"><select class="form-select js-choice border-0 z-index-9 bg-transparent choices__input" aria-label=".form-select-sm" hidden="" tabindex="-1"
                                data-choice="active">
                                <option value="" data-custom-properties="[object Object]">Sort by</option>
                            </select>
                            <div class="choices__list choices__list--single">
                                <div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]"
                                    aria-selected="true">Sort by</div>
                            </div>
                        </div>
                        <div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="search" name="search_terms" class="choices__input choices__input--cloned"
                                autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Sort by" placeholder="">
                            <div class="choices__list" role="listbox">
                                <div id="choices--7voe-item-choice-5" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                    role="option" data-choice="" data-id="5" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Sort by</div>
                                <div id="choices--7voe-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1"
                                    data-value="Free" data-select-text="Press to select" data-choice-selectable="">Free</div>
                                <div id="choices--7voe-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2"
                                    data-value="Most popular" data-select-text="Press to select" data-choice-selectable="">Most popular</div>
                                <div id="choices--7voe-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3"
                                    data-value="Most Viewed" data-select-text="Press to select" data-choice-selectable="">Most Viewed</div>
                                <div id="choices--7voe-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4"
                                    data-value="Newest" data-select-text="Press to select" data-choice-selectable="">Newest</div>
                            </div>
                        </div>
                    </div>
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
                        <th scope="col" class="border-0 rounded-start">Course Title</th>
                        <th scope="col" class="border-0">Total Lectures</th>
                        <th scope="col" class="border-0">Completed Lecture</th>
                        <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                </thead>

                <!-- Table body START -->
                <tbody>

                    @forelse ($grupos as $grupo)
                        <!-- Table item -->
                        <tr>
                            <!-- Table data -->
                            <td>
                                <div class="d-flex align-items-center">
                                    <!-- Image -->
                                    <div class="w-100px">
                                        <img src="{{ asset($grupo->imagen) }}" class="rounded" alt="">
                                    </div>
                                    <div class="mb-0 ms-2">
                                        <!-- Title -->
                                        <h6 class="table-responsive-title"><a href="#">{{ $grupo->name }} - {{ $grupo->curso->name }}</a></h6>
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
            {{ $grupos->links('silicon-front.pagination.silicon-front-tailwind') }}
        </div>
        <!-- Pagination END -->
    </div>
    <!-- Card body START -->
</div>