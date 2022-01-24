@extends('admin.layouts.include')

@section('content')
    <style>
        .chatbox {
            background: #0B2A97;
            margin-left: 10px;
            border-radius: 0 1.25rem 1.25rem 1.25rem;
            color: #fff;
            padding: 10px 15px;
            position: relative;
             right: 0px;
        }

        .msg_cotainer_send {
            background: #F9F9F9;
            padding: 10px 15px;
            border-radius: 6px 0px 6px 6px;
            margin-right: 10px;
            color: #222;
            position: relative;
            text-align: right;
        }
        .img_cont_msg img {
            width: 100%;
            border-radius: 50% !important;
            vertical-align: middle;
            border-style: none;
        }
    </style>

    <div class="content-body">
        <div class="container-fluid">

            {{-- Strat Content--}}

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show"><!--ActiveJobRequest-->Détails du contrat</a>
                                    </li>
                                    <li class="nav-item"><a href="#message" data-toggle="tab" class="nav-link "><!--ActiveJobRequest-->Détails du message</a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h4 class="text-primary">La description</h4>
                                                <p class="mb-2"> {{$contract->description}}</p>

                                            </div>
                                        </div>
                                        <div class="profile-skills mb-5">
                                            <a class="text-primary mb-2"><strong>Demandeur Nom:     </strong></a>
                                            <a href="javascript:void()" class="btn btn-primary dark btn-xs mb-1">{{$contract->user->firstName}} {{$contract->user->lastName}}</a><br><br>
                                            <a class="text-warning mb-2"><strong>Jobber Nom:     </strong></a>
                                            <a href="javascript:void()" class="btn btn-warning dark btn-xs mb-1">{{$contract->jobber->firstName}} {{$contract->jobber->lastName}}</a>

                                        </div>
                                        <div class="profile-lang  mb-5">

                                            @if($contract->proposal_id=== null)
                                                <h4 class="text-primary mb-2"> Titre Serivce </h4>
                                            <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> {{$contract->service->title ?? ''}} </a>
                                            @else
                                                <h4 class="text-primary mb-2">Titre  proposition </h4>
                                                <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i>{{$contract->proposal->jobrequest->title ?? ''}} </a>

                                            @endif

                                        </div>
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4">Plus d'information</h4>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Status <span class="pull-right">:</span></h5>
                                                </div>
                                                @if($contract->status==1)
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-success">Active</span> </div>
                                                @elseif($contract->status==2)
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-primary">Livrer</span> </div>
                                                @elseif($contract->status==3)
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-secondary">Compléter</span> </div>
                                                @elseif($contract->status==4)
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-warning">Demande d'annulation</span> </div>
                                                @else
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-danger">Annuler</span> </div>
                                                @endif

                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Prix <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span class="badge light badge-warning">{{$contract->price}}€</span> </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Heure de fin<span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span class="badge light badge-primary">{{$contract->e_time}}</span> </div>
                                        </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Créé à <span class="pull-right">:</span></h5>
                                        </div>

                                        <?php
                                        \Carbon\Carbon::setLocale('fr');
                                        $date = \Carbon\Carbon::parse($contract->created_at);
                                        ?>
                                        <div class="col-sm-9 col-7"><span class="badge light badge-info">{{$date->diffForHumans()}}</span> </div>
                                    </div>

                                </div>


                                    <div id="message" class="tab-pane fade ">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">

                                                <div class="card-body msg_card_body dz-scroll ps" id="DZ_W_Contacts_Body3">

                                                    @foreach($messages as $row)

                                                        @if($row->user->role==2 )
                                                    <div class="d-flex justify-content-start mb-4">
                                                        <div class="">
                                                            <img src="{{asset($row->user->image ?? '')}}"  loading="lazy"  style="width: 50px; height: 50px;border-radius: 50% !important;"  class="" alt="">
                                                        </div>
                                                        <div class="chatbox" >
                                                            {{$row->user->firstName ?? '' }} {{$row->user->lastName ?? ''}}:<br>
                                                            {{$row->body ?? '' }}<br>
                                                            <?php
                                                            \Carbon\Carbon::setLocale('fr');
                                                            $date = \Carbon\Carbon::parse($row->created_at);
                                                            ?>
                                                            <span class="msg_time"> {{$date->diffForHumans() ?? ''}}</span>

                                                        </div>
                                                    </div>
                                                        @else

                                                    <div class="d-flex justify-content-end mb-4">

                                                        <div class="msg_cotainer_send"  style="float:left;">
                                                            {{$row->user->firstName ?? ''}} {{$row->user->lastName ?? ''}}:<br>
                                                            {{$row->body ?? ''}}<br>
                                                            <?php
                                                            \Carbon\Carbon::setLocale('fr');
                                                            $date = \Carbon\Carbon::parse($row->created_at);
                                                            ?>
                                                            <span class="msg_time"> {{$date->diffForHumans() ?? ''}}</span>
                                                        </div>
                                                        <div class="img_cont_msg">
                                                            <img src="{{asset($row->user->image ?? '')}}"  loading="lazy"  style="width: 50px; height: 50px;border-radius: 50% !important;"class="rounded-circle user_img_msg" alt="">
                                                        </div>
                                                    </div>
                                                        @endif
                                                    @endforeach

                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

                                            </div>
                                        </div>


                                    </div>



                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>


@endsection
