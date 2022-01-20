@extends('admin.layouts.include')
<style>
    #output_image2{
        border-style: ridge;
        width: 120px;
        height: 150px;
    }
</style>
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
                            <h4 class="card-title"><!-- New Category --> Usine d'emplois</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{route('jobfactory.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title --><strong>Titre</strong> <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-4" style="margin-top: 20px">
                                            <input type="text" class="form-control" value="{{$jobfactory->title}}" name="title" placeholder="Titre">
                                        </div>
                                        <label class="col-sm-2 col-form-label"><!-- Title --><strong>URL de la boutique Google</strong> <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-4" style="margin-top: 20px">
                                            <input type="text" class="form-control" value="{{$jobfactory->url1}}" name="url1" placeholder="URL de la boutique Google">
                                        </div>

                                    </div>
                                    <div class="form-group row">

                                        <label class="col-sm-2 col-form-label"><!-- Title --><strong>URL de la boutique Apple</strong> <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-4" style="margin-top: 20px">
                                            <input type="text" class="form-control" value="{{$jobfactory->url2}}" name="url2" placeholder="URL de la boutique Apple">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                                        <div class="col-sm-6">
                                            <label class="form-control @error('img') is-invalid @enderror">
                                                <center><i class="fa fa-image"></i> <!--Add Jobber introduction Screen one--> <strong style="font-size: 18px;"> Ajouter l'écran d'introduction Jobber un</strong></center><input type="file" style="display: none;"name="image" value="{{ old('image') }}"   accept="image/png, image/gif, image/jpeg" id="imgInp2" onchange="preview_image(event)">
                                            </label>
                                        </div>
                                        <div class="col-sm-4">

                                            <img id="output_image2" src="{{asset($jobfactory->image)}}" />

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!-- Title --><strong>La description</strong> <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-12" style="margin-top: 20px">
                                            <textarea class="summernote" name="description"   >{{$jobfactory->description}}</textarea>
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
        <script>
            function preview_image(event)
            {
                var reader = new FileReader();
                reader.onload = function()
                {
                    var output = document.getElementById('output_image2');
                    output.src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>

@endsection

