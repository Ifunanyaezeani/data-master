@extends('layouts.main')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/flatpickr/css/flatpickr.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
@endsection

@section('contents')

    <section class="py-0 pt-sm-5">
        <div class="container position-relative">
            <!-- Title and button START -->
            <div class="row mb-3">
                <div class="col-12">
                    <!-- Meta -->
                    <div class="d-lg-flex justify-content-lg-between mb-1">
                        <!-- Title -->
                        <div class="mb-2 mb-lg-0">
                            <h1 class="fs-2">{{ $dorm_details->dorm_name }} </h1>
                            <!-- Location -->
                            <p class="fw-bold mb-0">
                                <i class="bi bi-geo-alt me-2"></i>{{ Str::of( $dorm_details->street_address) }} | {{  $dorm_details->regin }}, {{  $dorm_details->city }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title and button END -->
        </div>
    </section>

    <section class="card-grid pt-0">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-12">
                    <a data-glightbox data-gallery="gallery" href="{{ asset('storage/dorm-images/'. $dorm_details->main_image) }}">
                        <div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden" style="background-image:url({{ asset('storage/dorm-images/'. $dorm_details->main_image) }}); background-position: center left; background-size: cover;">
                            <div class="hover-element position-absolute w-100 h-100">
                                <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container" data-sticky-container>

            <div class="row g-4 g-xl-5">
                <!-- Content START -->
                <div class="col-xl-7 order-1">
                    <div class="vstack gap-5">

                        <!-- About hotel START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h3 class="mb-0">About This Hotel</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <h5 class="fw-light mb-4">Main Highlights</h5>

                                <!-- Highlights Icons -->
                                <div class="hstack gap-3 mb-3">
                                    <div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Free wifi">
                                        <i class="fa-solid fa-wifi"></i>
                                    </div>
                                    <div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Swimming Pool">
                                        <i class="fa-solid fa-swimming-pool"></i>
                                    </div>
                                    <div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Central AC">
                                        <i class="fa-solid fa-snowflake"></i>
                                    </div>
                                    <div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Free Service">
                                        <i class="fa-solid fa-concierge-bell"></i>
                                    </div>
                                </div>

                                <p class="mb-3">
                                    {{ $dorm_details->description }}
                                </p>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- About hotel START -->

                        <!-- Amenities START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h3 class="card-title mb-0">Amenities</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <div class="row g-4">
                                    <!-- Activities -->
                                    <div class="col-sm-6">
                                        <h6><i class="fa-solid fa-biking me-2"></i>Activities</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Swimming pool
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Spa
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Kids' play area
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Gym
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-sm-6">
                                        <h6><i class="fa-solid fa-credit-card me-2"></i>Payment Method</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Credit card (Visa, Master card)
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Cash
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Debit Card
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Services -->
                                    <div class="col-sm-6">
                                        <h6><i class="fa-solid fa-concierge-bell me-2"></i>Services</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Dry cleaning
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Room Service
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Special service
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Waiting Area
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Secrete smoking area
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Concierge
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Laundry facilities
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Ironing Service
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Lift
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Safety & Security -->
                                    <div class="col-sm-6">
                                        <h6><i class="bi bi-shield-fill-check me-2"></i>Safety & Security</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-4 mb-sm-5">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Doctor on Call
                                            </li>
                                        </ul>

                                        <h6><i class="fa-solid fa-volume-up me-2"></i>Staff Language</h6>
                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>English
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Spanish
                                            </li>
                                            <li class="list-group-item pb-0">
                                                <i class="fa-solid fa-check-circle text-success me-2"></i>Hindi
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Amenities END -->

                        <!-- Room START -->
                        <div class="card bg-transparent" id="room-options">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <h3 class="mb-2 mb-sm-0">Room Options</h3>

                                    <div class="col-sm-4">
                                        <form class="form-control-bg-light">
                                            <select class="form-select form-select-sm js-choice border-0">
                                                <option value="">Select Option</option>
                                                <option>Recently search</option>
                                                <option>Most popular</option>
                                                <option>Top rated</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <div class="vstack gap-4">

                                    <!-- Room item START -->
                                    <div class="card shadow p-3">
                                        <div class="row g-4">
                                            <!-- Card img -->
                                            <div class="col-md-5 position-relative">

                                                <!-- Overlay item -->
                                                <div class="position-absolute top-0 start-0 z-index-1 mt-3 ms-4">
                                                    <div class="badge text-bg-danger">30% Off</div>
                                                </div>

                                                <!-- Slider START -->
                                                <div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
                                                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
                                                        <!-- Image item -->
                                                        <div><img src="{{ asset('assets/images/category/hotel/4by3/04.jpg') }}" alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="{{ asset('assets/images/category/hotel/4by3/02.jpg') }}" alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="{{ asset('assets/images/category/hotel/4by3/03.jpg') }}" alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="{{ asset('assets/images/category/hotel/4by3/01.jpg') }}" alt="Card image"></div>
                                                    </div>
                                                </div>
                                                <!-- Slider END -->

                                                <!-- Button -->
                                                <a href="#" class="btn btn-link text-decoration-underline p-0 mb-0 mt-1" data-bs-toggle="modal" data-bs-target="#roomDetail"><i class="bi bi-eye-fill me-1"></i>View more details</a>
                                            </div>

                                            <!-- Card body -->
                                            <div class="col-md-7">
                                                <div class="card-body d-flex flex-column h-100 p-0">

                                                    <!-- Title -->
                                                    <h5 class="card-title"><a href="#">Luxury Room with Balcony</a></h5>

                                                    <!-- Amenities -->
                                                    <ul class="nav nav-divider mb-2">
                                                        <li class="nav-item">Air Conditioning</li>
                                                        <li class="nav-item">Wifi</li>
                                                        <li class="nav-item">Kitchen</li>
                                                        <li class="nav-item">
                                                            <a href="#" class="mb-0 text-primary">More+</a>
                                                        </li>
                                                    </ul>

                                                    <p class="text-success mb-0">Free Cancellation till 7 Jan 2022</p>

                                                    <!-- Price and Button -->
                                                    <div class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
                                                        <!-- Button -->
                                                        <div class="d-flex align-items-center">
                                                            <h5 class="fw-bold mb-0 me-1">$750</h5>
                                                            <span class="mb-0 me-2">/day</span>
                                                            <span class="text-decoration-line-through mb-0">$1000</span>
                                                        </div>
                                                        <!-- Price -->
                                                        <div class="mt-3 mt-sm-0">
                                                            <a href="#" class="btn btn-sm btn-primary mb-0">Select Room</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Room item END -->

                                    <!-- Room item START -->
                                    <div class="card shadow p-3">
                                        <div class="row g-4">
                                            <!-- Card img -->
                                            <div class="col-md-5 position-relative">

                                                <!-- Overlay item -->
                                                <div class="position-absolute top-0 start-0 z-index-1 mt-3 ms-4">
                                                    <div class="badge text-bg-danger">15% Off</div>
                                                </div>

                                                <!-- Slider START -->
                                                <div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
                                                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
                                                        <!-- Image item -->
                                                        <div><img src="{{ asset('assets/images/category/hotel/4by3/03.jpg') }}" alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="{{ asset('assets/images/category/hotel/4by3/02.jpg') }}" alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="{{ asset('assets/images/category/hotel/4by3/04.jpg') }}" alt="Card image"></div>

                                                        <!-- Image item -->
                                                        <div><img src="{{ asset('assets/images/category/hotel/4by3/01.jpg') }}" alt="Card image"></div>
                                                    </div>
                                                </div>
                                                <!-- Slider END -->

                                                <!-- Button -->
                                                <a href="#" class="btn btn-link text-decoration-underline p-0 mb-0 mt-1" data-bs-toggle="modal" data-bs-target="#roomDetail"><i class="bi bi-eye-fill me-1"></i>View more details</a>
                                            </div>

                                            <!-- Card body -->
                                            <div class="col-md-7">
                                                <div class="card-body d-flex flex-column p-0 h-100">

                                                    <!-- Title -->
                                                    <h5 class="card-title"><a href="#">Deluxe Pool View with Breakfast</a></h5>

                                                    <!-- Amenities -->
                                                    <ul class="nav nav-divider mb-2">
                                                        <li class="nav-item">Air Conditioning</li>
                                                        <li class="nav-item">Wifi</li>
                                                        <li class="nav-item">Kitchen</li>
                                                        <li class="nav-item">
                                                            <a href="#" class="mb-0 text-primary">More+</a>
                                                        </li>
                                                    </ul>

                                                    <p class="text-danger mb-3">Non Refundable</p>

                                                    <!-- Price and Button -->
                                                    <div class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
                                                        <!-- Button -->
                                                        <div class="d-flex align-items-center">
                                                            <h5 class="fw-bold mb-0 me-1">$750</h5>
                                                            <span class="mb-0 me-2">/day</span>
                                                            <span class="text-decoration-line-through mb-0">$1000</span>
                                                        </div>
                                                        <!-- Price -->
                                                        <div class="mt-3 mt-sm-0">
                                                            <a href="#" class="btn btn-sm btn-primary mb-0">Select Room</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Room item END -->
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Room END -->

                        <!-- Customer Review START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h3 class="card-title mb-0">Customer Review</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <!-- Progress bar and rating START -->
                                <div class="card bg-light p-4 mb-4">
                                    <div class="row g-4 align-items-center">
                                        <!-- Rating info -->
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <!-- Info -->
                                                <h2 class="mb-0">4.5</h2>
                                                <p class="mb-2">Based on 120 Reviews</p>
                                                <!-- Star -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Progress-bar START -->
                                        <div class="col-md-8">
                                            <div class="card-body p-0">
                                                <div class="row gx-3 g-2 align-items-center">
                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">85%</span>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">75%</span>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">60%</span>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">35%</span>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-9 col-sm-10">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="col-3 col-sm-2 text-end">
                                                        <span class="h6 fw-light mb-0">15%</span>
                                                    </div>
                                                </div> <!-- Row END -->
                                            </div>
                                        </div>
                                        <!-- Progress-bar END -->

                                    </div>
                                </div>
                                <!-- Progress bar and rating END -->

                                <!-- Leave review START -->
                                <form class="mb-5">
                                    <!-- Rating -->
                                    <div class="form-control-bg-light mb-3">
                                        <select class="form-select js-choice">
                                            <option selected="">★★★★★ (5/5)</option>
                                            <option>★★★★☆ (4/5)</option>
                                            <option>★★★☆☆ (3/5)</option>
                                            <option>★★☆☆☆ (2/5)</option>
                                            <option>★☆☆☆☆ (1/5)</option>
                                        </select>
                                    </div>
                                    <!-- Message -->
                                    <div class="form-control-bg-light mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your review" rows="3"></textarea>
                                    </div>
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-lg btn-primary mb-0">Post review <i class="bi fa-fw bi-arrow-right ms-2"></i></button>
                                </form>
                                <!-- Leave review END -->

                                <!-- Review item START -->
                                <div class="d-md-flex my-4">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-lg me-3 flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                                    </div>
                                    <!-- Text -->
                                    <div>
                                        <div class="d-flex justify-content-between mt-1 mt-md-0">
                                            <div>
                                                <h6 class="me-3 mb-0">Jacqueline Miller</h6>
                                                <!-- Info -->
                                                <ul class="nav nav-divider small mb-2">
                                                    <li class="nav-item">Stayed 13 Nov 2022</li>
                                                    <li class="nav-item">4 Reviews written</li>
                                                </ul>
                                            </div>
                                            <!-- Review star -->
                                            <div class="icon-md rounded text-bg-warning fs-6">4.5</div>
                                        </div>

                                        <p class="mb-2">Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance. </p>

                                        <!-- Images -->
                                        <div class="row g-4">
                                            <div class="col-4 col-sm-3 col-lg-2">
                                                <img src="assets/images/category/hotel/4by3/07.jpg" class="rounded" alt="">
                                            </div>
                                            <div class="col-4 col-sm-3 col-lg-2">
                                                <img src="assets/images/category/hotel/4by3/08.jpg" class="rounded" alt="">
                                            </div>
                                            <div class="col-4 col-sm-3 col-lg-2">
                                                <img src="assets/images/category/hotel/4by3/05.jpg" class="rounded" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Child review START -->
                                <div class="my-4 ps-2 ps-md-3">
                                    <div class="d-md-flex p-3 bg-light rounded-3">
                                        <img class="avatar avatar-sm rounded-circle me-3" src="assets/images/avatar/02.jpg" alt="avatar">
                                        <div class="mt-2 mt-md-0">
                                            <h6 class="mb-1">Manager</h6>
                                            <p class="mb-0">But discretion frequently sir she instruments unaffected admiration everything. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Child review END -->

                                <!-- Divider -->
                                <hr>
                                <!-- Review item END -->

                                <!-- Review item START -->
                                <div class="d-md-flex my-4">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-lg me-3 flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
                                    </div>
                                    <!-- Text -->
                                    <div>
                                        <div class="d-flex justify-content-between mt-1 mt-md-0">
                                            <div>
                                                <h6 class="me-3 mb-0">Dennis Barrett</h6>
                                                <!-- Info -->
                                                <ul class="nav nav-divider small mb-2">
                                                    <li class="nav-item">Stayed 02 Nov 2022</li>
                                                    <li class="nav-item">2 Reviews written</li>
                                                </ul>
                                            </div>
                                            <!-- Review star -->
                                            <div class="icon-md rounded text-bg-warning fs-6">4.0</div>
                                        </div>

                                        <p class="mb-0">Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Large above be to means. Dashwood does provide stronger is.</p>
                                    </div>
                                </div>

                                <!-- Divider -->
                                <hr>
                                <!-- Review item END -->

                                <!-- Button -->
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary-soft mb-0">Load more</a>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Customer Review END -->

                        <!-- Hotel Policies START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h3 class="mb-0">Dormitory Policies</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <p>{{ $dorm_details->policy }}</p>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Hotel Policies START -->
                    </div>
                </div>
                <!-- Content END -->

                <!-- Right side content START -->
                <aside class="col-xl-5 order-xl-2">
                    <div data-sticky data-margin-top="100" data-sticky-for="1199">
                        <!-- Book now START -->
                        <div class="card card-body border">

                            <!-- Title -->
                            <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                                <div>
                                    <span>Price Start at</span>
                                    <h4 class="card-title mb-0">$3,500</h4>
                                </div>
                                <div>
                                    <h6 class="fw-normal mb-0">1 room per night</h6>
                                    <small>+ $285 taxes & fees</small>
                                </div>
                            </div>

                            <!-- Rating -->
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item me-1 h6 fw-light mb-0"><i class="bi bi-arrow-right me-2"></i>4.5</li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                            </ul>

                            <p class="h6 fw-light mb-4"><i class="bi bi-arrow-right me-2"></i>Free breakfast available</p>

                            <!-- Button -->
                            <div class="d-grid">
                                <a href="#room-options" class="btn btn-lg btn-primary-soft mb-0">View 10 Rooms Options</a>
                            </div>
                        </div>
                        <!-- Book now END -->

                        <!-- Best deal START -->
                        <div class="mt-4 d-none d-xl-block">
                            <h4>Today's Best Deal</h4>

                            <div class="card shadow rounded-3 overflow-hidden">
                                <div class="row g-0 align-items-center">
                                    <!-- Image -->
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <img src="assets/images/offer/04.jpg" class="card-img rounded-0" alt="">
                                    </div>

                                    <!-- Title and content -->
                                    <div class="col-sm-6 col-md-12 col-lg-6">
                                        <div class="card-body p-3">
                                            <h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Travel Plan</a></h6>
                                            <p class="mb-0">Get up to $10,000 for lifetime limits</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Best deal END -->
                    </div>
                </aside>
                <!-- Right side content END -->
            </div> <!-- Row END -->
        </div>
    </section>

@endsection

@section('room-modal')
    <!-- Room modal START -->
<div class="modal fade" id="roomDetail" tabindex="-1" aria-labelledby="roomDetailLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content p-0">

			<!-- Title -->
			<div class="modal-header p-3">
				<h5 class="modal-title mb-0" id="roomDetailLabel">Room detail</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body p-0">

				<!-- Card START -->
				<div class="card bg-transparent p-3">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-dark overflow-hidden rounded-2">
						<div class="tiny-slider-inner rounded-2 overflow-hidden" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
							<!-- Image item -->
							<div> <img src="{{ asset('assets/images/gallery/16.jpg') }}" class="rounded-2" alt="Card image"></div>

							<!-- Image item -->
							<div> <img src="{{ asset('assets/images/gallery/15.jpg') }}" class="rounded-2" alt="Card image"> </div>

							<!-- Image item -->
							<div> <img src="{{ asset('assets/images/gallery/13.jpg') }}" class="rounded-2" alt="Card image"> </div>

							<!-- Image item -->
							<div> <img src="{{ asset('assets/images/gallery/12.jpg') }}" class="rounded-2" alt="Card image"> </div>
						</div>
					</div>
					<!-- Slider END -->

					<!-- Card header -->
					<div class="card-header bg-transparent pb-0">
						<h3 class="card-title mb-0">Deluxe Pool View</h3>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<!-- Content -->
						<p>Club rooms are well furnished with air conditioner, 32 inch LCD television and a mini bar. They have attached bathroom with showerhead and hair dryer and 24 hours supply of hot and cold running water. Complimentary wireless internet access is available. Additional amenities include bottled water, a safe and a desk.</p>

						<div class="row">
							<h5 class="mb-0">Amenities</h5>

							<!-- List -->
							<div class="col-md-6">
								<!-- List -->
								<ul class="list-group list-group-borderless mt-2 mb-0">
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Swimming pool</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Spa</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Kids play area.</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Gym</span>
									</li>
								</ul>
							</div>

							<!-- List -->
							<div class="col-md-6">
								<!-- List -->
								<ul class="list-group list-group-borderless mt-2 mb-0">
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">TV</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Mirror</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">AC</span>
									</li>
									<li class="list-group-item d-flex mb-0">
										<i class="fa-solid fa-check-circle text-success me-2"></i><span class="h6 fw-light mb-0">Slippers</span>
									</li>
								</ul>
							</div>
						</div> <!-- Row END -->
					</div>
					<!-- Card body END -->
				</div>
				<!-- Card END -->
			</div>
		</div>
	</div>
</div>
<!-- Room modal END -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendor/sticky-js/sticky.min.js') }}"></script>
@endsection
