@extends('admin.layouts.include')

@section('content')
    @toastr_css
    <!--**********************************
               Content body start
           ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><!-- home -->Domicile</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><!-- Element -->Élément</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><!-- New Category -->  Termes et conditions</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{route('app.condition.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!-- Title --><strong>Politique de Confidentialité</strong> <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-12" style="margin-top: 20px">
                                            <textarea class="summernote" name="description1" >{{$condition->description1 ?? ''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!-- Title --><strong>Termes et Conditions</strong> <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-12" style="margin-top: 20px">
                                            <textarea class="summernote" name="description2"   >{{$condition->description2 ?? ''}}</textarea>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary"><!-- Sign in -->Nous Faire Parvenir</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--**********************************
            Content body start
        ***********************************-->


        @jquery
        @toastr_js
        @toastr_render

@endsection

