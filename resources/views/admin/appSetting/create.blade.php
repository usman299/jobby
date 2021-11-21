@extends('admin.layouts.include')

@section('content')
 @toastr_css
 <style>
 #output_image{
 border-style: ridge;
 width: 120px;
 height: 150px;
}
</style>
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
                                <h4 class="card-title"><!-- APp Setting --> Paramètre d'application</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
            <form method="POST" action="{{ route('setting.store') }}" enctype="multipart/form-data">
                        @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!-- Add main screen --> <strong style="font-size: 18px;">Ajouter l'écran principal</strong></center><input type="file" style="display: none;"name="mainScreen" value="{{ old('mainScreen') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp" onchange="preview_image(event)">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        
                    <img id="output_image" src="{{ asset($appSetting->mainScreen ?? ' ')  }}" />
                        
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!-- Add App logo  --> <strong style="font-size: 18px;">Ajouter le logo de l'application</strong></center><input type="file" style="display: none;"name="appLogo" value="{{ old('appLogo') }}"  accept="image/png, image/gif, image/jpeg">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        
                    <img id="output_image" src="" />
                        
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!--Add Jobber introduction Screen one--> <strong style="font-size: 18px;"> Ajouter l'écran d'introduction Jobber un</strong></center><input type="file" style="display: none;"name="jooberIntroScreen1" value="{{ old('jooberIntroScreen1') }}"   accept="image/png, image/gif, image/jpeg">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        
                    <img id="output_image" src="" />
                        
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i><!--Add Jobber introduction Screen two--> <strong style="font-size: 18px;">Ajouter l'écran d'introduction Jobber deux</strong></center><input type="file" style="display: none;"name="jooberIntroScreen2" value="{{ old('jooberIntroScreen2') }}"  accept="image/png, image/gif, image/jpeg">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        
                    <img id="output_image" src="" />
                        
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!--Add Jobber introduction Screen three--> <strong style="font-size: 18px;">Ajouter l'écran d'introduction Jobber trois</strong></center><input type="file" style="display: none;"name="jooberIntroScreen3" value="{{ old('jooberIntroScreen3') }}"  accept="image/png, image/gif, image/jpeg">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        
                    <img id="output_image" src="" />
                        
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!-- Add applicant introduction Screen one --> <strong style="font-size: 18px;">Ajouter l'introduction du candidat Écran un</strong></center><input type="file" style="display: none;"name="applicantIntroScreen1" value="{{ old('applicantIntroScreen1') }}"  accept="image/png, image/gif, image/jpeg">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        
                    <img id="output_image" src="" />
                        
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!--Add applicant introduction Screen two --> <strong style="font-size: 18px;">Ajouter l'introduction du candidat Écran deux</strong></center><input type="file" style="display: none;"name="applicantIntroScreen2" value="{{ old('applicantIntroScreen2') }}"  accept="image/png, image/gif, image/jpeg">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        
                    <img id="output_image" src="" />
                        
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!-- Add applicant introduction Screen three --> <strong style="font-size: 18px;">Ajouter l'introduction du candidat Écran trois</strong></center><input type="file" style="display: none;"name="applicantIntroScreen3" value="{{ old('applicantIntroScreen3') }}"  accept="image/png, image/gif, image/jpeg">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        
                    <img id="output_image" src="" />
                        
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
<script>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
        </script>
 @jquery
    @toastr_js
    @toastr_render

 @endsection

