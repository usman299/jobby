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
                <div class="swiper-container swiper-intro-default swiper__text">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content_text">
                                <div class="cover">
                                    <img src="{{asset($content->jooberIntroScreen1)}}" alt="">
                                </div>
                                <br>
                                <br>
                                <h2 class="txt_gradient">From Checking to Buying</h2>
                                <p>
                                    Velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content_text">
                                <div class="cover">
                                    <img src="{{asset($content->jooberIntroScreen2)}}" alt="">
                                </div>
                                <br>
                                <br>
                                <h2 class="txt_gradient">Connect Everywhere, Anytime.</h2>
                                <p>
                                    Velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content_text">
                                <div class="cover">
                                    <img src="{{asset($content->jooberIntroScreen3)}}" alt="">
                                </div>
                                <br>
                                <br>
                                <h2 class="txt_gradient">All your servecis at the speed of light.</h2>
                                <p>
                                    Velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <br>
                <div class="npButtons_networks env-pb margin-b-20">
                    <a href="{{route('front.login', ['id' => 1])}}" class="btn rounded-pill border-snow" style="background: linear-gradient(to right, #febc31, #fe4d86);">
                        <span style="color: white" class="color-secondary">Continuer</span>
                    </a>
                </div>

            </section>
            <!-- End. npPage_introDefault -->


        </div>
    </div>

@endsection
