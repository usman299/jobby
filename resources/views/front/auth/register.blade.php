@extends('layouts.splash')
<!-- End. em_loading -->
@section('style')
    <style>

        /* Mark input boxes that gets an error on validation: */
        .box{

            display: none;
            margin-top: 20px;
        }
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        h1{
            text-align: center;
        }
        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #556fff;
        }
        input[type="radio"] {
            -ms-transform: scale(1.5); /* IE 9 */
            -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
            transform: scale(1.5);
        }
    </style>
@endsection
@section('content')

    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder header-sticky multi_item">
                <div class="em_side_right">
                    <a class="rounded-circle d-flex align-items-center text-decoration-none" href="">
                        <i class="tio-chevron_left size-24 color-text"></i>
                        <span class="color-text size-14">Arrière</span>
                    </a>
                </div>
                <div class="title_page">
                    <span class="page_name">
                        <!-- title -->
                    </span>
                </div>

            </header>
            <!-- End.main_haeder -->

            <section class="em__signTypeOne padding-t-50">
                {{--<div class="em_titleSign">
                    <div class="brand">
                        <h1>Créer un compte</h1>
                    </div>
                </div>--}}
                <form id="regForm" class="loginformsubmit" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="em__body question_tabs">
                        <div class="tab">
                            <div class="em_titleSign">
                                <h1>Créer un compte</h1>
                            </div>
                            <input type="hidden" name="role" value="{{$id}}">
                            <div class="form-group with_icon" style="text-align: left!important;">
                                <label>Prénom</label>
                                <div class="input_group">
                                    <input type="text"  class="form-control @error('fname') is-invalid @enderror" name="fname" placeholder="John" required="">
                                    <input type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" placeholder="Smit" required="">
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Profile" data-name="Iconly/Two-tone/Profile" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <g id="Profile" transform="translate(4 2)">
                                                <circle id="Ellipse_736" cx="4.778" cy="4.778" r="4.778" transform="translate(2.801 0)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></circle>
                                                <path id="Path_33945" d="M0,3.016a2.215,2.215,0,0,1,.22-.97A4.042,4.042,0,0,1,3.039.426,16.787,16.787,0,0,1,5.382.1,25.053,25.053,0,0,1,9.767.1a16.979,16.979,0,0,1,2.343.33c1.071.22,2.362.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.716,15.716,0,0,1-2.343.339A25.822,25.822,0,0,1,6.2,6a4.066,4.066,0,0,1-.815-.055,15.423,15.423,0,0,1-2.334-.339C1.968,5.4.687,4.957.22,4A2.279,2.279,0,0,1,0,3.016Z" transform="translate(0 13.185)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group with_icon" style="text-align: left!important;">
                                <label>Adresse e-mail</label>
                                <div class="input_group">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@mail.com" required="">
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Message" data-name="Iconly/Two-tone/Message" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <g id="Message" transform="translate(2 3)">
                                                <path id="Path_445" d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0" transform="translate(3.954 5.561)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Rectangle_511" d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z" transform="translate(0 0)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group with_icon" style="text-align: left!important;">
                                <label>Téléphone</label>
                                <div class="input_group">
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+255 5645 6545" required="">
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Call" data-name="Iconly/Two-tone/Call" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <g id="Call" transform="translate(2.5 2.5)">
                                                <path id="Call-2" data-name="Call" d="M.49,2.373C.807,1.849,2.549-.056,3.793,0a1.636,1.636,0,0,1,.967.517,16.863,16.863,0,0,1,2.468,3.34C7.471,5.026,6.078,5.7,6.5,6.878a9.873,9.873,0,0,0,5.619,5.616c1.177.426,1.851-.966,3.019-.723a16.894,16.894,0,0,1,3.34,2.468,1.639,1.639,0,0,1,.517.967c.046,1.309-1.977,3.077-2.371,3.3-.93.665-2.144.654-3.624-.034C8.874,16.757,2.274,10.282.524,6-.145,4.525-.192,3.3.49,2.373Z" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_1" data-name="Stroke 1" d="M0,0,1.469,2.179" transform="translate(1.883 1.294)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M0,0,2.188,1.71" transform="translate(15.364 15.567)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                @error('phone')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <?php
                            $country = \App\Countory::all();
                            ?>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Région</label>
                                <select name="country" class="form-control custom-select">
                                    @foreach($country as $cont)
                                        <option value="{{$cont->id}}">{{$cont->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group with_icon" id="show_hide_password" style="text-align: left!important;">
                                <label>Mot de passe</label>
                                <div class="input_group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="tapez votre mot de passe" required="">
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Password" data-name="Iconly/Two-tone/Password" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <g id="Password" transform="translate(2 2)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M13.584,0H4.915C1.894,0,0,2.139,0,5.166v8.168C0,16.361,1.885,18.5,4.915,18.5h8.668c3.031,0,4.917-2.139,4.917-5.166V5.166C18.5,2.139,16.614,0,13.584,0Z" transform="translate(0.75 0.75)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z" transform="translate(4.989 8.148)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0H6.318V1.852" transform="translate(8.692 10)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_7" data-name="Stroke 7" d="M.5,1.852V0" transform="translate(11.682 10)" fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <button type="button" class="btn hide_show icon_password">
                                        <i class="tio-hidden_outlined"></i>
                                    </button>
                                </div>
                                @error('password')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left!important;">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span> Je suis d'accord <a href="#" class="color-blue">termes et conditions</a></span>
                                </label>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="em_titleSign">
                                <h1>Créer un compte</h1>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Adresse</label>
                                <div class="input_group">
                                    <input  type="text" class="form-control" name="address"
                                           required="">
                                </div>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Le genre</label>
                                <select  required="" class="form-control custom-select" name="gender">
                                    <option value="Mâle">Mâle</option>
                                    <option value="Fémail">Fémail</option>
                                </select>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Code postal</label>
                                <div class="input_group">
                                    <input  required="" type="text" class="form-control" name="postalCode">
                                </div>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Description</label>
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        @if($id == 1)
                      {{--  <div class="tab">
                            <div class="em_titleSign">
                                <h1>Give Proof of identity</h1>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Document d'identité </label>
                                <div class="input_group">
                                    <input type="file" id="file" name="document1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Justificatif de sécurité sociale</label>
                                <div class="input_group">
                                    <input type="file" id="file" name="document2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Ces documents sont nécessaires

                                    Ces documents sont nécessaires pour valider votre identité, votre âge, et votre éligibilité à travailler sur le territoire. Ils ne seront jamais rendus publics</label>
                            </div>
                        </div>--}}
                        <div class="tab">
                            <div class="em_titleSign">
                                <h1>Select Specialized Profile</h1>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div style="padding: 10px">
                                    <?php
                                    $categories = \App\Category::all();
                                    ?>
                                    <div class="input_group">
                                        <select  onchange="categorychange(this)" class="form-control custom-select" name="category_id">
                                            <option value="">Catégorie Spécialisée Selectc</option>
                                            @foreach($categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <h1>Sous-catégorie spécialisée</h1>
                                <div style="padding: 10px">
                                    <div class="input_group">
                                        <select onchange="subcategorychange(this)" name="subcategory_id"  class="form-control custom-select maincategory">
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="newtabs">

                        </div>

                        <div class="tab  Soutien scolaire">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab  Soutien scolaire">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab  Soutien scolaire">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Chenil


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Jardin


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Cage


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Volière



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Enclos extérieur



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Enclos intérieur


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Arbre à chat



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Litière



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Caisse de transport

                                            </label>
                                        </div>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab  Soutien scolaire">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab  Soutien scolaire">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité


                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Respect de l’hygiène
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Pédagogue

                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    À l’écoute
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Préparation des repas

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Calme et patient
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Interventions régulières


                                                </label>

                                                <div class="custom-control custom-radio margin-b-10">
                                                    <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                    <label class="custom-control-label padding-l-10" for="no">
                                                        Structure et rigueur


                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio margin-b-10">
                                                    <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                    <label class="custom-control-label padding-l-10" for="no">
                                                        Progression garantie



                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>


                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab  Soutien scolaire">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div>
                            </div>
                        </div>

                        <div class="tab Rénovation">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>
                        <div class="tab Rénovation">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat impeccable

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail en sécurité

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Qualité avant rapidité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Rapidité et fiabilité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Chantier propre

                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Rénovation">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab Rénovation">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Seau à peinture

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Rouleau




                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Echelle 2m

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Echelle 4m

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pinceaux

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Couteau à enduire

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Outils de découpe



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Couteau à enduire

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pistolet à peinture


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Couteau à enduire

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pistolet à peinture


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Décolleuse à papier peint


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Brosse et rouleau à papier peint

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Cales

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Agrafeuse


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Equerre


                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Rénovation">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Rénovation">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>

                        <div class="tab  d’animaux">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab d’animaux">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab  d’animaux">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Chenil


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Jardin


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Cage


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Volière



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Enclos extérieur



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Enclos intérieur


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Arbre à chat



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Litière



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Caisse de transport

                                            </label>
                                        </div>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab  d’animaux">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab  d’animaux">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité


                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible

                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    À l’écoute
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Nouvelles régulières

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Amoureux des animaux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Amateur de promenades
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Sportif

                                                </label>

                                                <div class="custom-control custom-radio margin-b-10">
                                                    <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                    <label class="custom-control-label padding-l-10" for="no">
                                                        Transport possible

                                                    </label>
                                                </div>                                                <div class="custom-control custom-radio margin-b-10">
                                                    <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                    <label class="custom-control-label padding-l-10" for="no">
                                                        Respect de l’hygiène


                                                    </label>

                                                </div>
                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div></div>
                        <div class="tab  d’animaux">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab d’enfants">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab  d’enfants">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab  d’enfants">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Jeux de société

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pate à modeler

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Jeux pour enfant


                                            </label>
                                        </div>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab  d’enfants">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab  d’enfants">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité


                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Respect de l’hygiène

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Pédagogue

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    À l’écoute
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Nouvelles régulières

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Préparation des repas

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Calme et patient
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Interventions régulières
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Respect de l’hygiène


                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab  d’enfants">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab Repassage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab Repassage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Repassage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Centrale vapeur

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Fer à repasser

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Repassage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab Repassage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat impeccable

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Respect de l’hygiène


                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Repassage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab Entretien ">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab Entretien ">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Entretien ">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Tondeuse à bras


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Tondeuse autoportée

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Taille-haie


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Tronçonneuse

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Désehbeuse

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Coupe bordure

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Motoculteur

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Hache


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Scie

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Petit équipement de jardinage


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Grand équipement de jardinage
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Débrousailleuse

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Brouette


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Karcher


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Ébrancheur
                                            </label>
                                        </div>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Entretien ">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab Entretien ">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat impeccable

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail en sécurité

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Qualité avant rapidité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Rapidité et fiabilité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Chantier propre

                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Entretien ">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab Plomberie">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab Plomberie">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Plomberie">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Coupe-tube


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Téflon
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Clé à bonde


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pince à glissement

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pince à emboiture

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pince à cintrer

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Rodoir



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Déboucheur

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Clé à molette

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Clé à siphon

                                            </label>
                                        </div>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Plomberie">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab Plomberie">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat impeccable

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail en sécurité

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Qualité avant rapidité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Rapidité et fiabilité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Chantier propre

                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Plomberie">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab Déménagement">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab Déménagement">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Déménagement">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Diable
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pick-up

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Petit fourgon

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Grand fourgon


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Petit camion


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Grand camion

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Sangles


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Couverture


                                            </label>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Cartons

                                                </label>
                                            </div>

                                        </div></div>
                                </div>

                            </div>
                        </div>
                        <div class="tab Déménagement">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab Déménagement">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat impeccable

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail en sécurité

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Rapidité et fiabilité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Précautions maximum

                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Déménagement">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab ménage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab ménage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab ménage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aspirateur
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Produit ménager

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Karcher

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab ménage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab ménage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat impeccable

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Respect de l’hygiène


                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab ménage">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab Aide à">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab Aide à">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Aide à">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Vélo
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Scooteur

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Voiture

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Machine à coudre


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Tenue de serveur

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Matériel de grillade


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Matériel de cuisine

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Aide à">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab Aide à">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné


                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Respect de l’hygiène

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    A l’écoute

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Calme et patient


                                                </label>

                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Interventions régulières

                                                </label>

                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Transport possible

                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Aide à">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab Électricité">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Diplôme pour la compétence!</h2>
                                <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>

                                    </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab Électricité">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Électricité">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pince à sertir

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Multimètre




                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Testeur de cable

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pince ampèremétrique

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Dégaineur / Dénudeur

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Pince coupante

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Tournevis électricien


                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Électricité">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab Électricité">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat impeccable

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail en sécurité

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Qualité avant rapidité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Rapidité et fiabilité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Chantier propre

                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab Électricité">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        <div class="tab petit">

                    <div class="em_titleSign" style="margin-left: auto;">
                        <h2>Diplôme pour la compétence!</h2>
                        <p style="font-size: 20px">Avez vous un lien avec le diplôme pour la compétence?</p>
                    </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                           <div class="bg-white ">
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="yes" value="yes" name="diploma" class="custom-control-input yes">
                                <label class="custom-control-label padding-l-10" for="yes">
                                    OUI</label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="no" value="no" name="diploma" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="no">
                               Non
                            </label>
                            </div>

                           </div></div>
                            </div>
                            <div class="yes box form-group" style="text-align: left">
                                <p style="font-size:20px; ">Quel est le nom du diplôme?</p>
                                <div class="input_group">
                                    <input type="text" id="diploma" class="form-control" placeholder="Entrer le diplôme" required="">
                                </div>
                            </div>
                        </div>
                        <div class="tab petit">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel expérience avez-vous en tant que prestataire?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Je n’en ai aucune
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai moins d’un an

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai entre 2 et 4 ans


                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                J’ai plus de 5 ans

                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab petit">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Expérience pour la compétence!</h2>
                                <p style="font-size: 20px">Quel équipement avez vous?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                Aucun
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Rabot

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Perceuse perforatrice



                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Ponceuse
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Clé à molette

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Scie

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Scie circulaire

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Set de tournevis

                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Niveau


                                            </label>
                                        </div>

                                    </div></div>
                            </div>

                        </div>
                        <div class="tab petit">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Description de la compétenc!</h2>
                                <p style="font-size: 20px">Description personnalisée ?
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5"></textarea>

                                </div></div></div>
                        <div class="tab petit">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Engagement pour la compétence!</h2>
                                <p style="font-size: 20px">Quels sont vos engagements clients ? (3 choix max)

                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">

                                                <input type="radio" id="experince1" value="" name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    Respect des lieux

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat impeccable

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail soigné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail d’expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail de passionné

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Organisé et méthodique

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Travail en sécurité

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Efficace et discret

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Convivialité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Qualité avant rapidité
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Rapidité et fiabilité
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Dynamique et souriant

                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Résultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Réactif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="" name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Chantier propre

                                                </label>

                                            </div>
                                        </fieldset>


                                    </div></div>
                            </div>

                        </div>
                        <div class="tab petit">

                            <div class="em_titleSign" style="margin-left: auto;">
                                <h2>Certifie sur l’honneur!</h2>
                                <p style="font-size: 20px">Je certifie sur l’honneur l’authenticité des données renseignées.
                                </p>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <div class="input_group">
                                    <label class="custom-control-label padding-r-10" for="customCheck1">
                                        Il pourra vous être demandé de justifier des données renseignées pour en vérifier l’authencité, au quel cas votre compte pourra être suspendu.</label>
                                </div></div></div>

                        @endif


<!--                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>-->
                        <!-- Circles which indicates the steps of the form: -->
                    </div>
                    <div class="question_step" style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        @if($id == 1)
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        @endif
                    </div>
                    <div class="em__footer">
{{--                        <button type="submit" class="btn bg-primary color-white justify-content-center">Créer un compte</button>--}}
                        <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn bg-primary color-white justify-content-center">Suivante</button>
                        <a href="{{route('front.login', ['id' => $id])}}" class="btn hover:color-secondary justify-content-center">Vous avez déjà un compte? se connecter</a>
                    </div>
                </form>
            </section>

        </div>


    </div>

@endsection

@section('script')
    <script>
        function categorychange(elem){
            $('.maincategory').html('<option value="">Sélectionnez une sous-catégorie</option>');
            event.preventDefault();
            let id = elem.value;
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('fetchsubcategory')}}",
                type:"POST",
                data:{
                    id:id,
                    _token: _token
                },
                success:function(response){
                    $.each(response, function(i, item) {
                        $('.maincategory').append('<option value="'+item.id+'">'+item.title+'</option>');
                    });
                },
            });
        }
        function subcategorychange(elem){
            // $('.maincategory').html('<option value="">Sélectionnez une sous-catégorie</option>');
            event.preventDefault();
            let id = elem.value;
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('fetchquestions')}}",
                type:"POST",
                data:{
                    id:id,
                    _token: _token
                },
                success:function(response){
                    $.each(response, function(i, item) {
                        console.log(item);
                        $('.question_tabs').append("<div class='tab'><div class='form-group with_icon' style='text-align: left!important;'><h1>"+item.question+"</h1><div style='padding: 10px'><div class='input_group'><div class='row'><div class='col-2'><input type='radio' value='"+item.option1+"' name='"+item.id+"'></div><div class='col-10'><p>"+item.option1+"</p></div></div></div><div class='input_group'><div class='row'><div class='col-2'><input type='radio' value='"+item.option2+"' name='"+item.id+"'></div><div class='col-10'><p>"+item.option2+"</p></div></div></div><div class='input_group'><div class='row'><div class='col-2'><input type='radio' value='"+item.option3+"' name='"+item.id+"'></div><div class='col-10'><p>"+item.option3+"</p></div></div></div><div class='input_group'><div class='row'><div class='col-2'><input type='radio' value='"+item.option4+"' name='"+item.id+"'></div><div class='col-10'><p>"+item.option4+"</p></div></div></div></div></div></div>");
                    });
                    $.each(response, function(i, item) {
                        $('.question_step').append("<span class='step''></span>");
                    });
                },
            });
        }

    </script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, z, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            z = x[currentTab].getElementsByTagName("select");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " is-invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            for (i = 0; i < z.length; i++) {
                // If a field is empty...
                if (z[i].value == "") {
                    // add an "invalid" class to the field:
                    z[i].className += " is-invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    <script>
        $(document).ready(function(){
            $('#yes').click(function(){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
            $('#no').click(function(){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).hide();
            });
        });
    </script>


@endsection
