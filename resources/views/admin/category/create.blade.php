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
                    <div class="col-xl-9 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><!-- New Category --> Nouvelle catégorie</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                             @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- category -->Pays <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-lg default-select select2"  name="countory_id">
                                                    <option>Choisir une Pays</option>
                                                    @foreach($countory as $row)

                                                        <option value="{{$row->id}}" >{{$row->name}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- Title -->Titre <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"  name="title" placeholder="Entrez le titre" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Icône<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-9">
                                               <label class="form-control @error('img') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre Image</strong></center><input type="file" style="display: none;"name="img" value="{{ old('img') }}" required autocomplete="img" accept="image/png, image/gif, image/jpeg">
                        </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- bacgorung color -->Couleur <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-9">

                                                <input type="color" value="#ff0000" class="form-control" name="backColor"  required >
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

