@extends('layouts.front')
@section('content')
    <div class="tab__line two_item" style="margin-top: 55px">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-ex-tab" data-toggle="pill" href="#pills-ex" role="tab" aria-controls="pills-ex" aria-selected="true">Actif</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-ex2-tab" data-toggle="pill" href="#pills-ex2" role="tab" aria-controls="pills-ex2" aria-selected="false">J'accepte</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-ex" role="tabpanel" aria-labelledby="pills-ex-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($activeContract as $contract)
                        <div class="item em_item_product item_list">
                            <div class="em_head">
                                <a href="#" class="image_product">
                                    <img src="{{asset($contract->user->image)}}" alt="">
                                </a>
                            </div>
                            <div class="title_product">
                                <a href="{{route('jobber.contract.details', ['id' => $contract->id])}}">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$contract->user->firstName}} {{$contract->user->lastName}}</h4>
                                    <h3>{{$contract->description}}</h3>Offre ( {{$contract->created_at->diffForHumans()}})
                                    <p class="item_price">{{$contract->price}} €</p>
                                    <button type="button" class="btn btn_addCart item-active">
                                        <div class="itemRating">
                                            <span style="min-width: 80px;" class="number">Vue</span>
                                        </div>
                                    </button>
                                </a>
                            </div>
                        </div>
                @endforeach
                <!-- item -->
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ex2" role="tabpanel" aria-labelledby="pills-ex2-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($acceptContract as $contract)
                        <div class="item em_item_product item_list">
                            <div class="em_head">
                                <a href="#" class="image_product">
                                    <img src="{{asset($contract->user->image)}}" alt="">
                                </a>
                            </div>
                            <div class="title_product">
                                <a href="{{route('jobber.contract.details', ['id' => $contract->id])}}">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$contract->user->firstName}} {{$contract->user->lastName}}</h4>
                                    <h3>{{$contract->description}}</h3>Offre ( {{$contract->created_at->diffForHumans()}})
                                    <p class="item_price">{{$contract->price}} €</p>
                                    <button type="button" class="btn btn_addCart item-active">
                                        <div class="itemRating">
                                            <span style="min-width: 80px;" class="number">Vue</span>
                                        </div>
                                    </button>
                                </a>
                            </div>
                        </div>
                @endforeach
                <!-- item -->
                </div>
            </div>
        </div>

    </div>
@endsection
