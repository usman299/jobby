@extends('layouts.front')
@section('content')
    <div id="wrapper">
        <div id="content">

            <section class="padding-t-30 components_page padding-b-30">

                <!-- Start title -->
                <div class="emTitle_co padding-20">
                    <h2 class="size-16 weight-500 color-secondary mb-1">Vos cartes</h2>

                </div>

                <!-- End. title -->
                <div class="emPage__billsWallet padding-7 py-0">
                    <div class="emBk__bills">
                        @foreach($card as $row)
                            <a href="{{route('app.singlecards',['id'=>$row->id])}}">
                        <div class="item" style="padding: 45px 14px!important; border-radius: 29px!important;" >
                            <div class="emhead_w" >
                                <div class="icon_img">
                                    <img src="{{asset($row->photo)}}" style="height: 113px!important;width: 130px!important;margin-left: 272px;border-radius: 0px!important;" alt="">
                                </div>
{{--                                <a href="#" class="btn btn_default bg-primary">Pay Now!</a>--}}
                            </div>
                            <div class="embody_w" style="margin-top: 25px;">

                                <div class="details_w">
                                    <h3>{{$row->title}}</h3>
                                    <span>Code du bon cadeau:<b>{{$row->sku}}</b></span>
                                </div>


                            </div>
                        </div>
                            </a>@endforeach

                    </div>
                </div>

            </section>
        </div>

    </div>
@endsection
