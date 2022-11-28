@extends('admin.layouts.include')
@section('content')
    <style>
        #output_image1 {
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
                                    <a target="_blank" href="{{asset($jobber->image ?? '')}}"><img src="{{asset($jobber->image ?? '')}}" style="height: 100px; width: 100px" class="img-fluid rounded-circle" alt=""></a>
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
                            <!-- Nav tabs -->
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#contact1"> Profil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile1">Contrats actifs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#message1">Le
                                            mot de passe</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#message2">Obtenez
                                            le badge Pro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#message3">Vérifications de documents</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="contact1">
                                        <div class="pt-4">
                                            <h2 class="text-primary" style="margin: 20px; text-align: center">
                                                Réglage du compte</h2>
                                            <form method="POST"
                                                  action="{{ route('admin.profile.update' ,['id'=>$jobber->id]) }}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Prénom <strong
                                                                style="font-size: 22px; color: red;">*</strong></label>
                                                        <input type="text" name="firstName"
                                                               value="{{$jobber->firstName}}"
                                                               placeholder="Entrez le prénom"
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Nom de famille <strong
                                                                style="font-size: 22px; color: red;">*</strong></label>
                                                        <input type="text" name="lastName"
                                                               value="{{$jobber->lastName}}"
                                                               placeholder="Entrez le nom de famille"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>E-mail <strong
                                                                style="font-size: 22px; color: red;">*</strong></label>
                                                        <input type="email" name="email"
                                                               value="{{$jobber->email}}"
                                                               placeholder="Entrez le E-mail"
                                                               class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Pays <strong
                                                                style="font-size: 22px; color: red;">*</strong></label>
                                                        <select class="form-control default-select  select2"
                                                                name="countory_id">
                                                            <option>Choisir une Pays</option>
                                                            @foreach($country as $row)
                                                                <option
                                                                    value="{{$row->id}}" {{ $jobber->country == $row->id ? 'selected' : '' }} >{{$row->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Adresse <strong
                                                                style="font-size: 22px; color: red;">*</strong></label>
                                                        <input type="text" name="address"
                                                               placeholder="Entrez le Adresse"
                                                               value="{{$jobber->address ?? ''}}"
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Téléphoner <strong
                                                                style="font-size: 22px; color: red;">*</strong></label>
                                                        <input type="text" class="form-control" name="phone"
                                                               value="{{$jobber->phone}}"
                                                               placeholder="Entrez le Téléphoner">
                                                    </div>
                                                </div>
                                                {{--                                                        <div class="form-row">--}}
                                                {{--                                                            <div class="form-group col-md-6">--}}
                                                {{--                                                                <label>Badge </label>--}}
                                                {{--                                                                <select class="form-control default-select  select2"--}}
                                                {{--                                                                        name="is_company">--}}
                                                {{--                                                                    <option>Choisir Badge</option>--}}
                                                {{--                                                                    <option--}}
                                                {{--                                                                        value="1" {{ $jobber->is_company == 1 ? 'selected' : '' }} >--}}
                                                {{--                                                                        Jobber certifié--}}
                                                {{--                                                                    </option>--}}
                                                {{--                                                                    <option--}}
                                                {{--                                                                        value="2" {{ $jobber->is_company == 2 ? 'selected' : '' }} >--}}
                                                {{--                                                                        Jobber pro--}}
                                                {{--                                                                    </option>--}}
                                                {{--                                                                    <option--}}
                                                {{--                                                                        value="3" {{ $jobber->is_company == 3 ? 'selected' : '' }} >--}}
                                                {{--                                                                        Super jobber--}}
                                                {{--                                                                    </option>--}}
                                                {{--                                                                </select>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div>--}}
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Image de profil <strong
                                                                style="font-size: 22px; color: red;">*</strong></label>
                                                        <input type="file" class="form-control" name="image"
                                                               value="" id="imgInp1"
                                                               onchange="preview_image1(event)"
                                                               accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <img id="output_image1"
                                                             src="{{asset($jobber->image)}}"/>
                                                    </div>
                                                </div>


                                                <button class="btn btn-primary" type="submit">Mettre à jour
                                                </button>
                                            </form>
                                            <hr>
                                            <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                <a class="post-title" href="#"><h3 class="text-black">La
                                                        description</h3></a>
                                                <p>{{$jobberprofile->personal_description ?? 'non'}}</p>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile1">
                                        <div class="pt-4">
                                            @foreach($contract as $row)
                                                @if($row->proposal)
                                                    <a class="text-primary mb-2"
                                                       style="margin-top: 10px;"><strong>Taper </strong></a>
                                                    <a href="javascript:void()" class="btn btn-primary dark btn-xs mb-1"
                                                       style="margin-top: 10px;">Proposition</a><br>
                                                @else
                                                    <a class="text-warning mb-2"><strong style="margin-top: 10px;">
                                                            Taper </strong></a>
                                                    <a href="javascript:void()" class="btn btn-warning dark btn-xs mb-1"
                                                       style="margin-top: 10px;">Services</a>
                                                @endif
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4" style="margin-top: 10px;">Informations
                                                        sur le contrat</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Nom du demandeur <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$row->user->firstName}} {{$row->user->lastName}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Nom de l'ouvrier <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$row->jobber->firstName}} {{$row->jobber->lastName}}</span>
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
                                                            <h5 class="f-w-500">Créé à<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <?php
                                                        \Carbon\Carbon::setLocale('fr');
                                                        $date = \Carbon\Carbon::parse($row->created_at);
                                                        ?>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$date->diffForHumans()}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="message1">
                                        <div class="pt-4">
                                            <h2 class="text-primary" style="margin: 20px; text-align: center">
                                                Réinitialisation du mot de passe</h2>
                                            <form method="POST"
                                                  action="{{ route('admin.password.update',['id'=>$jobber->id]) }}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group col-md-6">
                                                    <label><strong>Ancien mot de passe </strong><strong
                                                            style="font-size: 22px; color: red;">*</strong></label>
                                                    <input type="password" name="oldPassword"
                                                           placeholder="Ancien mot de passe"
                                                           class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label><strong>Nouveau mot de passe </strong><strong
                                                            style="font-size: 22px; color: red;">*</strong></label>
                                                    <input type="password" name="password"
                                                           placeholder="Nouveau mot de passe"
                                                           class="form-control">
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label><strong>Confirmez le mot de passe</strong><strong
                                                            style="font-size: 22px; color: red;">*</strong></label>
                                                    <input type="password" name="confirmPassword"
                                                           placeholder="Confirmez le mot de passe"
                                                           class="form-control">
                                                </div>


                                                <button class="btn btn-primary" type="submit">Mettre à jour
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="message2">
                                        <div class="pt-4">
                                            @if($jobber->is_company==1)
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Plus d'information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Nom de la compagnie: <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$jobber->company_name}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Jobber Nom: <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$jobber->firstName}} {{$jobber->lastName}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Adresse de la société: <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$jobber->company_address}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Taper: <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$jobber->vat_type}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Siret <span
                                                                    class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$jobber->siret }} </span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Créé à<span
                                                                    class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7">
                                                            <span>{{$jobber->created_at->diffForHumans()}}</span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    @if($jobber->pro == 2)
                                                        <h2>Badge pro déjà attribué</h2>
                                                    @else
                                                        <a href="{{route('jobber.mark.pro', ['id' => $jobber->id])}}">
                                                            <button class="btn btn-primary">Marquer comme revendeur
                                                                professionnel
                                                            </button>
                                                        </a>
                                                    @endif
                                                    @else
                                                        <div class="profile-skills mb-5"
                                                             style="text-align: center; margin-top: 20px;">
                                                            <a href="#"
                                                               class="btn btn-warning dark btn-xs mb-1 "
                                                               style="font-size: 20px;">Pas de demande de pro</a>
                                                        </div>
                                                    @endif
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="message3">
                                        <div class="pt-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3>Vérifications de documents</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    @if($jobber->verified == 2)
                                                        <h3>Already Verified</h3>
                                                    @else
                                                    <a href="{{route('mark.jobber.verified', ['id' => $jobber->id])}}"><button onclick="return confirm('Êtes-vous sûr de vouloir marquer ce jobber comme jobber vérifié')" class="btn btn-primary">Mark Verified</button></a>
                                                    @endif
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li><h4>Recto de la carte d'identité Eurpion</h4></li>
                                                        <li><h4>Carte d'identité Eurpion Retour</h4></li>
                                                        <li><h4>Recto du permis de conduire Eurpion</h4></li>
                                                        <li><h4>Permis de conduire Eurpion Retour</h4></li>
                                                        <li><h4>Passeport Eurpion</h4></li>
                                                        <hr>
                                                        <li><h4>Permis de travail non Eurpion Front</h4></li>
                                                        <li><h4>Permis de travail hors Eurpion Retour</h4></li>
                                                        <hr>
                                                        <li><h4>Certificat de sécurité sociale</h4></li>
                                                        <li><h4>Numéro de sécurité sociale</h4></li>
                                                        <hr>
                                                        <li><h4>Certificat de carte vitale</h4></li>
                                                        <li><h4>Numéro de carte vitale</h4></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->eu_id_card_front)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->eu_id_card_back)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->eu_id_driving_front)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->eu_id_driving_back)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->eu_id_passport_front)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <hr>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->eu_id_residence_permit_front)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->eu_id_residence_permit_back)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <hr>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->vital_card)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <li>
                                                            <h4>{{$jobberprofile->vital_card_number??'Not Upload Yet'}}</h4>
                                                        </li>
                                                        <hr>
                                                        <li><h4><a target="_blank"
                                                                   href="{{asset($jobberprofile->social_security_certificate)}}">Afficher
                                                                    le document</a></h4></li>
                                                        <li>
                                                            <h4>{{$jobberprofile->social_security_numbe??"Not Upload Yet"}}</h4>
                                                        </li>
                                                    </ul>
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
    </div>
@endsection
