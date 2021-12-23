<!DOCTYPE html>
<html lang="en" class="h-100">
<?php
$user = Auth::user();
?>
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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <!-- manifest meta -->
    <link rel="manifest" href="{{asset('_manifest.json')}}" />
    <style>
        .rounded-pill{
            display: inline-block !important; text-align: center;
        }
        .em_list_layout.widthFull .item_list .em_head .image_product {
            height: 80px;
        }
        .em_list_layout.widthFull .item_list .title_product .itemRating {
             margin-bottom: 0px !important;
        }
        .dialog-background{
            background: none repeat scroll 0 0 rgba(105, 166, 217, 0.5);
            height: 100%;
            left: 0;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 100;
        }
        .dialog-loading-wrapper {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
            border: 0 none;
            height: 100px;
            left: 50%;
            margin-left: -50px;
            margin-top: -50px;
            position: fixed;
            top: 50%;
            width: 100px;
            z-index: 9999999;
        }
        .dialog-loading-icon {
            background-color: #FFFFFF !important;
            border-radius: 13px;
            display: block;
            height: 40px;
            line-height: 40px;
            margin: 0;
            padding: 1px;
            text-align: center;
            width: 100px;
        }

        .notify-badge{
            position: absolute;
            top: 30px;
            background: #02a5ff;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: white;
            padding: 0px 0px;
            font-size: 12px;
            left: 50px;
            color: white;
        }

        /*multi step form css*/
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #556fff;
        }
        input[type="radio"] {
            -ms-transform: scale(1.5); /* IE 9 */
            -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
            transform: scale(1.5);
        }
        /*end multistep form*/

        .buttons__footer {
            position: fixed;
            width: 100%;
            bottom: 52px;
            padding: 12px 20px;
            background-color: var(--bg-white);
            z-index: 10;
        }
        .em__signTypeOne.typeTwo .em_titleSign h1 {
            font-size: 30px;
            color: var(--color-secondary);
            font-weight: 600;
            margin-bottom: 5px;
            text-align: left;
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
        .d-none{
            display: none !important;
        }
        .d-block{
            display: block !important;
        }
        .npPage_SuccessPkg {
            text-align: center;
            padding: 100px 30px 40px 30px;
        }
        .itemCountr_manual.horizontal {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid var(--border-snow);
            border-radius: 10px;
            width: 100px;
            float: right;
        }
    </style>
    @yield('style')
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
                <a class="rounded-circle d-flex align-items-center text-decoration-none" onclick="history.back()">
                    <i class="tio-chevron_left size-24 color-text"></i>
                    <span class="color-text size-14">Arrière</span>
                </a>
            </div>
            <div class="title_page">
                <span class="page_name">{{$title??'Messenger'}}</span>
            </div>
            <div class="em_side_right">
                <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal"
                        data-target="#mdllSidebarMenu-background">
                    <i class="ri-menu-fill"></i>
                </button>
            </div>
        </header>
        <!-- End.main_haeder -->

        @yield('content')
    </div>
<!-- Start em_main_footer -->
    <footer class="em_main_footer ouline_footer with__text">
        <div class="em_body_navigation -active-links">
            <div class="item_link">
                @if($user->role == 2)
                <a href="{{route('applicant.jobrequests')}}" class="btn btn_navLink">
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
                        <a href="{{route('jobber.proposals')}}" class="btn btn_navLink">
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
                <a href="{{route('applicant.proposals')}}" class="btn btn_navLink">
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

                    <div class="txt__tile">Propositions</div>
                </a>
                @else
                    <a href="{{route('jobber.contract')}}" class="btn btn_navLink">
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
                            data-target="#mdllForm" class="btn btn_navLink showlatpop">
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
                <a href="{{route('chatify')}}" class="btn btn_navLink">
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
{{--                    <div class="items_basket_circle">2</div>--}}
                    <div class="txt__tile">Discuter</div>
                </a>
            </div>
            <div class="item_link">
                <a href="{{route('app.settings')}}" class="btn btn_navLink">
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
                                @if($user->is_company == 1)
{{--                                <span class="notify-badge">PRO</span>--}}
                                <span class="notify-badge">
<!--                                    <svg id="Iconly_Bulk_Shield_Done" data-name="Iconly/Bulk/Shield Done" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <g id="Shield_Done" data-name="Shield Done" transform="translate(2.917 1.667)">
                                        <path id="Fill_1" data-name="Fill 1" d="M7.155,16.667a.652.652,0,0,1-.3-.072l-3-1.553a7.044,7.044,0,0,1-2.038-1.513A6.869,6.869,0,0,1,.035,8.967L0,3.437A1.511,1.511,0,0,1,1.024,2.01L6.534.089A1.569,1.569,0,0,1,7.559.083L13.09,1.939a1.508,1.508,0,0,1,1.041,1.413l.035,5.534a6.869,6.869,0,0,1-1.722,4.579A7.019,7.019,0,0,1,10.427,15L7.453,16.591a.637.637,0,0,1-.3.076" transform="translate(0 0)" fill="#ff4040" opacity="0.4"></path>
                                        <path id="Fill_4" data-name="Fill 4" d="M2.23,4.429a.636.636,0,0,1-.446-.177L.187,2.716A.6.6,0,0,1,.182,1.85a.641.641,0,0,1,.89-.006l1.149,1.1L5.027.182a.641.641,0,0,1,.89-.006.6.6,0,0,1,.006.866l-3.249,3.2a.633.633,0,0,1-.444.182" transform="translate(4.286 5.838)" fill="#ff4040"></path>
                                    </g>
                                </svg>-->
                                    <img height="20px" src="https://media.gettyimages.com/vectors/shield-ok-vector-id1253267955?s=612x612" alt="">
                                </span>
                            @endif
                                <!-- You can use an image -->
                                 <img class="_imgUser" src="{{asset($user->image)}}" alt="">

                            </a>
                            <div class="media-body" style="margin-left: 10px">
                                <div class="txt">
                                    <h3>{{$user->firstName}} {{$user->lastName}}</h3>
                                    <p>{{$user->email}} <br> {{$user->countory->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <ul class="nav flex-column">
                        <li class="nav-item {{  request()->is('app') ? '-active-links':'' }}">
                            <a class="nav-link" href="{{route('front.app')}}">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Home" data-name="Iconly/Curved/Home" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                            <g id="Home" transform="translate(2 1.667)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M0,.5H4.846" transform="translate(5.566 11.28)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_2" data-name="Stroke 2" d="M0,9.761C0,5.068.512,5.4,3.266,2.842,4.471,1.872,6.346,0,7.965,0S11.5,1.862,12.712,2.842c2.754,2.554,3.265,2.227,3.265,6.919,0,6.906-1.633,6.906-7.988,6.906S0,16.667,0,9.761Z" transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="title_link">Accueil</span>
                                </div>
                            </a>
                        </li>
                        @if($user->role == 1)
                        <li class="nav-item {{  request()->is('jobber/services') ? '-active-links':'' }}">
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
                        @else
                        <li class="nav-item {{  request()->is('applicant/contract') ? '-active-links':'' }}">
                            <a class="nav-link" href="{{route('applicant.contract')}}">
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
                                    <span class="title_link">Contract</span>
                                </div>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item {{  request()->is('app/notifications') ? '-active-links':'' }}">
                            <a class="nav-link" href="{{route('app.notifications')}}">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Document" data-name="Iconly/Curved/Document" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                            <g id="Document" transform="translate(3.008 2.292)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M6.017.5H0" transform="translate(3.971 10.289)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_2" data-name="Stroke 2" d="M6.017.5H0" transform="translate(3.971 7.155)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M2.3.5H0" transform="translate(3.972 4.023)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_4" data-name="Stroke 4" d="M0,7.708c0,5.781,1.748,7.708,6.992,7.708s6.992-1.927,6.992-7.708S12.238,0,6.992,0,0,1.927,0,7.708Z" transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>

                                    <span class="title_link">Notifications</span>
                                </div>
                                <span class="bg-red rounded-7 px-1 color-white min-w-25 px-1 h-28 d-flex align-items-center justify-content-center">3</span>

                            </a>
                        </li>
                        <li class="nav-item {{  request()->is('app/support') ? '-active-links':'' }}">
                            <a class="nav-link" href="{{route('app.support')}}">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_More_Circle" data-name="Iconly/Curved/More Circle" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                            <g id="More_Circle" data-name="More Circle" transform="translate(2.292 2.292)">
                                                <path id="Stroke_4" data-name="Stroke 4" d="M0,7.708C0,1.927,1.927,0,7.708,0s7.708,1.927,7.708,7.708-1.927,7.708-7.708,7.708S0,13.489,0,7.708Z" transform="translate(0 0)" fill="none" stroke="#556fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_11" data-name="Stroke 11" d="M.5.5H.5" transform="translate(9.883 8.792)" fill="none" stroke="#556fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                                                <path id="Stroke_13" data-name="Stroke 13" d="M.5.5H.5" transform="translate(7.383 5.458)" fill="none" stroke="#556fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                                                <path id="Stroke_15" data-name="Stroke 15" d="M.5.5H.5" transform="translate(4.876 8.792)" fill="none" stroke="#556fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                                            </g>
                                        </svg>
                                    </div>

                                    <span class="title_link">Soutien</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item {{  request()->is('app/about') ? '-active-links':'' }}">
                            <a class="nav-link" href="{{route('app.about')}}">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                            <g id="Message" transform="translate(2.043 2.377)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M9.292,0S6.617,3.211,4.661,3.211,0,0,0,0" transform="translate(3.285 5.139)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M0,7.6C0,1.9,1.984,0,7.937,0s7.937,1.9,7.937,7.6-1.984,7.6-7.937,7.6S0,13.295,0,7.6Z" transform="translate(0 0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>

                                    <span class="title_link">Sur Mister Jobby</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item {{  request()->is('app/contact') ? '-active-links':'' }}">
                            <a class="nav-link" href="{{route('app.contact')}}">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Document" data-name="Iconly/Curved/Document" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                            <g id="Document" transform="translate(3.008 2.292)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M6.017.5H0" transform="translate(3.971 10.289)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_2" data-name="Stroke 2" d="M6.017.5H0" transform="translate(3.971 7.155)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M2.3.5H0" transform="translate(3.972 4.023)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_4" data-name="Stroke 4" d="M0,7.708c0,5.781,1.748,7.708,6.992,7.708s6.992-1.927,6.992-7.708S12.238,0,6.992,0,0,1.927,0,7.708Z" transform="translate(0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>

                                    <span class="title_link">Avoir une question?</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link logoutbutton" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <div class="">
                                    <div class="icon_current">
                                        <svg id="Iconly_Curved_Info_Square" data-name="Iconly/Curved/Info Square" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                            <g id="Info_Square" data-name="Info Square" transform="translate(2.292 2.292)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M0,7.708C0,1.927,1.927,0,7.708,0s7.708,1.927,7.708,7.708-1.927,7.708-7.708,7.708S0,13.489,0,7.708Z" transform="translate(15.417 15.417) rotate(180)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M0,0V3.246" transform="translate(7.708 10.954) rotate(180)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_15" data-name="Stroke 15" d="M0,0H.007" transform="translate(7.712 4.792) rotate(180)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="title_link">Déconnecter</span>
                                </div>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
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

    <?php
    $categories = \App\Category::all();
    ?>
    <!-- Modal Form -->


    @yield('model')
</div>
        <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllForm"
             tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable height-full">
                <div class="modal-content rounded-0">
                    <div class="modal-header padding-l-20 padding-r-20 justify-content-center">
                        <div class="itemProduct_sm">
                            <h1 class="size-18 weight-600 color-secondary m-0">Publier une demande d'emploi</h1>
                        </div>
                        <div class="absolute right-0 padding-r-20">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tio-clear"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="padding-t-30">
                                <div class="em__pkLink bg-white border-t-0">
                                    <ul class="nav__list mb-0">
                                        @foreach($categories as $cat)
                                            <li>
                                                <a href="{{route('job.subcategory', ['id' => $cat->id])}}" class="item-link" style="padding: 10px 0px">
                                                    <div class="group">
                                                        <span class="path__name">{{$cat->title}}</span>
                                                    </div>
                                                    <div class="group">
                                                        <span class="short__name"></span>
                                                        <i class="tio-chevron_right -arrwo"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
<!--                            <div class="em__signTypeOne">

                                <div class="em__body px-0">
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="">
                                            <div class="form-group input-lined">
                                                <input type="text" name="title" class="form-control" placeholder="Titre" required="">
                                                <label for="username">Titre</label>
                                            </div>
                                            <div class="form-group input-lined">
                                                <select onchange="categorychange(this)" name="category_id" class="form-control" required="">
                                                    <option value="">Choisir une catégorie</option>
                                                    @foreach($categories as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                    @endforeach
                                                </select>
                                                <label for="email">Catégorie</label>
                                            </div>
                                            <div class="form-group input-lined">
                                                <select name="subcategory_id" class="form-control maincategory" required="">

                                                </select>
                                                <label for="email">Sous-catégorie</label>
                                            </div>
                                            <div class="form-group input-lined">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="number" name="min_price" placeholder="Min (€)" class="form-control" required="">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="number" name="max_price" placeholder="Max (€)" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <label for="mobile">Budget</label>
                                            </div>
                                            <input type="hidden" name="lat" class="lat">
                                            <input type="hidden" name="long" class="long">
                                            <div class="form-group input-lined">
                                                <input type="date" name="estimate_time"  class="form-control" required="">
                                                <label for="mobile">Date de service</label>
                                            </div>
                                            <div class="form-group input-lined">
                                                <input type="time" name="start_time"  class="form-control" required="">
                                                <label for="mobile">Heure de début</label>
                                            </div>
                                            <div class="form-group input-lined">
                                                <div class="item-link hoverNone" style="text-align: right">
                                                    <div class="group">
                                                        <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                            <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                                <i class="tio-remove"></i>
                                                            </a>
                                                            <input type="text" class="form-control input_no color-secondary" value="1">
                                                            <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                                <i class="tio-add color-white"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="address">Durée estime (heure)</label>
                                            </div>
                                            <div class="form-group input-lined">
                                                <div class="item-link hoverNone" style="text-align: right">
                                                    <div class="group">
                                                        <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                            <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                                <i class="tio-remove"></i>
                                                            </a>
                                                            <input type="text" class="form-control input_no color-secondary" value="9">
                                                            <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                                <i class="tio-add color-white"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="address">Taux horaire (€)</label>
                                            </div>
                                            <div class="form-group input-lined">
                                                <label for="files" class="btn" style="text-align: left; padding: 0px">
                                                    <img style="height: 80px" id="output_image" src="http://127.0.0.1:8000/assets/img/0ffd6s54.jpg">
                                                </label>
                                                <input id="files" style="visibility:hidden;" type="file">
                                                <label for="files1" class="btn" style="text-align: left; padding: 0px">
                                                    <img style="height: 80px" id="output_image1" src="http://127.0.0.1:8000/assets/img/0ffd6s54.jpg">
                                                </label>
                                                <input id="files1" style="visibility:hidden;" type="file">
                                                <label for="address">Photos</label>

                                            </div>
                                            <div class="form-group input-lined ">

                                            </div>
                                            <div class="form-group input-lined">
                                                <textarea placeholder="Ecrire quelque chose sur le travail" class="form-control" rows="4" name="description"></textarea>
                                                <label for="address">Description</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit"
                                                    class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                                                Poster
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
{{--<div class="dialog-background" style="display: none">--}}
{{--    <div class="dialog-loading-wrapper">--}}
{{--        <span class="dialog-loading-icon">Loading....</span>--}}
{{--    </div>--}}
{{--</div>--}}
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
    $("#files").change(function() {
        filename = this.files[0].name;
        readURL(this);
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#output_image').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#files1").change(function() {
        filename = this.files[0].name;
        readURL1(this);
    });
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#output_image1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#files2").change(function() {
        filename = this.files[0].name;
        readURL2(this);
    });
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#output_image2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function categorychange(elem){
        $('.maincategory').html('<option value="">Sélectionnez une sous-catégorie</option>');
        event.preventDefault();
        let id = elem.value;
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{route('fetchsubcategory')}}",
            type:"POST",
            data:{
                id:id,
                _token: _token
            },
            success:function(response){
                $.each(response, function(i, item) {
                    $('.maincategory').append('<option value="'+item.id+'">'+item.title+'</option>');
                });
            },
        });
    }

</script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>
<script>
    $(".logoutbutton").click(function(){
        $(this).html('Déconnecter...');
    })
    $(".showlatpop").click(function(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    })
    function showPosition(position) {
        $(".lat").val(position.coords.latitude);
        $(".long").val(position.coords.longitude);
    }
    // $("a").click(function() {
    //     $(".dialog-background").show();
    // });

</script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, z, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        z = x[currentTab].getElementsByTagName("select");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " is-invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        for (i = 0; i < z.length; i++) {
            // If a field is empty...
            if (z[i].value == "") {
                // add an "invalid" class to the field:
                z[i].className += " is-invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>
@yield('script')
</body>

</html>
