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



            <!-- Start block_page_Comp -->
            <section class="em_swiper_products emCategories__jobs  padding-t-30 padding-b-30">

                <div class="em_bodyCarousel padding-t-50  ">
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

        </main>

    </div>
@endsection
