@extends('admin.layouts.include')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-9 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><!-- New Category --> Nouvelle catégorie</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('question.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-9">
                                            <select required class="form-control form-control-lg select2" id="category_id" name="category_id">
                                                <option>Choisir une Utilisateur</option>
                                                @foreach($category as $cat)
                                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sous-catégorie <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-9">
                                            <select required class="form-control form-control-lg  select2 subcategory_id"
                                                    id="subcategory_id" name="subcategory_id">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Titre de question <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Titre de question" class="form-control" name="question" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Option 1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Option 1" class="form-control" name="option1" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Option 2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Option 2" class="form-control" name="option2" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Option 3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Option 3" class="form-control" name="option3" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Option 4 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Option 4" class="form-control" name="option4" required>
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

@endsection

