@extends('layouts.front')
@section('content')
    <section class="bg-white emPage__detailsBlog">
        <div class="emheader_cover">
            <div class="title">
                <div class="row" style="padding-top: 20px">
                    <div class="col-8">
                        <h1 class="head_art">{{$jobrequest->title}}</h1>
                    </div>
                    <div class="col-4" style="text-align: right">
<!--                        <div class="icon">
                            <svg id="Iconly_Curved_Show" data-name="Iconly/Curved/Show" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                <g id="Show" transform="translate(1.719 2.969)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M3.952,1.976A1.976,1.976,0,1,1,1.976,0,1.977,1.977,0,0,1,3.952,1.976Z" transform="translate(3.806 2.588)" fill="none" stroke="#cbcdd8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    <path id="Stroke_3" data-name="Stroke 3" d="M0,4.564c0,2.05,2.589,4.564,5.782,4.564s5.782-2.512,5.782-4.564S8.976,0,5.782,0,0,2.514,0,4.564Z" fill="none" stroke="#cbcdd8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                </g>
                            </svg>
                            295
                        </div>-->
                        <h1 class="head_art">{{$jobrequest->max_price}} €</h1>
                    </div>
                </div>
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <img src="{{asset($jobrequest->applicant->image)}}" alt="">
                        <h2>{{$jobrequest->applicant->firstName}} {{$jobrequest->applicant->lastName}}</h2>
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
                            <span>Poster {{$jobrequest->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Budget</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>Min {{$jobrequest->min_price}} € - Max {{$jobrequest->max_price}} €</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Date</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$jobrequest->estimate_time}}</span>
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
                            <span>{{$jobrequest->country->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Appartient à</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$jobrequest->category->title}} / {{$jobrequest->subcategory->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="embody__content">
            <h1 class="head_art">Description du poste</h1>
            <p>
               {{$jobrequest->description}}
            </p>
        </div>
    </section>
    <section>
        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <a style="padding: 7px 20px" href="" class="item-link">
                        <div class="group">
                            <div class="icon bg-primary" style="height: 25px; width: 25px">
                                <svg id="Iconly_Curved_Activity" data-name="Iconly/Curved/Activity" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                    <g id="Activity" transform="translate(1.939 1.86)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M0,3.95,2.369.871l2.7,2.122L7.391,0" transform="translate(3.537 5.949)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_2" data-name="Stroke 2" d="M1.522,0A1.522,1.522,0,1,1,0,1.522,1.521,1.521,0,0,1,1.522,0Z" transform="translate(12.109 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_4" data-name="Stroke 4" d="M14.492,4.921a16.474,16.474,0,0,1,.154,2.4c0,5.493-1.83,7.323-7.323,7.323S0,12.816,0,7.323,1.831,0,7.323,0A16.57,16.57,0,0,1,9.684.148" transform="translate(0 0.557)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Voir les commentaires</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="components_page">
        <div class="padding-l-20 swiperCards__wallet padding-b-10">
            <div class="emBK__cards">
                <h1 class="head_art">Aperçu du Job</h1>
                <div class="owl-carousel owl-theme owlCards">
                    <div class="item" style="height: 170px">
                        <!-- ele__card -->
                        <div class="ele__card">
                            <div class="bg_imgCard">
                                <img class="cover_img" style="height: 150px" src="{{asset('assets/img/card0032.png')}}" alt="">
                            </div>
                        </div>
                        <!-- .ele__card -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(Auth::user()->id == $jobrequest->applicant_id)

        <section class="margin-b-20 emPage__CateJobs withOut_colorful padding-l-20 padding-r-20">
        <h1 class="head_art">Personnes ayant postulé à un emploi</h1>
            @foreach($jobrequest->proposals as $proposal)
            <a href="{{route('applicant.proposal.detail', ['id' => $proposal->id])}}" class="emCategorie_itemJobs _list bg-blue">
                <img src="{{asset($proposal->jobber->image)}}" style="height: 40px; border-radius: 50px" alt="">
                <div class="txt">
                    <h2>{{$proposal->jobber->firstName}} {{$proposal->jobber->lastName}}</h2>
                    <p style="margin-bottom: 10px">{{Str::limit($proposal->description, 40)}}</p>
                    <h2>Prix de l'offre: {{$proposal->price}} €</h2>
                </div>
            </a>
            @endforeach
        </section>

        <section class="components_page padding-b-30">

            <div class="bg-white padding-20 d-flex emBlock__border">
                <a href="{{route('applicant.jobrequest.status', ['id' => $jobrequest->id])}}" class="btn justify-content-center bg-danger rounded-10 btn__default full-width">
                    <span class="color-white">Proche</span>
                </a>
            </div>


        </section>
    @else
        <section class="components_page padding-b-30">
            <div class="bg-white padding-20 d-flex emBlock__border">
                <button type="button" data-toggle="modal"
                   data-target="#propsal" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                    <span class="color-white">Envoyer la proposition</span>
                </button>
            </div>
        </section>
    @endif
    <br>
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="propsal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Envoyer la proposition</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('proposal.submit')}}" method="POST">
                    @csrf
                    <div class="modal-body env-pb">
                        <div class="form-group input-lined">
                            <input type="number" name="price" class="form-control" placeholder="Prix" required="">
                            <label for="username">Prix</label>
                        </div>
                        <input type="hidden" name="id" value="{{$jobrequest->id}}">
                        <div class="form-group input-lined">
                            <input type="text" name="time_limit"  class="form-control" required="">
                            <label for="mobile">Temps estimé</label>
                        </div>
                        <div class="form-group input-lined">
                            <textarea class="form-control" rows="6" name="description"></textarea>
                            <label for="address">Details</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Poster
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
