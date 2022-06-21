
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
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo">
                                <!-- <img src="{{asset('admin/download.png')}}" width="100%"> -->
                                </div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{asset($jobber->image ?? '')}}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{$jobber->firstName}}   {{$jobber->lastName}}</h4>
                                        @if($jobber->role ==2)
                                            <p>Demandeur</p>
                                        @else
                                            <p>Jobber</p>
                                        @endif
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4 class="text-muted mb-0">{{$jobber->email}} </h4>
                                        <p>Email</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-12">
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
                                        <li class="nav-item"><a href="#badge" data-toggle="tab" class="nav-link ">Obtenez le badge Pro</a>
                                        </li>
                                        <li class="nav-item"><a href="#identity" data-toggle="tab" class="nav-link">Document d'identité</a>
                                        </li>
                                        <li class="nav-item"><a href="#diplomas" data-toggle="tab" class="nav-link">Document d'identité</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <div id="my-posts" class="tab-pane fade active show">
                                            <div class="my-post-content pt-3">
                                                @foreach($proposal as $row)
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="#"><h3 class="text-black">{{$row->title}}</h3></a>
                                                        <p>{{$row->description}}</p>
                                                        <div class="profile-skills mb-5">
                                                            <a class="text-warning mb-2"><strong> Demande d'emploi    </strong></a>
                                                            <a href="javascript:void()" class="btn btn-warning dark btn-xs mb-1">{{$row->jobrequest->title}}</a>
                                                            @if($row->status==1)
                                                                <a class="text-primary mb-2"><strong>Statut     </strong></a>
                                                                <a href="javascript:void()" class="btn btn-primary dark btn-xs mb-1">Active</a><br>
                                                            @elseif($row->status==2)
                                                                <a class="text-success mb-2"><strong> Statut    </strong></a>
                                                                <a href="javascript:void()" class="btn btn-success dark btn-xs mb-1">Accepte</a>
                                                            @else
                                                                <a class="text-danger mb-2"><strong> Statut    </strong></a>
                                                                <a href="javascript:void()" class="btn btn-danger dark btn-xs mb-1">Rejeter</a>
                                                            @endif

                                                        </div>
                                                        <div class="profile-personal-info">
                                                            <h4 class="text-primary mb-4">Plus d'information</h4>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Demandeur Nom: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->jobrequest->applicant->firstName}} {{$row->jobrequest->applicant->lastName}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Catégorie: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->jobrequest->category->title}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Sous-catégorie: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->jobrequest->subcategory->title}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Prix <span class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->price }}€ </span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Limite de temps <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$row->time_limit	 }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Créé à<span class="pull-right">:</span></h5>
                                                                </div>
                                                                <?php
                                                                \Carbon\Carbon::setLocale('fr');
                                                                $date = \Carbon\Carbon::parse($row->created_at);
                                                                ?>

                                                                <div class="col-sm-9 col-7"><span>{{$date->diffForHumans()}}</span>
                                                                </div>
                                                            </div>

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
                                                        <?php
                                                        \Carbon\Carbon::setLocale('fr');
                                                        $date = \Carbon\Carbon::parse($row->created_at);
                                                        ?>

                                                        <div class="col-sm-9 col-7"><span>{{$date->diffForHumans()}}</span>
                                                        </div>
                                                    </div>
                                                </div><hr>
                                            @endforeach
                                        </div>
                                        <div id="profile-settings" class="tab-pane fade ">
                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    <h2 class="text-primary" style="margin: 20px; text-align: center">Réglage du compte</h2>
                                                    <form method="POST" action="{{ route('admin.profile.update' ,['id'=>$jobber->id]) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Prénom <strong style="font-size: 22px; color: red;">*</strong></label>

                                                                <input type="text"  name="firstName" value="{{$jobber->firstName}}" placeholder="Entrez le prénom" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Nom de famille <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                <input type="text" name="lastName" value="{{$jobber->lastName}}"  placeholder="Entrez le nom de famille" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>E-mail <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                <input type="email" name="email" value="{{$jobber->email}}" placeholder="Entrez le E-mail" class="form-control" readonly>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Pays <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                <select class="form-control default-select  select2"  name="countory_id">
                                                                    <option>Choisir une Pays</option>
                                                                    @foreach($country as $row)

                                                                        <option value="{{$row->id}}" {{ $jobber->country == $row->id ? 'selected' : '' }} >{{$row->name}}</option>

                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Adresse <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                <input type="text" name="address" placeholder="Entrez le Adresse" value="{{$jobber->address ?? ''}}" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Téléphoner <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                <input type="text" class="form-control" name="phone" value="{{$jobber->phone}}" placeholder="Entrez le Téléphoner">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Badge </label>
                                                                <select class="form-control default-select  select2"  name="is_company">
                                                                    <option>Choisir Badge</option>
                                                                    <option value="1" {{ $jobber->is_company == 1 ? 'selected' : '' }} >Jobber certifié</option>
                                                                    <option value="2" {{ $jobber->is_company == 2 ? 'selected' : '' }} >Jobber pro</option>
                                                                    <option value="3" {{ $jobber->is_company == 3 ? 'selected' : '' }} >Super jobber </option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Image de profil <strong style="font-size: 22px; color: red;">*</strong></label>
                                                                <input type="file" class="form-control" name="image" value="" id="imgInp1" onchange="preview_image1(event)" accept="image/png, image/gif, image/jpeg">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <img id="output_image1" src="{{asset($jobber->image)}}" />
                                                            </div>

                                                        </div>


                                                        <button class="btn btn-primary" type="submit">Mettre à jour</button>
                                                    </form>
                                                </div><hr>

                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="#"><h3 class="text-black">La description</h3></a>
                                                        <p>{{$jobberprofile->personal_description ?? 'non'}}</p>
                                                        <div class="profile-skills mb-5">
                                                            <a class="text-warning mb-2"><strong> Catégorie   </strong></a>
                                                            <a href="javascript:void()" class="btn btn-warning dark btn-xs mb-1">{{$jobberprofile->jobber_category_id ?? 'non'}}</a>

                                                        </div>
                                                        <div class="profile-personal-info">
                                                            <h4 class="text-primary mb-4">Plus d'information</h4>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">De l'expérience: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobberprofile->experince ?? 'non'}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Diplôme: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobberprofile->diploma_name ??'non'}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Equipement: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>

                                                                <div class="col-sm-9 col-7"><span>
                                                                         @if($jobberprofile)
                                                                            {{$jobberprofile->equipement1??''}}@if($jobberprofile->equipement1)<strong>,</strong>@endif{{$jobberprofile->equipement2??''}}@if($jobberprofile->equipement2)<strong>,</strong>@endif{{$jobberprofile->equipement3 ??""}}@if($jobberprofile->equipement3)<strong>,</strong>@endif{{$jobberprofile->equipement4 ??""}}@if($jobberprofile->equipement4)<strong>,</strong>@endif
                                                                                {{$jobberprofile->equipement5 ?? ""}}@if($jobberprofile->equipement5)<strong>,</strong>@endif{{$jobberprofile->equipement6?? ""}}@if($jobberprofile->equipement6)<strong>,</strong>@endif{{$jobberprofile->equipement7 ?? ""}}@if($jobberprofile->equipement7)<strong>,</strong>@endif{{$jobberprofile->equipement8 ?? ""}}@if($jobberprofile->equipement8)<strong>,</strong>@endif
                                                                                {{$jobberprofile->equipement9 ?? ""}}@if($jobberprofile->equipement9)<strong>,</strong>@endif{{$jobberprofile->equipement10 ?? ""}}@if($jobberprofile->equipement10)<strong>,</strong>@endif{{$jobberprofile->equipement11 ?? ""}}@if($jobberprofile->equipement11)<strong>,</strong>@endif{{$jobberprofile->equipement12 ?? ""}}@if($jobberprofile->equipement12)<strong>,</strong>@endif
                                                                                {{$jobberprofile->equipement13 ?? ""}}@if($jobberprofile->equipement13)<strong>@if($jobberprofile->equipement14)<strong>,</strong>@endif</strong>@endif{{$jobberprofile->equipement14 ?? ""}}@if($jobberprofile->equipement14)<strong>,</strong>@endif{{$jobberprofile->equipement15 ?? ""}}@if($jobberprofile->equipement15)<strong>,</strong>@endif{{$jobberprofile->equipement16 ?? ""}}
                                                                        @else
                                                                             non
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Engangement <span class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>
                                                                        @if($jobberprofile)
                                                                              {{$jobberprofile->eng1??''}}@if($jobberprofile->eng1)<strong>,</strong>@endif{{$jobberprofile->eng2??''}}@if($jobberprofile->eng2)<strong>,</strong>@endif{{$jobberprofile->eng3 ??""}}@if($jobberprofile->eng3)<strong>,</strong>@endif{{$jobberprofile->eng4 ??""}}@if($jobberprofile->eng4)<strong>,</strong>@endif
                                                                                {{$jobberprofile->eng5 ?? ""}}@if($jobberprofile->eng5)<strong>,</strong>@endif{{$jobberprofile->eng6?? ""}}@if($jobberprofile->eng6)<strong>,</strong>@endif{{$jobberprofile->eng7 ?? ""}}@if($jobberprofile->eng7)<strong>,</strong>@endif{{$jobberprofile->eng8 ?? ""}}@if($jobberprofile->eng8)<strong>,</strong>@endif
                                                                                {{$jobberprofile->eng9 ?? ""}}@if($jobberprofile->eng9)<strong>,</strong>@endif{{$jobberprofile->eng10 ?? ""}}@if($jobberprofile->eng10)<strong>,</strong>@endif{{$jobberprofile->eng11 ?? ""}}@if($jobberprofile->eng11)<strong>,</strong>@endif{{$jobberprofile->eng12 ?? ""}}@if($jobberprofile->eng12)<strong>,</strong>@endif
                                                                                {{$jobberprofile->eng13 ?? ""}}@if($jobberprofile->eng13)<strong>,</strong>@endif{{$jobberprofile->eng14 ?? ""}}@if($jobberprofile->eng14)<strong>,</strong>@endif{{$jobberprofile->eng15 ?? ""}}@if($jobberprofile->eng15)<strong>,</strong>@endif{{$jobberprofile->eng16 ?? ""}}

                                                                        @else
                                                                            non
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div><hr>


                                            </div>
                                        </div>
                                        <div id="password" class="tab-pane fade ">
                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    <h2 class="text-primary" style="margin: 20px; text-align: center">Réinitialisation du mot de passe</h2>
                                                    <form method="POST" action="{{ route('admin.password.update',['id'=>$jobber->id]) }}" enctype="multipart/form-data">
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
                                        <div id="badge" class="tab-pane fade ">
                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    @if($jobber->is_company==1)
                                                        <div class="profile-personal-info">
                                                            <h4 class="text-primary mb-4">Plus d'information</h4>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Nom de la compagnie: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->company_name}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Jobber Nom: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->firstName}} {{$jobber->lastName}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Adresse de la société: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->company_address}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Taper: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->vat_type}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Siret <span class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->siret }}€ </span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Créé à<span class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->created_at->diffForHumans()}}</span>
                                                                </div>
                                                            </div>
                                                            @else
                                                                <div class="profile-skills mb-5" style="text-align: center; margin-top: 20px;">
                                                                    <a href="#" class="btn btn-warning dark btn-xs mb-1 " style="font-size: 20px;">Individuelle</a>
                                                                </div>
                                                            @endif


                                                        </div>
                                                </div><hr>

                                            </div>
                                        </div>
                                        <div id="identity" class="tab-pane fade ">
                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    @if($jobber->euorpion)
                                                        <div class="profile-personal-info">
                                                            <h4 class="text-primary mb-4">Plus d'information</h4>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Européen: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->euorpion}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Jobber Nom: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->firstName}} {{$jobber->lastName}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Type d'identité: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->identity_type}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Numéro de Sécurité: <span class="pull-right">:</span>
                                                                    </h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->security_no}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Document d'identité <span class="pull-right">:</span></h5>
                                                                </div>

                                                                <div class="col-sm-9 col-7"><span><a target="_blank"class="btn btn-primary dark btn-xs mb-1 " href="{{asset($jobber->identity_document)}}">Ouvrir le document</a> </span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-2">
                                                                <div class="col-sm-3 col-5">
                                                                    <h5 class="f-w-500">Créé à<span class="pull-right">:</span></h5>
                                                                </div>
                                                                <div class="col-sm-9 col-7"><span>{{$jobber->created_at->diffForHumans()}}</span>
                                                                </div>
                                                            </div>
                                                            @else
                                                                <div class="profile-skills mb-5" style="text-align: center; margin-top: 20px;">
                                                                    <a href="#" class="btn btn-warning dark btn-xs mb-1 " style="font-size: 20px;">Document non Disponible des détails</a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                </div><hr>

                                            </div>
                                        </div>
                                        <div id="diplomas" class="tab-pane fade ">

                                                <div class="settings-form">
                                                    <h2 class="text-primary" style=" text-align: center;margin-top: -135px!important;">Document de diplômes</h2>
                                                </div>

                                                    <div class="profile-personal-info">

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <strong class="text-primary">Titre <span class="pull-right">:</span></strong>

                                                            </div>
                                                            <div class="col-sm-9 col-7"><span ><strong class="text-primary">Document</strong></span>
                                                            </div>
                                                        </div>
                                                        @foreach($diplomas  as $row)
                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">{{$row->title ?? ''}}: <span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7"><a href="{{$row->file ?? '#'}}" ><span class="badge light badge-primary ">Voir le Document</span></a>
                                                            </div>
                                                        </div>
                                                        @endforeach



                                                    </div>
                                                </div><hr>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <!-- Modal -->

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
