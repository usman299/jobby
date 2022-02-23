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

                                    <option value="{{route('app.search.product.size',['id'=>$row->id] ) }}">{{$row->name}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- row -->
                  <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><!-- Applicant User -->Demandeur Utilisateur</h4>
                                <div class="float-lg-right">



                                 </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>

                                                <th><!-- id -->Identifiant</th>
                                                <th><!-- Name -->Nom</th>

                                                <th><!-- email -->E-mail</th>
                                                <th><!-- role -->Rôle</th>
                                                <th>Statut</th>
                                                <th><!-- Action -->Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($applicant as $row)
                                            <tr>

                                                <td>{{$row->id}}</td>
                                                <td>{{$row->firstName }} {{$row->lastName }}</td>

                                                 <td>{{$row->email}}</td>
                                               @if($row->role==1)
                                                  <td><span class="badge light badge-primary">Jobber</span></td>
                                                 @else
                                                    <td><span class="badge light badge-success">Demandeur</span></td>

                                                 @endif

                                                 @if($row->status==1)
                                                 <td><span class="badge light badge-success">Activate</span></td>
                                                 @else
                                                 <td><span class="badge light badge-warning">Deactivate</span></td>
                                                 @endif



                                                <td>
													<div class="d-flex">
														<!-- <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> -->
                                                         @if($row->status == '0')
                                                        <a href="{{route('user.status', ['status'=> '1', 'id' => $row->id])}}" class="btn btn-success shadow btn-xs sharp" title="Activate"><i class="fa fa-user-plus"></i></a>
                                                    @else
                                                        <a href="{{route('user.status', ['status'=> '0', 'id' => $row->id])}}" class="btn btn-danger shadow btn-xs sharp" style="background-color: red;" title="Deactivate"> <i class="fa fa-user-times"></i></a>
                                                    @endif
                                                    <a href="{{route('applicant.profile', ['id' => $row->id])}}" id="edit"
                                                            class="btn btn-primary shadow btn-xs sharp mr-1" title="edit" >
                                                        <i class="fa fa-eye"></i>

{{--                                                        <a href="{{route('user.delete', ['id' => $row->id])}}" id="delete" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip" title="Delete">--}}
{{--                                                   <i class="fa fa-trash"></i>--}}
                                                </a>
													</div>
												</td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




     @jquery
    @toastr_js
    @toastr_render

 @endsection
