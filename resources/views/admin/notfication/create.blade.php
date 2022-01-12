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
                            <h4 class="card-title"><!-- New Category --> Notification</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('admin.notfication.send') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!-- category -->Rôle d'utilisateur <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-lg default-select select2" id="user_role"  name="user_role">
                                                <option>Choisir le d'utilisateur</option>
                                                <option value="1" >Jobber</option>
                                                <option value="2" >Demandeur </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!-- category -->Utilisateur <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-6 " >
{{--                                            multiple="" default-select--}}
                    <select   class="form-control  select2" name="user_id[]" id="rolee" >

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!-- Title -->Notification <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="notification" rows="4" placeholder="Notification" required></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary"><!-- Sign in -->Envoyer</button>
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
            $('#rolee').multiselect({

                includeSelectAllOption:true,
                nonSelectedText:'Select Option',
                enableFiltering: true,
                buttonWidth: '500px',
            });
        </script>
        <script>

            $('#user_role').change(function() {

                $('#rolee').html('<option value="send_to_all">Tout sélectionner</option>');
                var id = $(this).val();
                // alert(id);
                $.ajax({
                    method:"GET",
                    url: "{{url('/fetch/data')}}/"+id,
                    async: false,
                    success : function(response) {
                        // console.log(response);
                        $.each(response, function(i, item) {
                             console.log(item);
                            $('#rolee').append('<option value="'+item.id+'">'+item.firstName+'  '+item.lastName+'</option>');
                            $('#rolee').multiselect('rebuild');
                            $('#rolee').multiselect('refresh');

                        });

                    },
                    error: function() {
                        $('#option').html('<option value="">Select</option>');
                    }
                });

            });
        </script>


        @jquery
        @toastr_js
        @toastr_render


@endsection

