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
                <li class="nav-item"><a href="#" class="nav-link  {{ Request::is('/') ? 'active' : '' }}" wire:navigate>
                        <i class="bi bi-house-door-fill fa-fw me-2"></i>
                        Home
                    </a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Inventory Section</li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseproducts" role="button"
                        aria-expanded="{{ (Request::is('all-products') || Request::is('add-product') || Request::is('product-logs')) ? 'true' : 'false' }}" aria-controls="collapseproducts">
                        <i class="bi bi-tags-fill fa-fw me-2"></i> Products
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column
                    {{ (Request::is('all-products') || Request::is('add-product') || Request::is('product-logs')) ? 'show' : '' }}
                    " id="collapseproducts" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link {{ Request::is('all-products') ? 'active' : '' }}" href="#" wire:navigate>All Product</a></li>
                        <li class="nav-item"> <a class="nav-link {{ Request::is('add-product') ? 'active' : '' }}" href="#" wire:navigate>Add Products</a></li>
                        <li class="nav-item"> <a class="nav-link {{ Request::is('product-logs') ? 'active' : '' }}" href="#" wire:navigate>Product Logs</a></li>
                    </ul>
                </li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsecollections" role="button"
                        aria-expanded="false" aria-controls="collapsecollections">
                        <i class="bi bi-collection-fill fa-fw me-2"></i> Collections
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsecollections" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="#">Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Brands</a></li>
                    </ul>
                </li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsesalse" role="button"
                        aria-expanded="false" aria-controls="collapsesalse">
                        {{-- <i class="bi bi-file-earmark-bar-graph-fill"></i> --}}
                        <i class="bi bi-bar-chart-line-fill fa-fw me-2"></i> Salse
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsesalse" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="#">Salse Reports</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Analyse Salse</a></li>
                    </ul>
                </li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Finance Section</li>
                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsetransactions" role="button"
                        aria-expanded="false" aria-controls="collapsetransactions">
                        <i class="bi bi-credit-card-2-front-fill fa-fw me-2"></i> Transactions
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsetransactions" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="#">Todays Records</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">All Records</a></li>
                    </ul>
                </li>


                <!-- Title -->
                <li class="nav-item ms-2 my-2">Account Section</li>

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-person-fill-gear fa-fw me-2"></i>
                        Admins</a></li>

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-person-lines-fill fa-fw me-2"></i>
                        Managers</a></li>

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-people-fill fa-fw me-2"></i>
                        Cashiers</a></li>

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-person-hearts fa-fw me-2"></i>
                        Customers</a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Extra Section</li>
                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-gear-fill fa-fw me-2"></i> System
                        setting</a></li>

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-file-text-fill fa-fw me-2"></i>
                        Documentation</a></li>

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#"><i class="bi bi-bar-chart-steps fa-fw me-2"></i> Changelog</a>
                </li>
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3 navbar-nav nav-item">
                <a class="h6 fw-light mb-0 nav-link cursor-pointer" wire:click="logout" aria-label="Sign out">
                    <i class="bi bi-door-open-fill fa-fw me-2 cursor-pointer"></i> Log out
                </a>
                <a class="h6 mb-0 text-body" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                    aria-label="Settings">
                    <i class="bi bi-gear-fill"></i>
                </a>
            </div>
            <!-- Sidebar footer END -->

        </div>
    </div>
</nav>

