<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="{{ asset('front/assets/images/logo-mini.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="/front/assets/css/animate.css">
    <link rel="stylesheet" href="/front/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/front/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/front/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/front/assets/css/flaticon.css">
    <link rel="stylesheet" href="/front/assets/css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    @yield('content')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="/front/assets/js/jquery.min.js"></script>
    <script src="/front/assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/front/assets/js/popper.min.js"></script>
    <script src="/front/assets/js/bootstrap.min.js"></script>
    <script src="/front/assets/js/jquery.easing.1.3.js"></script>
    <script src="/front/assets/js/jquery.waypoints.min.js"></script>
    <script src="/front/assets/js/jquery.stellar.min.js"></script>
    <script src="/front/assets/js/owl.carousel.min.js"></script>
    <script src="/front/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/front/assets/js/jquery.animateNumber.min.js"></script>
    <script src="/front/assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="/front/assets/js/google-map.js"></script>

    <script src="/front/assets/js/main.js"></script>

</body>

</html>
