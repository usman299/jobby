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

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                            @if($contract->proposal_id=== null)
                            <div class="card-body">
                                <p class="mb-0 size-15 color-text">
                                    <strong>{{$contract->service->title}}</strong>
                                </p><br>
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
                                        <strong>{{$contract->proposal->jobrequest->title}}</strong>
                                    </p><br>
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

            @if($contract->status==1)
                <div class="embody__content" style="padding: 0;">

                    <h4 style="text-align: center; margin-top: 10px;">Temps restant</h4>
                    <h1 class="head_art" id="demotime" style="color: green; text-align: center;"></h1>

                </div>
            @elseif($contract->status==3)

                <div class="embody__content" style="padding: 0;">
                    <h4 style="text-align: center; margin-top: 10px;">Contrat Complet</h4>
                    <h1 class="head_art"   style="color: green; text-align: center;">0jrs  0h  00m  0s  </h1>

                </div>
            @else
                <div class="embody__content" style="padding: 0;">
                    <h4 style="text-align: center; margin-top: 10px;">Annuler le contrat</h4>
                    <h1 class="head_art" style="color: red; text-align: center;">0jrs  0h  00m  0s  </h1>

                </div>
            @endif
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
                        <h2>Status</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            @if($contract->status==1)
                                <span style="color: green"><strong>Active</strong></span>
                            @elseif($contract->status==2)
                                <span style="color: green" ><!--Deliver--><strong>Livrer</strong></span>
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
            <a href="{{url('/chatify/'.$contract->applicant_id)}}" class="btn bg-blue rounded-10 btn__default">
                <span class="color-white">Discuter</span>
                <div class="icon rounded-10">
                    <i class="tio-chevron_right"></i>
                </div>
            </a>
            @if($contract->status==1)
            <a href="{{route('applicant.contract.status', ['id' => $contract->id,'status'=>2])}}" class="btn bg-green rounded-10 btn__default ml-3"  >
                <span class="color-white">Livrer</span>
                <div class="icon rounded-10">
                    <i class="tio-chevron_right"></i>
                </div>
            </a>
            @endif
        </div>
        @if($contract->jobber_id_applicant==null)
        @if($contract->status==3)
        <div class="  margin-b-20  padding-20 d-flex emBlock__border">
            <a href="" class="btn bg-secondary rounded-0 btn__default full-width" data-toggle="modal" data-target="#acceptpropsal" >
                <span class="color-white "   >Passer en revue</span>
                <div class="icon rounded-0">
                    <i class="tio-chevron_right"></i>
                </div>
            </a>
        </div>
            @endif
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
                <form action="{{route('jobber.review', ['id' => $contract->id])}}" method="POST">
                    @csrf
                    <div class="modal-body env-pb">
                        <div class="form-group input-lined">
                            <textarea class="form-control" placeholder="Entrez le message" rows="3" name="message"></textarea>
                            <label for="address"><strong style="font-size: 15px;">Message</strong><strong style="color: red;">*</strong></label>
                        </div>
                        <div>
                            <div class="form-group  rate">
                                <input type="radio" id="star5" name="star" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="star" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="star" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="star" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="star" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div></div>
                    </div>
                    <div class="modal-footer">
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

    <br>
    <br>
    <script>
        // Set the date we're counting down to
        // ->format('M d, Y H:m')
        var countDownDate = new Date("{{$contract->e_time ?? ''}}").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

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
