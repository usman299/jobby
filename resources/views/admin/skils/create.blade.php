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
                                <h4 class="card-title"><!-- New SubCategory --> Sous-catégorie</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('skils.store') }}" enctype="multipart/form-data">
                                             @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- Title -->Titre <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" placeholder="Entrez le titre" required>
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- category -->Catégorie <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-lg default-select select2" id="category_id" name="category_id">
                                            	<option>Choisir une catégorie</option>
                                            	@foreach($category as $row)
                                                
                                                <option value="{{$row->id}}" >{{$row->title}}</option>
                                               
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- subcategory -->Sous-catégorie <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-lg  select2 subcategory_id" 
                                                id="subcategory_id" name="subcategory_id">
                                            	
                                            </select>
                                            </div>
                                        </div>
                                       
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"><!-- Submit-->Soumettre</button>
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

