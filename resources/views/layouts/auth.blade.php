
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TenantWaka</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="TenantWaka">

	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("/favicon-16x16.png")}}">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="{{asset("/safari-pinned-tab.svg")}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.cdnfonts.com/css/cabinet-grotesk" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>


@if (session('status') == 'verification-link-sent')
    <div class="alert alert-warning py-2 m-0 bg-primary border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden" role="alert">
        <p class="text-white m-0">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</p>
        <!-- Close button -->
        <button type="button" class="btn-close btn-close-white opacity-9 p-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<main>

<!-- =======================
Main Content START -->
<section class="">
	<div class="container">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-md-5">
				{{$slot}}
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Content END -->

</main>

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- ThemeFunctions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>
