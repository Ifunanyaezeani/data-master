<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Data Master</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Data Master">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <main>

        <section class="">
            <div class="container">
                <div class="row justify-content-center align-items-center m-auto">
                    <div class="col-md-12 mb-4">
                        <div class="shadow p-5">
                            <h1 class="mb-2 h3 text-center">Welcome back</h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body bg-success bg-opacity-10 border border-success border-opacity-25 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0">Student</h5>
                                    <a href="{{ route('student.login') }}">Proceed</a>
                                </div>
                                <div><i class="fa-solid fa-hotel fa-fw"></i></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-body bg-info bg-opacity-10 border border-info border-opacity-25 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0">Dorm Owner</h5>
                                    <a href="{{ route('dorm-owner.login') }}">Proceed</a>
                                </div>
                                <div><i class="fa-solid fa-hotel fa-fw"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body bg-primary bg-opacity-10  border border-primary border-opacity-25 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0">Administrator</h5>
                                    <a href="{{ route('admin.login') }}">Proceed</a>
                                </div>
                                <div><i class="fa-solid fa-hotel fa-fw"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>

