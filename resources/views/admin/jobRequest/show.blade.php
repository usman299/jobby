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
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show"><!--ActiveJobRequest-->Détails de la demande d'emploi</a>
                                    </li>
                                    <li class="nav-item"><a href="#allProposal" data-toggle="tab" class="nav-link"><!--CloseJobeRequest-->Fermer la demande d'emploi</a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h4 class="text-primary">La description</h4>
                                                <p class="mb-2"> {{$jobRequest->description}}</p>

                                            </div>
                                        </div>
                                        <div class="profile-skills mb-5">
                                            <a class="text-primary mb-2"><strong>Catégorie:     </strong></a>
                                            <a href="javascript:void()" class="btn btn-primary dark btn-xs mb-1">{{$jobRequest->category->title}}</a><br><br>
                                            <a class="text-warning mb-2"><strong>Sous-catégorie:     </strong></a>
                                            <a href="javascript:void()" class="btn btn-warning dark btn-xs mb-1">{{$jobRequest->subcategory->title}}</a>

                                        </div>
                                        <div class="profile-lang  mb-5">
                                            <h4 class="text-primary mb-2">Titre</h4>
                                            <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> {{$jobRequest->title}}</a>

                                        </div>
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4">Plus d'information</h4>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Status <span class="pull-right">:</span></h5>
                                                </div>
                                                @if($jobRequest->status==1)
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-success">Active</span> </div>
                                                @else
                                                    <div class="col-sm-9 col-7"><span class="badge light badge-danger">Fermer</span> </div>
                                                @endif

                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Demandeur <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{$jobRequest->applicant->firstName }} {{$jobRequest->applicant->lastName }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Temps Estimé <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{$jobRequest->estimate_time}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Prix  <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{$jobRequest->min_price}}€ - {{$jobRequest->max_price}}€</span>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div id="allProposal" class="tab-pane fade ">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">

                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                            <tr>

                                                                <th><!-- id -->Id</th>
                                                                <th><!-- jobrequesttitle -->Demandeur Nom</th>
                                                                <th>Jobber Nom</th>
                                                                <th>Prix ​​de l'offre</th>

                                                                <th>DateHeure</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($allProposal as $row)
                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->jobRequest->applicant->firstName}} {{$row->jobRequest->applicant->lastName}}</td>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    <td>{{$row->price}}€</td>
                                                                    <td>{{ date_format($row->created_at,'d M Y')}}</td>
                                                                    <td><a href="{{route('proposol.show', ['id' => $row->id])}}" id="edit" class="btn btn-primary shadow btn-xs sharp mr-1" title="edit" ><i class="fa fa-eye"></i></td>


                                                                </tr>

                                                            @endforeach

                                                            </tbody>
                                                        </table>
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

            @jquery
            @toastr_js
            @toastr_render

@endsection
