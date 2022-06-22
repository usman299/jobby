@extends('layouts.front')
@section('content')
    <section class="padding-t-40 components_page padding-b-30">
<?php $user = Auth::user();?>
        <!-- Start title -->
        <div class="emTitle_co padding-10">
            <h2 class="size-16 weight-500 color-secondary mb-1">Subscription</h2>

        </div>
        <!-- End. title -->

        <div class="emPage__myCards padding-10 py-0">
            <div class="emBK__cards">
                <!-- ele__card -->
                <div class="ele__card margin-b-20">
                    <div class="bg_imgCard">
                        <img class="cover_img" src="{{asset('assets/img/card00654.png')}}" alt="">
                        <div class="enContent_card">
                            <div class="head">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="icon">
                                        <img style="width: 50px;height: 50px;" src="{{asset('assets/img/icon/icons8-subscription-64.png')}}" alt="">
                                    </div>
                                    <p class="ex_date">{{$user->subscriptions->fee}}% de Frais</p>
                                </div>
                            </div>
                            <div class="body">
                                <div class="card_encr">
                                    <span>{{$user->subscriptions->name}}</span>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="sideLeft w-100 d-flex justify-content-between align-items-center">
                                    <div class="txt">

                                        <span class="name">Payer</span>
                                        @if($user->subscription==1)
                                        <p class="no_card">0€</p>
                                        @else
                                            <p class="no_card">{{$user->subscriptions->price}}€/mois</p>
                                        @endif
                                    </div>
                                    <div class="dropdown dropleft default none-arrow">
                                        <div class="txt">
                                            @if($user->subscription==1)
                                            <span class="name">{{$user->offers}}/15</span>
                                            @else
                                                <span class="name">Illimitée</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .ele__card -->
            </div>
        </div>

        <!-- Start title -->
        <div class="emTitle_co padding-20">
            <h2 class="size-16 weight-500 color-secondary mb-1"> Nouvelle Subscription</h2>
            <p class="size-12 color-text m-0">Mettre à niveau l'abonnement</p>
        </div>
        <div class="emCategories__learning emPage__cgLearning bg-white py-2">
            <div class="">
                <!-- item -->
                @foreach($subscription as $row )
                @if($row->id==1)
                <div class="item" style="margin-top: 10px;">
                    <a href="#" class="box__ele business-color" style="background-color: #ffa44a!important;">
                        <div class="icon">
                            <img src="{{asset('assets/img/icon/working-hours.svg')}}" alt="">
                        </div>
                        <div class="txt">
                            <h2 style="font-size: 17px;">{{$row->name}}</h2>
                            <p style="color: white;font-size: 15px;">{{$row->price}}€/ 15 Offres</p>
                        </div>
                    </a>
                </div>
                <!-- item -->
                @elseif($row->id==2)
                <div class="item" style="margin-top: 20px;">
                    <a href="{{route('app.pay.subscription',['id'=>$row->id])}}" class="box__ele design-color" style="background-color: #00deee!important;">
                        <div class="icon">
                            <img src="{{asset('assets/img/icon/pantone.svg')}}" alt="">
                        </div>
                        <div class="txt">
                            <h2 style="font-size: 17px;">{{$row->name}}(Illimitée)</h2>
                            <p style="color: white;font-size: 15px;">{{$row->price}}€/mois</p>
                        </div>
                    </a>
                </div>
                @else
                        <div class="item" style="margin-top: 10px;">
                            <a href="{{route('app.pay.subscription',['id'=>$row->id])}}" class="box__ele business-color" style="background-color: #009fde!important;">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icon/working-hours.svg')}}" alt="">
                                </div>
                                <div class="txt">
                                    <h2 style="font-size: 17px;">{{$row->name}}(Illimitée)</h2>
                                    <p style="color: white;font-size: 15px;">{{$row->price}}€/mois</p>
                                </div>
                            </a>
                        </div>
                @endif
                @endforeach

            </div>
        </div>

    </section>

@endsection
