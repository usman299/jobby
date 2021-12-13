<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">

    <meta name="theme-color" content="#ffffff">
    <title>Mister Jobby</title>
    <meta name="description" content="Nepro – The Multipurpose Mobile HTML5 Template">
    <meta name="keywords"
          content="bootstrap 4, mobile template, 404, chat, about, cordova, phonegap, mobile, html, ecommerce, shopping, store, delivery, wallet, banking, education, jobs, careers, distance learning" />

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon/32.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{asset('assets/img/favicon/favicon192.png')}}">

    <!-- CSS Libraries-->
    <!-- bootstrap v4.6.0 -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--
        theiconof v3.0
        https://www.theiconof.com/search
     -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
    <!-- Remix Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
    <!-- Swiper 6.4.11 -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <!-- Owl Carousel v2.3.4 -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- normalize.css v8.0.1 -->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">

    <!-- manifest meta -->
    <link rel="manifest" href="{{asset('_manifest.json')}}" />
    <style>
        .npPage_introDefault .npButtons_networks {
             padding-top: 0px !important;
            padding-left: 20px;
            padding-right: 20px;
        }
        .npPage_introDefault .swiper__text .swiper-slide .content_text {
            padding: 0 0px !important;
        }
        .hero-text{
            text-align: center;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
    </style>
</head>


<body class="h-100 d-flex align-items-center text-center">
<!-- Start em_loading -->
<section class="em_loading" id="loaderPage">
    <div class="spinner_flash"></div>
</section>
<!-- End. em_loading -->
@yield('content')


<!-- jquery -->
<script src="{{asset('assets/js/jquery-3.6.0.js')}}"></script>
<!-- popper.min.js 1.16.1 -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- bootstrap.js v4.6.0 -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Owl Carousel v2.3.4 -->
<script src="{{asset('assets/js/vendor/owl.carousel.min.js')}}"></script>
<!-- Swiper 6.4.11 -->
<script src="{{asset('assets/js/vendor/swiper-bundle.min.js')}}"></script>
<!-- sharer 0.4.0 -->
<script src="{{asset('assets/js/vendor/sharer.js')}}"></script>
<!-- short-and-sweet v1.0.2 - Accessible character counter for input elements -->
<script src="{{asset('assets/js/vendor/short-and-sweet.min.js')}}"></script>
<!-- jquery knob -->
<script src="{{asset('assets/js/vendor/jquery.knob.min.js')}}"></script>

<!-- main.js -->
<script src="{{asset('assets/js/main.js')}}" defer></script>
<!-- PWA app service registration and works js -->
<script src="{{asset('assets/js/pwa-services.js')}}"></script>
<script>
    $(".loginformsubmit").submit(function(){
        $(this).find(':input[type=submit]').prop('disabled', true);
        $(this).find(':input[type=submit]').html("Chargement..");
    });
</script>
</body>

</html>
