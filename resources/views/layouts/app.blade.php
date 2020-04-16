<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

        {{-- css classic --}}
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Cafe Shop</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="/neos/classic/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="/neos/classic/images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="/neos/classic/css/bootstrap.min.css">
    <link rel="stylesheet" href="/neos/classic/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/neos/classic/css/icofont.css">
    <link rel="stylesheet" href="/neos/classic/css/magnific-popup.css">
    <link rel="stylesheet" href="/neos/classic/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="/neos/classic/css/normalize.css">
    <link rel="stylesheet" href="/neos/classic/style.css">
    <link rel="stylesheet" href="/neos/classic/css/responsive.css">
    <script src="/classic/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">



</head>
<body data-spy="scroll" data-target=".mainmenu-area">
    @include('message')
    @include('header')
    @yield('content')
    @include('footer')

</body>
<script src="{{asset('neos/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('/neos/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('/neos/js/jquery-ui.js')}}"></script>
  <script src="{{asset('/neos/js/popper.min.js')}}"></script>
  <script src="{{asset('/neos/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/neos/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/neos/js/jquery.stellar.min.js')}}"></script>

  <script src="{{asset('/neos/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/neos/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('/neos/js/aos.js')}}"></script>

  <script src="{{asset('/neos/js/main.js')}}"></script>


  {{-- Classic --}}
  <script src="{{asset('/neos/classic/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('/neos/classic/js/vendor/bootstrap.min.js')}}"></script>
  <!--Plugin-JS-->
  <script src="{{asset('/neos/classic/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/neos/classic/js/appear.js')}}"></script>
  <script src="{{asset('/neos/classic/js/bars.js')}}"></script>
  <script src="{{asset('/neos/classic/js/waypoints.min.js')}}"></script>
  <script src="{{asset('/neos/classic/js/counterup.min.js')}}"></script>
  <script src="{{asset('/neos/classic/js/easypiechart.min.js')}}"></script>
  <script src="{{asset('/neos/classic/js/mixitup.min.js')}}"></script>
  <script src="{{asset('/neos/classic/js/contact-form.js')}}"></script>
  <script src="{{asset('/neos/classic/js/scrollUp.min.js')}}"></script>
  <script src="{{asset('/neos/classic/js/magnific-popup.min.js')}}"></script>
  <script src="{{asset('/neos/classic/js/wow.min.js')}}"></script>
  <!--Main-active-JS-->
  <script src="{{asset('/neos/classic/js/main.js')}}"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script>
  <script src="{{asset('/neos/classic/js/maps.js')}}"></script>
</html>
