@extends('layouts.front')
@section('content')
    <section class="padding-t-80 padding-l-20 padding-r-20 emTransactions__page padding-b-30">
        <div class="emBK__transactions">
            @foreach($transactions as $transaction)
            <div class="item_trans" style="margin-bottom: 0px">
                <div class="media sideLeft">
                    <div class="media-body my-auto">
                        <h6>{{$transaction->contract->proposal->jobber->firstName}} {{$transaction->contract->proposal->jobber->firstName}}</h6>
                        <h4>{{$transaction->contract->proposal->jobrequest->title}}</h4>
                        <p>#{{$transaction->contract->contract_no}}</p>
                        <p>{{$transaction->created_at}}</p>
                    </div>
                </div>
                <div class="sideRight">
                    <p>+ {{$transaction->contract->price}} <span>EUR</span></p>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </section>
@endsection
