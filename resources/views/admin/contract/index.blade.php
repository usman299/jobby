@extends('admin.layouts.include')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-xl-12">
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
                                @foreach($contracts as $row)
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
    </div>
@endsection
