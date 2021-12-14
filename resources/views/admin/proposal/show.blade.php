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
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show"><!--ActiveJobRequest-->Détails de la proposition</a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h4 class="text-primary">La description</h4>
                                                <p class="mb-2"> {{$proposal->description}}</p>

                                            </div>
                                        </div>
                                        <div class="profile-skills mb-5">
                                            <a class="text-primary mb-2"><strong>Expéditrice:     </strong></a>
                                            <a href="javascript:void()" class="btn btn-primary dark btn-xs mb-1">{{$proposal->jobber->firstName}} {{$proposal->jobber->lastName}}</a><br><br>
                                            <a class="text-warning mb-2"><strong>Receveuse:     </strong></a>
                                            <a href="javascript:void()" class="btn btn-warning dark btn-xs mb-1">{{$proposal->jobRequest->applicant->firstName}} {{$proposal->jobRequest->applicant->lastName}}</a>

                                        </div>
                                        <div class="profile-lang  mb-5">
                                            <h4 class="text-primary mb-2">Demande d'emploi</h4>
                                            <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> {{$proposal->jobRequest->title}}</a>

                                        </div>
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4">Plus d'information</h4>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Status <span class="pull-right">:</span></h5>
                                                </div>
                                                @if($proposal->status==1)
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-success">Active</span> </div>
                                                @elseif($proposal->status==2)
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-primary">Accepte</span> </div>
                                                    @else
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-danger">Annuler</span> </div>
                                                @endif

                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Prix <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span class="badge light badge-warning">{{$proposal->price}}€</span> </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Limite de temps<span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span class="badge light badge-primary">{{$proposal->time_limit}}</span> </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Créé à <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span class="badge light badge-info">{{$proposal->created_at}}</span> </div>
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
