<div class="container vstack gap-4">
    <!-- Title START -->
    <div class="row">
        <div class="col-12">
            <h1 class="fs-4 mb-0"><i class="bi bi-plus-circle-dotted fa-fw me-1"></i>Add New Dormitory</h1>
        </div>
    </div>
    <!-- Title END -->

    <!-- Tabs Content START -->
    <div class="row g-4">
        <div class="col-12">
            <div class="card border">
                <div class="card-header border-bottom">
                    <h5 class="card-header-title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <!-- Full name -->
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="Jacqueline Miller" placeholder="Name">
                    </div>
                    <!-- Profile picture -->
                    <div class="mb-3">
                        <label class="form-label">Profile picture</label>
                        <!-- Avatar upload START -->
                        <div class="d-flex align-items-center">
                            <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                <!-- Avatar place holder -->
                                <span class="avatar avatar-xl">
                                    <img id="uploadfile-1-preview"
                                        class="avatar-img rounded-circle border border-white border-3 shadow"
                                        src="assets/images/avatar/01.jpg" alt="">
                                </span>
                            </label>
                            <!-- Upload button -->
                            <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Change</label>
                            <input id="uploadfile-1" class="form-control d-none" type="file">
                        </div>
                        <!-- Avatar upload END -->
                    </div>
                    <!-- Email id -->
                    <div class="mb-3">
                        <label class="form-label">Email id</label>
                        <input type="email" class="form-control" value="hello@gmail.com"
                            placeholder="Enter your email id">
                    </div>
                    <!-- Mobile number -->
                    <div class="mb-3">
                        <label class="form-label">Mobile number</label>
                        <input type="text" class="form-control" value="222 555 666"
                            placeholder="Enter your mobile number">
                    </div>
                    <!-- Location -->
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input class="form-control" type="text" value="New Hampshire">
                    </div>
                    <!-- Birthday -->
                    <div>
                        <label class="form-label">Birthday</label>
                        <input type="text" class="form-control flatpickr" value="29 Aug 1994"
                            placeholder="Enter your birth-date" data-date-format="d M Y">
                    </div>
                    <!-- Save button -->
                    <div class="d-flex justify-content-end mt-4">
                        <a href="#" class="btn text-secondary border-0 me-2">Discard</a>
                        <a href="#" class="btn btn-primary">Save change</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Tabs Content END -->

</div>
