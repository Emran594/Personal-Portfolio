<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>EmranSikder-Portfolio Website </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 5 Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/plugins/tiny-slider/tiny-slider.css">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head>

<body>
@include('layout.sidebar')


	<div class="main-wrapper">
        @yield('content')


        @include('layout.footer')
	</div>


	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="assets/plugins/tiny-slider/min/tiny-slider.js"></script>
	<script src="assets/js/testimonials.js"></script>

	<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
	<script src="assets/js/demo/style-switcher.js"></script>

	<!-- Dark Mode -->
	<script src="assets/plugins/js-cookie.min.js"></script>
	<script src="assets/js/dark-mode.js"></script>

</body>

</html>

