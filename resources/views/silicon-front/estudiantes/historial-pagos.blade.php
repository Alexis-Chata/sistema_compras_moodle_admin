@extends('silicon-front.estudiantes.main')

@section('main-content-estudiantes')

<div class="col-xl-9">

    <!-- Billing history START -->
    <div class="card bg-transparent border rounded-3">
        <!-- Card header START -->
        <div class="card-header bg-transparent border-bottom">
            <h3 class="mb-0">Billing history</h3>
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">

            <!-- Title and select START -->
            <div class="row g-3 align-items-center justify-content-between mb-4">
                <!-- Content -->
                <div class="col-md-8">
                    <form class="rounded position-relative">
                        <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                            aria-label="Search">
                        <button
                            class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                            type="submit">
                            <i class="fas fa-search fs-6 "></i>
                        </button>
                    </form>
                </div>

                <!-- Select option -->
                <div class="col-md-3">
                    <!-- Short by filter -->
                    <form>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent"
                            aria-label=".form-select-sm">
                            <option value="">Sort by</option>
                            <option>Newest</option>
                            <option>Oldest</option>
                        </select>
                    </form>
                </div>
            </div>
            <!-- Title and select END -->

            <!-- Student list table START -->
            <div class="table-responsive border-0">
                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th scope="col" class="border-0 rounded-start">Date</th>
                            <th scope="col" class="border-0">Course name</th>
                            <th scope="col" class="border-0">Payment method</th>
                            <th scope="col" class="border-0">Status</th>
                            <th scope="col" class="border-0">Total</th>
                            <th scope="col" class="border-0 rounded-end">Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <!-- Table item -->
                        <tr>
                            <!-- Date item -->
                            <td>4/2/2023</td>

                            <!-- Title item -->
                            <td>
                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Sketch from A to Z: for
                                        app designer</a></h6>
                            </td>

                            <!-- Payment method item -->
                            <td><img src="assets/images/client/mastercard.svg" class="h-40px" alt=""><span
                                    class="ms-2">****4568</span></td>

                            <!-- Status item -->
                            <td>
                                <span class="badge bg-success bg-opacity-10 text-success">Paid</span>
                            </td>

                            <!-- total item -->
                            <td>$350</td>

                            <!-- Action item -->
                            <td>
                                <a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i
                                        class="bi bi-download"></i></a>
                            </td>
                        </tr>

                        <!-- Table item -->
                        <tr>
                            <!-- Date item -->
                            <td>10/1/2023</td>

                            <!-- Title item -->
                            <td>
                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Create a Design System in
                                        Figma</a></h6>
                            </td>

                            <!-- Payment method item -->
                            <td><img src="assets/images/client/mastercard.svg" class="h-40px" alt=""><span
                                    class="ms-2">****2588</span></td>

                            <!-- Status item -->
                            <td>
                                <span class="badge bg-success bg-opacity-10 text-success">Paid</span>
                            </td>

                            <!-- total item -->
                            <td>$242</td>

                            <!-- Action item -->
                            <td>
                                <a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i
                                        class="bi bi-download"></i></a>
                            </td>
                        </tr>

                        <!-- Table item -->
                        <tr>
                            <!-- Date item -->
                            <td>21/1/2023</td>

                            <!-- Title item -->
                            <td>
                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">The Complete Web
                                        Development in python</a></h6>
                            </td>

                            <!-- Payment method item -->
                            <td><img src="assets/images/client/paypal.svg" class="w-80px" alt="">
                            </td>

                            <!-- Status item -->
                            <td>
                                <span class="badge bg-orange bg-opacity-10 text-orange">Pending</span>
                            </td>

                            <!-- total item -->
                            <td>$576</td>

                            <!-- Action item -->
                            <td>
                                <a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i
                                        class="bi bi-download"></i></a>
                            </td>
                        </tr>

                        <!-- Table item -->
                        <tr>
                            <!-- Date item -->
                            <td>18/1/2023</td>

                            <!-- Title item -->
                            <td>
                                <h6 class="mt-2 mt-lg-0 mb-0"><a href="#">Deep Learning with
                                        React-Native</a></h6>
                            </td>

                            <!-- Payment method item -->
                            <td><img src="assets/images/client/mastercard.svg" class="h-40px" alt=""><span
                                    class="ms-2">****2588</span></td>

                            <!-- Status item -->
                            <td>
                                <span class="badge bg-danger bg-opacity-10 text-danger">Cancel</span>
                            </td>

                            <!-- total item -->
                            <td>$425</td>

                            <!-- Action item -->
                            <td>
                                <a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i
                                        class="bi bi-download"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Student list table END -->

            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                <!-- Content -->
                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                    class="fas fa-angle-left"></i></a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card body START -->
    </div>
    <!-- Billing history END -->

    <!-- Main content END -->
</div><!-- Row END -->

@stop
