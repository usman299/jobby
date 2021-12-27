@extends('admin.layouts.include')

@section('content')
    @toastr_css
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



                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    @jquery
    @toastr_js
    @toastr_render

@endsection
