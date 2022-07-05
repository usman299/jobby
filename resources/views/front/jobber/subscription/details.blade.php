@extends('layouts.front')
<style>

    .npPage__balanceProvider .list__balance .item_balance .btn_addcart {
        width: 0px!important;
    }
</style>
@section('content')

    <section class="npPage__balanceProvider">
    <?php $user = Auth::user();?>
    <!-- Start title -->
        <div class="emTitle_co padding-10">
            <h2 class="size-16 weight-500 color-secondary mb-1">Détails de l'abonnement</h2>

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

        <ul class="list__balance padding-10" >

            @foreach($paymant as $row)

                <li class="item_balance">
                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn_favorite item-active -active">
                            <i class="ri-star-s-line"></i>
                        </button>
                        <h4 class="title">{{$row->subscription->name ?? ''}}
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>
                            <span>{{$date->diffForHumans()}}</span>
                        </h4>
                        &nbsp;&nbsp;&nbsp;

                            <h4 class="title">{{$row->subscription->price ?? ''}} EURO</h4>


                    </div>
                    <button type="button" class="btn btn_addcart item-active -active">

                        <i class="ri-add-fill"></i>
                    </button>
                </li>
            @endforeach

        </ul>


    </section>
@endsection
