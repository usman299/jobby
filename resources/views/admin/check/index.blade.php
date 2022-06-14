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
                        <h4 class="card-title"><!-- Category -->Chèques bancaires</h4>
                        <div class="float-lg-right">

                            {{--                <a href="{{route('category.create')}}" class="btn btn-primary">Ajouter un nouveau</a>--}}

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>

                                    <th><!-- id -->Identifiant</th>
                                    <th><!-- title -->Utilisatrice</th>
                                    {{--                                                <th>Couleur de l'arrière plan</th>--}}
                                    <th>Image</th>

                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($check as $row)

                                    <tr>

                                        <td>{{$row->id}}</td>
                                        <td>{{$row->users->firstName .' ' .$row->users->lastName }}</td>
                                        {{--                                                <td> <input type="color" value="{{$row->backColor}}" disabled></td>--}}

                                        <td><a href="{{ asset($row->img ?? ' ')  }} " data-lightbox="image-1"
                                               data-title="{{$row->users->firstName}}"><img class="rounded-circle" width="50"  loading="lazy"  src="{{asset($row->img)}}" alt="Album Photo" style="border-radius: 20%;height: 60px;width: 60px; text-align: center;"></a></td>

                                        @if($row->status==0)
                                        <td>
                                            <div class="d-flex">

                                                <a href="" data-toggle="modal" data-target="#aAddDietMenus{{$row->id}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

                                                {{--														<a href="{{route('category.destroy',['id'=>$row->id])}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>--}}
                                            <!-- Modal -->
                                                <div class="modal fade" id="aAddDietMenus{{$row->id}}">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Ajouter une carte-cadeau</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('admin.add.balance')}}" class="formsubmit" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label>Montante</label>
                                                                        <input type="text" class="form-control" name="balance" placeholder="Montante">
                                                                    </div>
                                                                    <input type="hidden" name="id" value="{{$row->id}}">
                                                                    <input type="hidden" name="user_id" value="{{$row->user_id}}">
                                                                    <button class="btn btn-primary">Submit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        @else
                                            <td></td>
                                        @endif

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
