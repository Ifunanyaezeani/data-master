
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Master</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Data Master">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="bg-light">


<main>

    <header class="navbar-light fixed-top">
        <nav class="navbar navbar-expand-xl bg-light">
            <div class="container">
                <ul class="flex-row nav align-items-center list-unstyled ms-xl-auto mt-4">
                    <li class="nav-item">
                        <a href="{{ route('index') }}">
                            <div class="bg-dark bg-opacity-25 rounded-pill">
                                <div class="avatar align-middle">
                                    <div class="avatar-img rounded-circle text-bg-dark">
                                        <span class="position-absolute top-50 start-50 translate-middle fw-bold">
                                            <i class="bi bi-arrow-left"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="text-dark">Back to home</span>&nbsp;&nbsp;&nbsp;
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="d-flex align-items-center" style="min-height: 100vh">
        <div class="container">
            <div class="row justify-content-center align-items-center m-auto">
                <div class="col-md-5">
                    {{$slot}}
                </div>
            </div>
        </div>
    </section>

</main>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>
