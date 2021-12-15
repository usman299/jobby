@extends('layouts.front')
@section('content')
    <div class="tab__line two_item" style="margin-top: 55px">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-ex-tab" data-toggle="pill" href="#pills-ex" role="tab" aria-controls="pills-ex" aria-selected="true">Actif</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-ex2-tab" data-toggle="pill" href="#pills-ex2" role="tab" aria-controls="pills-ex2" aria-selected="false">Accepté</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-ex3-tab" data-toggle="pill" href="#pills-ex3" role="tab" aria-controls="pills-ex3" aria-selected="false">Rejetées</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-ex" role="tabpanel" aria-labelledby="pills-ex-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($activeProposals as $proposal)
                        <div class="item em_item_product item_list">

                            <div class="title_product">
                                <a href="#">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$proposal->jobrequest->title}}</h4>
                                <h3>{{$proposal->description}}</h3>Mon offre
                                <p class="item_price">{{$proposal->price}} €</p>
                                </a>
                                    <button type="button" class="btn btn_addCart item-active">
                                        <div class="itemRating">
                                            <span style="min-width: 80px;" class="number">{{$proposal->created_at->diffForHumans()}}</span>
                                        </div>
                                    </button>
                            </div>
                        </div>
                @endforeach
                <!-- item -->
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ex2" role="tabpanel" aria-labelledby="pills-ex2-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($acceptProposals as $proposal)
                        <div class="item em_item_product item_list">

                            <div class="title_product">
                                <a href="#">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$proposal->jobrequest->title}}</h4>
                                    <h3>{{$proposal->description}}</h3>Mon offre
                                    <p class="item_price">{{$proposal->price}} €</p>
                                </a>
                                <button type="button" class="btn btn_addCart item-active">
                                    <div class="itemRating">
                                        <span style="min-width: 80px;" class="number">{{$proposal->created_at->diffForHumans()}}</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                @endforeach
                <!-- item -->
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ex3" role="tabpanel" aria-labelledby="pills-ex3-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($rejectProposals as $proposal)
                        <div class="item em_item_product item_list">

                            <div class="title_product">
                                <a href="#">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$proposal->jobrequest->title}}</h4>
                                    <h3>{{$proposal->description}}</h3>Mon offre
                                    <p class="item_price">{{$proposal->price}} €</p>
                                </a>
                                <button type="button" class="btn btn_addCart item-active">
                                    <div class="itemRating">
                                        <span style="min-width: 80px;" class="number">{{$proposal->created_at->diffForHumans()}}</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                @endforeach
                <!-- item -->
                </div>
            </div>
        </div>

    </div>
@endsection
