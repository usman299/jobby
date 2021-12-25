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
                                    <li class="nav-item"><a href="#completePaymant" data-toggle="tab" class="nav-link active show">Paymant complet</a>
                                    </li>
                                    <li class="nav-item"><a href="#pendingPaymant" data-toggle="tab" class="nav-link">En attente de paiement</a>
                                    </li>
                                    <li class="nav-item"><a href="#cancelPaymant" data-toggle="tab" class="nav-link">Annuler le paiement</a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div id="completePaymant" class="tab-pane fade active show">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">

                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                            <tr>

                                                                <th>Id</th>
                                                                <th>Nom de l'expéditeur</th>
                                                                <th>Nom du destinataire</th>
                                                                <th>Prix</th>
                                                                <th>Status</th>
                                                                <th>Créé à</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($paymantComplete as $row)
                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->applicant->firstName}} {{$row->applicant->lastName}}</td>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    <td>{{$row->price}}</td>
                                                                    @if($row->status==1)
                                                                        <td><span class="badge light badge-success">Compléter</span></td>
                                                                    @elseif($row->status==0)
                                                                        <td><span class="badge light badge-warning">En attente</span></td>
                                                                    @else
                                                                        <td><span class="badge light badge-danger">Annuler</span></td>
                                                                    @endif
                                                                    <td>{{$row->created_at}}</td>


                                                                </tr>

                                                            @endforeach

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pendingPaymant" class="tab-pane fade">

                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">

                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                            <tr>

                                                                <th>Id</th>
                                                                <th>Nom de l'expéditeur</th>
                                                                <th>Nom du destinataire</th>
                                                                <th>Prix</th>
                                                                <th>Status</th>
                                                                <th>Créé à</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($paymantPending as $row)
                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->applicant->firstName}} {{$row->applicant->lastName}}</td>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    <td>{{$row->price}}</td>
                                                                    @if($row->status==1)
                                                                        <td><span class="badge light badge-success">Compléter</span></td>
                                                                    @elseif($row->status==0)
                                                                        <td><span class="badge light badge-warning">En attente</span></td>
                                                                    @else
                                                                        <td><span class="badge light badge-danger">Annuler</span></td>
                                                                    @endif
                                                                    <td>{{$row->created_at}}</td>


                                                                </tr>

                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="cancelPaymant" class="tab-pane fade">

                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">

                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                            <tr>

                                                                <th>Id</th>
                                                                <th>Nom de l'expéditeur</th>
                                                                <th>Nom du destinataire</th>
                                                                <th>Prix</th>
                                                                <th>Status</th>
                                                                <th>Créé à</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($paymantCancel as $row)
                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->applicant->firstName}} {{$row->applicant->lastName}}</td>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    <td>{{$row->price}}</td>
                                                                    @if($row->status==1)
                                                                        <td><span class="badge light badge-success">Compléter</span></td>
                                                                    @elseif($row->status==0)
                                                                        <td><span class="badge light badge-warning">En attente</span></td>
                                                                    @else
                                                                        <td><span class="badge light badge-danger">Annuler</span></td>
                                                                    @endif
                                                                    <td>{{$row->created_at}}</td>


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
