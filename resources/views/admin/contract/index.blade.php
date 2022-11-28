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
                                    <li class="nav-item"><a href="#activeContract" data-toggle="tab"
                                                            class="nav-link active show"><!--ActiveContract-->Contrat
                                            Actif</a>
                                    </li
                                    <li class="nav-item"><a href="#closeContract" data-toggle="tab" class="nav-link">
                                            <!--CompleteContract-->Contrat Complet</a>
                                    </li>
                                    <li class="nav-item"><a href="#pandingContract" data-toggle="tab" class="nav-link">
                                            <!--PandingContract-->Demande d'annulation</a>
                                    </li>
                                    <li class="nav-item"><a href="#cancelContract" data-toggle="tab" class="nav-link">
                                            <!--CancelContract-->Annuler le contrat</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="activeContract" class="tab-pane fade active show">
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
                                                                <th>Taper</th>
                                                                <th>Prix ​​de l'offre</th>
                                                                <th>Statut</th>
                                                                <th>Créer à</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($activContract as $row)
                                                                <tr>
                                                                    {{--                                                                    {{$row->service->title ?? ''}}{{$row->proposal->jobrequest->title ?? ''}}--}}
                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->user->firstName}} {{$row->user->lastName}}</td>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    @if($row->proposal_id=== null)
                                                                        <td><span class="badge light badge-success">Service</span>
                                                                        </td>
                                                                    @else
                                                                        <td><span class="badge light badge-primary">Proposol</span>
                                                                        </td>
                                                                    @endif
                                                                    <td style="text-align: center;">{{$row->price}}€
                                                                    </td>
                                                                    @if($row->status==1)
                                                                        <td><span class="badge light badge-primary">Active</span>
                                                                        </td>
                                                                    @else
                                                                        <td><span class="badge light badge-warning">Livrer</span>
                                                                        </td>
                                                                    @endif
                                                                    <?php
                                                                    \Carbon\Carbon::setLocale('fr');
                                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                                    ?>
                                                                    <td>{{$date->diffForHumans()}}</td>
                                                                    <td>
                                                                        <a href="{{route('contract.show', ['id' => $row->id])}}"
                                                                           id="edit"
                                                                           class="btn btn-primary shadow btn-xs sharp mr-1"
                                                                           title="edit"><i class="fa fa-eye"></i></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="closeContract" class="tab-pane fade">
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
                                                                <th>Taper</th>
                                                                <th>Prix ​​de l'offre</th>
                                                                <th>Statut</th>
                                                                <th>Créer à</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($compelteContract as $row)
                                                                <tr>
                                                                    {{--                                                                    {{$row->service->title ?? ''}}{{$row->proposal->jobrequest->title ?? ''}}--}}
                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->user->firstName}} {{$row->user->lastName}}</td>
                                                                    <?php $jobber = \App\User::where('id', '=', $row->jober_id)->first(); ?>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    @if($row->proposal_id=== null)
                                                                        <td><span class="badge light badge-success">Service</span>
                                                                        </td>
                                                                    @else
                                                                        <td><span class="badge light badge-primary">Proposol</span>
                                                                        </td>
                                                                    @endif
                                                                    <td style="text-align: center;">{{$row->price}}€
                                                                    </td>
                                                                    <td><span
                                                                            class="badge light badge-primary">Achevée</span>
                                                                    </td>
                                                                    <?php
                                                                    \Carbon\Carbon::setLocale('fr');
                                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                                    ?>
                                                                    <td>{{$date->diffForHumans()}}</td>
                                                                    <td>
                                                                        <a href="{{route('contract.show', ['id' => $row->id])}}"
                                                                           id="edit"
                                                                           class="btn btn-primary shadow btn-xs sharp mr-1"
                                                                           title="edit"><i class="fa fa-eye"></i></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pandingContract" class="tab-pane fade active">
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
                                                                <th>Taper</th>
                                                                <th>Prix ​​de l'offre</th>
                                                                <th>Statut</th>
                                                                <th>Créer à</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($pandingContract as $row)
                                                                <tr>
                                                                    {{--                                                                    {{$row->service->title ?? ''}}{{$row->proposal->jobrequest->title ?? ''}}--}}
                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->user->firstName}} {{$row->user->lastName}}</td>
                                                                    <?php $jobber = \App\User::where('id', '=', $row->jober_id)->first(); ?>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    @if($row->proposal_id=== null)
                                                                        <td><span class="badge light badge-success">Service</span>
                                                                        </td>
                                                                    @else
                                                                        <td><span class="badge light badge-primary">Proposol</span>
                                                                        </td>
                                                                    @endif
                                                                    <td style="text-align: center;">{{$row->price}}€
                                                                    </td>
                                                                    <td><span
                                                                            class="badge light badge-primary">Annuler</span>
                                                                    </td>
                                                                    <?php
                                                                    \Carbon\Carbon::setLocale('fr');
                                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                                    ?>
                                                                    <td>{{$date->diffForHumans()}}</td>
                                                                    <td>
                                                                        <a href="{{route('admin.contract.status', ['status'=> '3', 'id' => $row->id])}}"
                                                                           class="btn btn-success shadow btn-xs sharp"
                                                                           title="Accepter le contrat"><i
                                                                                class="fa fa-user-plus"></i></a>
                                                                        <a href="{{route('contract.show', ['id' => $row->id])}}"
                                                                           id="edit"
                                                                           class="btn btn-primary shadow btn-xs sharp mr-1"
                                                                           title="edit"><i class="fa fa-eye"></i></a>
                                                                        <a href="{{route('admin.contract.status', ['status'=> '5', 'id' => $row->id])}}"
                                                                           class="btn btn-danger shadow btn-xs sharp"
                                                                           style="background-color: red;"
                                                                           title="Annuler le contrat"> <i
                                                                                class="fa fa-user-times"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cancelContract" class="tab-pane fade active">
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
                                                                <th>Taper</th>
                                                                <th>Prix ​​de l'offre</th>
                                                                <th>Statut</th>
                                                                <th>Créer à</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($cancelContract as $row)
                                                                <tr>
                                                                    {{--                                                                    {{$row->service->title ?? ''}}{{$row->proposal->jobrequest->title ?? ''}}--}}
                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->user->firstName}} {{$row->user->lastName}}</td>
                                                                    <?php $jobber = \App\User::where('id', '=', $row->jober_id)->first(); ?>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    @if($row->proposal_id=== null)
                                                                        <td><span class="badge light badge-success">Service</span>
                                                                        </td>
                                                                    @else
                                                                        <td><span class="badge light badge-primary">Proposol</span>
                                                                        </td>
                                                                    @endif
                                                                    <td style="text-align: center;">{{$row->price}}€
                                                                    </td>
                                                                    <td><span
                                                                            class="badge light badge-primary">Annuler</span>
                                                                    </td>
                                                                    <?php
                                                                    \Carbon\Carbon::setLocale('fr');
                                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                                    ?>
                                                                    <td>{{$date->diffForHumans()}}</td>
                                                                    <td>
                                                                        <a href="{{route('contract.show', ['id' => $row->id])}}"
                                                                           id="edit"
                                                                           class="btn btn-primary shadow btn-xs sharp mr-1"
                                                                           title="edit"><i class="fa fa-eye"></i></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
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
