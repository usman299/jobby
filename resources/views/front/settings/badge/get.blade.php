@extends('layouts.front')
@section('content')
    @if($user->is_company != 1)
    <section style="margin-top: 50px">
        <img style="width: 100%" src="{{asset('admin/jobby/Activer votre badge PRO (2).jpg')}}" alt="">
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
    @else
        <section class="background_header bg-blue" style="height: 40%">
            <div class="npPage_SuccessPkg">
                <div class="txt">
                    <div class="icon">
                        <i class="ri-check-fill"></i>
                    </div>
                    <h3>  Vous avez un badge vérifié</h3>
                    <p>
                        Nous avons les coordonnées de votre entreprise. nous vérifierons s'il n'est pas autorisé, nous retirerons votre badge pro.
                    </p>
                </div>
            </div>
        </section>
    @endif
@endsection
