		<div class="page-content-wrapper p-xxl-4 bg-transparent">

			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-4 mb-sm-5">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-2 mb-sm-0">All listed Dormitories</h1>
					</div>
                     <hr>
				</div>
			</div>



			<!-- Dorm grid START -->
			<div class="row g-4 mb-5">
                @forelse ($dormitories as $dormitory)
                <!-- dorm item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="{{ $dormitory->main_image }}" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									{{-- <!-- Buttons -->
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
									</div> --}}

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="{{ route('admin.single-dorm', $dormitory->slug) }}" target="_blank">{{ Str::of($dormitory->dorm_name)->limit(32) }}</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>{{ Str::of($dormitory->street_address)->limit(20) }} | {{ $dormitory->regin }}, {{ $dormitory->city }}</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
                                            <h6 class="fw-bold mb-0 me-1">{{ strtolower(str_replace('_', ' ', $dormitory->dorm_type)) }} | </h6>
                                            <span class="mb-0 me-2 badge text-bg-secondary">Status: {{ strtolower($dormitory->status) }}</span>
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
                @empty

                @endforelse

			</div>
			<!-- dorm grid END -->
            {{ $dormitories->links() }}
		</div>
		<!-- Page main content END -->

