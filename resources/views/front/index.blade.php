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

            <!-- Start banner_swiper -->
            <section class="banner_swiper padding-t-50 bg-white">
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
            @if(Auth::user()->role == 2)
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
                <div class="em_bodyCarousel   bg-white">
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
                                            <h2>{{Str::limit($row->title, 13)}}</h2>

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
            <!-- Start em_swiper_products -->
            <section class="em_swiper_products emCoureses__grid margin-b-20">
                <!-- em_title_swiper -->
                <div class="em_title_swiper">
                    <div class="txt">
                        <h2>Services populaires</h2>
                        <p>Les meilleurs services à surveiller.</p>
                    </div>
                    <div class="item_link">
                        <a href="{{route('applicant.services')}}">Voir tout</a>
                    </div>
                </div>
                <div class="em_bodyCarousel padding-t-20">
                    <div class="owl-carousel owl-theme owlThemeCorses">
                        @foreach($services as $row)
                        <!-- item -->
                        <div class="item">
                            <div class="em_itemCourse_grid">
                                <a href="{{route('applicant.singleService',['id'=>$row->id])}}" class="card">
                                    <div class="cover_card">
                                        <img src="{{ asset($row->img ?? ' ')  }}" class="card-img-top" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <div class="head_card">
                                            <span> {{$row->duration ?? ''}}</span>

                                        </div>
                                        <h5 class="card-title">
                                            {{$row->title ?? ''}}
                                        </h5>
                                        <p class="card-text">
                                            {{Str::limit($row->description, 50) ?? ''}}
                                        </p>

                                        <div class="card_user">
                                            <svg id="Iconly_Two-tone_Profile" data-name="Iconly/Two-tone/Profile"
                                                 xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 16 16">
                                                <g id="Profile" transform="translate(2.667 1.333)">
                                                    <circle id="Ellipse_736" cx="3.185" cy="3.185" r="3.185"
                                                            transform="translate(1.867)" fill="none" stroke="#7e848e"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-miterlimit="10" stroke-width="1.2" opacity="0.4" />
                                                    <path id="Path_33945"
                                                          d="M0,2.011a1.477,1.477,0,0,1,.146-.647A2.7,2.7,0,0,1,2.026.284,11.191,11.191,0,0,1,3.588.064a16.7,16.7,0,0,1,2.923,0,11.32,11.32,0,0,1,1.562.22,2.593,2.593,0,0,1,1.879,1.08,1.513,1.513,0,0,1,0,1.3A2.567,2.567,0,0,1,8.073,3.738a10.478,10.478,0,0,1-1.562.226A17.214,17.214,0,0,1,4.131,4a2.71,2.71,0,0,1-.543-.037,10.282,10.282,0,0,1-1.556-.226A2.58,2.58,0,0,1,.146,2.664,1.519,1.519,0,0,1,0,2.011Z"
                                                          transform="translate(0 8.79)" fill="none" stroke="#7e848e"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-miterlimit="10" stroke-width="1.2" />
                                                </g>
                                            </svg>
                                            <?php $user = \App\User::where('id','=',$row->jobber_id)->first(); ?>

                                            <span>{{$user->firstName ?? ''}} {{$user->lastName ?? ''}}</span>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- item -->
                            @endforeach
                    </div>
                </div>
            </section>
            <!-- End. em_swiper_products -->
                @else
            <section class="components_page padding-b-30">

                <!-- Start title -->
                <div class="emTitle_co padding-20">
                    <h2 class="size-16 weight-500 color-secondary mb-1">Dernières offres d'emploi</h2>
                    <p class="size-12 color-text m-0">Découvrez le dernier emploi dans votre région</p>
                </div>
                <!-- End. title -->

                <!-- Start Standard layout -->
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">

                    @foreach($jobrequests as $job)
                    <div class="item em_item_product item_list">
                        <div class="title_product">
                            <button style=" position: absolute !important;right: 20px;top: 15px; width: 30px; height: 30px; " type="button" class="btn rounded-8 btn_addCart item-active -active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M12.75 8.32727C12.75 7.91306 12.4142 7.57727 12 7.57727C11.5858 7.57727 11.25 7.91306 11.25 8.32727V11.2405H8.33333C7.91911 11.2405 7.58333 11.5763 7.58333 11.9905C7.58333 12.4047 7.91911 12.7405 8.33333 12.7405H11.25V15.6536C11.25 16.0678 11.5858 16.4036 12 16.4036C12.4142 16.4036 12.75 16.0678 12.75 15.6536V12.7405H15.6667C16.0809 12.7405 16.4167 12.4047 16.4167 11.9905C16.4167 11.5763 16.0809 11.2405 15.6667 11.2405H12.75V8.32727Z" fill="#200E32"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="#200E32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                @if($job->isApplied())
                                <span class="icon_active"></span>
                                <span class="txt_added">Appliquée</span>
                                @endif
                            </button>

                            <a href="">
                            <h4 class="item_price" style="margin-bottom: 10px">{{$job->title}}</h4>
                            <h3>{{$job->description}}</h3>
                                <span  class="rounded-pill bg-orange px-1 color-white min-w-25 h-21 d-flex align-items-center justify-content-center">{{$job->category->title}}</span> /
                                <span  class="rounded-pill bg-primary px-1 color-white min-w-25 h-21 d-flex align-items-center justify-content-center">{{$job->subcategory->title}}</span>
                                <p class="item_price">{{$job->max_price}} € - {{$job->min_price}} €</p>
                            </a>
                            <a href="{{route('applicant.jobrequest.detail', ['id' => $job->id])}}">
                                <button type="button" class="btn btn_addCart item-active">
                                    <div class="itemRating">
                                        <span style="min-width: 80px;" class="number">Vue</span>
                                    </div>
                                </button></a>
                        </div>

                    </div>
                    @endforeach

                </div>
                <!-- End. Standard layout -->

            </section>
                @endif
            <br>
            <br>
            <br>
        </main>


@endsection
