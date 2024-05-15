<div class="container vstack gap-4">
    <!-- Title START -->
    <div class="row">
        <div class="col-12">
            <h3 class="fs-4 mb-0"><i class="bi bi-house fa-fw me-1"></i>Add amenities to <i>({{ $dorm->dorm_name }})</i>
            </h3>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card border">
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Already added amenities</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='save'>
                        <div class="row">
                            <!-- Full name -->
                            <div class="col-md-6 mb-3">
                                <p>No amenities added</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card border">
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Seleted and add amenity</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='save'>
                        <div class="row">
                            <!-- Amenities -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Amenities</label>
                                <select wire:model='amenityId'
                                    class="form-control @error('amenityId') is-invalid @enderror">
                                    <option value="">-- select amenities --</option>
                                    @foreach (App\Enums\RoomType::cases() as $case)
                                        <option value="{{ $case->name }}">{{ Str::ucfirst($case->value) }}</option>
                                    @endforeach
                                </select>
                                @error('amenityId')
                                    <span
                                        class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span>
                                @enderror
                            </div>
                        </div>

                        <!-- Save button -->
                        <div class="d-flex justify-content-end mt-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mb-0 mt-2" wire:loading.attr="disabled">
                                    <span wire:loading.remove>Save</span>
                                    <span wire:loading wire:target="save" class="text-center">
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
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
