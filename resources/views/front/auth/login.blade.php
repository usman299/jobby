@extends('layouts.splash')
<!-- End. em_loading -->
@section('content')


    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder header-sticky multi_item">
                <div class="em_side_right">
                    <a class="rounded-circle d-flex align-items-center text-decoration-none" onclick="history.back()">
                        <i class="tio-chevron_left size-24 color-text"></i>
                        <span class="color-text size-14">Arrière</span>
                    </a>
                </div>
                <div class="title_page">
                    <span class="page_name">
                        <!-- title -->
                    </span>
                </div>

            </header>
            <!-- End.main_haeder -->

            <section class="em__signTypeOne padding-t-50">
                <div class="em_titleSign">
                    <div class="brand">
                        <h1>S'identifier</h1>
                    </div>
                </div>
                <form method="POST" class="loginformsubmit" action="{{ route('login') }}" >
                    @csrf
                <div class="em__body">
                        <div class="form-group with_icon" style="text-align: left!important;">
                            <label>Adresse e-mail</label>
                            <div class="input_group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@mail.com" required>
                                <div class="icon">
                                    <svg id="Iconly_Two-tone_Message" data-name="Iconly/Two-tone/Message"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Message" transform="translate(2 3)">
                                            <path id="Path_445" d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0"
                                                  transform="translate(3.954 5.561)" fill="none" stroke="#200e32"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" opacity="0.4" />
                                            <path id="Rectangle_511"
                                                  d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z"
                                                  transform="translate(0 0)" fill="none" stroke="#200e32"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                            @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group with_icon mb-2" id="show_hide_password" style="text-align: left!important;">
                            <label>Mot de passe</label>
                            <div class="input_group">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="tapez votre mot de passe" required>
                                <div class="icon">
                                    <svg id="Iconly_Two-tone_Password" data-name="Iconly/Two-tone/Password"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Password" transform="translate(2 2)">
                                            <path id="Stroke_1" data-name="Stroke 1"
                                                  d="M13.584,0H4.915C1.894,0,0,2.139,0,5.166v8.168C0,16.361,1.885,18.5,4.915,18.5h8.668c3.031,0,4.917-2.139,4.917-5.166V5.166C18.5,2.139,16.614,0,13.584,0Z"
                                                  transform="translate(0.75 0.75)" fill="none" stroke="#200e32"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" opacity="0.4" />
                                            <path id="Stroke_3" data-name="Stroke 3"
                                                  d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z"
                                                  transform="translate(4.989 8.148)" fill="none" stroke="#200e32"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" />
                                            <path id="Stroke_5" data-name="Stroke 5" d="M0,0H6.318V1.852"
                                                  transform="translate(8.692 10)" fill="none" stroke="#200e32"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" />
                                            <path id="Stroke_7" data-name="Stroke 7" d="M.5,1.852V0"
                                                  transform="translate(11.682 10)" fill="none" stroke="#200e32"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                  stroke-width="1.5" />
                                        </g>
                                    </svg>
                                </div>
                                <button type="button" class="btn hide_show icon_password">
                                    <i class="tio-hidden_outlined"></i>
                                </button>
                            </div>
                            @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <a href="#" class="link__forgot">Mot de passe oublié?</a>
                </div>
                <div class="em__footer">
                    <button type="submit" class="btn bg-primary color-white justify-content-center">S'identifier</button>
                    <a href="{{route('front.register', ['id' => $id])}}" class="btn hover:color-secondary justify-content-center">Pas un
                        membre?
                        S'inscrire maintenant</a>
                </div>
                </form>
            </section>

        </div>


    </div>

@endsection
