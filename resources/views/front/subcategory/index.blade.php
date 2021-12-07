@extends('layouts.front')
@section('content')
    <!-- Start em_loading -->
{{--    <section class="em_loading" id="loaderPage">--}}
{{--        <div class="spinner_flash"></div>--}}
{{--    </section>--}}
    <!-- End. em_loading -->

    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder header-sticky multi_item bg-transparent">
                <div class="em_menu_sidebar">
                    <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal"
                            data-target="#mdllSidebarMenu-background">
                        <i class="ri-menu-fill"></i>
                    </button>
                </div>
                <div class="title_page">
                    <span class="page_name">{{--subcategory List--}}Liste des sous-catégories</span>
                </div>
                <div class="em_side_right">
                    <button type="button" class="btn btn_meunSearch _opacity  mr-3" id="saerch-On-header">
                        <i class="ri-search-2-line"></i>
                    </button>
                    <button type="button" class="btn justify-content-start" data-toggle="modal"
                            data-target="#mdllFilterJobs">
                        <i class="ri-equalizer-line"></i>
                    </button>

                </div>
            </header>
            <!-- End.main_haeder -->

            <!-- Start input_SaerchDefault -->
            <section class="margin-t-10 padding-t-50 padding-l-20 padding-r-20" id="searchDefault">
                <div class="input_SaerchDefault">
                    <div class="form-group with_icon mb-0">
                        <div class="input_group">
                            <input type="search" class="form-control h-48" {{--Find your favorite product--}} placeholder="Trouvez votre produit préféré">
                            <div class="icon">
                                <svg id="Iconly_Two-tone_Search" data-name="Iconly/Two-tone/Search"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="Search" transform="translate(2 2)">
                                        <circle id="Ellipse_739" cx="8.989" cy="8.989" r="8.989"
                                                transform="translate(0.778 0.778)" fill="none" stroke="#200e32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.5" />
                                        <path id="Line_181" d="M0,0,3.524,3.515" transform="translate(16.018 16.485)"
                                              fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                    </g>
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End. input_SaerchDefault -->

            <!-- Start em_swiper_products -->
            <section class="margin-b-20">
                <div class="padding-20 pb-0">
                    <p class="size-13 color-text m-0">
                        {{$subCategory->count()}} Sous-catégorie disponible
                    </p>
                </div>
                <div class="emContent_listJobs padding-20">
               @if(!$subCategory->isEmpty())
                    @foreach($subCategory as $row)
                    <a href="page-details-jobs.html" class="em__itemList_jobs">
                        <div class="media align-items-center">
                            <div class="img_logo">
                                <img src="{{ asset($row->img ?? ' ')  }}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="txt ">
                                    <h3 class="margin-t-20 ">{{$row->title}}</h3>

                                </div>
                            </div>
                        </div>

                    </a>
                    @endforeach
                    @else
                        <p style="text-align: center;" class="margin-t-40; " ><strong>Pas de sous-catégorie disponible</strong></p>
                   @endif
                </div>



            </section>
            <!-- End. em_swiper_products -->

        </div>
        <!-- Start em_main_footer -->
        <footer class="em_main_footer ouline_footer with__text">
            <div class="em_body_navigation -active-links">
                <div class="item_link">
                    <a href="app-pages.html" class="btn btn_navLink">
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
                        <div class="txt__tile">Pages</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="app-components.html" class="btn btn_navLink">
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

                        <div class="txt__tile">Elements</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="index.html" class="btn btn_navLink without_active">
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
                </div>
                <div class="item_link">
                    <a href="page-products-fullwidth.html" class="btn btn_navLink">
                        <div class="icon_current">
                            <svg id="Iconly_Curved_Bag" data-name="Iconly/Curved/Bag" xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" viewBox="0 0 24 24">
                                <g id="Bag" transform="translate(2.95 2.55)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M8.659,4.32A4.33,4.33,0,0,0,0,4.3V4.32"
                                          transform="translate(4.755 0)" fill="none" stroke="#9498ac"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5" />
                                    <path id="Stroke_3" data-name="Stroke 3" d="M.523.5H.477"
                                          transform="translate(11.5 8.324)" fill="none" stroke="#9498ac"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5" />
                                    <path id="Stroke_5" data-name="Stroke 5" d="M.523.5H.477"
                                          transform="translate(5.669 8.324)" fill="none" stroke="#9498ac"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5" />
                                    <path id="Stroke_7" data-name="Stroke 7"
                                          d="M9.084,14.934c-6.508,0-7.257-2.05-8.718-7.467C-1.1,2.033,1.841,0,9.084,0S19.268,2.033,17.8,7.467C16.341,12.884,15.592,14.934,9.084,14.934Z"
                                          transform="translate(0 4.006)" fill="none" stroke="#9498ac"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="items_basket_circle">2</div>
                        <div class="txt__tile">Shop</div>
                    </a>
                </div>
                <div class="item_link">
                    <a href="page-profile.html" class="btn btn_navLink">
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

                        <div class="txt__tile">Settings</div>
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
                                <a href="page-profile.html">
                                    <!-- You can use an image -->
                                    <!-- <img class="_imgUser" src="assets/img/person.png" alt=""> -->
                                    <div class="letter bg-yellow">
                                        <span>c</span>
                                    </div>
                                </a>
                                <div class="media-body">
                                    <div class="txt">
                                        <h3>Calvin Bell</h3>
                                        <p>+1 6540 605 490</p>
                                        <a href="#" class="btn btn_logOut">Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="np_balanceDefault emBlock__border with_bg">
                            <div class="txt">
                                <span class="title_sm">My Balance</span>
                                <h3>95.00 <span>USD</span></h3>
                                <p>Exp on Jan 15, 2021</p>
                            </div>
                            <div class="npRight">
                                <a href="page-add-balance.html" class="btn">
                                    <svg id="Iconly_Curved_Plus" data-name="Iconly/Curved/Plus"
                                         xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Plus" transform="translate(1.917 1.917)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M.526,0V5.957"
                                                  transform="translate(7.588 5.136)" fill="none" stroke="#0e132d"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" />
                                            <path id="Stroke_2" data-name="Stroke 2" d="M5.963.526H0"
                                                  transform="translate(5.132 7.588)" fill="none" stroke="#0e132d"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" />
                                            <path id="Stroke_3" data-name="Stroke 3"
                                                  d="M0,8.114C0,2.029,2.029,0,8.114,0s8.114,2.029,8.114,8.114S14.2,16.228,8.114,16.228,0,14.2,0,8.114Z"
                                                  transform="translate(0)" fill="none" stroke="#0e132d"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="modal-body">
                        <ul class="nav flex-column -active-links">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
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
                                        <span class="title_link">Discover</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="app-homes.html">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Home" data-name="Iconly/Curved/Home"
                                                 xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20">
                                                <g id="Home" transform="translate(2 1.667)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M0,.5H4.846"
                                                          transform="translate(5.566 11.28)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_2" data-name="Stroke 2"
                                                          d="M0,9.761C0,5.068.512,5.4,3.266,2.842,4.471,1.872,6.346,0,7.965,0S11.5,1.862,12.712,2.842c2.754,2.554,3.265,2.227,3.265,6.919,0,6.906-1.633,6.906-7.988,6.906S0,16.667,0,9.761Z"
                                                          transform="translate(0)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">Homepages</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="app-components.html">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_More_Circle" data-name="Iconly/Curved/More Circle"
                                                 xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20">
                                                <g id="More_Circle" data-name="More Circle"
                                                   transform="translate(2.292 2.292)">
                                                    <path id="Stroke_4" data-name="Stroke 4"
                                                          d="M0,7.708C0,1.927,1.927,0,7.708,0s7.708,1.927,7.708,7.708-1.927,7.708-7.708,7.708S0,13.489,0,7.708Z"
                                                          transform="translate(0 0)" fill="none" stroke="#556fff"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_11" data-name="Stroke 11" d="M.5.5H.5"
                                                          transform="translate(9.883 8.792)" fill="none" stroke="#556fff"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Stroke_13" data-name="Stroke 13" d="M.5.5H.5"
                                                          transform="translate(7.383 5.458)" fill="none" stroke="#556fff"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="2" />
                                                    <path id="Stroke_15" data-name="Stroke 15" d="M.5.5H.5"
                                                          transform="translate(4.876 8.792)" fill="none" stroke="#556fff"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="2" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">Components</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="app-pages.html">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Document" data-name="Iconly/Curved/Document"
                                                 xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20">
                                                <g id="Document" transform="translate(3.008 2.292)">
                                                    <path id="Stroke_1" data-name="Stroke 1" d="M6.017.5H0"
                                                          transform="translate(3.971 10.289)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_2" data-name="Stroke 2" d="M6.017.5H0"
                                                          transform="translate(3.971 7.155)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_3" data-name="Stroke 3" d="M2.3.5H0"
                                                          transform="translate(3.972 4.023)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_4" data-name="Stroke 4"
                                                          d="M0,7.708c0,5.781,1.748,7.708,6.992,7.708s6.992-1.927,6.992-7.708S12.238,0,6.992,0,0,1.927,0,7.708Z"
                                                          transform="translate(0)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>

                                        <span class="title_link">Pages</span>
                                    </div>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="page-products-fullwidth.html">
                                    <div class="">
                                        <div class="icon_current">
                                            <svg id="Iconly_Curved_Bag" data-name="Iconly/Curved/Bag"
                                                 xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20">
                                                <g id="Bag" transform="translate(2.458 2.125)">
                                                    <path id="Stroke_1" data-name="Stroke 1"
                                                          d="M7.216,3.6A3.608,3.608,0,0,0,0,3.584V3.6"
                                                          transform="translate(3.962)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_3" data-name="Stroke 3" d="M.515.5H.477"
                                                          transform="translate(9.504 6.853)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_5" data-name="Stroke 5" d="M.515.5H.477"
                                                          transform="translate(4.644 6.853)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                    <path id="Stroke_7" data-name="Stroke 7"
                                                          d="M7.57,12.445c-5.423,0-6.047-1.708-7.265-6.222S1.534,0,7.57,0s8.487,1.694,7.265,6.222S12.994,12.445,7.57,12.445Z"
                                                          transform="translate(0 3.338)" fill="none" stroke="#9498ac"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.5" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="title_link">Shop</span>
                                    </div>
                                    <span
                                        class="bg-red rounded-7 px-1 color-white min-w-25 px-1 h-28 d-flex align-items-center justify-content-center">3</span>
                                </a>
                            </li>
                            <label class="title__label">other</label>
                            <li class="nav-item">
                                <a class="nav-link" href="page-profile.html">
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
                                        <span class="title_link">Settings</span>
                                    </div>
                                    <div class="em_pulp">
                                        <span class="doted_item"></span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="page-support.html">
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
                                        <span class="title_link">Support</span>
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
                                        <span class="title_link">About</span>
                                    </div>

                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <div class="em_darkMode_menu">
                            <label class="text" for="switchDarkMode">
                                <h3>Dark Mode</h3>
                                <p>Browsing in night mode</p>
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

        <!-- Modal mdllFilter -->
        <div class="modal transition-bottom screenFull defaultModal emModal__filters fade" id="mdllFilterJobs"
             tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                        <div class="itemProduct_sm">
                            <h1 class="size-18 weight-600 color-secondary m-0">Filters</h1>
                        </div>
                        <div class="absolute right-0 padding-r-20">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tio-clear"></i>
                            </button>
                        </div>
                        <div class="absolute left-0 padding-l-20">
                            <span class="color-blue size-14">- Clear</span>
                        </div>
                    </div>
                    <div class="modal-body padding-b-100">

                        <div class="em_box_content_filter">
                            <div class="form-group">
                                <label>Location</label>
                                <select class="form-control custom-select">
                                    <option value="0">Please Select Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
                                        of
                                        The
                                    </option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic
                                        of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav
                                        Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South
                                        Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>

                            <div class="title_bk">
                                <h2>Categories</h2>
                            </div>
                            <div class="buttons_select">
                                <div class="items">
                                    <div class="group">
                                        <button type="button" class="btn item-active -active">Women</button>
                                        <button type="button" class="btn item-active">Men</button>
                                        <button type="button" class="btn item-active">Bags</button>
                                    </div>
                                    <div class="group">
                                        <button type="button" class="btn item-active">Shoes</button>
                                        <button type="button" class="btn item-active -active">Watches</button>
                                        <button type="button" class="btn item-active">Glasses</button>
                                    </div>
                                </div>
                            </div>

                            <div class="slider__range_chart">
                                <div class="title_bk margin-t-20">
                                    <h2>Price (US)</h2>
                                    <div class="extra-controls">
                                        <input type="text" class="form-control js-input-from" value="0" />
                                        <span class="color-text">-</span>
                                        <input type="text" class="form-control js-input-to" value="0" />
                                    </div>
                                </div>
                                <div class="range-slider">
                                    <input type="text" class="js-range-slider" data-prefix="$" value="" />
                                </div>
                            </div>

                            <div class="title_bk margin-t-20">
                                <h2>Job Type</h2>
                            </div>
                            <div class="buttons_select">
                                <div class="items">
                                    <div class="group">
                                        <button type="button" class="btn item-active -active">Full-Time</button>
                                        <button type="button" class="btn item-active">Part-Time</button>
                                        <button type="button" class="btn item-active">Projects</button>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="modal-footer border-0 pt-0 env-pb">
                        <a href="#"
                           class="btn min-w-140 bg-secondary m-0 hover:color-white color-white h-46 d-flex align-items-center rounded-8 justify-content-center">
                            Apply (3)
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
