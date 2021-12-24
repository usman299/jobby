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
            <button  data-toggle="modal" data-target="#mdllJobDetails" class="btn bg-primary rounded-10 btn__default">
                <span class="color-white">Profil du travailleur</span>
            </button>

            <button {{$proposal->status == 2 || $proposal->status == 3 ?  'disabled' : ''}} data-toggle="modal"
               data-target="#acceptpropsal" class="btn bg-green rounded-10 btn__default ml-3">
                <span class="color-white">Accepter la proposition</span>
            </button>

        </div>
        <div class="bg-white padding-20 d-flex emBlock__border">

           <button  data-toggle="modal"
                     data-target="" class="btn bg-info rounded-10 btn__default">
               <a href="{{url('/chatify/'.$proposal->jobber->id)}}">  <span class="color-white">Message</span></a>
            </button>


            <button  {{$proposal->status == 2 || $proposal->status == 3 ?  'disabled' : ''}} data-toggle="modal" data-target="#mdllContent-form" style="float: right" class="btn bg-danger rounded-10 btn__default ml-3">
                <span class="color-white">Commencer le contrat</span>
            </button>
        </div>
        <div class="bg-white padding-20 d-flex emBlock__border">

            <a href="{{route('proposal.reject', ['id' => $proposal->id])}}"><button  {{$proposal->status == 2 || $proposal->status == 3 ?  'disabled' : ''}} class="btn bg-danger rounded-10 btn__default">
                <span class="color-white">Rejeter la proposition</span>
            </button></a>
        </div>
    </section>

    <br>
    <br>

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
                                <span>Travailler comme</span>
                                <p>{{$proposal->jobber->is_company == 1 ? 'Société' : 'Individuelle'}}</p>
                            </div>
                            <div class="item">
                                <span>Tarif à l'heure</span>
                                <p class="weight-600">{{$proposal->jobber->rate_per_hour??'0'}}€</p>
                            </div>
                            <div class="item">
                                <span>Genre</span>
                                <p class="weight-600">{{$proposal->jobber->gender??'non'}}</p>
                            </div>
                        </div>
                        <div class="details__job">
                            @if($proposal->jobber->company_name)
                            <div class="item">
                                <span>Nom de la compagnie</span>
                                <p>{{$proposal->jobber->company_name}}</p>
                            </div>
                             @endif
                                <div class="item">
                                    <span>Travaux terminés</span>
                                    <p>0</p>
                                </div>
                        </div>

                        <div class="em_body padding-t-40">
                            <div class="content">
                                <p>
                                   {{$proposal->jobber->description}}
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
                                                    <span class="noRate">4.0</span>
                                                    <div class="">
                                                        <p class="rateCutome">1.6k Commentaires</p>
                                                        <div class="emPatternRate">
                                                            <span class="ico _rated"></span>
                                                            <span class="ico _rated"></span>
                                                            <span class="ico _rated"></span>
                                                            <span class="ico _rated"></span>
                                                            <span class="ico"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="progress__rate">
                                                    <div class="">
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="txt">5</span>
                                                            <span class="circle"></span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="txt">4</span>
                                                            <span class="circle"></span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="txt">3</span>
                                                            <span class="circle"></span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                            <span class="txt">2</span>
                                                            <span class="circle"></span>
                                                        </div>
                                                        <div class="item">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
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
                                    <div class="itemUser">
                                        <div class="media">
                                            <img class="x_img" src="http://127.0.0.1:8000/assets/img/persons/064.jpg" alt="">
                                            <div class="media-body">
                                                <div class="txt_details">
                                                    <h4 class="username">Richard Crump <time>Today</time></h4>
                                                    <div class="emPatternRate">
                                                        <span class="ico _rated"></span>
                                                        <span class="ico _rated"></span>
                                                        <span class="ico _rated"></span>
                                                        <span class="ico"></span>
                                                        <span class="ico"></span>
                                                    </div>
                                                    <p class="txtComment">
                                                        Lacus sed turpis tincidunt id aliquet risus feugiat in. Cursus eget nunc
                                                        scelerisque viverra mauris in aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="itemUser">
                                        <div class="media">
                                            <img class="x_img" src="http://127.0.0.1:8000/assets/img/persons/0654.jpg" alt="">
                                            <div class="media-body">
                                                <div class="txt_details">
                                                    <h4 class="username">Pedro Foster <time>2 days ago</time></h4>
                                                    <div class="emPatternRate">
                                                        <span class="ico _rated"></span>
                                                        <span class="ico _rated"></span>
                                                        <span class="ico _rated"></span>
                                                        <span class="ico _rated"></span>
                                                        <span class="ico"></span>
                                                    </div>
                                                    <p class="txtComment">
                                                        Cursus eget nunc scelerisque viverra mauris in aliquam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="itemUser">
                                        <div class="media">
                                            <div class="no_img bg-purple">
                                                <span>L</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="txt_details">
                                                    <h4 class="username">Leona Barker <time>6 days ago</time></h4>
                                                    <div class="emPatternRate">
                                                        <span class="ico _rated"></span>
                                                        <span class="ico _rated"></span>
                                                        <span class="ico _rated"></span>
                                                        <span class="ico _rated"></span>
                                                        <span class="ico"></span>
                                                    </div>
                                                    <p class="txtComment">
                                                        Sit amet purus gravida quis. Elementum nisi quis eleifend quam
                                                        adipiscing
                                                        vitae.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="btn all_reviews margin-t-20">See all reviews</a>
                                </div>
                            </div>

                        </div>

                        <div class="padding-20 d-flex emBlock__border">
                            <a href="{{route('applicant.jobber.services', ['id' => $proposal->jobber->id])}}" class="btn bg-green rounded-10 btn__default ml-3 full-width" style="float: right">
                                <span class="color-white">Services offerts</span>
                                <div class="icon rounded-10">
                                    <i class="tio-chevron_right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Form Modal -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllContent-form"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable height-full">
            <div class="modal-content rounded-0">
                <div class="modal-header padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Créer un Contrat</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="padding-t-60">
                        <div class="em__signTypeOne">

                            <div class="em__body px-0">
                                <form method="POST" action="{{ route('applicant.proposals.contract',['id'=>$proposal->id]) }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group input-lined">
                                        <input type="number" class="form-control"  id="price" name="price" placeholder=" Entrez la Prix"
                                               required="">
                                        <label for="price" class="margin-t-20" style="font-size: 15px;"> <strong>Le Prix</strong> <strong style="color: red;">*</strong> </label>
                                    </div>
                                    <div class="form-group input-lined">
                                        <input type="datetime-local" id="price" name="e_time"  class="form-control"  required="">
                                        <label for="e_time" class="margin-t-20" style="font-size: 15px;"><strong>Date et heure de fin</strong> <strong style="color: red;">*</strong> </label>
                                    </div>
                                    <div class="form-group input-lined">
                                        <textarea class="form-control"  name="description" rows="4" id="description" placeholder="Entrez la  Description"></textarea>
                                        <label for="description" class="margin-t-20" style="font-size: 15px;"> <strong>La Description</strong> <strong style="color: red;">*</strong></label>
                                    </div>

                                    <div class="form-group input-lined margin-t-20">
                                        <button type="submit" class="btn w-100 bg-primary  m-0 color-white h-55 d-flex align-items-center rounded-10 justify-content-center ">
                                            Soumettre
                                        </button>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
