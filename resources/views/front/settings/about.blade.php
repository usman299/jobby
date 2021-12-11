@extends('layouts.front')
@section('content')

    <!-- Start emPageAbout -->
    <section class="emPageAbout padding-t-60">
        <div class="emBox___logo bg-snow">
            <div class="brand margin-b-10">
                <img style="height: 46px" src="{{asset('main/logo.jpg')}}" alt="">

            </div>
            <p class="color-text size-12 m-0">Version 1.0.0 - Mister Jobby</p>
        </div>
        <div class="content_text bg-white emBlock__border margin-b-10">
            <h3 class="size-20 weight-500 color-secondary mb-1">What we offer</h3>
            <p>
                Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez
                Conception UI/UX et développement front-end. Nous apportons de la beauté au design.
                Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez
                Conception UI/UX et développement front-end. Nous apportons de la beauté au design.
                Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez
                Conception UI/UX et développement front-end. Nous apportons de la beauté au design.
                Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez
                Conception UI/UX et développement front-end. Nous apportons de la beauté au design.
                Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez
                Conception UI/UX et développement front-end. Nous apportons de la beauté au design.
                Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez
                Conception UI/UX et développement front-end. Nous apportons de la beauté au design.
            </p>
        </div>

    </section>
    <!-- End. emPageAbout -->

    <section
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
@endsection
