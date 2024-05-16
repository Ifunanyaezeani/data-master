		<div class="page-content-wrapper p-xxl-4 bg-transparent">

			<div class="row g-4 mb-5">

				<div class="col-md-4 col-xxl-3">
					<div class="card bg-light">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-white btn-round lh-lg mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/p1.svg') }}" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-2">{{ $student->first_name }} {{ $student->last_name }}</h5>
							<ul class="list-inline small mb-0">
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
								<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-xxl-9">
					<!-- Personal info START -->
					<div class="card shadow">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Personal Information</h5>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row">
								<!-- Information item -->
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item mb-3">
											<span>Full Name:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $student->first_name }} {{ $student->last_name }}</span>
										</li>

										<li class="list-group-item mb-3">
											<span>User Name:</span>
											<span class="h6 fw-normal ms-1 mb-0">Not Set</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Mobile Number:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $student->phone_nmber }}</span>
										</li>

									</ul>
								</div>

								<!-- Information item -->
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item mb-3">
											<span>Email ID:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $student->email }}</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Gender:</span>
											<span class="h6 fw-normal ms-1 mb-0">Female</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Joining Date:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $student->created_at->diffForHumans() }}</span>
										</li>
									</ul>
								</div>

								<!-- Information item -->
								<div class="col-12">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span>Description: </span>
											<p class="h6 fw-normal mb-0">...</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Personal info END -->
				</div>
			</div> <!-- Row END -->
             <hr>
			<!-- Hotel list START -->
			<div class="row g-4">
				<!-- Title -->
				<div class="col-12">
					<h4 class="mb-0">Booked Dormitory</h4>
				</div>

				<!-- Dorm item -->
				{{-- <div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-sm-3">
								<img src="assets/images/category/hotel/4by3/10.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-sm-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownAction1">
											<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-1"></i>Report</a></li>
											<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-1"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Pride moon Village Resort & Spa</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

									<!-- Price and Button -->
									<div class="d-flex justify-content-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$1586</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<a href="#" class="btn btn-sm btn-primary px-2 mb-0"><i class="bi bi-eye fa-fw me-1"></i>View</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
			<!-- Hotel list END -->
		</div>
