		<div class="page-content-wrapper p-xxl-4">

			<!-- Counter START -->
			<div class="row g-4 mb-4">
				<!-- Counter item -->
				<div class="col-lg-4">
					<div class="card card-body border border-primary bg-primary bg-opacity-10 border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h3 class="mb-0 fw-bold">{{ $totalDorm }}</h3>
								<span class="mb-0 h6 fw-light">Total Dormitory</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-primary text-white mb-0"><i class="fa-solid fa-hotel fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-lg-4">
					<div class="card card-body border border-warning bg-warning bg-opacity-10 border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h3 class="mb-0 fw-bold">{{ $totalBookedDorm }}</h3>
								<span class="mb-0 h6 fw-light">Booked Dorm</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-warning text-white mb-0"><i class="fa-regular fa-calendar-days fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-lg-4">
					<div class="card card-body border border-success bg-success bg-opacity-10 border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h3 class="mb-0 fw-bold">$2486.95</h3>
								<span class="mb-0 h6 fw-light">Earning</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-success text-white mb-0"><i class="fa-solid fa-money-bill-trend-up fa-fw"></i></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Counter END -->

			<div class="row g-4 mb-5">
				<!-- Agent info START -->
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
							<h5 class="mb-2">{{ $dormOwner->first_name }}</h5>
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
				<!-- Agent info END -->

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
											<span class="h6 fw-normal ms-1 mb-0">{{ $dormOwner->first_name }} {{ $dormOwner->last_name }}</span>
										</li>

										<li class="list-group-item mb-3">
											<span>User Name:</span>
											<span class="h6 fw-normal ms-1 mb-0">not set</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Mobile Number:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $dormOwner->phone_number }}</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Agent License:</span>
											<span class="h6 fw-normal ms-1 mb-0">258ED458962</span>
										</li>
									</ul>
								</div>

								<!-- Information item -->
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item mb-3">
											<span>Email ID:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $dormOwner->email }}</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Gender:</span>
											<span class="h6 fw-normal ms-1 mb-0">Male</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Joining Date:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $dormOwner->created_at->diffForHumans() }}</span>
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

			<!-- Hotel list START -->
			<div class="row g-4">
				<!-- Title -->
				<div class="col-12">
					<h4 class="mb-0">Dormitories listed</h4>
				</div>
                @foreach ($dorm as $dormitory)
                                    <!-- dorm item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="{{ asset('storage/dorm-images/'.$dormitory->main_image) }}" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction1">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="{{ route('admin.single-dorm', $dormitory->slug) }}" target="_blank">{{ Str::of($dormitory->dorm_name)->limit(32) }}</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>{{ Str::of($dormitory->street_address)->limit(20) }} | {{ $dormitory->regin }}, {{ $dormitory->city }}</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
                                            <h6 class="fw-bold mb-0 me-1">{{ $dormitory->dorm_type }} | </h6>
                                            <span class="mb-0 me-2 badge text-bg-secondary">Status: {{ $dormitory->status }}</span>
                                        </div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
			</div>
			<!-- Hotel list END -->
		</div>
