@extends('admin.layouts.include')

@section('content')
 @toastr_css
 <style>
 #output_image{
 border-style: ridge;
 width: 120px;
 height: 150px;
}
#output_image1{
 border-style: ridge;
 width: 120px;
 height: 150px;
}
#output_image2{
 border-style: ridge;
 width: 120px;
 height: 150px;
}
#output_image3{
 border-style: ridge;
 width: 120px;
 height: 150px;
}
#output_image4{
 border-style: ridge;
 width: 120px;
 height: 150px;
}
#output_image5{
 border-style: ridge;
 width: 120px;
 height: 150px;
}
#output_image6{
 border-style: ridge;
 width: 120px;
 height: 150px;
}
#output_image7{
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
                    @if($appSetting!=null)
                    <img id="output_image" src="{{ asset($appSetting->mainScreen ?? ' ')  }}"  loading="lazy"  />
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!-- Add App logo  --> <strong style="font-size: 18px;">Ajouter le logo de l'application</strong></center><input type="file" style="display: none;"name="appLogo" value="{{ old('appLogo') }}"  accept="image/png, image/gif, image/jpeg"  id="imgInp1" onchange="preview_image1(event)">
                        </label>
                    </div>
                    <div class="col-sm-4">
                    @if($appSetting!=null)
                    <img id="output_image1"  loading="lazy"  src="{{ asset($appSetting->appLogo ?? ' ')  }}" />
                    @endif

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!--Add Jobber introduction Screen one--> <strong style="font-size: 18px;"> Ajouter l'écran d'introduction Jobber un</strong></center><input type="file" style="display: none;"name="jooberIntroScreen1" value="{{ old('jooberIntroScreen1') }}"   accept="image/png, image/gif, image/jpeg" id="imgInp2" onchange="preview_image2(event)">
                        </label>
                    </div>
                    <div class="col-sm-4">
                    @if($appSetting!=null)
                    <img id="output_image2"  loading="lazy"  src="{{ asset($appSetting->jooberIntroScreen1 ?? ' ')  }}" />
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i><!--Add Jobber introduction Screen two--> <strong style="font-size: 18px;">Ajouter l'écran d'introduction Jobber deux</strong></center><input type="file" style="display: none;"name="jooberIntroScreen2" value="{{ old('jooberIntroScreen2') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp3" onchange="preview_image3(event)">
                        </label>
                    </div>
                    <div class="col-sm-4">
                    @if($appSetting!=null)
                    <img id="output_image3"  loading="lazy"  src="{{ asset($appSetting->jooberIntroScreen2 ?? ' ')  }}" />
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!--Add Jobber introduction Screen three--> <strong style="font-size: 18px;">Ajouter l'écran d'introduction Jobber trois</strong></center><input type="file" style="display: none;"name="jooberIntroScreen3" value="{{ old('jooberIntroScreen3') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp4" onchange="preview_image4(event)">
                        </label>
                    </div>
                    <div class="col-sm-4">
                    @if($appSetting!=null)
                    <img id="output_image4"  loading="lazy"  src="{{ asset($appSetting->jooberIntroScreen3 ?? ' ')  }}" />
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!-- Add applicant introduction Screen one --> <strong style="font-size: 18px;">Ajouter l'introduction du candidat Écran un</strong></center><input type="file" style="display: none;"name="applicantIntroScreen1" value="{{ old('applicantIntroScreen1') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp5" onchange="preview_image5(event)">
                        </label>
                    </div>
                    <div class="col-sm-4">
                    @if($appSetting!=null)
                    <img id="output_image5"  loading="lazy"  src="{{ asset($appSetting->applicantIntroScreen1 ?? ' ')  }}" />
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!--Add applicant introduction Screen two --> <strong style="font-size: 18px;">Ajouter l'introduction du candidat Écran deux</strong></center><input type="file" style="display: none;"name="applicantIntroScreen2" value="{{ old('applicantIntroScreen2') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp6" onchange="preview_image6(event)">
                        </label>
                    </div>
                    <div class="col-sm-4">
                    @if($appSetting!=null)
                    <img id="output_image6"  loading="lazy"  src="{{ asset($appSetting->applicantIntroScreen2 ?? ' ')  }}" />
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                    <div class="col-sm-6">
                        <label class="form-control @error('img') is-invalid @enderror">
                    <center><i class="fa fa-image"></i> <!-- Add applicant introduction Screen three --> <strong style="font-size: 18px;">Ajouter l'introduction du candidat Écran trois</strong></center><input type="file" style="display: none;"name="applicantIntroScreen3" value="{{ old('applicantIntroScreen3') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp7" onchange="preview_image7(event)">
                        </label>
                    </div>
                    <div class="col-sm-4">
                    @if($appSetting!=null)
                    <img id="output_image7"  loading="lazy"  src="{{ asset($appSetting->applicantIntroScreen3 ?? ' ')  }}"/>
                   @endif

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
<script>
function preview_image2(event)
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
<script>
function preview_image3(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image3');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
<script>
function preview_image4(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image4');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
<script>
function preview_image5(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image5');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
<script>
function preview_image6(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image6');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
<script>
function preview_image7(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image7');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>

 @jquery
    @toastr_js
    @toastr_render

 @endsection

