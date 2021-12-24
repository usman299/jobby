@extends('layouts.front')
@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <style>
        .emCategorie_itemJobs {
            padding: 10px 20px 5px 20px;
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
        #map { height: 220px; width: 100vw; }

    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>

@endsection
@section('content')
        <main class="emPage__public">
            <!-- Start banner_swiper -->
            <section class="banner_sliderFull margin-b-20 margin-t-40">
                <!-- Swiper -->
                <div class="swiper-container em-swiperSliderFull -height-sm padding-t-10">
                    <div class="swiper-wrapper">
                        @foreach($sliderGalery as $row)
                        <div class="swiper-slide">
                            <div class="--item-inside">
                                <div class="cover_img d-flex justify-content-center">
                                    <img src="{{ asset($row->img ?? ' ')  }}" alt="">
                                    <div
                                        class="text_img position-absolute bottom-0 padding-b-50 padding-l-20 text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <!-- End. banner_swiper -->
            @if(Auth::user()->role == 2)
            <!-- Start block_page_Comp -->
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">
                            <h5>Populaires en ce moment</h5>

                        </div>
{{--                        <div class="item_link">--}}
{{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-20">
                        <div class="owl-carousel owl-theme owlThemeCorses">

                            <!-- item -->
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 23])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b10.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                             Menage a domicile
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>26€-52€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 14])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b11.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                               Aide au demenagement
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>52€-150€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('job.request', ['id' => 19])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b9.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Peinture interieure
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>100€-350€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 7])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b8.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Couper un arbre
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>100€-350€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('job.request', ['id' => 1])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b7.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Assemblage de meubles
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>30€-84€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 16])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b6.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Déplacer de l’électroménager
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>30€-84€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 15])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b5.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Deplacer un meuble
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>21€-42€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 29])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b4.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Grade d'enfants
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>20€-60€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 24])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b3.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Repassage
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>25€-35€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 5])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b2.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Tondre la pelouse
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>29€-57€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('job.request', ['id' => 4])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b1.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Fixation d'etageres
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>21€-42€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="em_itemCourse_grid">
                                    <a href="{{route('request.subcategory', ['id' => 6])}}" class="card">
                                        <div class="">
                                            <img src="{{ asset('admin/subcategory/b8.jpeg')  }}" class="card-img-top" alt="img">
                                        </div>
                                        <div class="">

                                            <h6 class="card-title" style="margin: 10px;color: black;">
                                                Taille de haie
                                            </h6>
                                            <p class="card-text" style="margin: 10px;color: black;">
                                                <strong>100€-350€</strong>
                                            </p>



                                        </div>
                                    </a>
                                </div>
                            </div>
                                <!-- item -->

                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">
                            <h5>Decouvrez d'autres Services</h5>
                            <strong>Trouver un prof</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($subcategory as $row)
                            <!-- item -->
                            @if($row->category_id==9)
                                <div class="item">
                                    <div class="em_itemCourse_grid">
                                        <a href="{{route('request.subcategory', ['id' => $row->id])}}" class="card">
                                            <div class="">
                                                <img src="{{ asset($row->category->img ?? ' ')  }}" class="card-img-top" alt="img">
                                            </div>
                                            <div class="">

                                                <h6 class="card-title" style="margin: 5px;color: black;">
                                                    {{$row->title}}
                                                </h6>
                                                <p class="card-text" style="margin: 5px;color: black;">
                                                    {{$row->category->title}}
                                                </p>



                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endif
                                <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">
                            <strong>Reparer</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($childcatgory as $row)
                            <!-- item -->
                    @if($row->subcategory_id==2 || $row->subcategory_id==4 )
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('job.request', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{Str::limit($row->title, 22)}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{Str::limit($row->category->title, 22)}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">
                            <strong>Amenager</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($childcatgory as $row)
                            <!-- item -->
                                @if($row->subcategory_id==1 )
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('job.request', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{Str::limit($row->title, 22)}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{Str::limit($row->category->title, 22)}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">
                            <strong>Renover</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($childcatgory as $row)
                            <!-- item -->
                                @if($row->subcategory_id==3)
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('job.request', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{Str::limit($row->title, 22)}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{Str::limit($row->category->title, 22)}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">

                            <strong>Entretenir le jardin</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($subcategory as $row)
                            <!-- item -->
                                @if($row->category_id==2)
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('request.subcategory', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{$row->title}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{$row->category->title}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">

                            <strong>Déménagement</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($subcategory as $row)
                            <!-- item -->
                                @if($row->category_id==3)
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('request.subcategory', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{$row->title}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{$row->category->title}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">

                            <strong>Enfants</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($subcategory as $row)
                            <!-- item -->
                                @if($row->category_id==5)
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('request.subcategory', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{$row->title}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{$row->category->title}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">

                            <strong>Animaux</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($subcategory as $row)
                            <!-- item -->
                                @if($row->category_id==6)
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('request.subcategory', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{$row->title}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{$row->category->title}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">

                            <strong>Aide a domicile</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($subcategory as $row)
                            <!-- item -->
                                @if($row->category_id==8)
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('request.subcategory', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{$row->title}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{$row->category->title}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">

                            <strong>Évenementiel</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($subcategory as $row)
                            <!-- item -->
                                @if($row->category_id==10)
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('request.subcategory', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{$row->title}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{$row->category->title}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                    <!-- em_title_swiper -->
                    <div class="em_title_swiper">
                        <div class="txt">

                            <strong>Réparation</strong>

                        </div>
                        {{--                        <div class="item_link">--}}
                        {{--                            <a href="{{route('applicant.services')}}">Voir tout</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="em_bodyCarousel padding-t-10">
                        <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($subcategory as $row)
                            <!-- item -->
                                @if($row->category_id==12)
                                    <div class="item">
                                        <div class="em_itemCourse_grid">
                                            <a href="{{route('request.subcategory', ['id' => $row->id])}}" class="card">
                                                <div class="">
                                                    <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                                </div>
                                                <div class="">

                                                    <h6 class="card-title" style="margin: 5px;color: black;">
                                                        {{$row->title}}
                                                    </h6>
                                                    <p class="card-text" style="margin: 5px;color: black;">
                                                        {{$row->category->title}}
                                                    </p>



                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            <!-- item -->
                            @endforeach
                        </div>
                    </div>
                </section>

            <!-- End. block_page_Comp -->
            <!-- Start em_swiper_products -->
{{--            SERVICECS COMMENT--}}
{{--            <section class="em_swiper_products emCoureses__grid margin-b-20">--}}
{{--                <!-- em_title_swiper -->--}}
{{--                <div class="em_title_swiper">--}}
{{--                    <div class="txt">--}}
{{--                        <h2>Services populaires</h2>--}}
{{--                        <p>Les meilleurs services à surveiller.</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_link">--}}
{{--                        <a href="{{route('applicant.services')}}">Voir tout</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="em_bodyCarousel padding-t-20">--}}
{{--                    <div class="owl-carousel owl-theme owlThemeCorses">--}}
{{--                        @foreach($services as $row)--}}
{{--                        <!-- item -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="em_itemCourse_grid">--}}
{{--                                <a href="{{route('applicant.singleService',['id'=>$row->id])}}" class="card">--}}
{{--                                    <div class="cover_card">--}}
{{--                                        <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="head_card">--}}
{{--                                            <span> {{$row->duration ?? ''}}</span>--}}

{{--                                        </div>--}}
{{--                                        <h5 class="card-title">--}}
{{--                                            {{$row->title ?? ''}}--}}
{{--                                        </h5>--}}
{{--                                        <p class="card-text">--}}
{{--                                            {{Str::limit($row->description, 50) ?? ''}}--}}
{{--                                        </p>--}}

{{--                                        <div class="card_user">--}}
{{--                                            <svg id="Iconly_Two-tone_Profile" data-name="Iconly/Two-tone/Profile"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg" width="16" height="16"--}}
{{--                                                 viewBox="0 0 16 16">--}}
{{--                                                <g id="Profile" transform="translate(2.667 1.333)">--}}
{{--                                                    <circle id="Ellipse_736" cx="3.185" cy="3.185" r="3.185"--}}
{{--                                                            transform="translate(1.867)" fill="none" stroke="#7e848e"--}}
{{--                                                            stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                            stroke-miterlimit="10" stroke-width="1.2" opacity="0.4" />--}}
{{--                                                    <path id="Path_33945"--}}
{{--                                                          d="M0,2.011a1.477,1.477,0,0,1,.146-.647A2.7,2.7,0,0,1,2.026.284,11.191,11.191,0,0,1,3.588.064a16.7,16.7,0,0,1,2.923,0,11.32,11.32,0,0,1,1.562.22,2.593,2.593,0,0,1,1.879,1.08,1.513,1.513,0,0,1,0,1.3A2.567,2.567,0,0,1,8.073,3.738a10.478,10.478,0,0,1-1.562.226A17.214,17.214,0,0,1,4.131,4a2.71,2.71,0,0,1-.543-.037,10.282,10.282,0,0,1-1.556-.226A2.58,2.58,0,0,1,.146,2.664,1.519,1.519,0,0,1,0,2.011Z"--}}
{{--                                                          transform="translate(0 8.79)" fill="none" stroke="#7e848e"--}}
{{--                                                          stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                          stroke-miterlimit="10" stroke-width="1.2" />--}}
{{--                                                </g>--}}
{{--                                            </svg>--}}

{{--                                            <span>{{$row->user->firstName ?? ''}} {{$row->user->lastName ?? ''}}</span>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- item -->--}}
{{--                            @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
            <!-- End. em_swiper_products -->
                @else
            <section class="components_page padding-b-30">

                <div class="emTitle_co padding-20">
                    <h2 class="size-16 weight-500 color-secondary mb-1">Trouver sur la carte</h2>
                    <p class="size-12 color-text m-0">Trouvez des emplois actifs dans votre région</p>
                </div>

                <div id="map"></div>
                <!-- Start title -->
                <div class="emTitle_co padding-20">
                    <h2 class="size-16 weight-500 color-secondary mb-1">Dernières offres d'emploi</h2>
                    <p class="size-12 color-text m-0">Découvrez le dernier emploi dans votre région</p>
                </div>
                <!-- End. title -->

                <!-- Start Standard layout -->
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">

                    @if($jobrequests->count())
                    @foreach($jobrequests as $job)
                    <div class="item em_item_product item_list">
                        <div class="title_product">
                            <a href="{{route('applicant.jobrequest.detail', ['id' => $job->id])}}">
                                <h4 class="item_price" style="margin-bottom: 5px">{{$job->title}}</h4>
                                <h3>{{$job->detail_description}}</h3>
                                <span  class="rounded-pill bg-orange px-1 color-white min-w-25 h-21 d-flex align-items-center justify-content-center">{{$job->category->title}}</span> /
                                <span  class="rounded-pill bg-primary px-1 color-white min-w-25 h-21 d-flex align-items-center justify-content-center">{{$job->subcategory->title}}</span>
                                <p class="item_price">{{$job->estimate_budget}} €</p>
                                <p style="color: black">{{$job->service_date->format('d-m-y')}} ({{$job->duration}} heures) </p>
                            </a>

                            <a href="{{route('applicant.jobrequest.detail', ['id' => $job->id])}}">
                                <button type="button" class="btn btn_addCart item-active">
                                    <div class="itemRating">
                                        <span style="min-width: 80px;" class="number">Vue</span>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div class="item em_item_product item_list">
                        <p >Il semble qu'il n'y ait aucune demande d'emploi par candidat dans votre pays qui corresponde à votre spécialisation. Ou allez à la section profil pour mettre à jour votre profil avec vos spécialisations</p>
                        </div>
                    @endif

                        {{ $jobrequests->links() }}

                </div>
                <!-- End. Standard layout -->


            </section>
                @endif
            <br>
        </main>
    <br>
    <br>
    <br>


@endsection
@section('script')

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script>


        var mymap = L.map('map', { gestureHandling: true,  dragging: true, tap: true }).setView([16.1922065, -61.272382499999], 10);

        mymap.locate({setView: true, maxZoom: 16});
        function locateUser() {
            mymap.locate({setView : true,  maxZoom: 16})
        }
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 200,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        function onLocationError(e) {
            alert(e.message);
        }
        mymap.on('locationerror', onLocationError);

        function onLocationFound(e) {
            var radius = e.accuracy;

            // L.marker(e.latlng).addTo(mymap)
            //     .bindPopup("Vous êtes à l'intérieur " + radius + " mètres de ce point");

            // L.circle(e.latlng, radius).addTo(mymap);
        }

        mymap.on('locationfound', onLocationFound);

       /* var latlng = L.latLng(33.650911, 73.013316);
        var newMarker = new L.marker(latlng).addTo(mymap).on('click', function(e) {
            console.log(e.latlng);
        });*/

        var locations = [
            @foreach($jobrequests as $jobb)
            ["{{$jobb->title}}", {{$jobb->lat}},{{$jobb->long}}, {{$jobb->id}}],
            @endforeach
        ];
        console.log(locations);

        for (var i = 0; i < locations.length; i++) {
            var link = $('<a href="{{url('applicant/jobrequests/detail/')}}/'+locations[i][3]+'" class="speciallink">'+locations[i][0]+'</a>')[0];
            marker = new L.marker([locations[i][1], locations[i][2]])
                .bindPopup(link)
                .addTo(mymap);
        }

    </script>
@endsection
