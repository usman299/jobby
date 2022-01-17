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

            <section class="em__signTypeOne margin-t-40">

                <div class="em_titleSign">
                    <div class="brand">
                        <img style=" width: 100%;" src="{{asset('images/jobbby.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="em__body">
                        <div class="form-group with_icon" style="text-align: left!important;">
                            {{--                            <label>Adresse e-mail</label>--}}
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

                    </div>
                    <div style="margin-top: 120px; background-color:  ">
                        <button type="submit"  style="background-color: red; background-image: linear-gradient(#ea4f31, #f39000); border-radius: 12px;width: 90%;"  class="btn bg-primary color-white justify-content-center">Envoyer un lien</button>
                        {{--                        <a href="{{route('front.register', ['id' => $id])}}" class="btn hover:color-secondary justify-content-center">Pas un--}}
                        {{--                            membre?--}}
                        {{--                            S'inscrire maintenant</a>--}}
                    </div>

                    <div style="margin-top: 20px;">
                        <img style=" width: 100%;" src="{{asset('images/icone10.jpeg')}}" alt="">

                    </div>

                </form>
            </section>

        </div>


    </div>

@endsection
