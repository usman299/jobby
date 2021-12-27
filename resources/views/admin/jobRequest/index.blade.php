@extends('admin.layouts.include')

@section('content')
    @toastr_css
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <div class=" row  "  >

                    <div class="col-sm-4">
                        <select class="form-control form-control-lg default-select select2" name="countory_id" onchange="location = this.options[this.selectedIndex].value;">
                            <option>Choisir une Pays</option>
                            @foreach($countory as $row)

                                <option value="{{route('search.country',['id'=>$row->id] ) }}}">{{$row->name}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

{{-- Strat Content--}}

            <div class="col-xl-12">
                <div class="card">
<div class="card-body">
<div class="profile-tab">
<div class="custom-tab-1">
<ul class="nav nav-tabs">
    <li class="nav-item"><a href="#activeJobRequest" data-toggle="tab" class="nav-link active show"><!--ActiveJobRequest-->Demande d'emploi active</a>
    </li>
    <li class="nav-item"><a href="#closeJobRequest" data-toggle="tab" class="nav-link"><!--CloseJobeRequest-->Fermer la demande d'emploi</a>
    </li>

</ul>
<div class="tab-content">
    <div id="activeJobRequest" class="tab-pane fade active show">
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
                                <th><!-- title -->Demandeur Nom</th>
                                <th>Pays</th>
                                <th>Titre</th>
                                <th>Catégorie</th>
                                <th>Sous-catégorie</th>
                                <th>DateHeure</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activJobRequest as $row)
                                <tr>

                                    <td>{{$row->id}}</td>
                                    <td>{{$row->applicant->firstName}} {{$row->applicant->lastName}}</td>
                                    <td>{{$row->country->name}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->category->title}}</td>
                                    <td>{{$row->subcategory->title}}</td>
                                    <?php
                                    \Carbon\Carbon::setLocale('fr');
                                    $date = \Carbon\Carbon::parse($row->created_at);
                                    ?>
                                    <td>{{$date->diffForHumans()}}</td>
                                    <td><a href="{{route('jobrequest.show', ['id' => $row->id])}}" id="edit" class="btn btn-primary shadow btn-xs sharp mr-1" title="edit" ><i class="fa fa-eye"></i></td>

                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="closeJobRequest" class="tab-pane fade">

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
                                <th><!-- title -->Nom</th>
                                <th>Pays</th>
                                <th>Titre</th>
                                <th>Catégorie</th>
                                <th>Sous-catégorie</th>
                                <th>DateHeure</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($closeJobRequest as $row)
                                <tr>

                                    <td>{{$row->id}}</td>
                                    <td>{{$row->applicant->firstName}} {{$row->applicant->lastName}}</td>
                                    <td>{{$row->country->name}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->category->title}}</td>
                                    <td>{{$row->subcategory->title}}</td>
                                    <td>{{ date_format($row->created_at,'d M Y')}}</td>
                                    <td><a href="{{route('jobrequest.show', ['id' => $row->id])}}" id="edit" class="btn btn-primary shadow btn-xs sharp mr-1" title="edit" ><i class="fa fa-eye"></i></td>

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
