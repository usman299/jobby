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
                                    <li class="nav-item"><a href="#activeProposol" data-toggle="tab" class="nav-link active show"><!--ActiveProposol-->Proposition Active</a>
                                    </li>
                                    <li class="nav-item"><a href="#closeProposol" data-toggle="tab" class="nav-link"><!--AcceptProposol-->Accepter la proposition</a>
                                    </li>
                                    <li class="nav-item"><a href="#cancelProposol" data-toggle="tab" class="nav-link"><!--CancelProposol-->Annuler la proposition</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div id="activeProposol" class="tab-pane fade active show">
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
                                                            @foreach($activProposal as $row)
                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->jobRequest->applicant->firstName}} {{$row->jobRequest->applicant->lastName}}</td>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    <td>{{$row->price}}€</td>
                                                                    <?php
                                                                    \Carbon\Carbon::setLocale('fr');
                                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                                    ?>
                                                                    <td>{{$date->diffForHumans()}}</td>
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

                                    <div id="closeProposol" class="tab-pane fade">

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
                                                            @foreach($acceptProposal as $row)
                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->jobRequest->applicant->firstName}} {{$row->jobRequest->applicant->lastName}}</td>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    <td>{{$row->price}}€</td>
                                                                    <?php
                                                                    \Carbon\Carbon::setLocale('fr');
                                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                                    ?>
                                                                    <td>{{$date->diffForHumans()}}</td>
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

                                    <div id="cancelProposol" class="tab-pane fade ">
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
                @foreach($closeProposal as $row)
                    <tr>

                        <td>{{$row->id}}</td>
                        <td>{{$row->jobRequest->applicant->firstName}} {{$row->jobRequest->applicant->lastName}}</td>
                        <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                        <td>{{$row->price}}€</td>
                        <?php
                        \Carbon\Carbon::setLocale('fr');
                        $date = \Carbon\Carbon::parse($row->created_at);
                        ?>
                        <td>{{$date->diffForHumans()}}</td>
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
