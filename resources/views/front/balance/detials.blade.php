@extends('layouts.front')
<style>

    .npPage__balanceProvider .list__balance .item_balance .btn_addcart {
        width: 0px!important;
    }
    .npPage__balanceProvider .list__balance {
         padding: 0!important;
    }
</style>
@section('content')

<section class="npPage__balanceProvider">
    <div class="npblock__favorite">
        <div class="txt">
            <h2>Votre solde : {{Auth::user()->walet ?? '0'}}€</h2>
            <h3>{{Auth::user()->firstName}} {{Auth::user()->lastName}}</h3>
        </div>

    </div>

    <ul class="list__balance" >

        @foreach($walet as $row)
        <li class="item_balance">
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn_favorite item-active {{ $row->status == 0 ? '-active' : null }}  ">
                    <i class="ri-star-s-line"></i>
                </button>
                <h4 class="title">{{$row->balance ?? ''}} EURO
                    <?php
                    \Carbon\Carbon::setLocale('fr');
                    $date = \Carbon\Carbon::parse($row->created_at);
                    ?>
                    <span>{{$date->diffForHumans()}}</span>
                </h4><br>
                &nbsp;&nbsp;&nbsp;

                @if($row->paymant_status=='admin')
                <h4 class="title">Admin</h4>
                @elseif($row->paymant_status=='Order')
                    <h4 class="title">Order</h4>
                @elseif($row->paymant_status=='user')
                    <h4 class="title">Cadeau</h4>
                @endif


            </div>
            <button type="button" class="btn btn_addcart item-active -active">
                <i class="ri-add-fill"></i>
            </button>
        </li>
        @endforeach

    </ul>


</section>
@endsection
