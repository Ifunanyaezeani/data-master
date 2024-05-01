<div class="page-content-wrapper p-xxl-4">

			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-4 mb-sm-5">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-3 mb-sm-0">All Registered Students</h1>
					</div>
				</div>
			</div>

			<!-- Search START -->
			<div class="row g-3 align-items-center justify-content-between mb-5">
				<!-- Search -->
				<div class="col-md-8">
					<form class="rounded position-relative">
						<input class="form-control pe-5" type="search" placeholder="Search dormitory owners" aria-label="Search">
						<button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6"></i></button>
					</form>
				</div>
			</div>
			<!-- Search  END -->

			<!-- dorm-owners START -->
			<div class="row g-4">
                @forelse ($students as $student)
                    <!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="{{ asset("assets/images/avatar/09.jpg") }}" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-1">{{ $student->first_name }} {{ $student->last_name }}</h5>
							<small><i class="bi bi-envelope"></i> {{ $student->email }} </small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-center mt-3">
								<span class="mb-0 small badge text-bg-secondary">{{ $student->email_verified_at == null ? "Unverified" :  "Verified"}}<i class="fa-solid fa-star text-warning ms-1"></i></span>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="#" class="btn btn-sm btn-primary-soft mb-0 w-100">Student detail</a>
						</div>
					</div>
				</div>
                @empty

                @endforelse
			</div>
			<!-- dorm-owners list END -->

			<!-- Pagination START -->
			<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4">
				<!-- Content -->
				<p class="mb-sm-0 text-center text-sm-start">Showing {{ $students->count() }} of 10 entries</p>
				<!-- Pagination -->
                {{ $students->links() }}
			</div>
			<!-- Pagination END -->

		</div>

