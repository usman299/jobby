@extends('admin.layouts.include')

@section('content')
    <style>
        #output_image1{
            border-style: ridge;
            width: 120px;
            height: 120px;
        }

    </style>

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
                <div class="col-xl-9 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><!-- New SubCategory --> Sous-catégorie</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('childcategory.update',['id'=>$childcategory->id]) }}" enctype="multipart/form-data">
                                    @csrf
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-3 col-form-label"><!-- category -->Pays <strong style="color: red;font-size: 20px;"> *</strong></label>--}}
{{--                                        <div class="col-sm-9">--}}
{{--                                            <select class="form-control form-control-lg default-select select2" id="countory_id" name="countory_id">--}}
{{--                                                <option>Choisir une Pays</option>--}}
{{--                                                @foreach($countory as $row)--}}

{{--                                                    <option value="{{$row->id}}" {{ $childcategory->countory_id == $row->id ? 'selected' : '' }}>{{$row->name}}</option>--}}

{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-3 col-form-label"><!-- category -->Catégorie <strong style="color: red;font-size: 20px;"> *</strong></label>--}}
{{--                                        <div class="col-sm-9">--}}
{{--                                            <select name="category_id" id="category_id" class="form-control category_id" >--}}

{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-3 col-form-label"><!-- Title -->Titre <strong style="color: red;font-size: 20px;"> *</strong></label>--}}
{{--                                        <div class="col-sm-9">--}}
{{--                                            <input type="text" class="form-control"  value="{{$childcategory->title}}" name="title" placeholder="Entrez le titre" required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!--Icon-->Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                                        <div class="col-sm-5">
                                            <label class="form-control @error('img') is-invalid @enderror">
                                                <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre Icône</strong></center><input type="file" style="display: none;"name="img" value="{{ old('img') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp1" onchange="preview_image1(event)">
                                            </label>
                                        </div>

                                        <div class="col-sm-4">

                                            <img id="output_image1" src="{{asset($childcategory->img)}}" />

                                        </div></div>
{{--                                    <div class="form-group row">--}}
{{--                                        <label class="col-sm-3 col-form-label"><!-- bacgorung color -->Couleur <strong style="color: red;font-size: 20px;"> *</strong></label>--}}
{{--                                        <div class="col-sm-9">--}}

{{--                                            <input type="color" value="{{$childcategory->backColor}}" class="form-control" name="backColor"  required>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script>

            $('#countory_id').change(function() {

                $('#category_id').html('<option value="">Choisir une catégorie</option>');
                var id = $(this).val();

                $.ajax({
                    method:"GET",
                    url: "{{url('/fetchcategory')}}/"+id,
                    async: false,
                    success : function(response) {
                        console.log(response);
                        $.each(response, function(i, item) {

                            $('#category_id').append('<option value="'+item.id+'">'+item.title+'</option>');
                        });

                    },
                    error: function() {
                        $('#option').html('<option value="">Catégorie non disponible</option>');
                    }
                });

            });
        </script>
        <script>
            function preview_image1(event)
            {
                var reader = new FileReader();
                reader.onload = function()
                {
                    var output = document.getElementById('output_image1');
                    output.src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }


        </script>

        @jquery
        @toastr_js
        @toastr_render


@endsection

