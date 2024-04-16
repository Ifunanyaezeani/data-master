@extends('layouts.main')

@section('contents')

    <section class="pt-0">
        <div class="container">
            <!-- Background image -->
            <div class="rounded-3 p-3 p-sm-5 bg-secondary" style="background-image: url(assets/images/bg/05jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <!-- Banner title -->
                <div class="row my-2 my-xl-5">
                    <div class="col-md-8 mx-auto">
                        <h1 class="text-center text-white">150 Hotels in New York</h1>
                    </div>
                </div>

                <!-- Booking from START -->
                <form class="bg-mode shadow rounded-3 position-relative p-4 pe-md-5 pb-5 pb-md-4 mb-4">
                    <div class="row g-4 align-items-center">

                        <!-- Check in -->
                        <div class="col">
                            <div class="d-flex">
                                <!-- Icon -->
                                <i class="bi bi-houses fs-3 me-2 mt-2 d-none d-md-block"></i>
                                <!-- Date input -->
                                <div class="form-control-border form-control-transparent form-fs-md">
                                    <label class="form-label">Search dormitories</label>
                                    <input type="text" class="form-control flatpickr" data-mode="range" placeholder="Search by name or location">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Button -->
                    <div class="btn-position-md-middle">
                        <a  class="icon-lg btn btn-round btn-primary mb-0" href="#"><i class="bi bi-search fa-fw"></i></a>
                    </div>
                </form>
                <!-- Booking from END -->
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">

            <div class="row mb-4">
                <div class="col-12">
                    <div class="hstack gap-3 justify-content-between justify-content-md-end">
                        <button class="btn btn-primary-soft btn-primary-check mb-0 d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fa-solid fa-sliders-h me-1"></i> Show filters
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Left sidebar START -->
                <aside class="col-xl-4 col-xxl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Advance Filters</h5>
                            <button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body flex-column p-3 p-xl-0">
                            <form class="rounded-3 shadow">
                                <!-- Hotel type START -->
                                <div class="card card-body rounded-0 rounded-top p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Dormitroy Type</h6>
                                    <!-- Hotel Type group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="hotelType1">
                                            <label class="form-check-label" for="hotelType1">All</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="hotelType2">
                                            <label class="form-check-label" for="hotelType2">{{ App\Enums\DormType::ON_CAMPUS->value }}</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="hotelType3">
                                            <label class="form-check-label" for="hotelType3">{{ App\Enums\DormType::OFF_CAMPUS->value }}</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hotel type END -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Price range START -->
                                <div class="card card-body rounded-0 p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Price range</h6>
                                    <!-- Price range group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="priceRange1">
                                            <label class="form-check-label" for="priceRange1">Up to $500</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="priceRange2">
                                            <label class="form-check-label" for="priceRange2">$500 - $1000</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="priceRange3">
                                            <label class="form-check-label" for="priceRange3">$1000 - $1500</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="priceRange4">
                                            <label class="form-check-label" for="priceRange4">$1500 - $2000</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="priceRange5">
                                            <label class="form-check-label" for="priceRange5">$2000+</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price range END -->

                                <hr class="my-0"> <!-- Divider -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Customer Rating START -->
                                <div class="card card-body rounded-0 p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Student Rating</h6>
                                    <!-- Customer Rating group -->
                                    <ul class="list-inline mb-0 g-3">
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-c1">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c1">3+</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-c2">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c2">3.5+</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-c3">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c3">4+</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-c4">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-c4">4.5+</label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Customer Rating END -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Rating Star START -->
                                <div class="card card-body rounded-0 p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Rating Star</h6>
                                    <!-- Rating Star group -->
                                    <ul class="list-inline mb-0 g-3">
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-6">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-6">1<i class="bi bi-star-fill"></i></label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-7">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-7">2<i class="bi bi-star-fill"></i></label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-8">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-8">3<i class="bi bi-star-fill"></i></label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-15">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-15">4<i class="bi bi-star-fill"></i></label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-16">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check" for="btn-check-16">5<i class="bi bi-star-fill"></i></label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Rating Star END -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Amenities START -->
                                <div class="card card-body rounded-0 rounded-bottom p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Amenities</h6>
                                    <!-- Amenities group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="amenitiesType1">
                                            <label class="form-check-label" for="amenitiesType1">All</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="amenitiesType2">
                                            <label class="form-check-label" for="amenitiesType2">Air Conditioning</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="amenitiesType3">
                                            <label class="form-check-label" for="amenitiesType3">Bar</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="amenitiesType4">
                                            <label class="form-check-label" for="amenitiesType4">Bonfire</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="amenitiesType5">
                                            <label class="form-check-label" for="amenitiesType5">Business Services</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="amenitiesType6">
                                            <label class="form-check-label" for="amenitiesType6">Caretaker</label>
                                        </div>

                                        <!-- Collapse body -->
                                        <div class="multi-collapse collapse" id="amenitiesCollapes">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="amenitiesType7">
                                                <label class="form-check-label" for="amenitiesType7">Dining</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="amenitiesType8">
                                                <label class="form-check-label" for="amenitiesType8">Free Internet</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="amenitiesType9">
                                                <label class="form-check-label" for="amenitiesType9">Hair nets</label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="amenitiesType10">
                                                <label class="form-check-label" for="amenitiesType10">Masks</label>
                                            </div>
                                        </div>
                                        <!-- Collapse button -->
                                        <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center collapsed" data-bs-toggle="collapse" href="#amenitiesCollapes" role="button" aria-expanded="false" aria-controls="amenitiesCollapes">
                                            See <span class="see-more ms-1">more</span><span class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Amenities END -->
                            </form><!-- Form End -->
                        </div>
                        <!-- Buttons -->
                        <div class="d-flex justify-content-between p-2 p-xl-0 mt-xl-4">
                            <button class="btn btn-link p-0 mb-0">Clear all</button>
                            <button class="btn btn-primary mb-0">Filter Result</button>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </aside>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-8 col-xxl-9">
                    <div class="vstack gap-4">

                        <!-- Card item START -->
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Card img -->
                                <div class="col-md-5">
                                    <img src="assets/images/category/hotel/4by3/10.jpg" class="card-img rounded-2" alt="Card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-7">
                                    <div class="card-body py-md-2 d-flex flex-column h-100">

                                        <!-- Rating and buttons -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                            </ul>

                                            <ul class="list-inline mb-0 z-index-2">
                                                <!-- Heart icon -->
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-round btn-light"><i class="fa-solid fa-fw fa-heart"></i></a>
                                                </li>
                                                <!-- Share icon -->
                                                <li class="list-inline-item dropdown">
                                                    <!-- Share button -->
                                                    <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa-solid fa-fw fa-share-alt"></i>
                                                    </a>
                                                    <!-- dropdown button -->
                                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Title -->
                                        <h5 class="card-title mb-1"><a href="hotel-detail.html">Pride moon Village Resort & Spa</a></h5>
                                        <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>
                                        <!-- Amenities -->
                                        <ul class="nav nav-divider mt-3">
                                            <li class="nav-item">Air Conditioning</li>
                                            <li class="nav-item">Wifi</li>
                                            <li class="nav-item">Kitchen</li>
                                            <li class="nav-item">Pool</li>
                                        </ul>

                                        <!-- List -->
                                        <ul class="list-group list-group-borderless small mb-0 mt-2">
                                            <li class="list-group-item d-flex text-danger p-0">
                                                <i class="bi bi-patch-check-fill me-2"></i>Non Refundable
                                            </li>
                                        </ul>

                                        <!-- Price and Button -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                            <!-- Button -->
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold mb-0 me-1">$980</h5>
                                                <span class="mb-0 me-2">/day</span>
                                            </div>
                                            <!-- Price -->
                                            <div class="mt-3 mt-sm-0">
                                                <a href="hotel-detail.html" class="btn btn-sm btn-dark mb-0 w-100">Select Room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Card img -->
                                <div class="col-md-5">
                                    <img src="assets/images/category/hotel/4by3/11.jpg" class="card-img rounded-2" alt="Card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-7">
                                    <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

                                        <!-- Rating and buttons -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                            </ul>

                                            <ul class="list-inline mb-0 z-index-2">
                                                <!-- Heart icon -->
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-round btn-light"><i class="fa-solid fa-fw fa-heart"></i></a>
                                                </li>
                                                <!-- Share icon -->
                                                <li class="list-inline-item dropdown">
                                                    <!-- Share button -->
                                                    <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa-solid fa-fw fa-share-alt"></i>
                                                    </a>
                                                    <!-- dropdown button -->
                                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare3">
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Title -->
                                        <h5 class="card-title mb-1"><a href="hotel-detail.html">Royal Beach Resort</a></h5>
                                        <small><i class="bi bi-geo-alt me-2"></i>Manhattan street, London - 24578</small>
                                        <!-- Amenities -->
                                        <ul class="nav nav-divider mt-3">
                                            <li class="nav-item">Air Conditioning</li>
                                            <li class="nav-item">Wifi</li>
                                            <li class="nav-item">Kitchen</li>
                                            <li class="nav-item">Pool</li>
                                            <li class="nav-item"><a href="#" class="mb-0 text-primary">More+</a></li>
                                        </ul>

                                        <!-- List -->
                                        <ul class="list-group list-group-borderless small mb-0 mt-2">
                                            <li class="list-group-item d-flex text-success p-0">
                                                <i class="bi bi-patch-check-fill me-2"></i>Free Cancellation till 7 Jan 2022
                                            </li>
                                        </ul>

                                        <!-- Price and Button -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                            <!-- Button -->
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold mb-0 me-1">$540</h5>
                                                <span class="mb-0 me-2">/day</span>
                                            </div>
                                            <!-- Price -->
                                            <div class="mt-3 mt-sm-0">
                                                <a href="hotel-detail.html" class="btn btn-sm btn-dark mb-0 w-100">Select Room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="card shadow p-2">
                            <div class="row g-0">
                                <!-- Card img -->
                                <div class="col-md-5">
                                    <img src="assets/images/category/hotel/4by3/10.jpg" class="card-img rounded-2" alt="Card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-7">
                                    <div class="card-body py-md-2 d-flex flex-column h-100 position-relative">

                                        <!-- Rating and buttons -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                            </ul>

                                            <ul class="list-inline mb-0 z-index-2">
                                                <!-- Heart icon -->
                                                <li class="list-inline-item">
                                                    <a href="#" class="btn btn-sm btn-round btn-light"><i class="fa-solid fa-fw fa-heart"></i></a>
                                                </li>
                                                <!-- Share icon -->
                                                <li class="list-inline-item dropdown">
                                                    <!-- Share button -->
                                                    <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownShare5" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa-solid fa-fw fa-share-alt"></i>
                                                    </a>
                                                    <!-- dropdown button -->
                                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare5">
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Title -->
                                        <h5 class="card-title mb-1"><a href="hotel-detail.html">Beverly Hills Marriott</a></h5>
                                        <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>
                                        <!-- Amenities -->
                                        <ul class="nav nav-divider mt-3">
                                            <li class="nav-item">Air Conditioning</li>
                                            <li class="nav-item">Wifi</li>
                                            <li class="nav-item">Kitchen</li>
                                            <li class="nav-item">Pool</li>
                                        </ul>

                                        <!-- List -->
                                        <ul class="list-group list-group-borderless small mb-0 mt-2">
                                            <li class="list-group-item d-flex text-danger p-0">
                                                <i class="bi bi-patch-check-fill me-2"></i>Non Refundable
                                            </li>
                                        </ul>

                                        <!-- Price and Button -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                            <!-- Button -->
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold mb-0 me-1">$645</h5>
                                                <span class="mb-0 me-2">/day</span>
                                            </div>
                                            <!-- Price -->
                                            <div class="mt-3 mt-sm-0">
                                                <a href="#" class="btn btn-sm btn-dark mb-0 w-100">Select Room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Pagination -->
                        <nav class="d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="bi bi-caret-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i class="bi bi-caret-right"></i></a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <!-- Main content END -->
            </div> <!-- Row END -->
        </div>
    </section>

@endsection
