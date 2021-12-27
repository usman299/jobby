@extends('layouts.front')
@section('content')
    @if(Auth::user()->role == 1)
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
                    <span>{{$payment}} €</span>
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
                    <span>{{$contract}}</span>
                </div>
            </a>
        </div>
    </section>
    @endif
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
                    <a href="{{route('jobber.skills')}}" class="item-link">
                        <div class="group">
                            <div class="icon bg-secondary">
                                <svg id="Iconly_Curved_Discovery" data-name="Iconly/Curved/Discovery" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                    <g id="Discovery" transform="translate(2.177 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M0,7.323c0,5.492,1.831,7.323,7.323,7.323s7.323-1.831,7.323-7.323S12.815,0,7.323,0,0,1.831,0,7.323Z" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M0,5.228,1.246,1.246,5.228,0,3.982,3.981Z" transform="translate(4.709 4.709)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Compétences</span>
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
                            <span class="path__name">Document identité</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('jobber.earnings')}}" class="item-link">
                        <div class="group">
                            <div class="icon bg-purple">
                                <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                    <g id="Message" transform="translate(1.941 2.258)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M8.828,0s-2.541,3.05-4.4,3.05S0,0,0,0" transform="translate(3.121 4.882)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M0,7.217C0,1.8,1.885,0,7.54,0s7.54,1.8,7.54,7.217-1.885,7.217-7.54,7.217S0,12.63,0,7.217Z" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Revenus</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
                <li>
                        <a href="{{route('jobber.reviews')}}" class="item-link">
                            <div class="group">
                                <div class="icon bg-warning">
                                    <i class="ri-star-fill"></i>
                                </div>
                                <span class="path__name">Evaluations</span>
                            </div>
                            <div class="group">
                                <span class="short__name"></span>
                                <i class="tio-chevron_right -arrwo"></i>
                            </div>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{route('applicant.transactions')}}" class="item-link">
                            <div class="group">
                                <div class="icon bg-yellow">
                                    <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                        <g id="Message" transform="translate(1.941 2.258)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M8.828,0s-2.541,3.05-4.4,3.05S0,0,0,0" transform="translate(3.121 4.882)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            <path id="Stroke_3" data-name="Stroke 3" d="M0,7.217C0,1.8,1.885,0,7.54,0s7.54,1.8,7.54,7.217-1.885,7.217-7.54,7.217S0,12.63,0,7.217Z" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        </g>
                                    </svg>
                                </div>
                                <span class="path__name">Transactions</span>
                            </div>
                            <div class="group">
                                <span class="short__name"></span>
                                <i class="tio-chevron_right -arrwo"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('jobber.reviews')}}" class="item-link">
                            <div class="group">
                                <div class="icon bg-warning">
                                    <i class="ri-star-fill"></i>
                                </div>
                                <span class="path__name">Evaluations</span>
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
    <br>
    <br>
    <br>
@endsection

