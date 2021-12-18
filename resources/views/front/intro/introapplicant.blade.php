@extends('layouts.splash')
<!-- End. em_loading -->
@section('content')


    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->

            <!-- End.main_haeder -->

            <!-- Start npPage_introDefault -->
            <section class="npPage_introDefault">

                <!-- Swiper -->
                <div class="swiper-container swiper-intro-default">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url('{{asset($content->applicantIntroScreen1)}}'); background-repeat: no-repeat; background-size: 100% 100%; position: relative; height: 100vh; text-align: center; ">
                            <div class="content_text hero-text">
                                <div class="npButtons_networks env-pb margin-b-20">
                                    <a href="{{route('front.login', ['id' => 2])}}" class="btn rounded-pill border-snow" style="background: linear-gradient(to right, #4ce9fe, #378afe);">
                                        <span style="color: white" class="color-secondary">Continuer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url('{{asset($content->applicantIntroScreen2)}}'); background-repeat: no-repeat; background-size: 100% 100%; position: relative;  height: 100vh; width: 100%; text-align: center; ">
                            <div class="content_text hero-text">
                                <div class="npButtons_networks env-pb margin-b-20">
                                    <a href="{{route('front.login', ['id' => 2])}}" class="btn rounded-pill border-snow" style="background: linear-gradient(to right, #4ce9fe, #378afe);">
                                        <span style="color: white" class="color-secondary">Continuer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image:url('{{asset($content->applicantIntroScreen3)}}'); background-repeat: no-repeat; background-size: 100% 100%; position: relative;  height: 100vh; width: 100%; text-align: center; ">
                            <div class="content_text hero-text">
                                <div class="npButtons_networks env-pb margin-b-20">
                                    <a href="{{route('front.login', ['id' => 2])}}" class="btn rounded-pill border-snow" style="background: linear-gradient(to right, #4ce9fe, #378afe);">
                                        <span style="color: white" class="color-secondary">Continuer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
{{--                    <div class="swiper-pagination"></div>--}}
                </div>


            </section>
            <!-- End. npPage_introDefault -->


        </div>
    </div>

@endsection
