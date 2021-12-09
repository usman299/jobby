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
        .rounded-pill{
            display: inline-block !important; text-align: center;
        }
    </style>
</head>


<body class="bg-snow">

<!-- Start em_loading -->
<section class="em_loading" id="loaderPage">
    <div class="spinner_flash"></div>
</section>
<!-- End. em_loading -->

<div id="wrapper">
    <div id="content">
        <!-- Start main_haeder -->
        <header class="main_haeder header-sticky multi_item {{  request()->is('applicant/single/*') ? 'header-white':'' }}">
            <div class="em_menu_sidebar">
                <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal"
                        data-target="#mdllSidebarMenu-background">
                    <i class="ri-menu-fill"></i>
                </button>
            </div>
            <div class="title_page">
                <span class="page_name">{{$title}}</span>
            </div>
            <div class="em_side_right">
                <button type="button" class="btn btn_meunSearch" id="saerch-On-header">
                    <i class="ri-search-2-line"></i>
                </button>
            </div>
        </header>
        <!-- End.main_haeder -->

        @yield('content')
    </div>
    <?php
    $user = Auth::user();
    ?>
<!-- Start em_main_footer -->
    <footer class="em_main_footer ouline_footer with__text">
        <div class="em_body_navigation -active-links">
            <div class="item_link">
                @if($user->role == 2)
                <a href="#" class="btn btn_navLink">
                    <div class="icon_current">
                        <svg id="Iconly_Curved_Document" data-name="Iconly/Curved/Document"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Document" transform="translate(3.61 2.75)">
                                <path id="Stroke_1" data-name="Stroke 1" d="M7.22.5H0"
                                      transform="translate(4.766 12.446)" fill="none" stroke="#9498ac"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5" />
                                <path id="Stroke_2" data-name="Stroke 2" d="M7.22.5H0"
                                      transform="translate(4.766 8.686)" fill="none" stroke="#9498ac"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5" />
                                <path id="Stroke_3" data-name="Stroke 3" d="M2.755.5H0"
                                      transform="translate(4.766 4.927)" fill="none" stroke="#9498ac"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5" />
                                <path id="Stroke_4" data-name="Stroke 4"
                                      d="M0,9.25c0,6.937,2.1,9.25,8.391,9.25s8.391-2.313,8.391-9.25S14.685,0,8.391,0,0,2.313,0,9.25Z"
                                      transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                            </g>
                        </svg>
                    </div>
                    <div class="txt__tile">Demandes</div>
                </a>
                @else
                    <div class="item_link">
                        <a href="#" class="btn btn_navLink">
                            <div class="icon_current">
                                <svg id="Iconly_Curved_Document" data-name="Iconly/Curved/Document"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="Document" transform="translate(3.61 2.75)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M7.22.5H0"
                                              transform="translate(4.766 12.446)" fill="none" stroke="#9498ac"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="1.5" />
                                        <path id="Stroke_2" data-name="Stroke 2" d="M7.22.5H0"
                                              transform="translate(4.766 8.686)" fill="none" stroke="#9498ac"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3" d="M2.755.5H0"
                                              transform="translate(4.766 4.927)" fill="none" stroke="#9498ac"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="1.5" />
                                        <path id="Stroke_4" data-name="Stroke 4"
                                              d="M0,9.25c0,6.937,2.1,9.25,8.391,9.25s8.391-2.313,8.391-9.25S14.685,0,8.391,0,0,2.313,0,9.25Z"
                                              transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <div class="txt__tile">Proposals</div>
                        </a>
                    </div>
                @endif
            </div>
            <div class="item_link">
                @if($user->role == 2)
                <a href="#" class="btn btn_navLink">
                    <div class="icon_current">
                        <svg id="Iconly_Curved_More_Circle" data-name="Iconly/Curved/More Circle"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="More_Circle" data-name="More Circle" transform="translate(2 2)">
                                <path id="Stroke_4" data-name="Stroke 4"
                                      d="M0,9.25C0,2.313,2.313,0,9.25,0S18.5,2.313,18.5,9.25,16.187,18.5,9.25,18.5,0,16.187,0,9.25Z"
                                      transform="translate(0.75 0.75)" fill="none" stroke="#9498ac"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5" />
                                <path id="Stroke_11" data-name="Stroke 11" d="M.5.5H.5"
                                      transform="translate(12.709 11.4)" fill="none" stroke="#9498ac"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="2" />
                                <path id="Stroke_13" data-name="Stroke 13" d="M.5.5H.5"
                                      transform="translate(9.709 7.4)" fill="none" stroke="#9498ac"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="2" />
                                <path id="Stroke_15" data-name="Stroke 15" d="M.5.5H.5"
                                      transform="translate(6.7 11.4)" fill="none" stroke="#9498ac"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="2" />
                            </g>
                        </svg>
                    </div>

                    <div class="txt__tile">Contrats</div>
                </a>
                @else
                    <a href="#" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Curved_More_Circle" data-name="Iconly/Curved/More Circle"
                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="More_Circle" data-name="More Circle" transform="translate(2 2)">
                                    <path id="Stroke_4" data-name="Stroke 4"
                                          d="M0,9.25C0,2.313,2.313,0,9.25,0S18.5,2.313,18.5,9.25,16.187,18.5,9.25,18.5,0,16.187,0,9.25Z"
                                          transform="translate(0.75 0.75)" fill="none" stroke="#9498ac"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5" />
                                    <path id="Stroke_11" data-name="Stroke 11" d="M.5.5H.5"
                                          transform="translate(12.709 11.4)" fill="none" stroke="#9498ac"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="2" />
                                    <path id="Stroke_13" data-name="Stroke 13" d="M.5.5H.5"
                                          transform="translate(9.709 7.4)" fill="none" stroke="#9498ac"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="2" />
                                    <path id="Stroke_15" data-name="Stroke 15" d="M.5.5H.5"
                                          transform="translate(6.7 11.4)" fill="none" stroke="#9498ac"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="2" />
                                </g>
                            </svg>
                        </div>

                        <div class="txt__tile">Contrats</div>
                    </a>
                @endif
            </div>
            <div class="item_link">
                @if($user->role == 2)
                    <button type="button" data-toggle="modal"
                            data-target="#mdllForm" class="btn btn_navLink">
                        <a  class="btn btnCircle">
                            <i class="tio-add"></i>
                        </a>
                    </button>
                @else
                <a href="{{route('front.app')}}" class="btn btn_navLink without_active">
                    <button type="button" class="btn btnCircle_default rounded-10">
                        <svg id="Iconly_Curved_Home" data-name="Iconly/Curved/Home"
                             xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <g id="Home" transform="translate(2 1.667)">
                                <path id="Stroke_1" data-name="Stroke 1" d="M0,.5H4.846"
                                      transform="translate(5.566 11.28)" fill="none" stroke="#fff"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="1.5" />
                                <path id="Stroke_2" data-name="Stroke 2"
                                      d="M0,9.761C0,5.068.512,5.4,3.266,2.842,4.471,1.872,6.346,0,7.965,0S11.5,1.862,12.712,2.842c2.754,2.554,3.265,2.227,3.265,6.919,0,6.906-1.633,6.906-7.988,6.906S0,16.667,0,9.761Z"
                                      transform="translate(0)" fill="none" stroke="#fff" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" />
                            </g>
                        </svg>

                    </button>
                </a>
                @endif
            </div>
            <div class="item_link">
                <a href="#" class="btn btn_navLink">
                    <div class="icon_current">
                        <svg id="Iconly_Two-tone_Chat" data-name="Iconly/Two-tone/Chat" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Chat" transform="translate(2 2)">
                                <path id="Path" d="M10.057,0A10,10,0,0,0,1.138,14.629l.2.39a1.3,1.3,0,0,1,.1,1,19.8,19.8,0,0,0-.715,2.324c0,.4.114.629.544.619A18.271,18.271,0,0,0,3.5,18.314a1.481,1.481,0,0,1,.954.057c.277.133.839.476.859.476A10,10,0,1,0,10.057,0Z" transform="translate(0 0)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                <ellipse id="Oval" cx="0.477" cy="0.476" rx="0.477" ry="0.476" transform="translate(4.81 9.524)" fill="#200e32" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></ellipse>
                                <ellipse id="Oval-2" data-name="Oval" cx="0.477" cy="0.476" rx="0.477" ry="0.476" transform="translate(9.58 9.524)" fill="#200e32" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></ellipse>
                                <ellipse id="Oval-3" data-name="Oval" cx="0.477" cy="0.476" rx="0.477" ry="0.476" transform="translate(14.35 9.524)" fill="#200e32" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></ellipse>
                            </g>
                        </svg>

                    </div>
                    <div class="icon_active">
                        <svg id="Iconly_Bulk_Chat" data-name="Iconly/Bulk/Chat" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Chat" transform="translate(2 2)">
                                <path id="Fill_1" data-name="Fill 1" d="M10.02,0A10,10,0,0,0,0,10a10.56,10.56,0,0,0,1.35,4.99,1.045,1.045,0,0,1,.07.9L.75,18.13a.624.624,0,0,0,.82.78l2.02-.6a1.7,1.7,0,0,1,1.491.36A9.987,9.987,0,1,0,10.02,0" fill="#200e32" opacity="0.4"></path>
                                <path id="Combined_Shape" data-name="Combined Shape" d="M9.22,1.28A1.28,1.28,0,1,1,10.5,2.561,1.276,1.276,0,0,1,9.22,1.28Zm-4.61-.01a1.28,1.28,0,1,1,1.28,1.291A1.292,1.292,0,0,1,4.611,1.27ZM0,1.28a1.28,1.28,0,0,1,2.56,0A1.29,1.29,0,0,1,1.28,2.561,1.289,1.289,0,0,1,0,1.28Z" transform="translate(4.09 8.73)" fill="#200e32"></path>
                            </g>
                        </svg>

                    </div>
                    <div class="items_basket_circle">2</div>
                    <div class="txt__tile">Discuter</div>
                </a>
            </div>
            <div class="item_link">
                <a href="#" class="btn btn_navLink">
                    <div class="icon_current">
                        <svg id="Iconly_Curved_Setting" data-name="Iconly/Curved/Setting"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Setting" transform="translate(3.5 2.5)">
                                <path id="Stroke_1" data-name="Stroke 1"
                                      d="M2.5,0A2.5,2.5,0,1,1,0,2.5,2.5,2.5,0,0,1,2.5,0Z" transform="translate(6 7)"
                                      fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5" />
                                <path id="Stroke_3" data-name="Stroke 3"
                                      d="M16.668,4.75h0a2.464,2.464,0,0,0-3.379-.912,1.543,1.543,0,0,1-2.314-1.346A2.484,2.484,0,0,0,8.5,0h0A2.484,2.484,0,0,0,6.025,2.492,1.543,1.543,0,0,1,3.712,3.839a2.465,2.465,0,0,0-3.38.912,2.5,2.5,0,0,0,.906,3.4,1.56,1.56,0,0,1,0,2.692,2.5,2.5,0,0,0-.906,3.4,2.465,2.465,0,0,0,3.379.913h0a1.542,1.542,0,0,1,2.313,1.345h0A2.484,2.484,0,0,0,8.5,19h0a2.484,2.484,0,0,0,2.474-2.492h0a1.543,1.543,0,0,1,2.314-1.345,2.465,2.465,0,0,0,3.379-.913,2.5,2.5,0,0,0-.905-3.4h0a1.56,1.56,0,0,1,0-2.692A2.5,2.5,0,0,0,16.668,4.75Z"
                                      fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5" />
                            </g>
                        </svg>

                    </div>

                    <div class="txt__tile">Paramètres</div>
                </a>
            </div>
        </div>
    </footer>
    <!-- End. em_main_footer -->

    <!-- Start searchMenu__hdr -->
    <section class="searchMenu__hdr">
        <form>
            <div class="form-group">
                <div class="input_group">
                    <input type="search" class="form-control" placeholder="type something here...">
                    <i class="ri-search-2-line icon_serach"></i>
                </div>
            </div>
        </form>
        <button type="button" class="btn btn_meunSearch -close __removeMenu">
            <i class="tio-clear"></i>
        </button>
    </section>
    <!-- End. searchMenu__hdr -->


    <!-- Modal Sidebar Menu (withBackground) -->
    <div class="modal sidebarMenu -left fade" id="mdllSidebarMenu-background" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-block">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tio-clear"></i>
                    </button>
                    <div class="em_profile_user">
                        <div class="media">
                            <a href="#">
                                <!-- You can use an image -->
                                 <img class="_imgUser" src="{{asset('main/avatar.png')}}" alt="">

                            </a>
                            <div class="media-body">
                                <div class="txt">
                                    <h3>{{Auth::user()->firstName}} {{Auth::user()->lastName}}</h3>
                                    <p>{{Auth::user()->email}}</p>
                                    <a  href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn_logOut">Déconnecter</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(Auth::user()->role==2)
                <div class="modal-body">
                    <ul class="nav flex-column">
                        <li class="nav-item {{  request()->is('app') ? '-active-links':'' }}">
                            <a class="nav-link" href="{{route('front.app')}}">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Discovery" data-name="Iconly/Curved/Discovery"
                                             xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20">
                                            <g id="Discovery" transform="translate(2.292 2.292)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                      d="M0,7.708c0,5.781,1.927,7.708,7.708,7.708s7.708-1.927,7.708-7.708S13.489,0,7.708,0,0,1.927,0,7.708Z"
                                                      transform="translate(0 0)" fill="none" stroke="#9498ac"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                      d="M0,5.5,1.312,1.312,5.5,0,4.192,4.191Z"
                                                      transform="translate(4.957 4.957)" fill="none" stroke="#9498ac"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="title_link">Découvrir</span>
                                </div>
                            </a>
                        </li>
                        @endif
                        @if(Auth::user()->role==1)
                        <div class="modal-body">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('jobber.services')}}">
                                        <div class="">
                                            <div class="icon_current">
                                                <svg id="Iconly_Curved_Discovery" data-name="Iconly/Curved/Discovery"
                                                     xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     viewBox="0 0 20 20">
                                                    <g id="Discovery" transform="translate(2.292 2.292)">
                                                        <path id="Stroke_1" data-name="Stroke 1"
                                                              d="M0,7.708c0,5.781,1.927,7.708,7.708,7.708s7.708-1.927,7.708-7.708S13.489,0,7.708,0,0,1.927,0,7.708Z"
                                                              transform="translate(0 0)" fill="none" stroke="#9498ac"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-miterlimit="10" stroke-width="1.5" />
                                                        <path id="Stroke_3" data-name="Stroke 3"
                                                              d="M0,5.5,1.312,1.312,5.5,0,4.192,4.191Z"
                                                              transform="translate(4.957 4.957)" fill="none" stroke="#9498ac"
                                                              stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-miterlimit="10" stroke-width="1.5" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <span class="title_link">Service</span>
                                        </div>
                                    </a>
                                </li>
                                @endif
                        <label class="title__label">autre</label>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Setting" data-name="Iconly/Curved/Setting"
                                             xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20">
                                            <g id="Setting" transform="translate(2.917 2.083)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                      d="M2.083,0A2.083,2.083,0,1,1,0,2.083,2.083,2.083,0,0,1,2.083,0Z"
                                                      transform="translate(5 5.833)" fill="none" stroke="#9498ac"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                      d="M13.89,3.959h0a2.053,2.053,0,0,0-2.816-.76A1.286,1.286,0,0,1,9.145,2.077,2.07,2.07,0,0,0,7.083,0h0A2.07,2.07,0,0,0,5.021,2.077,1.286,1.286,0,0,1,3.093,3.2a2.054,2.054,0,0,0-2.817.76A2.085,2.085,0,0,0,1.031,6.8a1.3,1.3,0,0,1,0,2.243,2.085,2.085,0,0,0-.755,2.837,2.054,2.054,0,0,0,2.816.761h0a1.285,1.285,0,0,1,1.928,1.121h0a2.07,2.07,0,0,0,2.062,2.077h0a2.07,2.07,0,0,0,2.062-2.077h0a1.286,1.286,0,0,1,1.929-1.121,2.054,2.054,0,0,0,2.816-.761,2.085,2.085,0,0,0-.754-2.837h0a1.3,1.3,0,0,1,0-2.243A2.085,2.085,0,0,0,13.89,3.959Z"
                                                      transform="translate(0)" fill="none" stroke="#9498ac"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="title_link">Paramètres</span>
                                </div>
                                <div class="em_pulp">
                                    <span class="doted_item"></span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message"
                                             xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20">
                                            <g id="Message" transform="translate(2.043 2.377)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                      d="M9.292,0S6.617,3.211,4.661,3.211,0,0,0,0"
                                                      transform="translate(3.285 5.139)" fill="none" stroke="#9498ac"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                      d="M0,7.6C0,1.9,1.984,0,7.937,0s7.937,1.9,7.937,7.6-1.984,7.6-7.937,7.6S0,13.295,0,7.6Z"
                                                      transform="translate(0 0)" fill="none" stroke="#9498ac"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="title_link">Soutien</span>
                                </div>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page-about.html">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Info_Square" data-name="Iconly/Curved/Info Square"
                                             xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20">
                                            <g id="Info_Square" data-name="Info Square"
                                               transform="translate(2.292 2.292)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                      d="M0,7.708C0,1.927,1.927,0,7.708,0s7.708,1.927,7.708,7.708-1.927,7.708-7.708,7.708S0,13.489,0,7.708Z"
                                                      transform="translate(15.417 15.417) rotate(180)" fill="none"
                                                      stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_3" data-name="Stroke 3" d="M0,0V3.246"
                                                      transform="translate(7.708 10.954) rotate(180)" fill="none"
                                                      stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                                <path id="Stroke_15" data-name="Stroke 15" d="M0,0H.007"
                                                      transform="translate(7.712 4.792) rotate(180)" fill="none"
                                                      stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" />
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="title_link">Sur</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <div class="em_darkMode_menu">
                        <label class="text" for="switchDarkMode">
                            <h3>Mode sombre</h3>
                            <p>Navigation en mode nuit</p>
                        </label>
                        <label class="switch_toggle toggle_lg" for="switchDarkMode">
                            <input type="checkbox" class="switchDarkMode" id="switchDarkMode">
                            <span class="handle"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Buttons Share -->
    <div class="modal transition-bottom -inside screenFull defaultModal mdlladd__rate fade" id="mdllButtons_share"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-15">

                <div class="modal-body rounded-15 p-0">
                    <div class="emBK__buttonsShare icon__share padding-20">
                        <button type="button" class="btn" data-sharer="facebook" data-hashtag="hashtag"
                                data-url="https://orinostudio.com/nepro/">
                            <div class="icon bg-facebook rounded-10">
                                <i class="tio-facebook_square"></i>
                            </div>
                        </button>
                        <button type="button" class="btn" data-sharer="telegram" data-title="Checkout Nepro!"
                                data-url="https://orinostudio.com/nepro/" data-to="+44555-5555">
                            <div class="icon bg-telegram rounded-10">
                                <i class="tio-telegram"></i>
                            </div>
                        </button>
                        <button type="button" class="btn" data-sharer="skype"
                                data-url="https://orinostudio.com/nepro/" data-title="Checkout Nepro!">
                            <div class="icon bg-skype rounded-10">
                                <i class="tio-skype"></i>
                            </div>
                        </button>
                        <button type="button" class="btn" data-sharer="linkedin"
                                data-url="https://orinostudio.com/nepro/">
                            <div class="icon bg-linkedin rounded-10">
                                <i class="tio-linkedin_square"></i>
                            </div>
                        </button>
                        <button type="button" class="btn" data-sharer="twitter" data-title="Checkout Nepro!"
                                data-hashtags="pwa, Nepro, template, mobile, app, shopping, ecommerce"
                                data-url="https://orinostudio.com/nepro/">
                            <div class="icon bg-twitter rounded-10">
                                <i class="tio-twitter"></i>
                            </div>
                        </button>
                        <button type="button" class="btn" data-sharer="whatsapp" data-title="Checkout Nepro!"
                                data-url="https://orinostudio.com/nepro/">
                            <div class="icon bg-whatsapp rounded-10">
                                <i class="tio-whatsapp_outlined"></i>
                            </div>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllForm" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Publier une demande d'emploi</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body env-pb">
                    <form action="">
                        <div class="form-group input-lined">
                            <input type="text" id="username" class="form-control" placeholder="Titre" required="">
                            <label for="username">Titre</label>
                        </div>
                        <div class="form-group input-lined">
                            <select name="" class="form-control" id="">
                                <option value="">heafer 1</option>
                                <option value="">heafer 1</option>
                                <option value="">heafer 1</option>
                                <option value="">heafer 1</option>
                            </select>
                            <label for="email">Category</label>
                        </div>
                        <div class="form-group input-lined">
                            <select name="" class="form-control" id="">
                                <option value="">heafer 1</option>
                                <option value="">heafer 1</option>
                                <option value="">heafer 1</option>
                                <option value="">heafer 1</option>
                            </select>
                            <label for="email">Sub Category</label>
                        </div>
                        <div class="form-group input-lined">
                            <input type="text"  class="form-control" required="">
                            <label for="mobile">Budget</label>
                        </div>
                        <div class="form-group input-lined">
                            <input type="text"  class="form-control" required="">
                            <label for="mobile">Estimate Time</label>
                        </div>
                        <div class="form-group input-lined">
                            <textarea class="form-control" rows="2" id="address"></textarea>
                            <label for="address">Details</label>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#"
                       class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                       Post
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

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

</body>

</html>
