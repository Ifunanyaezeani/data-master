<div class="container vstack gap-4">
    <!-- Title START -->
    <div class="row">
        <div class="col-12 mt-4">
            <h6 class="mb-0"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Roomies</h6>
        </div>
    </div>
    <!-- Title END -->
    <div class="card border bg-transparent">
        <!-- Card header -->
        <div class="card-header bg-transparent border-bottom">
            <h4 class="card-header-title">My Room Mates</h4>
        </div>

        <!-- Card body START -->
        <div class="card-body p-0">

            <!-- Tabs -->
            <ul class="nav nav-tabs nav-bottom-line nav-responsive nav-justified">
                <li class="nav-item">
                    <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1">Current Roomies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3">Past Roomies</a>
                </li>
            </ul>

            <!-- Tabs content START -->
            <div class="tab-content p-2 p-sm-4" id="nav-tabContent">

                <!-- Tab content item START -->
                <div class="tab-pane fade show active" id="tab-1">
                    {{-- <!-- Card item START -->
                    <div class="card border mb-4">
                        <!-- Card header -->
                        <div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
                            <!-- Icon and Title -->
                            <div class="d-flex align-items-center">
                                <div class="icon-lg bg-light rounded-circle flex-shrink-0"><i
                                        class="fa-solid fa-plane"></i></div>
                                <!-- Title -->
                                <div class="ms-2">
                                    <h6 class="card-title mb-0">France to New York</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">Booking ID: CGDSUAHA12548</li>
                                        <li class="nav-item">Business class</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="mt-2 mt-md-0">
                                <a href="#" class="btn btn-primary-soft mb-0">Manage Booking</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6 col-md-4">
                                    <span>Departure time</span>
                                    <h6 class="mb-0">Tue 05 Aug 12:00 AM</h6>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <span>Arrival time</span>
                                    <h6 class="mb-0">Tue 06 Aug 4:00 PM</h6>
                                </div>

                                <div class="col-md-4">
                                    <span>Booked by</span>
                                    <h6 class="mb-0">Frances Guerrero</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END --> --}}

                    <div class="bg-mode shadow p-4 rounded overflow-hidden">
                        <div class="row g-4 align-items-center">
                            <!-- Content -->
                            <div class="col-md-12">
                                <h6>Looks like you have no roommate</h6>
                                <h4 class="mb-2">You're going to see all your roommates here</h4>
                                <a href="{{ route('student.forum') }}" class="btn btn-primary-soft mb-0">Request roommate</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tabs content item END -->

                <!-- Tab content item START -->
                <div class="tab-pane fade" id="tab-3">
                    <div class="bg-mode shadow p-4 rounded overflow-hidden">
                        <div class="row g-4 align-items-center">
                            <!-- Content -->
                            <div class="col-md-12">
                                <h6>Looks like you have no pass roommate</h6>
                                <h4 class="mb-2">You're going to see all you pass roomate here</h4>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Tabs content item END -->
            </div>

        </div>
        <!-- Card body END -->
    </div>
</div>
