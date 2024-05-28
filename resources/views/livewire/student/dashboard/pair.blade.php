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
                    <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1">Room mate request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3">Room mate</a>
                </li>
            </ul>

            <!-- Tabs content START -->
            <div class="tab-content p-2 p-sm-4" id="nav-tabContent">

                <!-- Tab content item START -->
                <div class="tab-pane fade show active" id="tab-1">
                    @forelse ($pair_requests as $roommatepairing)
                    <!-- Card item START -->
                    <div class="card border mb-4">
                        <!-- Card header -->
                        <div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
                            <!-- Icon and Title -->
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-sm" href="#">
                                    @if ($roommatepairing->user->profile_picture == null)
                                        <img id="uploadfile-1-preview"
                                            class="avatar-img rounded-circle border border-3 border-primary"
                                            src="{{ asset('assets/images/avatar/p1.svg') }}" alt="" />
                                    @else
                                        <img id="uploadfile-1-preview"
                                            class="avatar-img rounded-circle border border-3 border-primary"
                                            src="{{ $roommatepairing->user->profile_picture }}" alt="" />
                                    @endif
                                </span>
                                <!-- Title -->
                                <div class="ms-2">
                                    <h6 class="card-title mb-0">{{ $roommatepairing->user->first_name }} {{ $roommatepairing->user->last_name }}</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">Indecated interest to be your room mate</li>
                                        <li class="nav-item"><strong>Phone:</strong>{{ $roommatepairing->user->phone_number }}</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="mt-2 mt-md-0">
                                <a href="#" class="btn btn-success-soft mb-0">Accept</a>
                                <a href="#" class="btn btn-danger-soft mb-0">Decline</a>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6 col-md-4">
                                    <span>Date of birth</span>
                                    <h6 class="mb-0">{{ $roommatepairing->user->birth_day->format('d F Y') }}</h6>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <span>Nationality</span>
                                    <h6 class="mb-0">{{ $roommatepairing->user->nationality }}</h6>
                                </div>

                                <div class="col-md-4">
                                    <span>Gender</span>
                                    <h6 class="mb-0">{{ $roommatepairing->user->gender }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    @empty

                    <div class="bg-mode shadow p-4 rounded overflow-hidden">
                        <div class="row g-4 align-items-center">
                            <!-- Content -->
                            <div class="col-md-12">
                                <h6>Looks like you have no roommate</h6>
                                <h4 class="mb-2">You're going to see all your roommates request here here</h4>
                                <a href="{{ route('student.forum') }}" class="btn btn-primary-soft mb-0">Request
                                    roommate</a>
                            </div>
                        </div>
                    </div>
                    @endforelse


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
