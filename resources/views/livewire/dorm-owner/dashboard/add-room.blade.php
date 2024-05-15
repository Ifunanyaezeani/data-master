<div class="container vstack gap-4">
    <!-- Title START -->
    <div class="row">
        <div class="col-12">
            <h3 class="fs-4 mb-0"><i class="bi bi-house fa-fw me-1"></i>Add Room to <i>({{ $dorm->dorm_name }})</i></h3>
        </div>
    </div>

    {{-- <div class="card border p-2">
        <div class="row g-4">
            <!-- Card img -->
            <div class="col-md-3 col-lg-2">
                <img src="{{ $dorm->main_image }}" class="card-img rounded-2" alt="Card image">
            </div>

            <!-- Card body -->
            <div class="col-md-9 col-lg-10">
                <div class="card-body position-relative d-flex flex-column p-0 h-100">

                    <!-- Title -->
                    <h5 class="card-title mb-0 me-5"><a href="#">{{ $dorm->dorm_name }}</a></h5>
                    <small>
                        <i class="bi bi-geo-alt me-2"></i>
                        {{ Str::of($dorm->street_address)->limit(20) }} | {{ $dorm->regin }}, {{ $dorm->price }}
                    </small>
                </div>
            </div>
        </div>
    </div> --}}

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
                                <input type="text" class="form-control @error('roomName') is-invalid @enderror" placeholder="e.g room 23" wire:model='roomName'>
                                 @error('roomName') <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span> @enderror
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
                                 @error('roomType') <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span> @enderror
                            </div>
                        </div>

                        <div class="row mt-4">
                            <!-- room capacity -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Capacity</label>
                                <input type="number" wire:model='capacity' class="form-control @error('capacity') is-invalid @enderror" placeholder="e.g 2">
                                @error('capacity') <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span> @enderror
                            </div>
                            <!-- room price -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">price</label>
                                <input type="number" wire:model='price' class="form-control @error('price') is-invalid @enderror" placeholder="e.g 5000" required>
                                @error('price') <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span> @enderror
                            </div>
                        </div>

                        <!-- room picture -->
                        <div class="mb-3 mt-4">
                            <label class="form-label">Room Pictures</label>
                            <div class="d-flex align-items-center">
                                {{-- @if ($dormPicture)
                                    <label class="position-relative me-4" for="uploadfile-1" title="dorm image">
                                        <span class="avatar avatar-xxxl">
                                            <img id="uploadfile-1-preview"
                                                class="avatar-img rounded border border-white border-3 shadow"
                                                src="{{ $dormPicture->temporaryUrl() }}" alt="">
                                        </span>
                                    </label>
                                @endif --}}

                                <!-- Upload button -->
                                <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Upload Picture</label>
                                <input id="uploadfile-1" class="form-control d-none @error('dormPicture') is-invalid @enderror" wire:model='dormPicture'
                                    type="file">
                                    @error('dormPicture') <br><span class="invalid-feedback"><small><i>{{ $message }}</i></small></span> @enderror
                            </div>
                        </div>

                        <!-- Save button -->
                        <div class="d-flex justify-content-end mt-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mb-0 mt-2" wire:loading.attr="disabled">
                                    <span wire:loading.remove>Save</span>
                                    <span wire:loading wire:target="save" class="text-center">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        <span class="visually-hidden">Loading...</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
