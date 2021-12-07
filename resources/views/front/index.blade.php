@extends('layouts.front')
@section('content')
    <style>
        .emCategorie_itemJobs {
            padding: 10px 20px 14px 20px;
        }
        .emCategorie_itemJobs .icon {

            background-color: white;
            width: 50px;
            height: 50px;
            margin-bottom: 15px;

        }
        .em_owl_swipe .em_item .em_cover_img::before {

             background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));
        }
    </style>
    <div id="content">
        <!-- Start main_haeder -->
        <header class="main_haeder header-sticky multi_item">
            <div class="em_menu_sidebar">
                <button type="button" class="btn btn_menuSidebar item-show" data-toggle="modal"
                        data-target="#mdllSidebarMenu-background">
                    <i class="ri-menu-fill"></i>
                </button>
            </div>
            <div class="em_brand">
                <a href="index.html">
                    <img src="assets/img/logo-b.svg" alt="">
                </a>
            </div>
            <div class="em_side_right">
                <button class="btn rounded-circle share-button bg-transparent margin-r-10" data-toggle="modal"
                        data-target="#mdllButtons_share">
                    <i class="ri-share-forward-box-line"></i>
                </button>
                <button type="button" class="btn btn_meunSearch" id="saerch-On-header">
                    <i class="ri-search-2-line"></i>
                </button>
            </div>
        </header>
        <!-- End.main_haeder -->

        <main class="emPage__public">

            <!-- Start banner_swiper -->
            <section class="banner_swiper padding-t-70 bg-white">
                <div class="title_welcome">

                </div>
                <!-- Swiper -->
                <div class="owl-carousel owl-theme em-owlCentred em_owl_swipe margin-t-20">
                    @foreach($sliderGalery as $row)
                    <div class="item em_item">
                        <div class="em_cover_img">
                            <img src="{{ asset($row->img ?? ' ')  }}" alt="">
                            <div class="em_text">

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>
            <!-- End. banner_swiper -->

            <!-- Start block_page_Comp -->
            <section class="em_swiper_products emCategories__jobs  padding-t-30 padding-b-30">
                <div class="em_title_swiper">
                    <div class="txt">
                        <h2>Catégories</h2>
                        <p class="padding-b-20">{{--Swipe To View All Jobs--}}Faites glisser pour afficher tous les travaux.</p>
                    </div>
                    <div class="item_link">
                        <a href="{{route('front.categories')}}"><!--View all-->Voir tout</a>
                    </div>
                </div>
                <div class="em_bodyCarousel padding-t-20  bg-white">
                    <div class="container">

                        <div class="row">
                            @foreach($category as $row)
                            <div class=" col-4 padding-t-20 " >
                                <!-- item -->

                                <div class="item">
                                    <a href="{{route('front.subcategories',['id'=>$row->id])}}" class="emCategorie_itemJobs " style="background-color:{{$row->backColor}} ">
                                        <div class="icon">
                                            <img src="{{ asset($row->img ?? ' ')  }}" style="width: 30px; height:30px; background-color: white;">
                                        </div>
                                        <div class="txt">
                                            <h2>{{$row->title}}</h2>

                                        </div>
                                    </a>
                                </div>
                                <!-- item -->
                            </div>
                            @endforeach

                        </div>
                    </div>

                    </div>
            </section>
            <!-- End. block_page_Comp -->

            <!-- Start npAbout_sections -->
            <section class="npAbout_sections emBlock__border margin-t-10">

            </section>
            <!-- End. npAbout_sections -->

            <!-- Start bk_oiFeatures -->
            <section class="em_swiper_products bk_oiFeatures padding-b-30 padding-t-30 bg-white margin-t-10">


            </section>
            <!-- End. bk_oiFeatures -->

            <!-- Start box_darkMode -->
            <section class="bg-white margin-t-10 emBlock__border padding-b-30">


            </section>
            <!-- End. box_darkMode -->

            <!-- Start emSimple_main_footer -->
            <section
                class="emSimple_main_footer margin-t-10 border-t border-t-solid border-snow bg-white d-flex justify-content-center text-center padding-20">

            </section>
            <!-- End. emSimple_main_footer -->

        </main>

    </div>
@endsection
