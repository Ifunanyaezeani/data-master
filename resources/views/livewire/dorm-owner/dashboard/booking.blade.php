<div class="container vstack gap-4">
    <!-- Title START -->
    <div class="row">
        <div class="col-12">
            <h1 class="fs-4 mb-0"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Booked Dormitories</h1>
        </div>
    </div>
    <!-- Title END -->


    <!-- Booking table START -->
    <div class="row">
        <div class="col-12">
            <div class="card border">
                <!-- Card header START -->
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Booked rooms<span
                            class="badge bg-primary bg-opacity-10 text-primary ms-2">0</span></h5>
                </div>
                <!-- Card header END -->

                <!-- Card body START -->
                <div class="card-body">
                    <!-- Search and select START -->
                    <div class="row g-3 align-items-center justify-content-between mb-3">
                        <!-- Search -->
                        <div class="col-md-8">
                            <form class="rounded position-relative">
                                <input class="form-control pe-5" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y"
                                    type="submit"><i class="fas fa-search fs-6"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Search and select END -->

                    <!-- dorm room list START -->
                    <div class="table-responsive border-0">
                        <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                            <!-- Table head -->
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">#</th>
                                    <th scope="col" class="border-0">Name</th>
                                    <th scope="col" class="border-0">Type</th>
                                    <th scope="col" class="border-0">Date</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0">Payment</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <!-- Table body START -->
                            <tbody class="border-top-0">
                                <!-- Table item -->
                                {{-- <tr>
                                    <td>
                                        <h6 class="mb-0">01</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><a href="#">Inndorm</a></h6>
                                    </td>
                                    <td> single room </td>
                                    <td>
                                        <h6 class="mb-0 fw-light">Nov 22 - 25</h6>
                                    </td>
                                    <td>
                                        <div class="badge text-bg-success">Booked</div>
                                    </td>
                                    <td>
                                        <div class="badge bg-success bg-opacity-10 text-success">Full payment</div>
                                    </td>
                                    <td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
                                </tr> --}}
                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Hotel room list END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
    </div>
    <!-- Booking table END -->

</div>
