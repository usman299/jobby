@extends('admin.layouts.include')

@section('content')

    @toastr_css

    <div class="content-body  ">
        <div class="container-fluid bg-white ">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><!-- Home -->Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"><!-- Dashboard -->Tableau de bord</a></li>
                </ol>
            </div>

            <!-- row -->
            <div class="col-12 ">

                    <div class="profile-uoloaded-post border-bottom-1 pb-5">

                        <a class="post-title" href="post-details.html"><h3 class="text-black">Message</h3></a>
                        <p>{{$contact->message}}</p>
                            <div class="profile-personal-info ">
                                <h4 class="text-primary mb-4">Plus d'information</h4>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Nom : <span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{$contact->user->firstName}} {{$contact->user->lastName}}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Role: <span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    @if($contact->role==2)
                                    <div class="col-sm-9 col-7"><span class="badge light badge-success">Demandeur</span>
                                        @else
                                            <div class="col-sm-9 col-7"><span class="badge light badge-warning">Jobber</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">E-mail: <span class="pull-right ">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span >{{$contact->email}}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Sujette: <span class="pull-right">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{$contact->subject}}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Créé à <span class="pull-right">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span> {{$contact->created_at}} </span>
                                    </div>
                                </div>





                            </div>
                    </div><hr>
                </div>
            </div>
        </div>


            <script src="{{asset('assets/dist/js/lightbox-plus-jquery.min.js')}}"></script>
            <script type="text/javascript">
                function reply_click(clicked_id)
                {

                    alert(clicked_id);

                }
            </script>

            @jquery
            @toastr_js
            @toastr_render

@endsection
