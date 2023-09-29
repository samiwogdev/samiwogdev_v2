<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>mCard - Material vCard/CV/Resume HTML Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Load Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/basic.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicons/favicon.ico") }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125314689-11"></script>

</head>
<body>
        <!-- Page -->
	<div class="page" id="home-section">

		<!-- Preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Started Background -->
		<div class="started-bg">
			<div class="slide" style="background-image: url({{ asset('assets/images/bg-img.png') }});"></div>
		</div>

		<!-- Header -->
		<header>
			<div class="top-menu">
				<ul>
					<li class="active">
						<a class="btn_animated" href="/#home-section"><span class="circle">Home</span></a>
					</li>
					<li>
						<a class="btn_animated" href="/#about-section"><span class="circle">About</span></a>
					</li>
					<li>
						<a class="btn_animated" href="/#skills-section"><span class="circle">Skills</span></a>
					</li>
					<li>
						<a class="btn_animated" href="/#experience-section"><span class="circle">Experience</span></a>
					</li>
					<li>
						<a class="btn_animated" href="/#education-section"><span class="circle">Education</span></a>
					</li>
					<li>
						<a class="btn_animated" href="/#contact-section"><span class="circle">Contact Me</span></a>
					</li>
				</ul>
				<a href="/" class="menu-btn"><span></span></a>
			</div>
		</header>
    @yield('content')
    <!-- jQuery Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/masonry-filter.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <!-- Google map api -->
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Main Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
