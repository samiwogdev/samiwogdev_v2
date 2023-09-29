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
