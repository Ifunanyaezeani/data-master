<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data master</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="Data master">

	<!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-light">

	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<!-- Sidebar START -->
		<livewire:admin.side-menu>
		<!-- Sidebar END -->

		<!-- Page content START -->
		<div class="page-content">

			<!-- Top bar START -->
			<livewire:admin.top-navbar>
			<!-- Top bar END -->

			<!-- Page main content START -->
			 {{ $slot }}
			<!-- Page main content END -->
		</div>
		<!-- Page content END -->

	</main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
       <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
    <!-- ThemeFunctions -->
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>
</html>
