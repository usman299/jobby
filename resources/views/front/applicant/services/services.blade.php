@extends('layouts.front')
@section('content')
    <!-- Start input_SaerchDefault -->
    <section class="padding-t-70 change_colorSearch">
        <div class="input_SaerchDefault">
            <div class="form-group with_icon mb-0">
                <div class="input_group">
                    <input type="search" class="form-control border-0" placeholder="Tapez votre mot de recherche...">
                    <div class="icon">
                        <svg id="Iconly_Two-tone_Search" data-name="Iconly/Two-tone/Search"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Search" transform="translate(2 2)">
                                <circle id="Ellipse_739" cx="8.989" cy="8.989" r="8.989"
                                        transform="translate(0.778 0.778)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5"></circle>
                                <path id="Line_181" d="M0,0,3.524,3.515" transform="translate(16.018 16.485)"
                                      fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                            </g>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End. input_SaerchDefault -->

    <!-- Start em_swiper_products -->
    <section class="emCoureses__grid course__list">
        <div class="em_bodyCarousel padding-t-20">
            <!-- em_itemCourse_grid -->
            @if(!$services->isEmpty())
            @foreach($services as $row)
            <div class="em_itemCourse_grid list">
                <a href="{{route('applicant.singleService',['id'=>$row->id])}}" class="card">
                    <div class="row no-gutters">
                        <div class="col-4">
                            <div class="cover_card">
                                <img src="{{ asset($row->img ?? ' ')  }}" loading="lazy"  class="card-img-top" alt="img">
                            </div>
                        </div>
                        <div class="col-8 my-auto">
                            <div class="card-body">
                                <div class="head_card">
                                    <span>- {{$row->duration ?? ''}}</span>

                                </div>
                                <h5 class="card-title">
                                    {{$row->title ?? ''}}
                                </h5>
                                <p class="card-text">
                                    {{$row->description ?? ''}}
                                </p>
                                <div class="card_footer">
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


                                        <span>{{$row->user->firstName ?? ''}} {{$row->user->lastName ?? ''}}</span>
                                    </div>
                                    <div class="amount_co size-14 weight-600 color-secondary">
                                        <span class="color-text">{{$row->price ?? ''}}€</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
            @else
                <p style="text-align: center;" class="margin-t-40; " ><strong>Services non disponibles</strong></p>
        @endif
            <!-- em_itemCourse_grid -->
        </div>
    </section>
    <br>
    <br>
    <!-- End. em_swiper_products -->

@endsection
