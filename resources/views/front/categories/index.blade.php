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
@endsection
