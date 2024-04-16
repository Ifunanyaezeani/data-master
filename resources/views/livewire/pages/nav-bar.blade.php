 <!-- Logo Nav START -->
 <nav class="navbar navbar-expand-xl fixed-top bg-blur bg-light bg-opacity-50">
     <div class="container">
         <!-- Logo START -->
         <a class="navbar-brand" href="{{ route('index') }}" wire:navigate>
             <span class="navbar-brand-item"><Strong>Data Master</Strong></span>
         </a>
         <!-- Logo END -->

         {{-- <!-- Main navbar START -->
         <div class="navbar-collapse collapse" id="navbarCollapse">
             <ul class="mx-auto navbar-nav navbar-nav-scroll">
                 <!-- Nav item Home -->
                 <li class="nav-item">
                     <a class="nav-link active" href="#" id="homeMenu">Home</a>
                 </li>

                 <!-- Nav item Listing -->
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">Promotions</a>
                     <ul class="dropdown-menu" aria-labelledby="listingMenu">
                         <!-- Dropdown submenu -->
                         <li class="dropdown-submenu dropend">
                             <a class="dropdown-item dropdown-toggle" href="#"><i
                                     class="bi-whatsapp nav-icon me-1"></i>What'sApp</a>
                             <ul class="dropdown-menu" data-bs-popper="none">
                                 <li> <a class="dropdown-item" href="hotel-grid.html">What'sApp Groups</a></li>
                                 <li> <a class="dropdown-item" href="hotel-list.html">What'sApp TVs</a></li>
                             </ul>
                         </li>

                         <!-- Dropdown submenu -->
                         <li class="dropdown-submenu dropend">
                             <a class="dropdown-item dropdown-toggle" href="#"><i
                                     class="bi-telegram nav-icon me-1"></i>Telegram</a>
                             <ul class="dropdown-menu" data-bs-popper="none">
                                 <li> <a class="dropdown-item" href="flight-list.html">Telegram Groups</a></li>
                                 <li> <a class="dropdown-item" href="flight-detail.html">Telegram Channels</a></li>
                         </li>
                     </ul>
                 </li>
             </ul>
             </li>

             <!-- Nav item Pages -->
             <li class="nav-item">
                 <a class="nav-link" href="#" target="_blank" id="pagesMenu">Store</a>
             </li>

             <!-- Nav item Components -->
             <li class="nav-item"> <a class="nav-link" href="#">About Us</a> </li>
             </ul>
         </div>
         <!-- Main navbar END --> --}}

         @guest
             <ul class="flex-row nav align-items-center list-unstyled ms-xl-auto">
                 <li class="nav-item dropdown">
                     <div class="bg-dark bg-opacity-25 rounded-pill " id="profileDropdown" role="button"
                         data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                         aria-expanded="false">
                         <div class="avatar align-middle">
                             <div class="avatar-img rounded-circle text-bg-dark"><span
                                     class="position-absolute top-50 start-50 translate-middle fw-bold">
                                     <i class="bi bi-people"></i></span></div>
                         </div>
                         <span class="text-dark">Login Now</span>&nbsp;&nbsp;&nbsp;
                     </div>


                     <ul class="pt-3 shadow dropdown-menu dropdown-animation dropdown-menu-end"
                         aria-labelledby="profileDropdown">
                         <li>
                             <a class="dropdown-item" href="{{ route('student.login') }}" wire:navigate>
                                 As Student
                             </a>
                         </li>
                         <li>
                             <hr class="dropdown-divider">
                         </li>
                         <li>
                             <a class="dropdown-item" href="{{ route('dorm-owner.login') }}" wire:navigate>
                                 As Dormitory Owner
                             </a>
                         </li>

                     </ul>
                 </li>
             </ul>
         @endguest

         @auth('web')
             <ul class="flex-row nav align-items-center list-unstyled ms-xl-auto">
                 <li class="nav-item">
                     <a href="{{ Auth::guard()->check('web') ? route('student.dashboard') : route('dorm-owner.dashboard') }}"
                         wire:navigate>
                         <div class="bg-primary bg-opacity-25 rounded-pill " id="profileDropdown" role="button"
                             data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                             aria-expanded="false">
                             <span class="avatar avatar-sm" href="#">
                                 <img class="avatar-img rounded-circle border border-3 border-primary"
                                     src="{{ asset('assets/images/avatar/p1.svg') }}" alt="avatar">
                             </span>
                             <span class="text-primary">Account</span>&nbsp;&nbsp;&nbsp;
                         </div>
                     </a>
                 </li>
             </ul>
         @endauth


     </div>
 </nav>
 <!-- Logo Nav END -->
