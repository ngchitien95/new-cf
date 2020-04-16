<!DOCTYPE html>
<html lang="en">
  <head>
    <title>case study &mdash;Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{asset('/neos/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/neos/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/neos/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('/neos/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/neos/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('neos/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('neos/css/animate.css')}}">

    {{-- <link rel="stylesheet" href="{{asset('neos/fonts/flaticon/font/flaticon.css')}}"> --}}
    <link rel="stylesheet" href="/web/css/font.css" type="text/css"/>
    <link href="/web/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/css/morris.css" type="text/css"/>
    <link rel="stylesheet" href="{{asset('neos/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('neos/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/myCss.css')}}">

  </head>
  <body>
@include('header')
 @yield('content')
@include('footer')

  <script src="{{asset('neos/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('neos/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('neos/js/jquery-ui.js')}}"></script>
  <script src="{{asset('neos/js/popper.min.js')}}"></script>
  <script src="{{asset('neos/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('neos/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('neos/js/jquery.stellar.min.js')}}"></script>

  <script src="{{asset('neos/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('neos/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('neos/js/aos.js')}}"></script>

  <script src="{{asset('neos/js/main.js')}}"></script>
  </body>
</html>
