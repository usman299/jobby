@extends('layouts.front')
@section('content')
    <section class="background_header bg-green" style="height: 45%">
        <div class="npPage_SuccessPkg">
            <div class="txt">
                <div class="icon">
                    <i class="ri-check-fill"></i>
                </div>
                <h3>Félicitations!</h3>
                <p>
                    Votre paiement a été reçu et votre contrat avec le jobber est en cours. En cas de problème, contactez l'administrateur. Revoyez votre contrat.
                </p>
                <br>
                <a href="{{route('front.app')}}"><button class="btn w-100 bg-success m-0 color-white align-items-center rounded-10 justify-content-center">De retour à la maison</button></a>
            </div>
        </div>
    </section>
@endsection
