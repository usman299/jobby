@extends('layouts.front')
@section('content')


    <section class="emPage__detailsBlog bg-white">
        <div class="emPage___profile accordion bg-white" id="accordionExample">
            <div class="emBody__navLink with__border">
                <ul>
                    <li class="item">
                        <div id="headingOne">
                            <div class="nav-link main_item collapsed" data-toggle="collapse" data-target="#collapseOne"
                                 aria-expanded="false" aria-controls="collapseOne">
                                <div class="media align-items-center">
                                    <div class="ico">
                                        <svg id="Iconly_Two-tone_Document" data-name="Iconly/Two-tone/Document"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <g id="Document" transform="translate(3 2)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M7.22.5H0"
                                                      transform="translate(5.496 13.723)" fill="none" stroke="#292e34"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_2" data-name="Stroke 2" d="M7.22.5H0"
                                                      transform="translate(5.496 9.537)" fill="none" stroke="#292e34"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M2.755.5H0"
                                                      transform="translate(5.496 5.36)" fill="none" stroke="#292e34"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_4" data-name="Stroke 4"
                                                      d="M12.158,0,4.469,0A4.251,4.251,0,0,0,0,4.607v9.2A4.254,4.254,0,0,0,4.506,18.41l7.689,0a4.252,4.252,0,0,0,4.47-4.6v-9.2A4.255,4.255,0,0,0,12.158,0Z"
                                                      transform="translate(0.751 0.75)" fill="none" stroke="#292e34"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>

                                    </div>
                                    @if($contract->proposal_id=== null)
                                        <div class="media-body">
                                            <div class="txt">
                                                <h3>Détails du Service</h3>
                                            </div>
                                        </div>
                                    @else
                                        <div class="media-body">
                                            <div class="txt">
                                                <h3>Détails de la Proposition</h3>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="side_right">
                                    <i class="tio-add iocn__plus"></i>
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordionExample" style="">
                            @if($contract->proposal_id===null)
                                <div class="card-body">
                                    <p class="mb-0 size-15 color-text">
                                        <strong>{{$contract->service->title}}</strong>
                                    </p><br>
                                    <p class="mb-0 size-15 color-text">
                                    {{$contract->service->description}}

                                    <hr>
                                    <p class="mb-0 size-15 color-text">
                                        <b>Prix: </b> {{$contract->service->price}} €
                                    </p>
                                </div>
                            @else
                                <div class="card-body">
                                    <p class="mb-0 size-15 color-text">
                                        <strong>{{$contract->proposal->jobrequest->title ?? ''}}</strong><br>
                                    </p>
                                    <p class="mb-0 size-15 color-text">
                                        {{$contract->proposal->description ?? ''}}
                                    </p>
                                    <hr>
                                    <p class="mb-0 size-15 color-text">
                                        <b>Prix: </b> {{$contract->proposal->price ?? ''}} €
                                    </p>
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="emheader_cover">

            @if($contract->status==1)
                <div class="embody__content" style="padding: 0;">

                    <h4 style="text-align: center; margin-top: 10px;">Temps restant</h4>
                    <h1 class="head_art" id="demotime" style="color: green; text-align: center;"></h1>

                </div>
            @elseif($contract->status==3)

                <div class="embody__content" style="padding: 0;">
                    <h4 style="text-align: center; margin-top: 10px;">Contrat Complet</h4>
                    <h1 class="head_art" style="color: green; text-align: center;">0jrs 0h 00m 0s </h1>

                </div>
            @else
                <div class="embody__content" style="padding: 0;">
                    <h4 style="text-align: center; margin-top: 10px;">Annuler le contrat</h4>
                    <h1 class="head_art" style="color: red; text-align: center;">0jrs 0h 00m 0s </h1>

                </div>
            @endif
            <div class="title">
                <div class="item__auther emBlock__border">

                    <div class="item_person">

                        <?php $jobber = \App\User::where('id', '=', $contract->jober_id)->first(); ?>
                        <img src="{{asset($jobber->image)}}" loading="lazy" alt="">
                        <h2 data-toggle="modal" data-target="#mdllJobDetails1">{{$jobber->firstName}} {{$jobber->lastName}}</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <div class="icon">
                                <svg id="Iconly_Curved_Time_Square" data-name="Iconly/Curved/Time Square"
                                     xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                    <g id="Time_Square" data-name="Time Square" transform="translate(1.719 1.719)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M0,5.781c0,4.336,1.446,5.781,5.781,5.781s5.781-1.446,5.781-5.781S10.117,0,5.781,0,0,1.446,0,5.781Z"
                                              fill="none" stroke="#cbcdd8" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M2.119,3.99,0,2.726V0"
                                              transform="translate(5.781 3.053)" fill="none" stroke="#cbcdd8"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($contract->created_at);
                            ?>
                            <span>Créer {{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Prix </h2>
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
                        <h2>Status</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            @if($contract->status==1)
                                <span style="color: green"><strong>Active</strong></span>
                            @elseif($contract->status==2)
                                <span style="color: green"><!--Deliver--><strong>Livrer</strong></span>
                            @elseif($contract->status==3)
                                <span style="color: green"><!--Complete--><strong>Achevée</strong></span>
                            @elseif($contract->status==4)
                                <span style="color: blue"><!--waiting--><strong>En attendant</strong></span>
                            @else
                                <span style="color: red;"><!--cancel--><strong>Annuler</strong></span>
                            @endif
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
        <div class=" margin-t-20 padding-20 d-flex emBlock__border">

            <a href="{{url('/chatify/'.$contract->jober_id)}}" class="btn bg-blue rounded-10 btn__default">
                <span class="color-white">Discuter</span>
                <div class="icon rounded-10">
                    <i class="tio-chevron_right"></i>
                </div>
            </a>
            @if($contract->status==1 || $contract->status==2  )
                <a href="" class="btn bg-red rounded-10 btn__default ml-3" data-toggle="modal"
                   data-target="#mdllJobDetails">
                    <span class="color-white">Annuler</span>
                    <div class="icon rounded-10">
                        <i class="tio-chevron_right"></i>
                    </div>
                </a>
            @endif
        </div>

        {{--            @if($contract->status==3 && $contract->review_id_applicant!=null)--}}
        {{--        <div class="  margin-b-20  padding-20 d-flex emBlock__border">--}}
        {{--            <a href="{{route('applicant.contract.status', ['id' => $contract->id,'status'=>3])}}" class="btn bg-green rounded-0 btn__default full-width"  >--}}
        {{--                <span class="color-white "   >Achevée</span>--}}
        {{--                <div class="icon rounded-0">--}}
        {{--                    <i class="tio-chevron_right"></i>--}}
        {{--                </div>--}}
        {{--            </a>--}}
        {{--        </div>--}}
        {{--       --}}
        {{--            @endif--}}


        <div class="padding-20 d-flex">
            @if($contract->status==1 || $contract->status==2 )
                <a href="{{route('applicant.contract.status', ['id' => $contract->id,'status'=>3])}}" disabled
                   class="btn bg-green rounded-10 btn__default">
                    <span class="color-white">Achevée</span>
                    <div class="icon rounded-10">
                        <i class="tio-chevron_right"></i>
                    </div>
                </a>
            @endif

            @if($contract->review_id_applicant==null)
                @if($contract->status==3)
                    <a href="" class="btn bg-secondary rounded-10 btn__default" data-toggle="modal"
                       data-target="#applicantReview">
                        <span class="color-white">Passer  revue</span>
                        <div class="icon rounded-10">
                            <i class="tio-chevron_right"></i>
                        </div>
                    </a>
                @endif
            @endif


        </div>


        <div class="bg-white padding-20 d-flex emBlock__border">
            <button data-toggle="modal" data-target="#mdllJobDetails1"
                    class="btn justify-content-center bg-primary rounded-10 btn__default">
                <span class="color-white">Profil du travailleur</span>
            </button>
        </div>
    </section>

    <br>
    <br>

    <!-- Modal mdllJobDetails -->
    <div class="modal transition-bottom screenFull defaultModal mdllJobs_details fade" id="mdllJobDetails"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header padding-l-20 padding-r-50">

                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body p-0">
                    <div class="emPage__detailsJobs">

                        <div class="em_body padding-t-40">
                            <div class="content">
                                <p>
                                    <strong>Es-tu sûr que ce contrat s'annule</strong>
                                </p>
                                <div class="  margin-b-20  padding-20 d-flex emBlock__border">
                                    <a href="{{route('applicant.contract.status', ['id' => $contract->id,'status'=>4])}}"
                                       class="btn bg-red rounded-0 btn__default full-width" style="float: right">
                                        <span class="color-white ">Confirmer</span>
                                        <div class="icon rounded-0">
                                            <i class="tio-chevron_right"></i>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--//MODAL#2--}}

    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="applicantReview" tabindex="-1"
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
                <form action="{{route('jobber.review', ['id' => $contract->id])}}" method="POST">
                    @csrf

                    <div class="modal-body env-pb">


                        <div class="form-group input-lined ">
                            <textarea class="form-control" placeholder="Entrez le message" rows="3"
                                      name="message"></textarea>
                            <label for="address"><strong style="font-size: 15px;">Message</strong><strong
                                    style="color: red;">*</strong></label>
                        </div>
                        <div>
                            <div class="form-group  rate">
                                <input type="radio" id="star5" name="star" value="5"/>
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="star" value="4"/>
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="star" value="3"/>
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="star" value="2"/>
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="star" value="1" required/>
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer ">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal mdllJobDetails -->
    <br><br>
    <div class="modal transition-bottom screenFull defaultModal mdllJobs_details fade" id="mdllJobDetails1"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header padding-l-20 padding-r-50" style="background-color: #b2efff">
                    <div class="media align-items-center">
                        <div class="img_brand">
                            <img src="{{asset($contract->jobber->image??'')}}" loading="lazy" alt="">
                        </div>
                        <div class="media-body">
                            <div class="txt_info">
                                <?php
                                \Carbon\Carbon::setLocale('fr');
                                $date = \Carbon\Carbon::parse($contract->jobber->created_at);
                                ?>
                                <span>Membre depuis: {{$date->translatedFormat('F Y')}}</span>
                                <h2>{{$contract->jobber->firstName}} {{$contract->jobber->lastName}}</h2>
                                <p>{{$contract->jobber->countory->name}}</p>
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
                                <span class="weight-600">Travailler comme</span>
                                <p>{{$contract->jobber->is_company == 1 ? 'Société' : 'Individuelle'}}</p>
                            </div>

                            <div class="item">
                                {{--                                <span class="weight-600">Tarif à l'heure</span>--}}
                                {{--                                <p >{{$proposal->jobber->rate_per_hour??'0'}}€</p>--}}
                            </div>
                            <div class="item">
                                <span class="weight-600">Sexe</span>
                                <p class="weight-600">{{$contract->jobber->gender??'non'}}</p>
                            </div>
                        </div>
                        <div class="details__job">
                            <div class="item">
                                <span class="weight-600">E-mail</span>
                                <p>{{$contract->jobber->email??'non'}}</p>
                            </div>
                        </div>
                        <div class="details__job">
                            <div class="item">
                                <span class="weight-600">Phone</span>
                                <p>{{$contract->jobber->phone??'non'}}</p>
                            </div>
                        </div>
                        @if($contract->jobber->is_company == 1)
                            <div class="details__job">
                                <div class="item">
                                    <span class="weight-600">Nom de la compagnie</span>
                                    <p>{{$contract->jobber->company_name??'non'}}</p>
                                </div>
                            </div>

                        @endif
                        <div class="details__job">
                            <div class="item">
                                <span class="weight-600">Profil expérimenté</span>
                                <p>{{$jobberprofile->jobber_category_id ??'non'}}</p>
                            </div>
                        </div>
                        <div class="details__job">
                            <div class="item">
                                <span class="weight-600">De l'expérience</span>
                                <p>{{$jobberprofile->experince??'non'}}</p>
                            </div>
                        </div>
                        <div class="details__job">
                            <div class="item">
                                <span class="weight-600">Equipement</span>
                                @if($jobberprofile)
                                    <p>{{$jobberprofile->equipement1??''}}@if($jobberprofile->equipement1)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement2??''}}@if($jobberprofile->equipement2)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement3 ??""}}@if($jobberprofile->equipement3)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement4 ??""}}@if($jobberprofile->equipement4)
                                            <strong>,</strong>@endif
                                        {{$jobberprofile->equipement5 ?? ""}}@if($jobberprofile->equipement5)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement6?? ""}}@if($jobberprofile->equipement6)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement7 ?? ""}}@if($jobberprofile->equipement7)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement8 ?? ""}}@if($jobberprofile->equipement8)
                                            <strong>,</strong>@endif
                                        {{$jobberprofile->equipement9 ?? ""}}@if($jobberprofile->equipement9)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement10 ?? ""}}@if($jobberprofile->equipement10)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement11 ?? ""}}@if($jobberprofile->equipement11)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement12 ?? ""}}@if($jobberprofile->equipement12)
                                            <strong>,</strong>@endif
                                        {{$jobberprofile->equipement13 ?? ""}}@if($jobberprofile->equipement13)
                                            <strong>@if($jobberprofile->equipement14)<strong>,</strong>@endif
                                            </strong>@endif{{$jobberprofile->equipement14 ?? ""}}@if($jobberprofile->equipement14)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement15 ?? ""}}@if($jobberprofile->equipement15)
                                            <strong>,</strong>@endif{{$jobberprofile->equipement16 ?? ""}}
                                    </p>
                                @else
                                    <p>non</p>
                                @endif
                            </div>

                        </div>
                        <div class="details__job">
                            <div class="item">
                                <span class="weight-600">Engangement</span>
                                @if($jobberprofile)
                                    <p>{{$jobberprofile->eng1??''}}@if($jobberprofile->eng1)
                                            <strong>,</strong>@endif{{$jobberprofile->eng2??''}}@if($jobberprofile->eng2)
                                            <strong>,</strong>@endif{{$jobberprofile->eng3 ??""}}@if($jobberprofile->eng3)
                                            <strong>,</strong>@endif{{$jobberprofile->eng4 ??""}}@if($jobberprofile->eng4)
                                            <strong>,</strong>@endif
                                        {{$jobberprofile->eng5 ?? ""}}@if($jobberprofile->eng5)
                                            <strong>,</strong>@endif{{$jobberprofile->eng6?? ""}}@if($jobberprofile->eng6)
                                            <strong>,</strong>@endif{{$jobberprofile->eng7 ?? ""}}@if($jobberprofile->eng7)
                                            <strong>,</strong>@endif{{$jobberprofile->eng8 ?? ""}}@if($jobberprofile->eng8)
                                            <strong>,</strong>@endif
                                        {{$jobberprofile->eng9 ?? ""}}@if($jobberprofile->eng9)
                                            <strong>,</strong>@endif{{$jobberprofile->eng10 ?? ""}}@if($jobberprofile->eng10)
                                            <strong>,</strong>@endif{{$jobberprofile->eng11 ?? ""}}@if($jobberprofile->eng11)
                                            <strong>,</strong>@endif{{$jobberprofile->eng12 ?? ""}}@if($jobberprofile->eng12)
                                            <strong>,</strong>@endif
                                        {{$jobberprofile->eng13 ?? ""}}@if($jobberprofile->eng13)
                                            <strong>,</strong>@endif{{$jobberprofile->eng14 ?? ""}}@if($jobberprofile->eng14)
                                            <strong>,</strong>@endif{{$jobberprofile->eng15 ?? ""}}@if($jobberprofile->eng15)
                                            <strong>,</strong>@endif{{$jobberprofile->eng16 ?? ""}}
                                    </p>
                                @else
                                    <p>non</p>
                                @endif
                            </div>

                        </div>

                        <div class="em_body padding-t-40">
                            <div class="content">
                                <span class="weight-600">A propos</span>
                                <p>
                                    {{$jobberprofile->personal_description ?? 'non'}}
                                </p>
                            </div>
                        </div>

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
                                                                <div class="progress-bar" role="progressbar"
                                                                     style="width: {{$fiveStar}}%" aria-valuenow="70"
                                                                     aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="txt">5</span>
                                                            <span class="circle"></span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                     style="width: {{$fourStar}}%" aria-valuenow="30"
                                                                     aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="txt">4</span>
                                                            <span class="circle"></span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                     style="width: {{$threeStar}}%" aria-valuenow="8"
                                                                     aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="txt">3</span>
                                                            <span class="circle"></span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                     style="width: {{$twoStar}}%" aria-valuenow="5"
                                                                     aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="txt">2</span>
                                                            <span class="circle"></span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                     style="width:{{$oneStar}}%" aria-valuenow="15"
                                                                     aria-valuemin="0" aria-valuemax="100">
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

                                <div class="emCommentCusomers">
                                    <div class="title"></div>
                                    <!-- item -->
                                    @if($reviews!=null)
                                        @foreach($reviews as $row)
                                            <div class="itemUser">
                                                <div class="media">
                                                    <img class="x_img" loading="lazy"
                                                         src="{{asset($row->applicant->image ?? '/assets/img/persons/064.jpg')}}"
                                                         alt="">
                                                    <div class="media-body">
                                                        <div class="txt_details">
                                                            <h4 class="username">{{$row->applicant->firstName}}  {{$row->applicant->lastName}}
                                                                <time>{{$row->created_at->diffForHumans()}}</time>
                                                            </h4>
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
                        <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-20">
                            <!-- em_title_swiper -->
                            <div class="em_title_swiper">
                                <div class="txt">
                                    <strong>Réalisation</strong>
                                </div>
                            </div>
                            <div class="em_bodyCarousel padding-t-10">
                                <div class="owl-carousel owl-theme owlThemeCorses">
                                    @foreach($contract->jobber->portfolio as $portfol)
                                        <div class="item">
                                            <div class="em_itemCourse_grid">
                                                <a href="" class="card">
                                                    <div class="">
                                                        <img src="{{asset($portfol->file)}}" loading="lazy"
                                                             class="card-img-top" alt="img">
                                                    </div>
                                                    <div class="">
                                                        <h6 class="card-title" style="margin: 5px;">
                                                            {{$portfol->title}}
                                                        </h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Set the date we're counting down to
        // ->format('M d, Y H:m')
        var countDownDate = new Date("{{$contract->e_time ?? ''}}").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demotime").innerHTML = days + "jrs  " + hours + "h  "
                + minutes + "m  " + seconds + "s  ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demotime").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection
