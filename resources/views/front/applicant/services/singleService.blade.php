@extends('layouts.front')
@section('content')
    <!-- Start emPage_SubCategories -->
    <section class="embanner_SubCategories">
        <div class="em_head">
            <div class="cover_course">
                <img src="{{ asset($services->img ?? ' ')  }}" alt="">

            </div>
        </div>
    </section>
    <!-- End. emPage_SubCategories -->

    <!-- Start emPage__detailsCourse -->
    <section class="emPage__detailsCourse ">
        <div class="em__header">
            <div class="user_publish">
                <div class="">
                    <svg id="Iconly_Two-tone_Profile" data-name="Iconly/Two-tone/Profile"
                         xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <g id="Profile" transform="translate(2.667 1.333)">
                            <circle id="Ellipse_736" cx="3.185" cy="3.185" r="3.185"
                                    transform="translate(1.867)" fill="none" stroke="#7e848e" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.2"
                                    opacity="0.4" />
                            <path id="Path_33945"
                                  d="M0,2.011a1.477,1.477,0,0,1,.146-.647A2.7,2.7,0,0,1,2.026.284,11.191,11.191,0,0,1,3.588.064a16.7,16.7,0,0,1,2.923,0,11.32,11.32,0,0,1,1.562.22,2.593,2.593,0,0,1,1.879,1.08,1.513,1.513,0,0,1,0,1.3A2.567,2.567,0,0,1,8.073,3.738a10.478,10.478,0,0,1-1.562.226A17.214,17.214,0,0,1,4.131,4a2.71,2.71,0,0,1-.543-.037,10.282,10.282,0,0,1-1.556-.226A2.58,2.58,0,0,1,.146,2.664,1.519,1.519,0,0,1,0,2.011Z"
                                  transform="translate(0 8.79)" fill="none" stroke="#7e848e"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.2" />
                        </g>
                    </svg>
                </div>


                <span>{{$services->user->firstName }} {{$services->user->lastName }}</span>

            </div>
            <div class="size-18 weight-600 color-primary">
                <span class="color-text">{{$services->price ?? ''}}€</span>
            </div>
        </div>
        <div class="em__body">
            <div class="title_course">
                <h1>{{$services->title ?? ''}}</h1>
                <p>{{$services->description ?? ''}}</p>
            </div>
        </div>


    </section>

    <section class=" components_page padding-b-30">

        <!-- Start title -->
        <div class=" margin-t-20 padding-20 d-flex emBlock__border">
            <a href="{{url('/chatify/'.$services->jobber_id)}}" class="btn bg-blue rounded-10 btn__default">
                <span class="color-white">Discuter</span>
                <div class="icon rounded-10">
                    <i class="tio-chevron_right"></i>
                </div>
            </a>
            <a href="" class="btn bg-primary rounded-10 btn__default ml-3" data-toggle="modal" data-target="#mdllJobDetails">
                <span class="color-white">Worker profile</span>
                <div class="icon rounded-10">
                    <i class="tio-chevron_right"></i>
                </div>
            </a>
        </div>
        <div class="   padding-20 d-flex emBlock__border">
            <a href="" class="btn bg-green rounded-0 btn__default full-width"  data-toggle="modal" data-target="#mdllContent-form" style="float: right" >
                <span class="color-white "   >Réservation</span>
                <div class="icon rounded-0">
                    <i class="tio-chevron_right"></i>
                </div>
            </a>
        </div>
        <!-- End. title -->

{{--        <div class="pt_simpleDetails m-0 py-2 rounded-0 emBlock__border">--}}
{{--            <div class="em_bodyinner">--}}
{{--                <div class="embkRateCustomer">--}}
{{--                    <div class="emBoxRating">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-4">--}}
{{--                                <div class="item_rate">--}}
{{--                                    <span class="noRate">4.0</span>--}}
{{--                                    <div class="">--}}
{{--                                        <p class="rateCutome">1.6k Commentaires</p>--}}
{{--                                        <div class="emPatternRate">--}}
{{--                                            <span class="ico _rated"></span>--}}
{{--                                            <span class="ico _rated"></span>--}}
{{--                                            <span class="ico _rated"></span>--}}
{{--                                            <span class="ico _rated"></span>--}}
{{--                                            <span class="ico"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-8">--}}
{{--                                <div class="progress__rate">--}}
{{--                                    <div class="">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <span class="txt">5</span>--}}
{{--                                            <span class="circle"></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <span class="txt">4</span>--}}
{{--                                            <span class="circle"></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <span class="txt">3</span>--}}
{{--                                            <span class="circle"></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <span class="txt">2</span>--}}
{{--                                            <span class="circle"></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="progress">--}}
{{--                                                <div class="progress-bar" role="progressbar" style="width:15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <span class="txt">1</span>--}}
{{--                                            <span class="circle"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="emCommentCusomers">--}}
{{--                    <div class="title"></div>--}}
{{--                    <!-- item -->--}}
{{--                    <div class="itemUser">--}}
{{--                        <div class="media">--}}
{{--                            <img class="x_img" src="{{asset('assets/img/persons/064.jpg')}}" alt="">--}}
{{--                            <div class="media-body">--}}
{{--                                <div class="txt_details">--}}
{{--                                    <h4 class="username">Richard Crump <time>Today</time></h4>--}}
{{--                                    <div class="emPatternRate">--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico"></span>--}}
{{--                                        <span class="ico"></span>--}}
{{--                                    </div>--}}
{{--                                    <p class="txtComment">--}}
{{--                                        Lacus sed turpis tincidunt id aliquet risus feugiat in. Cursus eget nunc--}}
{{--                                        scelerisque viverra mauris in aliquam.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- item -->--}}
{{--                    <div class="itemUser">--}}
{{--                        <div class="media">--}}
{{--                            <img class="x_img" src="{{asset('assets/img/persons/0654.jpg')}}" alt="">--}}
{{--                            <div class="media-body">--}}
{{--                                <div class="txt_details">--}}
{{--                                    <h4 class="username">Pedro Foster <time>2 days ago</time></h4>--}}
{{--                                    <div class="emPatternRate">--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico"></span>--}}
{{--                                    </div>--}}
{{--                                    <p class="txtComment">--}}
{{--                                        Cursus eget nunc scelerisque viverra mauris in aliquam.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="itemUser">--}}
{{--                        <div class="media">--}}
{{--                            <div class="no_img bg-purple">--}}
{{--                                <span>L</span>--}}
{{--                            </div>--}}
{{--                            <div class="media-body">--}}
{{--                                <div class="txt_details">--}}
{{--                                    <h4 class="username">Leona Barker <time>6 days ago</time></h4>--}}
{{--                                    <div class="emPatternRate">--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico _rated"></span>--}}
{{--                                        <span class="ico"></span>--}}
{{--                                    </div>--}}
{{--                                    <p class="txtComment">--}}
{{--                                        Sit amet purus gravida quis. Elementum nisi quis eleifend quam--}}
{{--                                        adipiscing--}}
{{--                                        vitae.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="page-product-reviews.html" class="btn all_reviews margin-t-20">See all reviews</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <br>--}}
{{--        <br>--}}

    </section>

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
                                <form method="POST" action="{{ route('applicant.services.contract',['id'=>$services->id]) }}" enctype="multipart/form-data">
                                    @csrf
                               <div class="form-group input-lined">
                                        <input type="date" id="e_time" name="e_time"  class="form-control" placeholder=" Entrez la  Heure de fin"
                                               required="">
                                        <label for="e_time" class="margin-t-20" style="font-size: 15px;"><strong>Heure de fin</strong> <strong style="color: red;">*</strong> </label>
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


    <!-- End. em_swiper_products1 -->
    <!-- Modal mdllJobDetails -->

    <div class="modal transition-bottom screenFull defaultModal mdllJobs_details fade" id="mdllJobDetails"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header padding-l-20 padding-r-50">
                    <div class="media align-items-center">
                        <div class="img_brand">

                                <img src="{{asset($services->user->image)}}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="txt_info">
                                    <span>Membre depuis: {{$services->user->created_at->format('Y')}}</span>
                                    <h2>{{$services->user->firstName}} {{$services->user->lastName}}</h2>
                                    <p>{{$services->user->countory->name}}</p>
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
                                    <p>{{$services->user->is_company == 1 ? 'Société' : 'Individuelle'}}</p>
                                </div>
                                <div class="item">
                                    <span>Tarif à l'heure</span>
                                    <p class="weight-600">{{$services->user->rate_per_hour??'0'}}€</p>
                                </div>
                                <div class="item">
                                    <span>Genre</span>
                                    <p class="weight-600">{{$services->user->gender??'non'}}</p>
                                </div>
                            </div>
                            <div class="details__job">
                                @if($services->user->company_name)
                                    <div class="item">
                                        <span>Nom de la compagnie</span>
                                        <p>{{$services->user->company_name}}</p>
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
                                        {{$services->user->description}}
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
                                        <a href="page-product-reviews.html" class="btn all_reviews margin-t-20">See all reviews</a>
                                    </div>
                                </div>

                            </div>

                            <div class="padding-20 d-flex emBlock__border">
                                <a href="{{route('applicant.jobber.services', ['id' => $services->user->id])}}" class="btn bg-green rounded-10 btn__default ml-3 full-width" style="float: right">
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



@endsection
