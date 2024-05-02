<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Dormitory Owner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.snow.css" rel="stylesheet">
</head>

<body class="bg-light">

    <header class="navbar-light header-sticky">
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dorm-owner.dashboard') }}" wire:navigate>
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

                <livewire:pages.dorm-owner-logout>

            </div>
        </nav>
    </header>

    <main>

        <section class="pt-4">
            <div class="container">
                <div class="card rounded-3 border p-3 pb-2">
                    <!-- Avatar and info START -->
                    <div class="d-sm-flex align-items-center">
                        <div class="avatar avatar-xl mb-2 mb-sm-0">
                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/p1.svg') }}"
                                alt="">
                        </div>
                        <h4 class="mb-2 mb-sm-0 ms-sm-3"><span class="fw-light">Hi</span>
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </h4>
                        <a href="{{ route('dorm-owner.add-dorm') }}" class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0">
                            <i class="bi bi-plus-lg fa-fw me-2"></i>Add New Dormitroy
                        </a>
                    </div>

                    <livewire:pages.dorm-owner-menu>
                    <!-- Nav links END -->
                </div>
            </div>
        </section>

        <section class="pt-0">
            {{ $slot }}
        </section>

    </main>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</script>

</body>

</html>
