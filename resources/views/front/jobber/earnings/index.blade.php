@extends('layouts.front')
@section('content')
    <section class="box__dashboard">
        <div class="group">
            <a href="#" class="btn item_link">
                <div class="icon bg-primary">
                    <svg id="Iconly_Curved_Folder" data-name="Iconly/Curved/Folder" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                        <g id="Folder" transform="translate(1.979 1.979)">
                            <path id="Stroke_1" data-name="Stroke 1" d="M0,.476H7.594" transform="translate(3.805 9.083)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                            <path id="Stroke_2" data-name="Stroke 2" d="M0,4.195A3.755,3.755,0,0,1,2.867.216,6.4,6.4,0,0,1,7.356.6c1.186.639.846,1.583,2.065,2.276s3.18-.348,4.461,1.034C15.223,5.359,15.216,7.581,15.216,9c0,5.38-3.014,5.807-7.608,5.807S0,14.431,0,9Z" transform="translate(0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                        </g>
                    </svg>
                </div>
                <div class="txt">
                    <p>Total des gains</p>
                    <span>{{$earnings->sum('price')}} €</span>
                </div>
            </a>
        </div>
    </section>
    <hr>
    <section class="padding-t-20 padding-l-20 padding-r-20 emTransactions__page padding-b-30">
        <div class="emBK__transactions">
            @foreach($earnings as $earning)
            <div class="item_trans">
                <div class="media sideLeft">
                    <div class="media-body my-auto">
                        <h4>{{$earning->contract->proposal->jobrequest->title}}</h4>
                        <p>#{{$earning->contract->contract_no}}</p>
                        <p>{{$earning->created_at}}</p>
                    </div>
                </div>
                <div class="sideRight">
                    <p>+ {{$earning->contract->price}} <span>EUR</span></p>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </section>
@endsection
