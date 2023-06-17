@extends('silicon-front.main')

@section('main-content')

<main>

    <!-- =======================
    Page Banner START -->
    <section class="pt-0">
        <div class="container-fluid px-0">
            <div class="card bg-blue h-100px h-md-200px rounded-0" style="background:url(silicon-front/assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
            </div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                        <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <div class="avatar avatar-xxl position-relative mt-n3">
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="silicon-front/assets/images/avatar/09.jpg" alt="">
                                    <span class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-sm-flex justify-content-between align-items-center">
                                <div>
                                    <h1 class="my-1 fs-4">Lori Stevens</h1>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                            <span class="h6">255</span>
                                            <span class="text-body fw-light">points</span>
                                        </li>
                                        <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                            <span class="h6">7</span>
                                            <span class="text-body fw-light">Completed courses</span>
                                        </li>
                                        <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                            <span class="h6">52</span>
                                            <span class="text-body fw-light">Completed lessons</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Button -->
                                <div class="mt-2 mt-sm-0">
                                    <a href="student-course-list.html" class="btn btn-outline-primary mb-0">View my courses</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <hr class="d-xl-none">
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                        <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Left sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header bg-light">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-xl-0">
                            <div class="bg-dark border rounded-3 p-3 w-100">
                                <!-- Dashboard menu -->
                                <div class="list-group list-group-dark list-group-borderless collapse-list">
                                    <a class="list-group-item" href="student-dashboard.html"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                    <a class="list-group-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-2"></i>My Subscriptions</a>
                                    <a class="list-group-item active" href="student-course-list.html"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                    <a class="list-group-item" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-2"></i>Course Resume</a>
                                    <a class="list-group-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
                                    <a class="list-group-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment Info</a>
                                    <a class="list-group-item" href="student-bookmark.html"><i class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
                                    <a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                    <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                    <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                    <a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                    <!-- Collapse menu -->
                                    <a class="list-group-item" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false" aria-controls="collapseauthentication">
                                        <i class="bi bi-lock fa-fw me-2"></i>Dropdown level
                                    </a>
                                    <!-- Submenu -->
                                    <ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
                                        <li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">
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
                                        <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select js-choice border-0 z-index-9 bg-transparent choices__input" aria-label=".form-select-sm" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Sort by</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Sort by</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="Sort by" placeholder=""><div class="choices__list" role="listbox"><div id="choices--7voe-item-choice-5" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="5" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Sort by</div><div id="choices--7voe-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Free" data-select-text="Press to select" data-choice-selectable="">Free</div><div id="choices--7voe-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Most popular" data-select-text="Press to select" data-choice-selectable="">Most popular</div><div id="choices--7voe-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Most Viewed" data-select-text="Press to select" data-choice-selectable="">Most Viewed</div><div id="choices--7voe-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Newest" data-select-text="Press to select" data-choice-selectable="">Newest</div></div></div></div>
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
                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-100px">
                                                        <img src="silicon-front/assets/images/courses/4by3/08.jpg" class="rounded" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="table-responsive-title"><a href="#">Building Scalable APIs with GraphQL</a></h6>
                                                        <!-- Info -->
                                                        <div class="overflow-hidden">
                                                            <h6 class="mb-0 text-end">85%</h6>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init aos-animate" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>56</td>

                                            <!-- Table data -->
                                            <td>40</td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Continue</a>
                                            </td>
                                        </tr>

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
                                                        <h6 class="table-responsive-title"><a href="#">Create a Design System in Figma</a></h6>
                                                        <!-- Info -->
                                                        <div class="overflow-hidden">
                                                            <h6 class="mb-0 text-end">100%</h6>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
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

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-100px">
                                                        <img src="silicon-front/assets/images/courses/4by3/05.jpg" class="rounded" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="table-responsive-title"><a href="#">The Complete Web Development in python</a></h6>
                                                        <!-- Info -->
                                                        <div class="overflow-hidden">
                                                            <h6 class="mb-0 text-end">60%</h6>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
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

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-100px">
                                                        <img src="silicon-front/assets/images/courses/4by3/01.jpg" class="rounded" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="table-responsive-title"><a href="#">Digital Marketing Masterclass</a></h6>
                                                        <!-- Info -->
                                                        <div class="overflow-hidden">
                                                            <h6 class="mb-0 text-end">40%</h6>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td>32</td>

                                            <!-- Table data -->
                                            <td>18</td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Continue</a>
                                            </td>
                                        </tr>

                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!-- Image -->
                                                    <div class="w-100px">
                                                        <img src="silicon-front/assets/images/courses/4by3/02.jpg" class="rounded" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="table-responsive-title"><a href="#">Graphic Design Masterclass</a></h6>
                                                        <!-- Info -->
                                                        <div class="overflow-hidden">
                                                            <h6 class="mb-0 text-end">90%</h6>
                                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                <div class="progress-bar bg-primary aos aos-init" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td>16</td>

                                            <!-- Table data -->
                                            <td>14</td>

                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Continue</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Course list table END -->

                            <!-- Pagination START -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                                <!-- Content -->
                                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                <!-- Pagination -->
                                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination END -->
                        </div>
                        <!-- Card body START -->
                    </div>
                </div>
                <!-- Main content END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

    </main>
@stop
