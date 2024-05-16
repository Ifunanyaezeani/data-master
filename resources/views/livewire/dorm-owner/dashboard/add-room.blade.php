<div class="container vstack gap-4">
    <!-- Title START -->
    <div class="row">
        <div class="col-12">
            <h3 class="fs-4 mb-0"><i class="bi bi-house fa-fw me-1"></i>Add Room to <i>({{ $dorm->dorm_name }})</i></h3>
        </div>
    </div>


    @if (session()->has('message'))
        <div class="alert alert-success d-flex align-items-center rounded-3 mb-0" role="alert">
            <h4 class="mb-0 alert-heading"><i class="bi bi-check2-circle me-2"></i> </h4>
            <div class="ms-3">
                <h6 class="mb-0 alert-heading">{{ session('message') }}</h6>
            </div>
        </div>
    @endif

    @if (session()->has('error_message'))
        <div class="alert alert-danger d-flex align-items-center rounded-3 mb-0" role="alert">
            <h4 class="mb-0 alert-heading"><i class="bi bi-x-circle me-2"></i> </h4>
            <div class="ms-3">
                <h6 class="mb-0 alert-heading">{{ session('error_message') }}</h6>
            </div>
        </div>
    @endif

        <div class="row g-4">
        <div class="col-md-6">
            <div class="card border">
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Enter Room Details</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='save'>
                        <div class="row">
                            <!-- Full name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Room Name/Number</label>
                                <input
                                    type="text"
                                    class="form-control @error('roomName') is-invalid @enderror"
                                    placeholder="e.g room 23"
                                    wire:model='roomName'
                                />
                                 @error('roomName')
                                    <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span>
                                 @enderror
                            </div>
                            <!-- Dorm type -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">type</label>
                                <select wire:model='roomType' class="form-control @error('roomType') is-invalid @enderror">
                                    <option value="">-- select room type --</option>
                                    @foreach (App\Enums\RoomType::cases() as $case)
                                        <option value="{{ $case->name }}">{{ Str::ucfirst($case->value) }}</option>
                                    @endforeach
                                </select>
                                @error('roomType')
                                    <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-4">
                            <!-- room capacity -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Capacity</label>
                                <input
                                    type="number"
                                    class="form-control @error('capacity') is-invalid @enderror"
                                    placeholder="e.g 2"
                                    wire:model='capacity'
                                />
                                @error('capacity')
                                    <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span>
                                @enderror
                            </div>
                            <!-- room price -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">price</label>
                                <input
                                    type="number"
                                    class="form-control @error('price') is-invalid @enderror"
                                    placeholder="e.g 5000"
                                    wire:model='price'
                                />
                                @error('price')
                                    <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span>
                                @enderror
                            </div>
                        </div>

                        <!-- room picture -->
                        <div class="mb-3 mt-4">
                            <label class="form-label">Room Pictures</label>
                            <div class="align-items-center">
                                @if ($roomPictures)
                                    <label class="position-relative me-4 d-flex" for="uploadfile-1" title="dorm image">
                                        @foreach ($roomPictures as $roomPicture)
                                        <span class="avatar avatar-xxxl">
                                            <img id="uploadfile-1-preview"
                                                class="avatar-img rounded border border-white border-3 shadow"
                                                src="{{ $roomPicture->temporaryUrl() }}" alt=""
                                            />
                                        </span>
                                        @endforeach
                                    </label>
                                @endif

                                <input
                                    id="uploadfile-1"
                                    class="form-control @error('dormPicture') is-invalid @enderror"
                                    wire:model='roomPictures'
                                    type="file"
                                    multiple
                                />
                                @error('roomPictures.*')
                                    <br><span class="invalid-feedback"><small><i>{{ $message }}</i></small></span>
                                @enderror
                                @error('roomPictures')
                                    <br><span class="invalid-feedback"><small><i>{{ $message }}</i></small></span>
                                @enderror
                            </div>
                        </div>

                        <!-- Save button -->
                        <div class="d-flex justify-content-end mt-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mb-0 mt-2" wire:loading.attr="disabled">
                                    <span wire:loading.remove>Save</span>
                                    <span wire:loading wire:target="save" class="text-center">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">

				<div class="card bg-transparent p-0">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3">
						<h4 class="mb-2 mb-sm-0">Rooms</h4>
					</div>
                    @forelse ($dorm->rooms as $room)
					<!-- Card body START -->
					<div class="card-body p-0 pt-3">
						<div class="vstack gap-5">
							<!-- Room item START -->
							<div class="card border bg-transparent p-3">
								<div class="row g-3 g-md-4">
									<!-- Image and content -->
									<div class="col-md-4">
										<!-- Image -->
										<div class="position-relative">
											<img src="{{ $room->room_pictures[0] }}" class="card-img" alt="">
											<!-- Badge -->
											<div class="card-img-overlay">
												<a href="assets/images/gallery/12.jpg" class="badge bg-dark stretched-link" data-glightbox="" data-gallery="gallery">
													5 Photos <i class="bi bi-arrow-right"></i>
												</a>
											</div>
											<!-- Popup Images -->
											<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/11.jpg" class="stretched-link z-index-9"></a>
											<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/15.jpg"></a>
											<a data-glightbox="" data-gallery="gallery" href="assets/images/gallery/16.jpg"></a>
										</div>
									</div>

									<!-- Room detail START -->
									<div class="col-md-8">
										<div class="card-body d-flex flex-column p-0 h-100">
											<!-- Title -->
											<h5 class="card-title">Deluxe Pool View with Breakfast</h5>

											<!-- List -->
											<ul class="nav small nav-divider mb-0">
												<li class="nav-item mb-0">
													<i class="fa-regular fa-square me-1"></i>{{ $room->availability }}
												</li>
												<li class="nav-item mb-0">
													<i class="fa-solid fa-bed me-1"></i>{{ $room->room_type  }} room
												</li>
											</ul>

											<!-- Price and button -->
											<div class="d-flex justify-content-between align-items-center mt-2 mt-md-auto">
												<div class="d-flex text-success">
													<h6 class="h5 mb-0 text-success">${{ $room->price }}</h6>
													<span class="fw-light"> /per year</span>
												</div>
												<a href="#" class="btn btn-sm btn-dark mb-0">delete</a>
											</div>
										</div>
									</div>
									<!-- Room detail START -->
								</div>
							</div>
							<!-- Room item END -->
						</div>
					</div>
                    @empty

                    @endforelse
					<!-- Card body END -->
				</div>

        </div>
    </div>

</div>
