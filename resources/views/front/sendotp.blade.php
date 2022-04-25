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
                        <span class="page_name">Arrière</span>
                    </a>
                </div>
                <div class="title_page">
                    <span class="page_name">
                         <span class="page_name">Vérifier E-mail</span>
                    </span>
                </div>
{{--                <div class="em_side_right">--}}
{{--                    <a href="#"--}}
{{--                       class="link__forgot d-block size-14 color-text text-decoration-none hover:color-secondary transition-all">--}}
{{--                        Need some help?--}}
{{--                    </a>--}}
{{--                </div>--}}
            </header>
            <!-- End.main_haeder -->

            <!-- Start em__signTypeOne -->
            <form method="POST" class="padding-t-40 loginformsubmit" action="{{ route('otp.verify.email') }}">
                @csrf
            <section class="em__signTypeOne typeTwo np__account padding-t-70">
                <div class="em_titleSign">
                    <h1>E-mail Verification</h1>
                    <p>Veuillez entrer le code à 4 chiffres qui vous a été envoyé à</p>
                    <span class="d-block size-13 color-secondary">{{$email ?? ''}}</span>
                    @if(Session::has('message'))
                        <p style="text-align: left; color: red">{{ Session::get('message') }}</p>
                    @endif
                </div>
                <div class="em__body">

                        <div class="verification__Code withBorder__items">
                            <div class="input_number">
                                <input type="number" class="form-control input_number" name="otp"  style="width: 260px!important;"
                                        placeholder="0000" />
                                <input type="hidden" name="email" value="{{$email}}">

                            </div>
                        </div>

                </div>
                <div class="buttons__footer text-center">
                    <div class="padding-b-30">
                        <p class="color-text size-14 text-center margin-b-20">
                            Vous ne recevez aucun code ? <span class="color-snow"><a href="{{route('otp.verify.app')}}">Renvoyer à nouveau</a></span>
                        </p>

                        <a href="{{route('front.register',['id'=>Auth::user()->role])}}" class="size-14 color-primary hover:color-primary text-decoration-none">S'inscrire</a>
                    </div>
                    <input style="color: white; text-align: center" type="submit" value="Vérifier le code" class="btn bg-primary rounded-pill btn__default">

                </div>

            </section>
            </form>
            <!-- End. em__signTypeOne -->

        </div>

        <!-- Start searchMenu__hdr -->
        <section class="searchMenu__hdr">
            <form>
                <div class="form-group">
                    <div class="input_group">
                        <input type="search" class="form-control" placeholder="type something here...">
                        <i class="ri-search-2-line icon_serach"></i>
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn_meunSearch -close __removeMenu">
                <i class="tio-clear"></i>
            </button>
        </section>
        <!-- End. searchMenu__hdr -->

    </div>
@endsection
