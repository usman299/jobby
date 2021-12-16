@extends('layouts.front')
@section('content')
    <section style="margin-top: 50px">
        <img style="width: 100%" src="{{asset('assets/img/badge.jpeg')}}" alt="">
    </section>
    <section class="npAbout_sections emBlock__border border-t-none" style="text-align: center">
        <div class="np__description">
            <h1>
                Passez au niveau professionnel avec le statut PRO
            </h1>
            <br>
            <h6>
                Activez votre badge PRO, remportez plus de jobs et débloquez des nouveaux services comme la facturation automatique.
            </h6>
            <br>
            <a href="{{route('badge.pro')}}"> <button class="btn justify-content-center bg-primary rounded-10 btn__default full-width" style="color: white">Commencer</button></a>
        </div>
    </section>
@endsection
