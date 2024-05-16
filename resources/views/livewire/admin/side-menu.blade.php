<nav class="navbar sidebar navbar-expand-xl navbar-light">
    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="" wire:navigate>
             <span class="navbar-brand-item"><Strong>Data Master</Strong></span>
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">
                <!-- Menu item -->
                <li class="nav-item"><a href="{{ route('admin') }}" class="nav-link  {{ Request::is('/') ? 'active' : '' }}" wire:navigate>
                        Dashboard
                    </a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Account Section</li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.students') }}" role="button"  wire:navigate>
                        Students
                    </a>
                </li>

                 <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dorm-owners') }}" role="button"  wire:navigate>
                         Dorm Owners
                    </a>
                </li>

                 <!-- Title -->
                <li class="nav-item ms-2 my-2">Service Section</li>

                  <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dormitories') }}" wire:navigate role="button">
                         Dormitories
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dormitories') }}" role="button">
                         Bookings
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dormitories') }}" role="button">
                         Student Pair
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dormitories') }}" role="button">
                         Reviews
                    </a>
                </li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Extra Section</li>
                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.setting') }}" wire:navigate>
                        System setting
                    </a>
                </li>
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3 navbar-nav nav-item">
                <a class="h6 fw-light mb-0 nav-link cursor-pointer" wire:click="logout" aria-label="Sign out">
                    <i class="bi bi-door-open-fill fa-fw me-2 cursor-pointer"></i> Log out
                </a>
            </div>
            <!-- Sidebar footer END -->

        </div>
    </div>
</nav>

