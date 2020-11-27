<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="@yield('meta_description')" name="descriptison">
    <meta content="@yield('meta_keywords')" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/website/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/website/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/website/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/website/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/website/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/website/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/website/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/website/vendor/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/website/css/style.css') }}" rel="stylesheet">

    @yield('page-styles')

</head>

<body>

@include('website.layouts.header')
@include('website.layouts.about')
@include('website.layouts.resume')
@include('website.layouts.services')
@include('website.layouts.portfolio')
@include('website.layouts.contact')

<div class="credits">
    Designed by <a href="https://www.rampesna.com/">Rampesna</a>
</div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/website/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/website/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/website/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/website/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/website/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/website/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/website/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/website/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/website/vendor/venobox/venobox.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/website/js/main.js') }}"></script>

@yield('page-scripts')

</body>

</html>
