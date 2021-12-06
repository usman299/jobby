@extends('admin.layouts.include')

@section('content')
 @toastr_css
 <style>
#output_image1{
 border-style: ridge;
 width: 120px;
 height: 120px;
}
#output_image2{
 border-style: ridge;
 width: 120px;
 height: 120px;
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
                                <h4 class="card-title"><!-- Galery Slider --> Galerie de curseurs</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('slider.update',['id'=>$slider->id]) }}" enctype="multipart/form-data">
                                             @csrf
                                             <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- User -->Utilisateur <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-lg default-select select2" name="userRole">
                                            	<option>Choisir une Utilisateur</option>
                                            	
                                                
                                                <option value="1" {{ $slider->userRole == '1' ? 'selected' : '' }}>Jobber</option>
                                                <option value="2" {{ $slider->userRole == '2' ? 'selected' : '' }}>Applicant</option>
                                               
                                               
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Image<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('img') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre Image</strong></center><input type="file" style="display: none;"name="img" value="{{ old('img') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp1" onchange="preview_image1(event)">
                        </label>
                                            </div>
                                            <div class="col-sm-4">
                      
                                        <img id="output_image1" src="{{asset($slider->img)}}" />
                    
                                        </div></div>
                                        
                                        
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

        <!--**********************************
            Content body start
        ***********************************-->
 @jquery
    @toastr_js
    @toastr_render

 @endsection

