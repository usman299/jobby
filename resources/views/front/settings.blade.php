@extends('layouts.front')
@section('content')
    <section>
        <div class="padding-20">
            <span class="size-12 text-uppercase color-text d-block">Compte</span>
        </div>

        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <a href="#" class="item-link">
                        <div class="group">
                            <div class="icon bg-primary">
                                <svg id="Iconly_Curved_Profile" data-name="Iconly/Curved/Profile"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Profile" transform="translate(3.958 1.9)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M5.419,5.779C2.5,5.779,0,5.324,0,3.5S2.48,0,5.419,0c2.923,0,5.419,1.665,5.419,3.487S8.357,5.779,5.419,5.779Z"
                                              transform="translate(0 9.47)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M3.473,6.946a3.461,3.461,0,1,0-.024,0Z"
                                              transform="translate(1.94)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Détails personnels</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item-link">
                        <div class="group">
                            <div class="icon bg-turquoise">
                                <svg id="Iconly_Curved_Lock" data-name="Iconly/Curved/Lock"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Lock" transform="translate(3.365 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M7.221,5.267v-1.7A3.611,3.611,0,0,0,0,3.55V5.267"
                                              transform="translate(2.454 0)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3" d="M.5,0V1.758"
                                              transform="translate(5.564 9.03)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_5" data-name="Stroke 5"
                                              d="M6.064,0C1.516,0,0,1.241,0,4.965S1.516,9.93,6.064,9.93s6.065-1.241,6.065-4.965S10.612,0,6.064,0Z"
                                              transform="translate(0 4.809)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Sécurité et mot de passe</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="padding-20">
            <span class="size-12 text-uppercase color-text d-block">Paramètres</span>
        </div>

        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <button type="button" class="btn item-link" data-toggle="modal" data-target="#mdllLanguage">
                        <div class="group">
                            <div class="icon bg-secondary">
                                <svg id="Iconly_Curved_Discovery" data-name="Iconly/Curved/Discovery"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Discovery" transform="translate(2.177 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M0,7.323c0,5.492,1.831,7.323,7.323,7.323s7.323-1.831,7.323-7.323S12.815,0,7.323,0,0,1.831,0,7.323Z"
                                              transform="translate(0 0)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M0,5.228,1.246,1.246,5.228,0,3.982,3.981Z"
                                              transform="translate(4.709 4.709)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Changer de région</span>
                        </div>
                        <div class="group">
                            <span class="short__name">Giadelope</span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </button>
                </li>
                <li>
                    <a href="#" class="item-link">
                        <div class="group">
                            <div class="icon bg-orange">
                                <svg id="Iconly_Curved_Activity" data-name="Iconly/Curved/Activity"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Activity" transform="translate(1.939 1.86)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M0,3.95,2.369.871l2.7,2.122L7.391,0"
                                              transform="translate(3.537 5.949)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_2" data-name="Stroke 2"
                                              d="M1.522,0A1.522,1.522,0,1,1,0,1.522,1.521,1.521,0,0,1,1.522,0Z"
                                              transform="translate(12.109 0)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_4" data-name="Stroke 4"
                                              d="M14.492,4.921a16.474,16.474,0,0,1,.154,2.4c0,5.493-1.83,7.323-7.323,7.323S0,12.816,0,7.323,1.831,0,7.323,0A16.57,16.57,0,0,1,9.684.148"
                                              transform="translate(0 0.557)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Notification</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>

            </ul>
        </div>

        <div class="padding-20">
            <span class="size-12 text-uppercase color-text d-block">Soutien</span>
        </div>

        <div class="em__pkLink emBlock__border bg-white margin-b-10 border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <a href="#" class="btn item-link">
                        <div class="group">
                            <div class="icon bg-yellow">
                                <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Message" transform="translate(1.941 2.258)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M8.828,0s-2.541,3.05-4.4,3.05S0,0,0,0"
                                              transform="translate(3.121 4.882)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M0,7.217C0,1.8,1.885,0,7.54,0s7.54,1.8,7.54,7.217-1.885,7.217-7.54,7.217S0,12.63,0,7.217Z"
                                              transform="translate(0 0)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Soutien</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="item-link">
                        <div class="group">
                            <div class="icon bg-red">
                                <svg id="Iconly_Curved_Info_Square" data-name="Iconly/Curved/Info Square"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Info_Square" data-name="Info Square"
                                       transform="translate(2.177 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M0,7.323C0,1.831,1.831,0,7.323,0s7.323,1.831,7.323,7.323-1.831,7.323-7.323,7.323S0,12.815,0,7.323Z"
                                              transform="translate(14.646 14.646) rotate(180)" fill="none"
                                              stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3" d="M0,0V3.084"
                                              transform="translate(7.323 10.407) rotate(180)" fill="none"
                                              stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_15" data-name="Stroke 15" d="M0,0H.007"
                                              transform="translate(7.326 4.552) rotate(180)" fill="none"
                                              stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Sur Mister Jobby.</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>

            </ul>
        </div>

    </section>

    <!-- Start emSimple_main_footer -->
    <section
        class="emSimple_main_footer margin-t-10 border-t border-t-solid border-snow bg-white d-flex justify-content-center text-center padding-20">
        <div class="padding-t-10 padding-b-10">
            <a href="{{route('front.app')}}" class="brand_sm margin-b-20 d-block">
                <img src="{{asset('main/logo.jpg')}}" alt="">
            </a>
            <h3 class="size-13 weight-400 color-secondary margin-b-10">
                Copyright © Ikae Digital. Tous les droits sont réservés.
            </h3>
            <p class="size-12 color-text margin-b-20">
                Mister Jobby est une application de services mobiles polyvalents. Professionnellement construit avec un UX élevé pour donner à votre page
                le grand regard.
            </p>
            <div class="itemNetworks mt-2 emBlock__border">
                <a href="#" class="btn facebook">
                    <img src="{{asset('assets/img/icon/facebook.svg')}}" alt="">
                </a>
                <a href="#" class="btn instagram">
                    <img src="{{asset('assets/img/icon/instagram.svg')}}" alt="">
                </a>
                <a href="#" class="btn youtube">
                    <img src="{{asset('assets/img/icon/youtube.svg')}}" alt="">
                </a>
                <a href="#" class="btn twitter">
                    <i class="ri-twitter-fill color-twitter"></i>
                </a>
<!--                <button type="button" class="btn share" data-toggle="modal" data-target="#mdllButtons_share">
                    <i class="ri-share-forward-box-line color-green"></i>
                </button>-->
            </div>
            <div class="link_privacy">
                <a href="#" class="btn">Politique de confidentialité</a>
                <a href="#" class="btn">Conditions d'utilisation</a>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <!-- End. emSimple_main_footer -->
@endsection
@section('model')
    <!-- Modal Content -->
    <div class="modal transition-bottom screenFull defaultModal modal__language fade" id="mdllLanguage"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-15 weight-400 color-comment m-0">Choisissez une région</h1>
                    </div>
                    <!-- <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div> -->
                </div>
                <div class="modal-body p-0">
                    <!-- Start emPage__language -->
                    <div class="emPage__language em__signTypeOne pb-0">
                        <div class="itemSingle">
                            @foreach($countries as $countr)
                            <div class="item {{$countr->id == $user->country ? 'selected' : ''}}">
                                <div class="txt">
                                    <h2>{{$countr->name}}</h2>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- End. emPage__language -->
                </div>
                <div class="modal-footer d-block border-none env-pb">
                    <div class="em__footer text-center d-flex justify-content-center">
                        <a href="/" class="btn bg-primary rounded-pill btn__default">
                            <span class="color-white">Save Language</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
