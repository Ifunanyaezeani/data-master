<div class="container vstack gap-4">
    <!-- Title START -->
    <div class="row">
        <div class="col-12 mt-4">
            <h6 class="mb-0"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Student Forum</h6>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
                <div class="card-body mb-4">
                    <h6 class="card-header-title">Post Something <small><i>(like your search for room mate)</i></small></h6>
                    <div class="d-flex mt-3">
                        <textarea class="form-control mb-0" placeholder="e.g Hi, I'm {{ Auth()->user()->first_name }}" rows="2"
                            spellcheck="false"></textarea>
                        <button class="btn btn-sm btn-primary-soft ms-2 px-4 mb-0 flex-shrink-0"><i
                                class="fas fa-paper-plane fs-5"></i></button>
                    </div>
                </div>
                <hr>
        </div>

        <div class="col-12">
        <div class="bg-mode shadow p-4 rounded overflow-hidden">
                <div class="row g-4 align-items-center">
                    <!-- Content -->
                    <div class="col-md-9">
                        <h6>No data yet 😏</h6>
                        <p class="lead mb-2">you're going to see all post form every students here</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
