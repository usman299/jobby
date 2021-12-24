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
                        <h4 class="card-title"><!-- Category -->Question Réponse</h4>
                        <div class="float-lg-right">
                            <a href="{{route('question.create')}}" class="btn btn-primary">Ajouter un nouveau</a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>

                                    <th><!-- id -->identifiant</th>
                                    <th><!-- title -->Question</th>
                                    {{--                                                <th>Couleur de l'arrière plan</th>--}}
                                    <th> Réponse</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($questionAnswer as $row)
                                    <tr>

                                        <td style="text-align: center">{{$row->id}}</td>
                                        <td>{!! Str::limit($row->question, 35) !!}</td>
                                        <td>{!! Str::limit($row->answer, 35) !!}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('question.edit', ['id' => $row->id])}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="{{route('question.delete',['id'=>$row->id])}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
