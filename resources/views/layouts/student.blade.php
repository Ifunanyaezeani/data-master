<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-light">

    <header class="navbar-light header-sticky">
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <span class="navbar-brand-item"><Strong>Data Master</Strong></span>
                </a>

                <button class="navbar-toggler ms-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#dashboardMenu" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <livewire:pages.student-logout>

            </div>
        </nav>
    </header>

    <main>

        <section class="pt-3">
            <div class="container">
                <div class="row">

                    <!-- Sidebar START -->
                    <livewire:pages.student-menu>
                    <!-- Sidebar END -->

                    <div class="col-lg-8 col-xl-9">

                        {{ $slot }}

                    </div>

                </div>
            </div>
        </section>

    </main>

    <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>
