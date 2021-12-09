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
                                    <div class="media-body">
                                        <div class="txt">
                                            <h3>{{$proposal->jobrequest->title}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="side_right">
                                    <i class="tio-add iocn__plus"></i>
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                            <div class="card-body">
                                <p class="mb-0 size-15 color-text">
                                    {{$proposal->jobrequest->description}}
                                </p>
                                <hr>
                                <p class="mb-0 size-15 color-text">
                                  <b>Ton budget: </b> {{$proposal->jobrequest->max_price}} € - {{$proposal->jobrequest->min_price}} €
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="emheader_cover">
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <img src="{{asset($proposal->jobber->image)}}" alt="">
                        <h2>{{$proposal->jobber->firstName}} {{$proposal->jobber->lastName}}</h2>
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
                            <span>{{$proposal->created_at->diffForHumans()}}</span>
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
                            <span>{{$proposal->price}} € </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Temps estimé</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$proposal->time_limit}}</span>
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
                            <span>{{$proposal->jobrequest->country->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="embody__content">
            <h1 class="head_art">Proposal</h1>
            <p>
                {{$proposal->description}}
            </p>
        </div>

        <div class="bg-white padding-20 d-flex emBlock__border">
            <button  data-toggle="modal"
                     data-target="#mdllJobDetails" class="btn justify-content-center bg-primary rounded-10 btn__default">
                <span class="color-white">Profil du travailleur</span>
            </button>

            <button data-toggle="modal"
               data-target="#acceptpropsal" class="btn justify-content-center bg-green rounded-10 btn__default ml-3">
                <span class="color-white">J'accepte</span>
            </button>
        </div>
    </section>

    <br>
    <br>
@endsection
@section('model')
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="acceptpropsal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Écrire un message au jober</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('proposal.accept', ['id' => $proposal->id])}}" method="POST">
                    @csrf
                    <div class="modal-body env-pb">
                        <div class="form-group input-lined">
                            <textarea class="form-control" rows="3" name="description"></textarea>
                            <label for="address">Message</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Envoyer et accepter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal mdllJobDetails -->
    <div class="modal transition-bottom screenFull defaultModal mdllJobs_details fade" id="mdllJobDetails"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header padding-l-20 padding-r-50">
                    <div class="media align-items-center">
                        <div class="img_brand">
                            <img src="{{asset($proposal->jobber->image)}}" alt="">
                        </div>
                        <div class="media-body">
                            <div class="txt_info">
                                <span>Membre depuis: {{$proposal->jobber->created_at->format('Y')}}</span>
                                <h2>{{$proposal->jobber->firstName}} {{$proposal->jobber->lastName}}</h2>
                                <p>{{$proposal->jobber->countory->name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body p-0">
                    <div class="emPage__detailsJobs">

                        <div class="details__job">
                            <div class="item">
                                <span>Available</span>
                                <p>Full-time</p>
                            </div>
                            <div class="item">
                                <span>Per Hour</span>
                                <p class="weight-600">$ 1500.00</p>
                            </div>
                            <div class="item">
                                <span>Company</span>
                                <p>Clevertech</p>
                            </div>
                        </div>

                        <div class="em_body padding-t-40">
                            <div class="content">
                                <p>
                                    Interested? Please email us at <a href="mailto:jobs@example.org"
                                                                      target="_blank">jobs@example.org</a> with the
                                    subject line “Zotero UI Designer”,
                                    let us know why you’re interested in working with us and why you think you’d
                                    be
                                    a good
                                    fit
                                    for this role, and include a link to your portfolio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
