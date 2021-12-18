@extends('layouts.front')
@section('content')
    <section class="box__dashboard">
        <div class="group">
            <a href="#" class="btn item_link">
                <div class="icon bg-green">
                    <svg id="Iconly_Curved_Wallet" data-name="Iconly/Curved/Wallet" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                        <g id="Wallet" transform="translate(2.149 2.94)">
                            <path id="Stroke_1" data-name="Stroke 1" d="M5.106,4.059H2.029A2.029,2.029,0,0,1,2.029,0H5.082" transform="translate(9.506 4.619)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                            <path id="Stroke_3" data-name="Stroke 3" d="M.563.476H.328" transform="translate(11.318 6.126)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                            <path id="Stroke_5" data-name="Stroke 5" d="M0,.476H3.214" transform="translate(3.873 3.031)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                            <path id="Stroke_7" data-name="Stroke 7" d="M0,6.76C0,1.69,1.84,0,7.363,0s7.363,1.69,7.363,6.76-1.84,6.76-7.363,6.76S0,11.83,0,6.76Z" transform="translate(0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                        </g>
                    </svg>

                </div>
                <div class="txt">
                    <p>Mon solde</p>
                    <span>0 €</span>
                </div>
            </a>
            <a href="#" class="btn item_link">
                <div class="icon bg-red">
                    <svg id="Iconly_Curved_Paper_Plus" data-name="Iconly/Curved/Paper Plus" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                        <g id="Paper_Plus" data-name="Paper Plus" transform="translate(2.89 2.177)">
                            <path id="Stroke_1" data-name="Stroke 1" d="M13.07,4.394,8.582.119A14.408,14.408,0,0,0,6.642,0C1.663,0,0,1.837,0,7.323s1.663,7.323,6.642,7.323,6.65-1.829,6.65-7.323A16.661,16.661,0,0,0,13.07,4.394Z" transform="translate(0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                            <path id="Stroke_3" data-name="Stroke 3" d="M0,0V2.107A2.662,2.662,0,0,0,2.663,4.769H5" transform="translate(8.141 0.065)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                            <path id="Stroke_5" data-name="Stroke 5" d="M3.879.5H0" transform="translate(4.562 7.599)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                            <path id="Stroke_7" data-name="Stroke 7" d="M.5,3.879V0" transform="translate(6.002 6.16)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                        </g>
                    </svg>
                </div>
                <div class="txt">
                    <p>Projets actifs</p>
                    <span>0</span>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="padding-20">
            <span class="size-12 text-uppercase color-text d-block">Compte</span>
        </div>
        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <a href="{{route('settings.profile')}}" class="item-link">
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
                            <span class="path__name">Mon Profil</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('password.change')}}" class="item-link">
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
                @if($user->role == 1)
                <li>
                    <a href="{{route('get.badge')}}" class="item-link">
                        <div class="group">
                            <div class="icon bg-red">
                                <svg id="Iconly_Curved_Paper_Plus" data-name="Iconly/Curved/Paper Plus" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                    <g id="Paper_Plus" data-name="Paper Plus" transform="translate(2.89 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M13.07,4.394,8.582.119A14.408,14.408,0,0,0,6.642,0C1.663,0,0,1.837,0,7.323s1.663,7.323,6.642,7.323,6.65-1.829,6.65-7.323A16.661,16.661,0,0,0,13.07,4.394Z" transform="translate(0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M0,0V2.107A2.662,2.662,0,0,0,2.663,4.769H5" transform="translate(8.141 0.065)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_5" data-name="Stroke 5" d="M3.879.5H0" transform="translate(4.562 7.599)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_7" data-name="Stroke 7" d="M.5,3.879V0" transform="translate(6.002 6.16)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Obtenir badge PRO</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('proof.indentity')}}" class="item-link">
                        <div class="group">
                            <div class="icon bg-green">
                                <svg id="Iconly_Curved_Paper_Plus" data-name="Iconly/Curved/Paper Plus" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                    <g id="Paper_Plus" data-name="Paper Plus" transform="translate(2.89 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M13.07,4.394,8.582.119A14.408,14.408,0,0,0,6.642,0C1.663,0,0,1.837,0,7.323s1.663,7.323,6.642,7.323,6.65-1.829,6.65-7.323A16.661,16.661,0,0,0,13.07,4.394Z" transform="translate(0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M0,0V2.107A2.662,2.662,0,0,0,2.663,4.769H5" transform="translate(8.141 0.065)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_5" data-name="Stroke 5" d="M3.879.5H0" transform="translate(4.562 7.599)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_7" data-name="Stroke 7" d="M.5,3.879V0" transform="translate(6.002 6.16)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Identity Document</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
                @endif
            </ul>
        </div>


    </section>

    <!-- Start emSimple_main_footer -->
    <section style="position: absolute; bottom: 0"
        class="emSimple_main_footer margin-t-10 border-t border-t-solid border-snow bg-white d-flex justify-content-center text-center padding-20">
        <div class="padding-t-10 padding-b-10">
            <a href="{{route('front.app')}}" class="brand_sm margin-b-20 d-block">
                <img style="height: 35px" src="{{asset('main/logo.jpg')}}" alt="">
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
@endsection

