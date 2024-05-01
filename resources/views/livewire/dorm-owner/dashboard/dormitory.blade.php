<div class="container vstack gap-4">
    <!-- Title START -->
    <div class="row">
        <div class="col-12">
            <h1 class="fs-4 mb-0"><i class="bi bi-journals fa-fw me-1"></i>Dormitories</h1>
        </div>
    </div>
    <!-- Title END -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('error_message'))
        <div class="alert alert-danger">
            {{ session('error_message') }}
        </div>
    @endif

    <!-- Counter START -->
    <div class="row g-4">

        <!-- Earning item -->
        <div class="col-md-6 col-xl-4">
            <div class="card card-body border p-4">
                <h6>Total Dormitories
                    <a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus"
                        data-bs-placement="top" data-bs-content="After US royalty withholding tax"
                        data-bs-original-title="" title="">
                        <i class="bi bi-info-circle-fill small"></i>
                    </a>
                </h6>
                <h2 class="text-success">{{ $totalDorm }}</h2>
            </div>
        </div>

        <!-- Booked Rooms item -->
        <div class="col-md-6 col-xl-4">
            <div class="card card-body border p-4 h-100">
                <h6>Total Rooms</h6>
                <h2 class="text-info">8</h2>
            </div>
        </div>

        <!-- Available Rooms item -->
        <div class="col-md-6 col-xl-4">
            <div class="card card-body border p-4 h-100">
                <h6>Available Rooms</h6>
                <h2 class="text-warning">4</h2>
            </div>
        </div>

    </div>
    <!-- Counter END -->

    <!-- Listing table START -->
    <div class="row">
        <div class="col-12">

            <div class="card border">
                <!-- Card header -->
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Current Dormitory List <span
                            class="badge bg-primary bg-opacity-10 text-primary ms-2">{{ $dormitories->count() }} Items</span></h5>
                </div>

                <!-- Card body START -->
                <div class="card-body vstack gap-3">
                    @forelse ($dormitories as $dormitory)
                    <!-- Listing item START -->
                    <div class="card border p-2">
                        <div class="row g-4">
                            <!-- Card img -->
                            <div class="col-md-3 col-lg-2">
                                <img src="{{ asset('/storage/dorm-images/'.$dormitory->main_image) }}" class="card-img rounded-2"
                                    alt="Card image">
                            </div>

                            <!-- Card body -->
                            <div class="col-md-9 col-lg-10">
                                <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                        <!-- Share button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                            id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown button -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                            aria-labelledby="dropdownAction2">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi bi-slash-circle me-1"></i>Disable Dorm
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Title -->
                                    <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">{{ $dormitory->dorm_name }}</a></h5>
                                    <small>
                                        <i class="bi bi-geo-alt me-2"></i>
                                        {{ Str::of($dormitory->street_address)->limit(20) }} | {{ $dormitory->regin }}, {{ $dormitory->city }}
                                    </small>

                                    <!-- Price and Button -->
                                    <div
                                        class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                        <!-- Button -->
                                        <div class="d-flex align-items-center">
                                            <h5 class="fw-bold mb-0 me-1">{{ $dormitory->dorm_type }} | </h5>
                                            <span class="mb-0 me-2 badge text-bg-secondary">Status: {{ $dormitory->status }}</span>
                                        </div>
                                        <!-- Price -->
                                        <div class="hstack gap-2 mt-3 mt-sm-0">
                                            <a href="#" class="btn btn-sm btn-success mb-0">
                                                <i class="bi bi-building-add fa-fw me-1"></i>Add Rooms
                                            </a>
                                            <a href="#" target="_blank" class="btn btn-sm btn-info mb-0">
                                                <i class="bi bi-node-plus fa-fw me-1"></i>Add Ameniries
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Listing item END -->
                    @empty

                    @endforelse
                    {{ $dormitories->links() }}
                </div>
                <!-- Card body END -->
            </div>
        </div>
    </div>
    <!-- Listing table END -->

</div>
