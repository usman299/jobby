@extends('layouts.front')
@section('content')

    <section class=" emTransactions__page padding-t-60">
        <div class="pt_simpleDetails m-0 py-2 rounded-0 emBlock__border">
            <div class="em_bodyinner">
                <div class="embkRateCustomer">
                    <div class="emBoxRating">
                        <div class="row">
                            <div class="col-4">
                                <div class="item_rate">
                                    @if($totalReviews==0)
                                        <span class="noRate">{{$totalReviews}}</span>
                                    @else
                                        <span class="noRate">{{$totalReviews}}.0</span>
                                    @endif
                                    <div class="">
                                        <p class="rateCutome">{{$total}} Commentaires</p>
                                        <div class="emPatternRate">

                                            @if($totalReviews==5)
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                            @elseif($totalReviews==4)
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico"></span>
                                            @elseif($totalReviews==3)
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                            @elseif($totalReviews==2)
                                                <span class="ico _rated"></span>
                                                <span class="ico _rated"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                            @elseif($totalReviews==1)
                                                <span class="ico _rated"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                            @else
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                                <span class="ico"></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="progress__rate">
                                    <div class="">
                                        <div class="item">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$fiveStar}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="txt">5</span>
                                            <span class="circle"></span>
                                        </div>
                                        <div class="item">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$fourStar}}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="txt">4</span>
                                            <span class="circle"></span>
                                        </div>
                                        <div class="item">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$threeStar}}%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="txt">3</span>
                                            <span class="circle"></span>
                                        </div>
                                        <div class="item">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$twoStar}}%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="txt">2</span>
                                            <span class="circle"></span>
                                        </div>
                                        <div class="item">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width:{{$oneStar}}%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="txt">1</span>
                                            <span class="circle"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
<hr>
                <div class="emCommentCusomers padding-t-20">

                    <!-- item -->
                    @if($reviews!=null)
                        @foreach($reviews as $row)
                            <div class="itemUser ">
                                <div class="media">
                                    <img class="x_img" src="http://127.0.0.1:8000/assets/img/persons/064.jpg" alt="">
                                    <div class="media-body">
                                        <div class="txt_details">
                                            <h4 class="username">{{$row->applicant->firstName}}  {{$row->applicant->lastName}} <time>{{$row->created_at->diffForHumans()}}</time></h4>
                                            <div class="emPatternRate">
                                                @if($row->star==5)
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                @elseif($row->star==4)
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico"></span>
                                                @elseif($row->star==3)
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico"></span>
                                                    <span class="ico"></span>
                                                @elseif($row->star==2)
                                                    <span class="ico _rated"></span>
                                                    <span class="ico _rated"></span>
                                                    <span class="ico"></span>
                                                    <span class="ico"></span>
                                                    <span class="ico"></span>
                                                @else
                                                    <span class="ico _rated"></span>
                                                    <span class="ico"></span>
                                                    <span class="ico"></span>
                                                    <span class="ico"></span>
                                                    <span class="ico"></span>
                                                @endif
                                            </div>
                                            <p class="txtComment">
                                                {{$row->message}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                <!-- item -->

                    {{--                                    <a href="" class="btn all_reviews margin-t-20">See all reviews</a>--}}
                </div>
            </div>

        </div>
    </section>
@endsection
