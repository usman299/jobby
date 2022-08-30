@extends('layouts.front')
@section('content')

    <section class="emPage__detailsBlog bg-white">

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

                        <?php use App\User;use Carbon\Carbon;$jobber = User::where('id', '=', $contract->jober_id)->first(); ?>
                        <img src="{{asset($jobber->image)}}" loading="lazy" alt="">
                        <h2 data-toggle="modal"
                            data-target="#mdllJobDetails1">{{$jobber->firstName}} {{$jobber->lastName}}</h2>
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
                            Carbon::setLocale('fr');
                            $date = Carbon::parse($contract->created_at);
                            ?>
                            <span>Créer {{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Titre </h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$contract->title}} </span>
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

        </div>


    </section>


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
