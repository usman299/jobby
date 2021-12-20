
@extends('admin.layouts.include')

@section('content')
    <style>
        #output_image1{
            border-style: ridge;
            width: 150px;
            height: 150px;
            margin-left: 50px;
        }

    </style>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo">
                                    	<!-- <img src="{{asset('admin/download.png')}}" width="100%"> -->
                                    </div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{asset($applicant->image ?? '')}}" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">{{$applicant->firstName}}   {{$applicant->lastName}}</h4>
											@if($applicant->role ==2)
											<p>Demandeur</p>
											@else
											<p>Jobber</p>
											@endif
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{$applicant->email}} </h4>
											<p>Email</p>
										</div>

									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Demande d'emploi</a>
                                            </li>
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">Contracter</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Profil</a>
                                            </li>
                                            <li class="nav-item"><a href="#password" data-toggle="tab" class="nav-link ">le mot de passe</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
                                             @foreach($jobRequest as $row)
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
														<a class="post-title" href="post-details.html"><h3 class="text-black">{{$row->title}}</h3></a>
                                                        <p>{{$row->description}}</p>
                                                        <div class="profile-skills mb-5">
                                                            @if($row->status==1)
                                                            <a class="text-primary mb-2"><strong>Statut     </strong></a>
                                                            <a href="javascript:void()" class="btn btn-primary dark btn-xs mb-1">Active</a><br>
                                                            @else
                                                            <a class="text-warning mb-2"><strong> Statut    </strong></a>
                                                            <a href="javascript:void()" class="btn btn-warning dark btn-xs mb-1">Fermer</a>
                                                            @endif

                                                        </div>
                                                        <div class="profile-personal-info">
                                                            <h4 class="text-primary mb-4">Plus d'information</h4>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Catégorie: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->category->title}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Sous-catégorie: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->subcategory->title}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Prix <span class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->max_price }}€ - {{$row->min_price }}€ </span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Date d'estimation <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->estimate_time }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Créé à<span class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->created_at->diffForHumans()}}</span>
                                                                </div>
                                                            </div>
                                                            <a href="{{route('jobrequest.show', ['id' => $row->id])}}" class="btn btn-primary dark btn-xs mb-1">Proposition</a><br>

                                                        </div>
                                                    </div><hr>

                                                    @endforeach
                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade">
                                        @foreach($contract as $row)

                                                        @if($row->proposal)
                                                            <a class="text-primary mb-2" style="margin-top: 10px;"><strong>Taper     </strong></a>
                                                            <a href="javascript:void()" class="btn btn-primary dark btn-xs mb-1" style="margin-top: 10px;">Proposition</a><br>
                                                        @else
                                                            <a class="text-warning mb-2"><strong style="margin-top: 10px;"> Taper    </strong></a>
                                                            <a href="javascript:void()" class="btn btn-warning dark btn-xs mb-1" style="margin-top: 10px;">Services</a>
                                                        @endif

                                            <div class="profile-personal-info">
                                                <h4 class="text-primary mb-4" style="margin-top: 10px;">Informations sur le contrat</h4>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Nom du demandeur  <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>{{$row->user->firstName}} {{$row->user->lastName}}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Nom de l'ouvrier <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    @if($row->proposal)
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Titre de la proposition <span class="pull-right">:</span></h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>{{$row->proposal->title}}</span>
                                                    </div>
                                                    @else
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Titre de la Service <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{$row->service->title}}</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Prix <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>{{$row->price }}€</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Heure de fin <span class="pull-right">:</span></h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>{{$row->e_time}}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Créé à<span class="pull-right">:</span></h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>{{$row->created_at->diffForHumans()}}</span>
                                                    </div>
                                                </div>
                                            </div><hr>
                                        @endforeach
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade ">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h2 class="text-primary" style="margin: 20px; text-align: center">Réglage du compte</h2>
                                                        <form method="POST" action="{{ route('admin.profile.update' ,['id'=>$applicant->id]) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Prénom <strong style="font-size: 22px; color: red;">*</strong></label>

                                                                    <input type="text"  name="firstName" value="{{$applicant->firstName}}" placeholder="Entrez le prénom" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Nom de famille <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                    <input type="text" name="lastName" value="{{$applicant->lastName}}"  placeholder="Entrez le nom de famille" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>E-mail <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                    <input type="email" name="email" value="{{$applicant->email}}" placeholder="Entrez le E-mail" class="form-control" readonly>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Pays <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                    <select class="form-control default-select  select2"  name="countory_id">
                                                                        <option>Choisir une Pays</option>
                                                                        @foreach($country as $row)

                                                                            <option value="{{$row->id}}" {{ $applicant->country == $row->id ? 'selected' : '' }} >{{$row->name}}</option>

                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Adresse <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                    <input type="text" name="address" placeholder="Entrez le Adresse" value="{{$applicant->address ?? ''}}" class="form-control">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label>Téléphoner <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                    <input type="text" class="form-control" name="phone" value="{{$applicant->phone}}" placeholder="Entrez le Téléphoner">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Image de profil <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                    <input type="file" class="form-control" name="image" value="" id="imgInp1" onchange="preview_image1(event)" accept="image/png, image/gif, image/jpeg">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <img id="output_image1" src="{{asset($applicant->image)}}" />
                                                                </div>

                                                            </div>


                                                            <button class="btn btn-primary" type="submit">Mettre à jour</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="password" class="tab-pane fade ">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h2 class="text-primary" style="margin: 20px; text-align: center">Réinitialisation du mot de passe</h2>
                                                        <form method="POST" action="{{ route('admin.password.update',['id'=>$applicant->id]) }}" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="form-group col-md-6">
                                                                <label><strong>Ancien mot de passe </strong><strong style="font-size: 22px; color: red;">*</strong></label>

                                                                <input type="password"  name="oldPassword"  placeholder="Ancien mot de passe" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label><strong>Nouveau mot de passe </strong><strong style="font-size: 22px; color: red;">*</strong></label>
                                                                <input type="password" name="password"   placeholder="Nouveau mot de passe" class="form-control">
                                                            </div>


                                                            <div class="form-group col-md-6">
                                                                <label><strong>Confirmez le mot de passe</strong><strong style="font-size: 22px; color: red;">*</strong></label>
                                                                <input type="password" name="confirmPassword"  placeholder="Confirmez le mot de passe" class="form-control">
                                                            </div>



                                                            <button class="btn btn-primary" type="submit">Mettre à jour</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
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
        @endsection
