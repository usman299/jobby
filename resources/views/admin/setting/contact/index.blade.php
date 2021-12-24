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
                        <h4 class="card-title"><!-- Category -->Messages de contact</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>

                                    <th><!-- id -->identifiant</th>
                                    <th><!-- title -->Nom</th>
                                    {{--                                                <th>Couleur de l'arrière plan</th>--}}
                                    <th> Subject</th>
                                    <th> Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contact as $row)
                                    <tr>

                                        <td >{{$row->id}}</td>
                                        <td>{{$row->user->firstName}} {{$row->user->lastName}}</td>
                                        <td>{!! Str::limit($row->subject, 35) !!}</td>
                                        @if($row->role==2)
                                        <td><span class="badge light badge-success">Demandeur</span></td>
                                        @else
                                        <td><span class="badge light badge-warning">Jobber</span></td>
                                        @endif
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('contact.details', ['id' => $row->id])}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>

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

            <script src="{{asset('assets/dist/js/lightbox-plus-jquery.min.js')}}"></script>
            <script type="text/javascript">
                function reply_click(clicked_id)
                {

                    alert(clicked_id);

                }
            </script>

            @jquery
            @toastr_js
            @toastr_render

@endsection
