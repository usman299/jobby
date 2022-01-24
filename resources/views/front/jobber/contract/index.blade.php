@extends('layouts.front')
@section('content')
    <div class="tab__line three_item" style="margin-top: 55px">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-ex-tab" data-toggle="pill" href="#pills-ex" role="tab" aria-controls="pills-ex" aria-selected="true">Actif</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-ex2-tab" data-toggle="pill" href="#pills-ex2" role="tab" aria-controls="pills-ex2" aria-selected="false">Achevée</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-ex2-tab" data-toggle="pill" href="#pills-ex3" role="tab" aria-controls="pills-ex3" aria-selected="false">Annuler</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-ex" role="tabpanel" aria-labelledby="pills-ex-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($activeContract as $contract)
                        @if($contract->status==1 || $contract->status==2 ||$contract->status==4)
                        <div class="item em_item_product item_list">
                            <div class="em_head">
                                <a href="#" class="image_product">
                                    <img src="{{asset($contract->user->image)}}"  loading="lazy"  alt="">
                                </a>
                            </div>
                            <div class="title_product">
                                <a href="{{route('jobber.contract.details', ['id' => $contract->id])}}">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$contract->user->firstName}} {{$contract->user->lastName}}</h4>
                                    <h3>{{$contract->description}}</h3>Offre ( {{$contract->created_at->diffForHumans()}})
                                    <p class="item_price">{{$contract->price}} €</p>
                                    <button type="button" class="btn btn_addCart item-active">
                                        <div class="itemRating ">
                                            @if($contract->status==1)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Active</span>
                                            @elseif($contract->status==2)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Livrer</span>
                                            @elseif($contract->status==3)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Achevée</span>
                                            @elseif($contract->status==4)
                                                <span style="min-width: 80px; color: white; background-color: red; " class="number">En attendant</span>
                                            @else
                                                <span style="min-width: 80px; color: white; background-color: red; " class="number">Annuler</span>
                                            @endif
                                            @if($contract->proposal_id=== null)
                                                <span style="min-width: 80px;  color: white; background-color: #fa9905;" class="number">Services</span>
                                            @else
                                                <span style="min-width: 80px;  color: white; background-color: #fa9905;" class="number">proposition</span>
                                            @endif
                                        </div>
                                    </button>
                                </a>
                            </div>
                        </div>
                        @endif
                @endforeach
                <!-- item -->
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ex2" role="tabpanel" aria-labelledby="pills-ex2-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($completeContract as $contract)
                        <div class="item em_item_product item_list">
                            <div class="em_head">
                                <a href="#" class="image_product">
                                    <img src="{{asset($contract->user->image)}}"  loading="lazy"  alt="">
                                </a>
                            </div>
                            <div class="title_product">
                                <a href="{{route('jobber.contract.details', ['id' => $contract->id])}}">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$contract->user->firstName}} {{$contract->user->lastName}}</h4>
                                    <h3>{{$contract->description}}</h3>Offre ( {{$contract->created_at->diffForHumans()}})
                                    <p class="item_price">{{$contract->price}} €</p>
                                    <button type="button" class="btn btn_addCart item-active">
                                        <div class="itemRating ">
                                            @if($contract->status==1)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Active</span>
                                            @elseif($contract->status==2)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Livrer</span>
                                            @elseif($contract->status==3)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Achevée</span>
                                            @elseif($contract->status==4)
                                                <span style="min-width: 80px; color: white; background-color: red; " class="number">En attendant</span>
                                            @else
                                                <span style="min-width: 80px; color: white; background-color: red; " class="number">Annuler</span>
                                            @endif
                                            @if($contract->proposal_id=== null)
                                                <span style="min-width: 80px;  color: white; background-color: #fa9905;" class="number">Services</span>
                                            @else
                                                <span style="min-width: 80px;  color: white; background-color: #fa9905;" class="number">proposition</span>
                                            @endif
                                        </div>
                                    </button>
                                </a>
                            </div>
                        </div>
                @endforeach
                <!-- item -->
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ex3" role="tabpanel" aria-labelledby="pills-ex2-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($cancelContract as $contract)
                        <div class="item em_item_product item_list">
                            <div class="em_head">
                                <a href="#" class="image_product">
                                    <img src="{{asset($contract->user->image)}}" loading="lazy"  alt="">
                                </a>
                            </div>
                            <div class="title_product">
                                <a href="{{route('jobber.contract.details', ['id' => $contract->id])}}">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$contract->user->firstName}} {{$contract->user->lastName}}</h4>
                                    <h3>{{$contract->description}}</h3>Offre ( {{$contract->created_at->diffForHumans()}})
                                    <p class="item_price">{{$contract->price}} €</p>
                                    <button type="button" class="btn btn_addCart item-active">
                                        <div class="itemRating ">
                                            @if($contract->status==1)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Active</span>
                                            @elseif($contract->status==2)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Livrer</span>
                                            @elseif($contract->status==3)
                                                <span style="min-width: 80px; color: white; background-color: green; " class="number">Achevée</span>
                                            @elseif($contract->status==4)
                                                <span style="min-width: 80px; color: white; background-color: red; " class="number">En attendant</span>
                                            @else
                                                <span style="min-width: 80px; color: white; background-color: red; " class="number">Annuler</span>
                                            @endif
                                            @if($contract->proposal_id=== null)
                                                <span style="min-width: 80px;  color: white; background-color: #fa9905;" class="number">Services</span>
                                            @else
                                                <span style="min-width: 80px;  color: white; background-color: #fa9905;" class="number">proposition</span>
                                            @endif
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
