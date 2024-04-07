 <!-- Logo Nav START -->
 <nav class="navbar navbar-expand-xl fixed-top bg-blur bg-light bg-opacity-50">
     <div class="container">
         <!-- Logo START -->
         <a class="navbar-brand" href="{{ route('index') }}" wire:navigate>
            <span class="navbar-brand-item"><Strong>Data Master</Strong></span>
         </a>
         <!-- Logo END -->

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

         @auth
             <ul class="flex-row nav align-items-center list-unstyled ms-xl-auto">
                 <li class="nav-item dropdown">
                     <div class="bg-primary bg-opacity-25 rounded-pill " id="profileDropdown" role="button"
                         data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                         aria-expanded="false">
                         <span class="avatar avatar-sm" href="#">
                             <img class="avatar-img rounded-circle border border-3 border-primary"
                                 src="{{ asset('assets/images/avatar/p1.svg') }}" alt="avatar">
                         </span>
                         <span class="text-primary">Account</span>&nbsp;&nbsp;&nbsp;
                     </div>


                     <ul class="pt-3 shadow dropdown-menu dropdown-animation dropdown-menu-end"
                         aria-labelledby="profileDropdown">
                         <li class="px-3 mb-3">
                             <div class="d-flex align-items-center">
                                 <div>
                                     <a class="mt-2 h6 mt-sm-0" href="#">{{ Auth::user()->first_name }}
                                         {{ Auth::user()->last_name }}</a>
                                     <p class="m-0 small">{{ Auth::user()->email }}</p>
                                 </div>
                             </div>
                         </li>

                         <!-- Links -->
                         <li>
                             <hr class="dropdown-divider">
                         </li>
                         <li>
                             <a class="dropdown-item" href="{{ route('user.index') }}" wire:navigate>
                                 <i class="bi bi-speedometer2 fa-fw me-2"></i>Dashboard
                             </a>
                         </li>
                         <li><a class="dropdown-item bg-danger-soft-hover" wire:click="logout">
                            <i class="bi bi-power fa-fw me-2"></i>Log out</a>
                        </li>

                     </ul>
                 </li>
                 <!-- Profile dropdown END -->
             </ul>
             <!-- Profile and Notification START -->
         @endauth


     </div>
 </nav>
 <!-- Logo Nav END -->
