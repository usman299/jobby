@extends('admin.layouts.include')

@section('content')


    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><!-- Category -->Questions</h4>
                        <div class="float-lg-right">

                            <a href="{{route('question.create')}}" class="btn btn-primary">Ajouter un nouveau</a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>Catégorie</th>
                                    <th>Sous catégorie</th>
                                    <th>Question</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($questions as $row)
                                    <tr>
                                        <td>{{$row->category->title}}</td>
                                        <td>{{$row->subcategory->title}}</td>
                                        <td>{{$row->question}}</td>
                                        <td>
                                            <a href="{{route('question.delete', ['id' => $row->id])}}" id="delete" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection
