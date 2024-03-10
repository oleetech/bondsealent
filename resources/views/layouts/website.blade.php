<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Our goal is to provide re-engineered quality sealants which would keep our BOND stronger then ever!"/>
	<meta name="keywords" content="sealant, bond sealant, silicone, silicone sealant, bondsealent, Weather Silicone Sealant, Structural Silicone Sealant, Neutral Silicone Sealant, 6700 BOND Weatherproof sealants, 7700 Structural Sealant, OLV7000 Silicone Weatherproofing Building Sealant"/>
	<meta name="author" content="BOND SEALANT">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Title of Site -->
	<title>BOND SEALANT | A Product of USA</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Swiper Bundle CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')

</head>

<body>
	<!-- Preloader start -->
	{{--  <x-preloader/>  --}}
	<!-- Preloader end -->

	<!-- Header Area Start -->
	<x-navbar/>
	<!-- Header Area End -->

    @yield('page-content')


	<!-- Footer Area Start -->
	<x-footer/>
	<!-- Footer Area End -->

	<!-- Copyright Area Start -->
	<x-copyright/>
	<!-- Copyright Area End -->


	<!-- Scroll Btn Start -->
    <x-scroll-btn/>
	<!-- Scroll Btn End -->


	<!-- Main JS -->
	<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Counter Up JS -->
	<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Swiper Bundle JS -->
	<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<!-- Mean Menu JS -->
	<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- Isotope JS -->
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<!-- Custom JS -->
	<script src="{{ asset('assets/js/custom.js') }}"></script>


    @stack('scripts')


</body>
</html>
