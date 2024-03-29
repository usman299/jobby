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
    <meta name="description" content="Mister Jobby Find service provider in your area">
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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{asset('date/jquery-ui.css')}}" rel="stylesheet">

    <style>
        @media only screen and (min-width: 800px) {
            .buttons__footer {
            position: inherit;
            width: 100%;
            bottom: 0;
            padding: 12px 20px;
            background-color: var(--bg-white);
            z-index: 10;
        }
        }

        .em__signTypeOne .em_titleSign {
            display: grid;
            align-items: center;
            justify-content: center;
            text-align: left;
            margin-top: 20px;
            margin-bottom: 20px !important;
        }
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
        .btn__default {
            position: relative;
            width: 100%;
            max-width: 100%;
            height: 55px;
            display: inline-flex;
            align-items: center;
            padding: 3px 25px;
        }
    </style>
    @yield('style')
</head>


<body class="h-100 d-flex align-items-center text-center">
<!-- Start em_loading -->
{{--<section class="em_loading" id="loaderPage">--}}
{{--    <div class="spinner_flash"></div>--}}
{{--</section>--}}
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

<script src="{{asset('date/jquery-ui.js')}}"></script>

<script>
    $(".loginformsubmit").submit(function(){
        $(this).find(':input[type=submit]').prop('disabled', true);
        $(this).find(':input[type=submit]').html("Chargement..");
    });
</script>
<script>
    jQuery(function($){
        $.datepicker.regional['fr'] = {
            closeText: 'Fermer',
            prevText: '&#x3c;Préc',
            nextText: 'Suiv&#x3e;',
            currentText: 'Aujourd\'hui',
            monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
                'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
            monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
                'Jul','Aou','Sep','Oct','Nov','Dec'],
            dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
            dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
            dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
            weekHeader: 'Sm',
            dateFormat: 'dd-mm-yy',
            showButtonPanel: true
        };
        $.datepicker.setDefaults($.datepicker.regional['fr']);
    });
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1910:c',
        dateFormat: 'dd.mm.yy',
        beforeShow: function () {
            var currentYear = (new Date).getFullYear();
            var currentMonth = (new Date).getMonth() + 1;
            var currentDay = (new Date).getDate();

            $(this).datepicker({
                minDate: new Date((currentYear - 12), currentMonth, currentDay),
            });
        }
    });
</script>
@yield('script')
</body>

</html>
