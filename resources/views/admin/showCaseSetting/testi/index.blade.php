@extends('admin.layouts.include')

@section('content')

    @toastr_css

    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><!-- Home -->Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><!-- Dashboard -->Tableau de bord</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><!-- Skils -->Réussites</h4>
                        <div class="float-lg-right">

                            <a href="{{route('testi.create')}}" class="btn btn-primary">Ajouter un nouveau</a>


                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>

                                    <th><!-- id -->identifiant</th>
                                    <th><!-- category -->Nom</th>
                                    <th><!-- subcategory -->Destination </th>
                                    <th><!-- subcategory -->Image </th>

                                    <th><!-- subcategory -->Description  </th>


                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($testi as $row)
                                    <tr>

                                        <td>{{$row->id ?? ''}}</td>
                                        <td>{{$row->name ?? ''}}</td>
                                        <td>{{$row->destination ?? ''}}</td>


                                        <td><a href="{{ asset($row->image ?? ' ')  }} " data-lightbox="image-1"
                                               data-title="{{$row->name}}"><img class="rounded-circle" width="50" src="{{asset($row->image)}}" alt="Album Photo" style="border-radius: 20%;height: 60px;width: 60px; text-align: center;"></a></td>

                                        <td>{!! Str::limit($row->description, 35) !!}</td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> -->
                                                <a href="{{route('testi.edit', ['id' => $row->id])}}" id="edit" class="btn btn-primary shadow btn-xs sharp"  title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{route('testi.delete', ['id' => $row->id])}}" id="delete" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
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
