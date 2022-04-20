@extends('layouts.front')
@section('content')
    <div class="tab__line three_item" style="margin-top: 55px">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-ex-tab" data-toggle="pill" href="#pills-ex" role="tab"
                   aria-controls="pills-ex" aria-selected="true">Actif</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-ex2-tab" data-toggle="pill" href="#pills-ex2" role="tab"
                   aria-controls="pills-ex2" aria-selected="false">Fermée</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-ex3-tab" data-toggle="pill" href="#pills-ex3" role="tab"
                   aria-controls="pills-ex3" aria-selected="false">Ébauche</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-ex" role="tabpanel" aria-labelledby="pills-ex-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    <!-- item -->
                    @foreach($jobrequests as $job)
                        <div class="item em_item_product item_list">
                            <div class="title_product">
                                <div class="itemRating">
                                    <span class="number">{{$job->totalProposals()}}</span>
                                    <span class="users">Propositions</span>
                                </div>
                                <a href="{{route('applicant.jobrequest.detail', ['id' => $job->id])}}">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$job->title}}</h4>
                                    <h3>{{$job->detail_description}}</h3>
                                    <span
                                        class="rounded-pill bg-orange px-1 color-white min-w-25 h-21 d-flex align-items-center justify-content-center">{{$job->category->title}}</span>
                                    /
                                    <span
                                        class="rounded-pill bg-primary px-1 color-white min-w-25 h-21 d-flex align-items-center justify-content-center">{{$job->subcategory->title}}</span>
                                    <p class="item_price">{{$job->estimate_budget}} €</p>
                                    <p style="color: black">{{$job->service_date->format('d-m-y')}} ({{$job->duration}}
                                        heures) </p>
                                </a>

                                <a href="{{route('applicant.jobrequest.detail', ['id' => $job->id])}}">
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
                    @foreach($jobrequestsClose as $jobClose)
                        <div class="item em_item_product item_list">
                            <div class="title_product">
                                <div class="itemRating">
                                    <span class="number">{{$jobClose->totalProposals()}}</span>
                                    <span class="users">Propositions</span>
                                </div>
                                <a href="{{route('applicant.jobrequest.detail', ['id' => $jobClose->id])}}">
                                    <h4 class="item_price" style="margin-bottom: 5px">{{$jobClose->title}}</h4>
                                    <h3>{{$jobClose->detail_description}}</h3>
                                    <span
                                        class="rounded-pill bg-orange px-1 color-white min-w-25 h-21 d-flex align-items-center justify-content-center">{{$jobClose->category->title}}</span>
                                    /
                                    <span
                                        class="rounded-pill bg-primary px-1 color-white min-w-25 h-21 d-flex align-items-center justify-content-center">{{$jobClose->subcategory->title}}</span>
                                    <p class="item_price">{{$jobClose->estimate_budget}} €</p>
                                    <p style="color: black">{{$jobClose->service_date->format('d-m-y')}}
                                        ({{$jobClose->duration}} heures) </p>
                                </a>

                                <a href="{{route('applicant.jobrequest.detail', ['id' => $jobClose->id])}}">
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
            <div class="tab-pane fade" id="pills-ex3" role="tabpanel" aria-labelledby="pills-ex3-tab">
                <div class="em_masonry__layout bg-snow em_list_layout widthFull">
                    @foreach($draft as $d)
                        @if($d->sub)
                            @if($d->sub_category != 0 )
                                <section class="npBalabce_section padding-20 pb-0">
                                    <div class="content_balance bg-white border border-snow">
                                        <div class="txt">
                                            <h3 class="color-secondary"><span>{{$d->sub->title??''}}</span></h3>
                                            <p class="date color-snow">{{$d->created_at->format('d-m-y')}}</p>
                                        </div>
                                        <div class="action">
                                            <a href="{{route('job.request.status', ['id' => $d->sub->id , 'status' => $d->id ])}}" class="btn">
                                                Terminer le travail
                                            </a>
                                        </div>
                                    </div>
                                </section>
                            @endif
                        @else
                            @if($d->child_category != 0 )
                                <section class="npBalabce_section padding-20 pb-0">
                                    <div class="content_balance bg-white border border-snow">
                                        <div class="txt">
                                            <h3 class="color-secondary"><span>{{$d->child->title??''}}</span></h3>
                                            <p class="date color-snow">{{$d->created_at->format('d-m-y')}}</p>
                                        </div>
                                        <div class="action">
                                            <a href="{{route('request.subcategory.status', ['id' => $d->sub->id , 'status' => $d->id ])}}" class="btn">
                                                Terminer le travail
                                            </a>
                                        </div>
                                    </div>
                                </section>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
@endsection
