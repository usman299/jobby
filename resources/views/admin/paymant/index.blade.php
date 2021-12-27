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
                                    <li class="nav-item"><a href="#applicantPaymant" data-toggle="tab" class="nav-link active show">Paiement reçu</a>
                                    </li>
                                    <li class="nav-item"><a href="#jobberPaymant" data-toggle="tab" class="nav-link">Payant</a>
                                    </li>



                                </ul>
                                <div class="tab-content">
                                    <div id="applicantPaymant" class="tab-pane fade active show">
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
{{--                                                                <th>Nom du destinataire</th>--}}
                                                                <th>Recevoir le prix</th>
                                                                <th>Le prix du contrat</th>
                                                                <th>Bénéfice Prix</th>
                                                                <th>Status</th>
                                                                <th>Créé à</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($payment as $row)

                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->applicant->firstName}} {{$row->applicant->lastName}}</td>
                                                                    <td style="text-align: center">{{$row->price}}€</td>
                                                                    <td style="text-align: center">{{$row->contract_price}}€</td>
                                                                    <td style="text-align: center">{{$row->percentage}}€</td>
                                                                    <td><span class="badge light badge-success">Payer</span></td>
                                                                    <?php
                                                                    \Carbon\Carbon::setLocale('fr');
                                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                                    ?>
                                                                    <td>{{$date->diffForHumans()}}</td>


                                                                </tr>

                                                            @endforeach

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="jobberPaymant" class="tab-pane fade">

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
                                                                <th>Nom du destinataire</th>
                                                                <th>Le prix du contrat</th>
                                                                <th>Envoyer le prix</th>
                                                                <th>Bénéfice Prix</th>
                                                                <th>Status</th>
                                                                <th>Créé à</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($payment as $row)

                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <td>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</td>
                                                                    <td style="text-align: center">{{$row->contract_price}}€</td>
                                                                    <td style="text-align: center">{{$row->jobber_get}}€</td>
                                                                    <td style="text-align: center">{{$row->percentage}}€</td>
                                                                    @if($row->status==1)
                                                                        <td><span class="badge light badge-success">Compléter</span></td>
                                                                    @elseif($row->status==0)
                                                                        <td><span class="badge light badge-warning">Dans le traitement</span></td>
                                                                    @else
                                                                        <td><span class="badge light badge-danger">Annuler</span></td>
                                                                    @endif
                                                                    <?php
                                                                    \Carbon\Carbon::setLocale('fr');
                                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                                    ?>
                                                                    <td>{{$date->diffForHumans()}}</td>


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
