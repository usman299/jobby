@extends('layouts.splash')
<!-- End. em_loading -->
@section('style')
    <style>

        /* Mark input boxes that gets an error on validation: */
        .box {

            display: none;
            margin-top: 20px;
        }

        input.is-invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: left !important;
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

        .f-20 {
            font-size: 20px;
        }

        .allign-left {
            text-align: left;
        }

        .dialog-background {
            background: none repeat scroll 0 0 rgba(105, 166, 217, 0.5);
            height: 100%;
            left: 0;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        .dialog-loading-wrapper {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
            border: 0 none;
            height: 100px;
            left: 50%;
            margin-left: -50px;
            margin-top: -50px;
            position: fixed;
            top: 50%;
            width: 100px;
            z-index: 9999999;
        }

        .dialog-loading-icon {
            background-color: #FFFFFF !important;
            border-radius: 13px;
            display: block;
            height: 40px;
            line-height: 40px;
            margin: 0;
            padding: 1px;
            text-align: center;
            width: 100px;
        }

    </style>
@endsection
@section('content')

    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            <header class="main_haeder header-sticky multi_item">
                <div class="em_side_right">
                    <a class="rounded-circle d-flex align-items-center text-decoration-none" onclick="history.back()">
                        <i class="tio-chevron_left size-24 color-text"></i>
                        <span class="color-text size-14">Retour</span>
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
                <form id="regForm" class="loginformsubmit" method="POST" action="{{ route('register') }}"
                      enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="em__body question_tabs">
                        <div class="tab">
                            <div class="em_titleSign">
                                <h1>Cr??er un compte</h1>
                            </div>
                            <input type="hidden" name="role" value="{{$id}}">
                            <div class="form-group with_icon" style="text-align: left!important;">
                                <label>Pr??nom</label>
                                <div class="input_group">
                                    <input type="text" autocomplete="false" class="form-control @error('fname') is-invalid @enderror"
                                           name="fname"  placeholder="John" required="">
                                    <input type="text" autocomplete="false" class="form-control @error('lname') is-invalid @enderror"
                                           name="lname" placeholder="Smit" required="">
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Profile" data-name="Iconly/Two-tone/Profile"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <g id="Profile" transform="translate(4 2)">
                                                <circle id="Ellipse_736" cx="4.778" cy="4.778" r="4.778"
                                                        transform="translate(2.801 0)" fill="none" stroke="#200e32"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-width="1.5"
                                                        opacity="0.4"></circle>
                                                <path id="Path_33945"
                                                      d="M0,3.016a2.215,2.215,0,0,1,.22-.97A4.042,4.042,0,0,1,3.039.426,16.787,16.787,0,0,1,5.382.1,25.053,25.053,0,0,1,9.767.1a16.979,16.979,0,0,1,2.343.33c1.071.22,2.362.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.716,15.716,0,0,1-2.343.339A25.822,25.822,0,0,1,6.2,6a4.066,4.066,0,0,1-.815-.055,15.423,15.423,0,0,1-2.334-.339C1.968,5.4.687,4.957.22,4A2.279,2.279,0,0,1,0,3.016Z"
                                                      transform="translate(0 13.185)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5"></path>
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
                                    <input autocomplete="false" type="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="example@mail.com" required="">
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Message" data-name="Iconly/Two-tone/Message"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <g id="Message" transform="translate(2 3)">
                                                <path id="Path_445"
                                                      d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0"
                                                      transform="translate(3.954 5.561)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Rectangle_511"
                                                      d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z"
                                                      transform="translate(0 0)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group with_icon" style="text-align: left!important;">
                                <label>T??l??phone</label>
                                <div class="input_group">
                                    <input type="text" name="phone"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           placeholder="+255 5645 6545" required="">
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Call" data-name="Iconly/Two-tone/Call"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <g id="Call" transform="translate(2.5 2.5)">
                                                <path id="Call-2" data-name="Call"
                                                      d="M.49,2.373C.807,1.849,2.549-.056,3.793,0a1.636,1.636,0,0,1,.967.517,16.863,16.863,0,0,1,2.468,3.34C7.471,5.026,6.078,5.7,6.5,6.878a9.873,9.873,0,0,0,5.619,5.616c1.177.426,1.851-.966,3.019-.723a16.894,16.894,0,0,1,3.34,2.468,1.639,1.639,0,0,1,.517.967c.046,1.309-1.977,3.077-2.371,3.3-.93.665-2.144.654-3.624-.034C8.874,16.757,2.274,10.282.524,6-.145,4.525-.192,3.3.49,2.373Z"
                                                      fill="none" stroke="#200e32" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-miterlimit="10"
                                                      stroke-width="1.5"></path>
                                                <path id="Stroke_1" data-name="Stroke 1" d="M0,0,1.469,2.179"
                                                      transform="translate(1.883 1.294)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_3" data-name="Stroke 3" d="M0,0,2.188,1.71"
                                                      transform="translate(15.364 15.567)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
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
                                <label>R??gion</label>
                                <select name="country" class="form-control custom-select">
                                    @foreach($country as $cont)
                                        <option value="{{$cont->id}}">{{$cont->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group with_icon" id="show_hide_password"
                                 style="text-align: left!important;">
                                <label>Mot de passe</label>
                                <div class="input_group">
                                    <input type="password" name="password" id="password" oninput="checkpassword()"
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="tapez votre mot de passe" required="">
                                    <div class="icon">
                                        <svg id="Iconly_Two-tone_Password" data-name="Iconly/Two-tone/Password"
                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <g id="Password" transform="translate(2 2)">
                                                <path id="Stroke_1" data-name="Stroke 1"
                                                      d="M13.584,0H4.915C1.894,0,0,2.139,0,5.166v8.168C0,16.361,1.885,18.5,4.915,18.5h8.668c3.031,0,4.917-2.139,4.917-5.166V5.166C18.5,2.139,16.614,0,13.584,0Z"
                                                      transform="translate(0.75 0.75)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                                                <path id="Stroke_3" data-name="Stroke 3"
                                                      d="M3.7,1.852A1.852,1.852,0,1,1,1.851,0,1.852,1.852,0,0,1,3.7,1.852Z"
                                                      transform="translate(4.989 8.148)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_5" data-name="Stroke 5" d="M0,0H6.318V1.852"
                                                      transform="translate(8.692 10)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5"></path>
                                                <path id="Stroke_7" data-name="Stroke 7" d="M.5,1.852V0"
                                                      transform="translate(11.682 10)" fill="none" stroke="#200e32"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-miterlimit="10" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <button type="button" class="btn hide_show icon_password">
                                        <i class="tio-hidden_outlined"></i>
                                    </button>
                                </div>
                                <div style="display: none" class="invalid-feedback passerror">Le mot de passe doit comporter au moins 8 caract??res.</div>
                                @error('password')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2" style="text-align: left!important;">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span> Je suis d'accord <a href="{{route('front.terms')}}" class="color-blue">termes et conditions</a></span>
                                </label>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="em_titleSign">
                                <h1>Cr??er un compte</h1>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Adresse</label>
                                <div class="input_group">
                                    <input type="text" class="form-control" name="address"
                                           required="">
                                </div>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Sexe</label>
                                <select class="form-control custom-select" name="gender">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Code postal</label>
                                <div class="input_group">
                                    <input required="" type="text" class="form-control" name="postalCode">
                                </div>
                            </div>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Date de naissance</label>
                                <div class="input_group">
                                    <input id="datepicker" type="text" class="form-control" name="dob">
                                </div>
                            </div>

                            <div class="form-group" style="text-align: left!important;">
                                <label>Description</label>
                                <div class="input_group">
                                    <textarea name="description" placeholder="??cris quelque chose ?? propos de toi"
                                              class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    @if($id == 1)
                            <div class="tab">
                                <div class="em_titleSign">
                                    <h1>Tes comp??tences</h1>
                                </div>
                                @foreach($categories as $category)
                                    <div class="padding-10">
                                        <hr>
                                        <p>{{$category->title}}</p>
                                        <div class="row">
                                            @foreach($category->subcategorys as $key => $subcategory)
                                                <div class="col-4">
                                                    <input id="for{{$subcategory->id}}" value="{{$subcategory->id}}"
                                                           type="checkbox" name="skills[]"><br>
                                                    <label for="for{{$subcategory->id}}">
                                                        <p>{{$subcategory->title}}</p></label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="tab">
                                <div class="em_titleSign">
                                    <h2>S??lectionnez un profil sp??cialis??</h2>
                                </div>
                                <div class="form-group" style="text-align: left!important;">
                                    <div style="padding: 10px">
                                        <div class="input_group">
                                            <select name="jobber_category_id" onchange="subcategorychange(this)"
                                                    class="form-control custom-select">
                                                <option value="">S??lectionnez un profil sp??cialis??</option>
                                                <option value="Bricolage / Travaux">Bricolage / Travaux</option>
                                                <option value="??lectricit?? et domotique">??lectricit?? et domotique
                                                </option>
                                                <option value="Plomberie">Plomberie</option>
                                                <option value="Aide ?? la personne">Aide ?? la personne</option>
                                                <option value="Aide m??nag??re">Aide m??nag??re</option>
                                                <option value="Livraison / D??m??nagement">Livraison / D??m??nagement
                                                </option>
                                                <option value="M??canique">M??canique</option>
                                                <option value="Entretien du jardin">Entretien du jardin</option>
                                                <option value="Garde d???enfants">Garde d???enfants</option>
                                                <option value="Garde d???animaux">Garde d???animaux</option>
                                                <option value="Cours particuliers">Cours particuliers</option>
                                                <option value="??v??nementiel">??v??nementiel</option>
                                                <option value="Taches administrative">Taches administrative</option>
                                                <option value="Informatique">Informatique</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="newtabs">

                            </div>
                            <div class="tab">
                                <div class="em_titleSign" style="margin-left: auto;">
                                    <h2>Dipl??me pour la comp??tence!</h2>
                                    <p class="f-20">Avez vous un lien avec le dipl??me pour la comp??tence?</p>
                                </div>
                                <div class="form-group" style="text-align: left!important;">
                                    <div class="input_group">
                                        <div class="bg-white ">
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="yes" value="OUI" name="diploma"
                                                       class="custom-control-input diploma_yes">
                                                <label class="custom-control-label padding-l-10" for="yes">
                                                    OUI</label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="no" value="Non" name="diploma"
                                                       class="custom-control-input diploma_no">
                                                <label class="custom-control-label padding-l-10" for="no">
                                                    Non
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doploma_name form-group allign-left">

                                </div>
                            </div>
                            <div class="tab">
                                <div class="em_titleSign" style="margin-left: auto;">
                                    <h2>Exp??rience pour la comp??tence!</h2>
                                    <p class="f-20">Quel exp??rience avez-vous en tant que prestataire?
                                    </p>
                                </div>
                                <div class="form-group allign-left">
                                    <div class="input_group">
                                        <div class="bg-white ">
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince1" value="Je n???en ai aucune"
                                                       name="experince" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="experince1">
                                                    Je n???en ai aucune
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince2" value="J???ai moins d???un an"
                                                       name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="experince2">
                                                    J???ai moins d???un an
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince3" value="J???ai entre 2 et 4 ans"
                                                       name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="experince3">
                                                    J???ai entre 2 et 4 ans
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="experince4" value="J???ai plus de 5 ans"
                                                       name="experince" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="experince4">
                                                    J???ai plus de 5 ans
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="equip_tab">

                            </div>
                            <div class="tab">
                                <div class="em_titleSign">
                                    <h2>Description de la comp??tence!</h2>
                                    <p class="p-20">Description personnalis??e ?
                                    </p>
                                </div>
                                <div class="form-group allign-left">
                                    <div class="input_group">
                                        <textarea name="personal_description"
                                                  placeholder="D??crivez votre savoir faire et vos exp??riences pour cette comp??tences (optionnel)"
                                                  class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="eng_tab">

                            </div>
                            <div class="tab">
                                <div class="em_titleSign">
                                    <h2>Certifie sur l???honneur!</h2>
                                    <p class="f-20">Je certifie sur l???honneur l???authenticit?? des donn??es renseign??es.
                                    </p>
                                </div>
                                <div class="form-group allign-left">
                                    <div class="form-group" style="text-align: left!important;">
                                        <div class="input_group">
                                            <div class="bg-white ">
                                                <div class="custom-control custom-radio margin-b-10">
                                                    <input type="radio" id="certifie" value="certifie" name="certifie"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label padding-l-10" for="certifie">
                                                        Je certifie sur l???honneur l???authenticit?? des donn??es
                                                        renseign??es. (Case ?? cocher)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Il pourra vous ??tre demand?? de justifier des donn??es renseign??es pour en
                                            v??rifier l???authencit??, au quel cas votre compte pourra ??tre suspendu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="question_step" style="text-align:center;margin-top:40px; display: none">
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
                            <span class="step"></span>
                        @endif
                    </div>
                    <div class="buttons__footer text-center">

                        <div class="bg-white d-flex">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)"
                                    class="btn bg-green rounded-10 btn__default mr-3">
                                <span class="color-white">Retourner</span>
                            </button>
                            <button type="button" id="nextBtn" style="color: white" onclick="nextPrev(1)"
                                    class="btn bg-blue rounded-10 btn__default">
                                <span class="color-white">Suivante</span>
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <div class="dialog-background" style="display: none">
        <div class="dialog-loading-wrapper">
            <span class="dialog-loading-icon">Loading....</span>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function checkpassword() {
            var x = document.getElementById("password").value;
            if (x.length < 8) {
                $("#password").addClass("is-invalid");
                $(".passerror").show();
            } else {
                $("#password").removeClass("is-invalid");
                $(".passerror").hide();
            }

        }

        function categorychange(elem) {
            $('.maincategory').html('<option value="">S??lectionnez une sous-cat??gorie</option>');
            event.preventDefault();
            let id = elem.value;
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('fetchsubcategory')}}",
                type: "POST",
                data: {
                    id: id,
                    _token: _token
                },
                success: function (response) {
                    $.each(response, function (i, item) {
                        $('.maincategory').append('<option value="' + item.id + '">' + item.title + '</option>');
                    });
                },
            });
        }

        function subcategorychange(elem) {
            let id = elem.value;
            console.log(id);
            if (id == "Bricolage / Travaux") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
                            <div class="em_titleSign">
                                <h2>Equipement pour la comp??tence!</h2>
                                <p class="f-20">Quel ??quipement avez vous?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                                            <label class="custom-control-label padding-l-10" for="equipement1">
                                                Aucun
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement2" value="Chenil" name="equipement2" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement2">
                                                Chenil
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement3" value="Jardin" name="equipement3" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement3">
                                                Jardin
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement4" value="Cage" name="equipement4" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement4">
                                                Cage
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement5" value="Voli??re" name="equipement5" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement5">
                                                Voli??re
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement6" value="Enclos ext??rieur" name="equipement6" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement6">
                                                Enclos ext??rieur
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement7" value="Enclos int??rieur" name="equipement7" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement7">
                                                Enclos int??rieur
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement8" value="Arbre ?? chat" name="equipement8" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement8">
                                                Arbre ?? chat
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement9" value="Liti??re" name="equipement9" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement9">
                                                Liti??re
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="equipement10" value="Caisse de transport" name="equipement10" class="custom-control-input">
                                            <label class="custom-control-label padding-l-10" for="equipement10">
                                                Caisse de transport
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(` <div class="tab">
                            <div class="em_titleSign">
                                <h2>Engagement pour la comp??tence!</h2>
                                <p class="f-20">Quels sont vos engagements clients ?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="eng1">
                                                    Respect des lieux
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng2" value="R??sultat impeccable" name="eng2" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng2">
                                                    R??sultat impeccable
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng3" value="Travail soign??" name="eng3" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng3">
                                                    Travail soign??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng4" value="Travail d???expert" name="eng4" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng4">
                                                    Travail d???expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng5" value="Travail de passionn??" name="eng5" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng5">
                                                    Travail de passionn??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng6" value="Organis?? et m??thodique" name="eng6" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng6">
                                                    Organis?? et m??thodique
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng7" value="Travail en s??curit??" name="eng7" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng7">
                                                    Travail en s??curit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng8" value="Efficace et discret" name="eng8" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng8">
                                                    Efficace et discret
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng9" value="Convivialit??" name="eng9" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng9">
                                                    Convivialit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng10" value="Qualit?? avant rapidit??" name="eng10" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng10">
                                                    Qualit?? avant rapidit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng11" value="Rapidit?? et fiabilit??" name="eng11" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng11">
                                                    Rapidit?? et fiabilit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng12" value="Dynamique et souriant" name="eng12" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng12">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng13" value="R??sultat garanti" name="eng13" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng13">
                                                    R??sultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng14" value="Satisfait ou refait" name="eng14" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng14">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng15" value="R??actif et flexible" name="eng15" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng15">
                                                    R??actif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng16" value="R??actif et flexible" name="eng16" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng16">
                                                    Chantier propre
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            } else if (id == "??lectricit?? et domotique") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Pince ?? sertir" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Pince ?? sertir
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Multim??tre" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Multim??tre
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Testeur de cable" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Testeur de cable
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Pince amp??rem??trique" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Pince amp??rem??trique
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement6" value="D??gaineur / D??nudeur" name="equipement6" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement6">
                                D??gaineur / D??nudeur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement7" value="Pince coupante" name="equipement7" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement7">
                                Pince coupante
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement8" value="Tournevis ??lectricien" name="equipement8" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement8">
                                Tournevis ??lectricien
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(` <div class="tab">
                            <div class="em_titleSign">
                                <h2>Engagement pour la comp??tence!</h2>
                                <p class="f-20">Quels sont vos engagements clients ?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="eng1">
                                                    Respect des lieux
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng2" value="R??sultat impeccable" name="eng2" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng2">
                                                    R??sultat impeccable
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng3" value="Travail soign??" name="eng3" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng3">
                                                    Travail soign??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng4" value="Travail d???expert" name="eng4" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng4">
                                                    Travail d???expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng5" value="Travail de passionn??" name="eng5" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng5">
                                                    Travail de passionn??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng6" value="Organis?? et m??thodique" name="eng6" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng6">
                                                    Organis?? et m??thodique
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng7" value="Travail en s??curit??" name="eng7" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng7">
                                                    Travail en s??curit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng8" value="Efficace et discret" name="eng8" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng8">
                                                    Efficace et discret
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng9" value="Convivialit??" name="eng9" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng9">
                                                    Convivialit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng10" value="Qualit?? avant rapidit??" name="eng10" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng10">
                                                    Qualit?? avant rapidit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng11" value="Rapidit?? et fiabilit??" name="eng11" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng11">
                                                    Rapidit?? et fiabilit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng12" value="Dynamique et souriant" name="eng12" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng12">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng13" value="R??sultat garanti" name="eng13" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng13">
                                                    R??sultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng14" value="Satisfait ou refait" name="eng14" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng14">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng15" value="R??actif et flexible" name="eng15" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng15">
                                                    R??actif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng16" value="R??actif et flexible" name="eng16" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng16">
                                                    Chantier propre
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            } else if (id == "Plomberie") {
                $(".equip_tab").html('');
                $(".equip_tab").append(` <div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Coupe-tube" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Coupe-tube
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="T??flon" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                T??flon
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Cl?? ?? bonde" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Cl?? ?? bonde
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Pince ?? glissement" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Pince ?? glissement
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement6" value="Pince ?? emboiture" name="equipement6" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement6">
                                Pince ?? emboiture
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement7" value="Pince ?? cintrer" name="equipement7" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement7">
                                Pince ?? cintrer
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement8" value="Rodoir" name="equipement8" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement8">
                                Rodoir
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement9" value="D??boucheur" name="equipement9" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement9">
                                D??boucheur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement10" value="Cl?? ?? molette" name="equipement10" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement10">
                                Cl?? ?? molette
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement11" value="Cl?? ?? siphon" name="equipement11" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement11">
                                Cl?? ?? siphon
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(` <div class="tab">
                            <div class="em_titleSign">
                                <h2>Engagement pour la comp??tence!</h2>
                                <p class="f-20">Quels sont vos engagements clients ?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="eng1">
                                                    Respect des lieux
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng2" value="R??sultat impeccable" name="eng2" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng2">
                                                    R??sultat impeccable
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng3" value="Travail soign??" name="eng3" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng3">
                                                    Travail soign??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng4" value="Travail d???expert" name="eng4" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng4">
                                                    Travail d???expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng5" value="Travail de passionn??" name="eng5" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng5">
                                                    Travail de passionn??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng6" value="Organis?? et m??thodique" name="eng6" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng6">
                                                    Organis?? et m??thodique
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng7" value="Travail en s??curit??" name="eng7" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng7">
                                                    Travail en s??curit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng8" value="Efficace et discret" name="eng8" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng8">
                                                    Efficace et discret
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng9" value="Convivialit??" name="eng9" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng9">
                                                    Convivialit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng10" value="Qualit?? avant rapidit??" name="eng10" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng10">
                                                    Qualit?? avant rapidit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng11" value="Rapidit?? et fiabilit??" name="eng11" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng11">
                                                    Rapidit?? et fiabilit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng12" value="Dynamique et souriant" name="eng12" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng12">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng13" value="R??sultat garanti" name="eng13" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng13">
                                                    R??sultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng14" value="Satisfait ou refait" name="eng14" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng14">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng15" value="R??actif et flexible" name="eng15" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng15">
                                                    R??actif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng16" value="R??actif et flexible" name="eng16" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng16">
                                                    Chantier propre
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            } else if (id == "Aide ?? la personne") {
                $(".equip_tab").html('');
                $(".equip_tab").append(` <div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="V??lo" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                V??lo
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Scooteur" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Scooteur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Voiture" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Voiture
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Machine ?? coudre" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Machine ?? coudre
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Tenue de serveur" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Tenue de serveur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement6" value="Mat??riel de grillade" name="equipement6" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement6">
                                Mat??riel de grillade
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement7" value="Mat??riel de cuisine" name="equipement7" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement7">
                                Mat??riel de cuisine
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(`<div class="tab">
                            <div class="em_titleSign">
                                <h2>Engagement pour la comp??tence!</h2>
                                <p class="f-20">Quels sont vos engagements clients ?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng1" value="Travail soign??" name="eng1" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng1">
                                                    Travail soign??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng2" value="Travail d???expert" name="eng2" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng2">
                                                    Travail d???expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng3" value="Travail de passionn??" name="eng3" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng3">
                                                    Travail de passionn??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng4" value="Organis?? et m??thodique" name="eng4" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng4">
                                                    Organis?? et m??thodique
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng5" value="Efficace et discret" name="eng5" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng5">
                                                    Efficace et discret
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng6" value="Convivialit??" name="eng6" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng6">
                                                    Convivialit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng7" value="Dynamique et souriant" name="eng7" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng7">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng8" value="R??actif et flexible" name="eng8" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng8">
                                                    R??actif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng9" value="Respect de l???hygi??ne" name="eng9" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng9">
                                                    Respect de l???hygi??ne
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng10" value="A l?????coute" name="eng10" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng10">
                                                    A l?????coute
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng11" value="Calme et patient" name="eng11" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng11">
                                                    Calme et patient
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng12" value="Interventions r??guli??res" name="eng12" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng12">
                                                    Interventions r??guli??res
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng13" value="Transport possible" name="eng13" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng13">
                                                    Transport possible
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            } else if (id == "Aide m??nag??re") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aspirateur" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aspirateur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Produit m??nager" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Produit m??nager
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Karcher" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Karcher
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Centrale vapeur" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Centrale vapeur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Fer ?? repasser" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Fer ?? repasser
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(` <div class="tab">
                            <div class="em_titleSign">
                                <h2>Engagement pour la comp??tence!</h2>
                                <p class="f-20">Quels sont vos engagements clients ?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng1">
                                                    Respect des lieux
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng2" value="R??sultat impeccable" name="eng2" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng2">
                                                    R??sultat impeccable
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng3" value="Travail soign??" name="eng3" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng3">
                                                    Travail soign??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng4" value="Travail d???expert" name="eng4" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng4">
                                                    Travail d???expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng5" value="Organis?? et m??thodique" name="eng5" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng5">
                                                    Organis?? et m??thodique
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng6" value="Efficace et discret" name="eng6" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng6">
                                                    Efficace et discret
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng7" value="Convivialit??" name="eng7" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng7">
                                                    Convivialit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng8" value="Dynamique et souriant" name="eng8" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng8">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng9" value="R??sultat garanti" name="eng9" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng9">
                                                    R??sultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng10" value="Satisfait ou refait" name="eng10" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng10">
                                                    Satisfait ou refait
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng11" value="R??actif et flexible" name="eng11" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng11">
                                                    R??actif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng12" value="Respect de l???hygi??ne" name="eng12" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng12">
                                                    Respect de l???hygi??ne
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            } else if (id == "Livraison / D??m??nagement") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Diable" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Diable
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Pick-up" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Pick-up
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Petit fourgon" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Petit fourgon
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Petit camion" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Petit camion
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Grand camion" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Grand camion
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement6" value="Sangles" name="equipement6" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement6">
                                Sangles
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement7" value="Couverture" name="equipement7" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement7">
                                Couverture
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement8" value="Cartons" name="equipement8" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement8">
                                Cartons
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(` <div class="tab">
                            <div class="em_titleSign">
                                <h2>Engagement pour la comp??tence!</h2>
                                <p class="f-20">Quels sont vos engagements clients ?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng1">
                                                    Respect des lieux
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng2" value="R??sultat impeccable" name="eng2" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng2">
                                                    R??sultat impeccable
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng3" value="Travail soign??" name="eng3" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng3">
                                                    Travail soign??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng4" value="Travail d???expert" name="eng4" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng4">
                                                    Travail d???expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng5" value="Organis?? et m??thodique" name="eng5" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng5">
                                                    Organis?? et m??thodique
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng6" value="Efficace et discret" name="eng6" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng6">
                                                    Efficace et discret
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng7" value="Convivialit??" name="eng7" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng7">
                                                    Convivialit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng8" value="Dynamique et souriant" name="eng8" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng8">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng9" value="R??sultat garanti" name="eng9" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng9">
                                                    R??sultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng10" value="Satisfait ou refait" name="eng10" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng10">
                                                    Satisfait ou refait
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng11" value="R??actif et flexible" name="eng11" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng11">
                                                    R??actif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng12" value="Respect de l???hygi??ne" name="eng12" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng12">
                                                    Respect de l???hygi??ne
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            } else if (id == "M??canique") {
                $(".equip_tab").html('');
                $(".equip_tab").append(` <div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Mallette ?? cliquets" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Mallette ?? cliquets
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Cl?? dynamom??trique" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Cl?? dynamom??trique
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Jeu de cl??" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Jeu de cl??
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Cric hydraulique" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Cric hydraulique
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement6" value="Chandelles" name="equipement6" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement6">
                                Chandelles
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement7" value="Valise diagnostic" name="equipement7" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement7">
                                Valise diagnostic
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement8" value="Booster de batterie" name="equipement8" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement8">
                                Booster de batterie
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement9" value="Syst??me de remorquage" name="equipement9" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement9">
                                Syst??me de remorquage
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(` <div class="tab">
                            <div class="em_titleSign">
                                <h2>Engagement pour la comp??tence!</h2>
                                <p class="f-20">Quels sont vos engagements clients ?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng1">
                                                    Respect des lieux
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng2" value="R??sultat impeccable" name="eng2" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng2">
                                                    R??sultat impeccable
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng3" value="Travail soign??" name="eng3" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng3">
                                                    Travail soign??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng4" value="Travail d???expert" name="eng4" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng4">
                                                    Travail d???expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng5" value="Organis?? et m??thodique" name="eng5" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng5">
                                                    Organis?? et m??thodique
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng6" value="Efficace et discret" name="eng6" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng6">
                                                    Efficace et discret
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng7" value="Convivialit??" name="eng7" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng7">
                                                    Convivialit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng8" value="Dynamique et souriant" name="eng8" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng8">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng9" value="R??sultat garanti" name="eng9" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng9">
                                                    R??sultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng10" value="Satisfait ou refait" name="eng10" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng10">
                                                    Satisfait ou refait
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng11" value="R??actif et flexible" name="eng11" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng11">
                                                    R??actif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng12" value="Respect de l???hygi??ne" name="eng12" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng12">
                                                    Respect de l???hygi??ne
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            } else if (id == "Entretien du jardin") {
                $(".equip_tab").html('');
                $(".equip_tab").append(` <div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Tondeuse ?? bras" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Tondeuse ?? bras
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Tondeuse autoport??e" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Tondeuse autoport??e
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Taille-haie" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Taille-haie
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Tron??onneuse" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Tron??onneuse
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement6" value="D??sehbeuse" name="equipement6" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement6">
                                D??sehbeuse
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement7" value="Coupe bordure" name="equipement7" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement7">
                                Coupe bordure
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement8" value="Motoculteur" name="equipement8" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement8">
                                Motoculteur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement9" value="Hache" name="equipement9" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement9">
                                Hache
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement10" value="Scie" name="equipement10" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement9">
                                Scie
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement11" value="Petit ??quipement de jardinage" name="equipement11" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement11">
                                Petit ??quipement de jardinage
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement12" value="Grand ??quipement de jardinage" name="equipement12" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement12">
                                Grand ??quipement de jardinage
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement13" value="D??brousailleuse" name="equipement13" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement13">
                                D??brousailleuse
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement14" value="Brouette" name="equipement14" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement14">
                                Brouette
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement15" value="Karcher" name="equipement15" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement15">
                                Karcher
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement16" value="??brancheur" name="equipement16" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement16">
                                ??brancheur
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(` <div class="tab">
                            <div class="em_titleSign">
                                <h2>Engagement pour la comp??tence!</h2>
                                <p class="f-20">Quels sont vos engagements clients ?
                                </p>
                            </div>
                            <div class="form-group allign-left">
                                <div class="input_group">
                                    <div class="bg-white">
                                        <fieldset>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input ">
                                                <label class="custom-control-label padding-l-10" for="eng1">
                                                    Respect des lieux
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng2" value="R??sultat impeccable" name="eng2" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng2">
                                                    R??sultat impeccable
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng3" value="Travail soign??" name="eng3" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng3">
                                                    Travail soign??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng4" value="Travail d???expert" name="eng4" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng4">
                                                    Travail d???expert
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng5" value="Travail de passionn??" name="eng5" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng5">
                                                    Travail de passionn??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng6" value="Organis?? et m??thodique" name="eng6" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng6">
                                                    Organis?? et m??thodique
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng7" value="Travail en s??curit??" name="eng7" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng7">
                                                    Travail en s??curit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng8" value="Efficace et discret" name="eng8" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng8">
                                                    Efficace et discret
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng9" value="Convivialit??" name="eng9" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng9">
                                                    Convivialit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng10" value="Qualit?? avant rapidit??" name="eng10" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng10">
                                                    Qualit?? avant rapidit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng11" value="Rapidit?? et fiabilit??" name="eng11" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng11">
                                                    Rapidit?? et fiabilit??
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng12" value="Dynamique et souriant" name="eng12" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng12">
                                                    Dynamique et souriant
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng13" value="R??sultat garanti" name="eng13" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng13">
                                                    R??sultat garanti
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng14" value="Satisfait ou refait" name="eng14" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng14">
                                                    Satisfait ou refait
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng15" value="R??actif et flexible" name="eng15" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng15">
                                                    R??actif et flexible
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio margin-b-10">
                                                <input type="radio" id="eng16" value="R??actif et flexible" name="eng16" class="custom-control-input">
                                                <label class="custom-control-label padding-l-10" for="eng16">
                                                    Chantier propre
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            } else if (id == "Garde d???enfants") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Jeux de soci??t??" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Jeux de soci??t??
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Pate ?? modeler" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Pate ?? modeler
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Jeux pour enfant" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Jeux pour enfant
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(` <div class="tab">
            <div class="em_titleSign">
                <h2>Engagement pour la comp??tence!</h2>
                <p class="f-20">Quels sont vos engagements clients ?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white">
                        <fieldset>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng1">
                                    Respect des lieux
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng2" value="Efficace et discret" name="eng2" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng2">
                                    Efficace et discret
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng3" value="Convivialit??" name="eng3" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng3">
                                    Convivialit??
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng4" value="Dynamique et souriant" name="eng4" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng4">
                                    Dynamique et souriant
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng5" value="R??actif et flexible" name="eng5" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng5">
                                    R??actif et flexible
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng6" value="Respect de l???hygi??ne" name="eng6" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng6">
                                    Respect de l???hygi??ne
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng7" value="P??dagogue" name="eng7" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng7">
                                    P??dagogue
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng8" value="?? l?????coute" name="eng8" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng8">
                                    ?? l?????coute
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng9" value="Nouvelles r??guli??res" name="eng9" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng9">
                                    Nouvelles r??guli??res
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng10" value="Pr??paration des repas" name="eng10" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng10">
                                    Pr??paration des repas
                                </label>
                            </div>

                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng11" value="Calme et patient" name="eng11" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng11">
                                    Calme et patient
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng12" value="Interventions r??guli??res" name="eng12" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng12">
                                    Interventions r??guli??res
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>`);
            } else if (id == "Garde d???animaux") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Chenil" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Chenil
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Jardin" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Jardin
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Cage" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Cage
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Voli??re" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Voli??re
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement6" value="Enclos ext??rieur" name="equipement6" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement6">
                                Enclos ext??rieur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement7" value="Enclos int??rieur" name="equipement7" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement7">
                                Enclos int??rieur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement8" value="Arbre ?? chat" name="equipement8" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement8">
                                Arbre ?? chat
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement9" value="Liti??re" name="equipement9" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement9">
                                Liti??re
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement10" value="Caisse de transpor" name="equipement10" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement9">
                                Caisse de transpor
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Engagement pour la comp??tence!</h2>
                <p class="f-20">Quels sont vos engagements clients ?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white">
                        <fieldset>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng1" value="Respect des lieux" name="eng1" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng1">
                                    Respect des lieux
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng2" value="Efficace et discret" name="eng2" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng2">
                                    Efficace et discret
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng3" value="Convivialit??" name="eng3" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng3">
                                    Convivialit??
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng4" value="Dynamique et souriant" name="eng4" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng4">
                                    Dynamique et souriant
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng5" value="R??actif et flexible" name="eng5" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng5">
                                    R??actif et flexible
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng6" value="?? l?????coute" name="eng6" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng6">
                                    ?? l?????coute
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng7" value="Nouvelles r??guli??res" name="eng7" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng7">
                                    Nouvelles r??guli??res
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng8" value="Pr??paration des repas" name="eng8" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng8">
                                    Pr??paration des repas
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng9" value="Amoureux des animaux" name="eng9" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng9">
                                    Amoureux des animaux
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng10" value="Amateur de promenades" name="eng10" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng10">
                                    Amateur de promenades
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng11" value="Sportif" name="eng11" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng11">
                                    Sportif
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng12" value="Transport possible" name="eng12" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng12">
                                    Transport possible
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>`);
            } else if (id == "Cours particuliers") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Livre d???exercices" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Livre d???exercices
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Ordinateur" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Ordinateur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Webcam" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Webcam
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Engagement pour la comp??tence!</h2>
                <p class="f-20">Quels sont vos engagements clients ?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white">
                        <fieldset>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng1" value="Efficace et discret" name="eng1" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng1">
                                    Efficace et discret
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng2" value="Convivialit??" name="eng2" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng2">
                                    Convivialit??
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng3" value="Dynamique et souriant" name="eng3" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng3">
                                    Dynamique et souriant
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng4" value="R??actif et flexible" name="eng4" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng4">
                                    R??actif et flexible
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng5" value="?? l?????coute" name="eng5" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng5">
                                    ?? l?????coute
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng6" value="Organis?? et m??thodique" name="eng6" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng6">
                                    Organis?? et m??thodique
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng7" value="Calme et patient" name="eng7" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng7">
                                    Calme et patient
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng8" value="Interventions r??guli??res" name="eng8" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng8">
                                    Interventions r??guli??res
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng9" value="Structure et rigueur" name="eng9" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng9">
                                    Structure et rigueur
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng10" value="Progression garantie" name="eng10" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng10">
                                    Progression garantie
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>`);
            } else if (id == "??v??nementiel") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Tables" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Tables
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Chaises" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Chaises
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement4" value="Vaisselles" name="equipement4" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement4">
                                Vaisselles
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement5" value="Nappes" name="equipement5" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement5">
                                Nappes
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement6" value="D??coration" name="equipement6" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement6">
                                D??coration
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement7" value="Ustensiles" name="equipement7" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement7">
                                Ustensiles
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement8" value="Jeu de lumi??res" name="equipement8" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement8">
                                Jeu de lumi??res
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement9" value="Sono" name="equipement9" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement9">
                                Sono
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement10" value="Jeux de jardin" name="equipement10" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement9">
                                Jeux de jardin
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Engagement pour la comp??tence!</h2>
                <p class="f-20">Quels sont vos engagements clients ?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white">
                        <fieldset>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng1" value="Efficace et discret" name="eng1" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng1">
                                    Efficace et discret
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng2" value="Convivialit??" name="eng2" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng2">
                                    Convivialit??
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng3" value="Dynamique et souriant" name="eng3" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng3">
                                    Dynamique et souriant
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng4" value="R??actif et flexible" name="eng4" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng4">
                                    R??actif et flexible
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng5" value="?? l?????coute" name="eng5" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng5">
                                    ?? l?????coute
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng6" value="Organis?? et m??thodique" name="eng6" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng6">
                                    Organis?? et m??thodique
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng7" value="Calme et patient" name="eng7" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng7">
                                    Calme et patient
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng8" value="Interventions r??guli??res" name="eng8" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng8">
                                    Interventions r??guli??res
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng9" value="Structure et rigueur" name="eng9" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng9">
                                    Structure et rigueur
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng10" value="Progression garantie" name="eng10" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng10">
                                    Progression garantie
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>`);
            } else if (id == "Taches administrative") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Ordinateur" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Ordinateur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Webcam" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Webcam
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Engagement pour la comp??tence!</h2>
                <p class="f-20">Quels sont vos engagements clients ?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white">
                        <fieldset>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng1" value="Efficace et discret" name="eng1" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng1">
                                    Efficace et discret
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng2" value="Convivialit??" name="eng2" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng2">
                                    Convivialit??
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng3" value="Dynamique et souriant" name="eng3" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng3">
                                    Dynamique et souriant
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng4" value="R??actif et flexible" name="eng4" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng4">
                                    R??actif et flexible
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng5" value="?? l?????coute" name="eng5" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng5">
                                    ?? l?????coute
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng6" value="Organis?? et m??thodique" name="eng6" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng6">
                                    Organis?? et m??thodique
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng7" value="Calme et patient" name="eng7" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng7">
                                    Calme et patient
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng8" value="Interventions r??guli??res" name="eng8" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng8">
                                    Interventions r??guli??res
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng9" value="Structure et rigueur" name="eng9" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng9">
                                    Structure et rigueur
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng10" value="Progression garantie" name="eng10" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng10">
                                    Progression garantie
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>`);
            } else if (id == "Informatique") {
                $(".equip_tab").html('');
                $(".equip_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Equipement pour la comp??tence!</h2>
                <p class="f-20">Quel ??quipement avez vous?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white ">
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio"  id="equipement1" value="Aucun" name="equipement1" class="custom-control-input ">
                            <label class="custom-control-label padding-l-10" for="equipement1">
                                Aucun
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement2" value="Ordinateur" name="equipement2" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement2">
                                Ordinateur
                            </label>
                        </div>
                        <div class="custom-control custom-radio margin-b-10">
                            <input type="radio" id="equipement3" value="Set de tournevis" name="equipement3" class="custom-control-input">
                            <label class="custom-control-label padding-l-10" for="equipement3">
                                Set de tournevis
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
                $(".eng_tab").html('');
                $(".eng_tab").append(`<div class="tab">
            <div class="em_titleSign">
                <h2>Engagement pour la comp??tence!</h2>
                <p class="f-20">Quels sont vos engagements clients ?
                </p>
            </div>
            <div class="form-group allign-left">
                <div class="input_group">
                    <div class="bg-white">
                        <fieldset>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng1" value="Efficace et discret" name="eng1" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng1">
                                    Efficace et discret
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng2" value="Convivialit??" name="eng2" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng2">
                                    Convivialit??
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng3" value="Dynamique et souriant" name="eng3" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng3">
                                    Dynamique et souriant
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng4" value="R??actif et flexible" name="eng4" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng4">
                                    R??actif et flexible
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng5" value="?? l?????coute" name="eng5" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng5">
                                    ?? l?????coute
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng6" value="Organis?? et m??thodique" name="eng6" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng6">
                                    Organis?? et m??thodique
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng7" value="Calme et patient" name="eng7" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng7">
                                    Calme et patient
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng8" value="Interventions r??guli??res" name="eng8" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng8">
                                    Interventions r??guli??res
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng9" value="Structure et rigueur" name="eng9" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng9">
                                    Structure et rigueur
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="eng10" value="Progression garantie" name="eng10" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="eng10">
                                    Progression garantie
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>`);
            }
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
                document.getElementById("nextBtn").innerHTML = "Soumettre";
            } else {
                document.getElementById("nextBtn").innerHTML = "Suivante";
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
                document.getElementById("nextBtn").innerHTML = "Chargement..";
                $(".dialog-background").show();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
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
        $(document).ready(function () {
            $('.diploma_yes').click(function () {
                $(".doploma_name").html('');
                $(".doploma_name").append('<p class="f-20">Quel est le nom du dipl??me?</p><div class="input_group"><input type="text" name="diploma_name"  class="form-control" placeholder="Entrer le dipl??me" required=""></div>');
            });
            $('.diploma_no').click(function () {
                $(".doploma_name").html('');
            });
        });
    </script>


@endsection
