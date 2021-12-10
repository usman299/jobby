@extends('layouts.front')
@section('content')
    <section class="emPage__detailsBlog">
        <div class="emPage___profile accordion bg-white" id="accordionExample">
            <div class="emBody__navLink with__border">
                <ul>
                    <li class="item">
                        <div id="headingOne">
                            <div class="nav-link main_item collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <div class="media align-items-center">
                                    <div class="ico">
                                        <svg id="Iconly_Two-tone_Document" data-name="Iconly/Two-tone/Document" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <g id="Document" transform="translate(3 2)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M7.22.5H0" transform="translate(5.496 13.723)" fill="none" stroke="#292e34" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_2" data-name="Stroke 2" d="M7.22.5H0" transform="translate(5.496 9.537)" fill="none" stroke="#292e34" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M2.755.5H0" transform="translate(5.496 5.36)" fill="none" stroke="#292e34" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_4" data-name="Stroke 4" d="M12.158,0,4.469,0A4.251,4.251,0,0,0,0,4.607v9.2A4.254,4.254,0,0,0,4.506,18.41l7.689,0a4.252,4.252,0,0,0,4.47-4.6v-9.2A4.255,4.255,0,0,0,12.158,0Z" transform="translate(0.751 0.75)" fill="none" stroke="#292e34" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>

                                    </div>
                                    @if($contract->proposal_id===null)
                                    <div class="media-body">
                                        <div class="txt">
                                            <h3>{{$contract->service->title}}</h3>
                                        </div>
                                    </div>
                                    @else
                                        <div class="media-body">
                                            <div class="txt">
                                                <h3>{{$contract->proposal->jobrequest->title}}</h3>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="side_right">
                                    <i class="tio-add iocn__plus"></i>
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                            @if($contract->proposal_id=== null)
                            <div class="card-body">
                                <p class="mb-0 size-15 color-text">
                                    {{$contract->service->description}}
                                </p>
                                <hr>
                                <p class="mb-0 size-15 color-text">
                                    <b>Prix: </b> {{$contract->service->price}} €
                                </p>
                            </div>
                            @else
                                <div class="card-body">
                                    <p class="mb-0 size-15 color-text">
                                        {{$contract->proposal->description}}
                                    </p>
                                    <hr>
                                    <p class="mb-0 size-15 color-text">
                                        <b>Prix: </b> {{$contract->proposal->price}} €
                                    </p>
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="emheader_cover">
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <img src="{{asset($contract->user->image)}}" alt="">
                        <h2>{{$contract->user->firstName}} {{$contract->user->lastName}}</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <div class="icon">
                                <svg id="Iconly_Curved_Time_Square" data-name="Iconly/Curved/Time Square" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                    <g id="Time_Square" data-name="Time Square" transform="translate(1.719 1.719)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M0,5.781c0,4.336,1.446,5.781,5.781,5.781s5.781-1.446,5.781-5.781S10.117,0,5.781,0,0,1.446,0,5.781Z" fill="none" stroke="#cbcdd8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M2.119,3.99,0,2.726V0" transform="translate(5.781 3.053)" fill="none" stroke="#cbcdd8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <span>{{$contract->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Prix de l'offre</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$contract->price}} € </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Heure de fin</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$contract->e_time}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Région</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$contract->user->countory->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="embody__content">
            <h1 class="head_art">La Description</h1>
            <p>
                {{$contract->description}}
            </p>
        </div>
        @if($contract->status==1)
        <div class="bg-white padding-20 d-flex emBlock__border">
            <a href="{{route('contract.status', ['id' => $contract->id])}}" class="btn justify-content-center bg-green rounded-pill btn__default full-width">
                <span class="color-white margin-t-10">J'accepte</span>
            </a>
        </div>
        @else
        <div class="bg-white padding-20 d-flex emBlock__border">
            <a href="#" class="btn justify-content-center bg-red rounded-pill btn__default full-width">
                <span class="color-white margin-t-10">Accepté</span>
            </a>
        </div>
        @endif
{{--        <div class="bg-white padding-20 d-flex emBlock__border">--}}
{{--            <button  data-toggle="modal"--}}
{{--                     data-target="#mdllJobDetails" class="btn justify-content-center bg-primary rounded-10 btn__default">--}}
{{--                <span class="color-white">Profil du travailleur</span>--}}
{{--            </button>--}}

{{--            <button data-toggle="modal"--}}
{{--                    data-target="#acceptpropsal" class="btn justify-content-center bg-green rounded-10 btn__default ml-3">--}}
{{--                <span class="color-white">J'accepte</span>--}}
{{--            </button>--}}
{{--        </div>--}}
    </section>

    <br>
    <br>
@endsection
