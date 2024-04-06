<div class="col-lg-4 col-xl-3">
    <!-- Responsive offcanvas body START -->
    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar">
        <!-- Offcanvas header -->
        <div class="pb-2 offcanvas-header justify-content-end">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
        </div>

        <!-- Offcanvas body -->
        <div class="p-3 offcanvas-body p-lg-0">
            <div class="card bg-light w-100">

                <!-- Edit profile button -->
                <div class="top-0 p-3 position-absolute end-0">
                    <a href="#" class="text-primary-hover" data-bs-toggle="tooltip"
                        data-bs-title="Edit profile">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </div>

                <!-- Card body START -->
                <div class="p-3 card-body">
                    <!-- Avatar and content -->
                    <div class="mb-3 text-center">
                        <!-- Avatar -->
                        <div class="mb-2 avatar avatar-xl">
                            <img class="border border-white avatar-img rounded-circle"
                                src="{{ asset('assets/images/avatar/p1.svg') }}" alt="">
                        </div>
                        <h6 class="mb-0"><strong>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong></h6>
                        <a href="#"
                            class="text-reset text-primary-hover small">{{ Auth::user()->email }}</a>
                        <hr>
                    </div>

                    <!-- Sidebar menu item START -->
                    <ul class="nav nav-pills-primary-soft flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ route('user.index') == request()->url() ? 'active' : ''}}" href="{{route('user.index')}}" wire:navigate><i
                                    class="bi bi-speedometer2 fa-fw me-2"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ route('user.apartment') == request()->url() ? 'active' : ''}}" href="{{route('user.apartment')}}" wire:navigate><i
                                    class="bi bi-badge-ad fa-fw me-2"></i>Apartments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ route('user.review') == request()->url() ? 'active' : ''}}" href="{{route('user.review')}}" wire:navigate><i
                                    class="bi bi-hdd-stack fa-fw me-2"></i>Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ route('user.setting') == request()->url() ? 'active' : ''}}" href="{{route('user.setting')}}" wire:navigate><i
                                    class="bi bi-gear fa-fw me-2"></i>Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-danger-soft-hover" href="#" wire:click.prevent="logout">
                                <i class="bi bi-power fa-fw me-2"></i>
                                Log out
                            </a>
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
