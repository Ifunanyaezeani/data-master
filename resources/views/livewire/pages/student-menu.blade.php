<div class="col-lg-4 col-xl-3">
    <!-- Responsive offcanvas body START -->
    <div class="offcanvas-lg offcanvas-end bg-light" tabindex="-1" id="dashboardMenu">
        <!-- Offcanvas header -->
        <div class="offcanvas-header justify-content-end pb-2">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#dashboardMenu"
                aria-label="Close"></button>
        </div>

        <!-- Offcanvas body -->
        <div class="offcanvas-body p-3 p-lg-0">
            <div class="card bg-light w-100">

                <!-- Card body START -->
                <div class="card-body p-3">
                    <!-- Sidebar menu item START -->
                    <ul class="nav nav-pills-primary-soft flex-column">
                        <li class="nav-item"> <a class="nav-link {{ $this->active_link(route('student.dashboard')) }}"
                                href="{{ route('student.dashboard') }}" >
                                <i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a>
                        </li>

                        <li class="nav-item"> <a class="nav-link {{ $this->active_link(route('student.dormitory')) }}"
                                href="{{ route('student.dormitory') }}" >
                                <i class="bi bi-journals fa-fw me-1"></i>Dormitory</a>
                        </li>

                        <li class="nav-item"> <a class="nav-link {{ $this->active_link(route('student.pair')) }}"
                                href="{{ route('student.pair') }}" >
                                <i class="bi bi-bookmark-heart fa-fw me-1"></i>Roomies</a>
                        </li>

                        <li class="nav-item"> <a class="nav-link {{ $this->active_link(route('student.review')) }}"
                                href="{{ route('student.review') }}" >
                                <i class="bi bi-star fa-fw me-1"></i>Reviews</a>
                        </li>

                        <li> <a class="nav-link {{ $this->active_link(route('student.setting')) }}"
                                href="{{ route('student.setting') }}" >
                                <i class="bi bi-gear fa-fw me-1"></i>Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger bg-danger-soft-hover" href="#"><i
                                    class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                        </li>
                    </ul>
                    <!-- Sidebar menu item END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
    </div>
    <!-- Responsive offcanvas body END -->
</div>
