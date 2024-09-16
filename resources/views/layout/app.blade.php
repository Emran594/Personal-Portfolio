<!DOCTYPE html>
<html lang="en">
<head>
	<title>EmranSikder-Portfolio Website</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 5 Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- FontAwesome JS -->
    <script defer src="{{ asset('assets/fontawesome/js/all.js') }}"></script>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tiny-slider/tiny-slider.css') }}">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/theme-1.css') }}">

</head>

<body>
@include('layout.sidebar')

	<div class="main-wrapper">
        @yield('content')

        @include('layout.footer')
	</div>

	<!-- Javascript -->
	<script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<script src="{{ asset('assets/plugins/tiny-slider/min/tiny-slider.js') }}"></script>
	<script src="{{ asset('assets/js/testimonials.js') }}"></script>

	<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
	<script src="{{ asset('assets/js/demo/style-switcher.js') }}"></script>

	<!-- Dark Mode -->
	<script src="{{ asset('assets/plugins/js-cookie.min.js') }}"></script>
	<script src="{{ asset('assets/js/dark-mode.js') }}"></script>

</body>
</html>
