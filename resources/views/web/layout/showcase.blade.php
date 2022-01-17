<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Mister Jobby</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('images/logoo.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <style>

        .table-job-offers tr:last-child {
             border-bottom: 0px solid #ffffff;
        }
            .section-md {
                padding: 6px 0 43px;
            }

        .rd-navbar-classic.rd-navbar-static .rd-navbar-main {
            min-height: 110px;
            max-width: 100%;
        }

            .profile-classic-main {
                padding: 11px 12px 35px;
            }



    </style>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>

<div class="ie-panel"> <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="preloader-item">
            <svg width="40" height="40" viewbox="0 0 40 40">
                <polygon class="rect" points="0 0 0 40 40 40 40 0"></polygon>
            </svg>
        </div>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header jumbotron-creative">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <!--Brand--><a class="brand" href="{{route('web.index')}}"><img class="brand-logo-dark" src="{{asset('images/logoo.png')}}" alt="" width="143" height="26"/><img class="brand-logo-light" src="{{asset('front/images/logo-inverse-286x52.png')}}" alt="" width="143" height="26"/></a>
                            </div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">

                            </div>
                        </div>

                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-aside-item" style="margin-right: 300px;">


                           <a href="{{route('main.category')}}" class="button button-xs button-primary button-icon button-icon-left rd-navbar-popup-toggle" style="border-radius: 33px;"id="myBtn" ><i class="fas fa-plus-circle" style="margin: 5px;"></i> <label>Demander un service</label>    </a>

                            </div>

                            <div class="rd-navbar-aside-item">

                                <a href="{{route('devenez.jobber')}}" style="font-size: 18px;color: black; " ><b>Devenir jobber</b></a>
                            </div>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                            @auth
                                <div class="rd-navbar-aside-item">
                                    {{--                                class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle"--}}
                                    <li class="rd-nav-item"><a class="rd-nav-link" style="color: black; font-size: 16px; " href="#"><b>{{Auth::user()->firstName}} {{Auth::user()->lastName}}</b></a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <?php $route = Crypt::encryptString('app/settings/profile');  ?>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('iframe.category', ['id' => $route])}}">Votre profil</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Se déconnecter</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>


                                </div> &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                            @else
                            <div class="rd-navbar-aside-item">
{{--                                class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle"--}}
                                <a href="{{route('inscription')}}" style="font-size: 18px;color: black; "><b>Inscription</b></a>

                            </div> &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
                            <div class="rd-navbar-aside-item">
{{--                                <button class="button button-xs button-primary button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-login">Connexion</button>--}}
                                <a href="#" style="font-size: 18px; color: black; " data-rd-navbar-toggle="#rd-navbar-login"><b>Connexion</b></a>
                                <div class="rd-navbar-popup bg-gray-100" id="rd-navbar-login" style="left: -87%">

                                    <form method="POST" action="{{ route('iframe') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="route" value="/front/login/2">
                                        <div class="form-wrap">
                                            <button class="button button-block button-primary" style="background-color: #039a67; background-image: linear-gradient(#039a67, #00afbe); border-radius: 12px;"  type="submit">Demandeur Connexion</button>
                                        </div>
                                    </form>
                                    <form method="POST" action="{{ route('iframe') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="route" value="/front/login/1">
                                        <div class="form-wrap">
                                            <button class="button button-block button-primary"  style="background-color: red; background-image: linear-gradient(#ea4f31, #f39000);border-radius: 12px; margin-top: 10px;"  type="submit">Jobber Connexion</button>
                                        </div>
                                    </form>
                                </div>
                            </div>&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>
        </div>

@yield('content')


        <!-- Page Footer-->
    <footer class="section footer-creative context-dark">
        <div class="footer-creative-main">
            <div class="container">
                <div class="row row-50 justify-content-lg-between">
                    <div class="col-lg-5 col-xl-4">
                        <p class="footer-creative-title">Liens rapides</p>
                        <div class="footer-creative-divider"></div>
                        <div class="row row-narrow row-15">
                            <div class="col-6">
                                <ul class="list-marked-1">
                                    <li><a href="#">Parcourir les emplois</a></li>
                                    <li><a href="#">Parcourir les catégories</a></li>
                                    <li><a href="#">Soumettre CV</a></li>
                                    <li><a href="#">Entreprises</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-marked-1">
                                    <li><a href="#">Publier une offre</a></li>
                                    <li><a href="#">Trouver un candidat</a></li>
                                    <li><a href="#">Tableau des prix</a></li>
                                    <li><a href="#">FAQ </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <p class="footer-creative-title">Messages d'actualité récents</p>
                        <div class="footer-creative-divider"></div>
                        <div class="post-line-group">
                            <!-- Post Line--><a class="post-line" href="blog-post.html">
                                <time class="post-line-time" datetime="2019"><span class="post-line-time-day">25</span><span class="post-line-time-month">April</span></time>
                                <p class="post-line-text">Le Canada crée 12 500 emplois lors du modeste rebond de juillet</p></a>
                            <!-- Post Line--><a class="post-line" href="blog-post.html">
                                <time class="post-line-time" datetime="2019"><span class="post-line-time-day">14</span><span class="post-line-time-month">April</span></time>
                                <p class="post-line-text">Externalisation vs marketing numérique interne</p></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="group"><a class="button button-warning button-fixed-size" href="#"><img src="{{asset('front/images/google-play-download-138x35.png')}}" alt="" width="138" height="35"/></a><a class="button button-warning button-fixed-size" href="#"><img src="{{asset('front/images/appstore.svg')}}" alt=""></a></div>


                    </div>
                </div>
            </div>
        </div>
        <div class="footer-creative-aside">
            <div class="container">
                <p class="rights"><span>Ikae Digital</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="#">Politique de confidentialité</a></p>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{asset('front/js/core.min.js')}}"></script>
<script src="{{asset('front/js/script.js')}}"></script>
<script>
    function stopLoad(id){
        $(".maincatalog").hide();
        $(".subcatalog"+id).show();

    }
    function stopLoaddd(id){

            $(".maincatalog").hide();
            $(".subcatalog"+id).hide();
            $(".childcatalog"+id).show();
    }
</script>
</body>
</html>
