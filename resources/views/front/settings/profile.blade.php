@extends('layouts.front')
@section('content')
    <section class="padding-t-70 components_page padding-b-30">


        <div class="bg-white padding-20">
            <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="embox__avatar">
                        <div class="emitem_avt">
                            <img class="img__avatar" src="{{asset($user->image)}}" alt="">
                        </div>
                        <div class="txt__upload">
                            <div class="btnUpload__item">
                                <input type="file" id="file" name="image" accept="image/*">
                                <button type="button" class="btn btn_uploadImage">Charger une photo</button>
                            </div>
                            <p>Taille recommandée: 150 X 150 Px</p>
                        </div>
                    </div>
                </div>
                <div class="form-group with_icon">
                    <label>Nom complet</label>
                    <div class="input_group">
                        <input type="text" class="form-control" name="firstName" value="{{$user->firstName}}" required="">
                        <input type="text" class="form-control" name="lastName" value="{{$user->lastName}}" required="">
                        <div class="icon">
                            <svg id="Iconly_Two-tone_Profile" data-name="Iconly/Two-tone/Profile"
                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Profile" transform="translate(4 2)">
                                    <circle id="Ellipse_736" cx="4.778" cy="4.778" r="4.778"
                                            transform="translate(2.801 0)" fill="none" stroke="#200e32"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.5" opacity="0.4"></circle>
                                    <path id="Path_33945"
                                          d="M0,3.016a2.215,2.215,0,0,1,.22-.97A4.042,4.042,0,0,1,3.039.426,16.787,16.787,0,0,1,5.382.1,25.053,25.053,0,0,1,9.767.1a16.979,16.979,0,0,1,2.343.33c1.071.22,2.362.659,2.819,1.62a2.27,2.27,0,0,1,0,1.95c-.458.961-1.748,1.4-2.819,1.611a15.716,15.716,0,0,1-2.343.339A25.822,25.822,0,0,1,6.2,6a4.066,4.066,0,0,1-.815-.055,15.423,15.423,0,0,1-2.334-.339C1.968,5.4.687,4.957.22,4A2.279,2.279,0,0,1,0,3.016Z"
                                          transform="translate(0 13.185)" fill="none" stroke="#200e32"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="form-group with_icon">
                    <label>Adresse e-mail</label>
                    <div class="input_group">
                        <input type="email" name="email" class="form-control" readonly value="{{$user->email}}">
                        <div class="icon">
                            <svg id="Iconly_Two-tone_Message" data-name="Iconly/Two-tone/Message"
                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Message" transform="translate(2 3)">
                                    <path id="Path_445" d="M11.314,0,7.048,3.434a2.223,2.223,0,0,1-2.746,0L0,0"
                                          transform="translate(3.954 5.561)" fill="none" stroke="#200e32"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5" opacity="0.4"></path>
                                    <path id="Rectangle_511"
                                          d="M4.888,0h9.428A4.957,4.957,0,0,1,17.9,1.59a5.017,5.017,0,0,1,1.326,3.7v6.528a5.017,5.017,0,0,1-1.326,3.7,4.957,4.957,0,0,1-3.58,1.59H4.888C1.968,17.116,0,14.741,0,11.822V5.294C0,2.375,1.968,0,4.888,0Z"
                                          transform="translate(0 0)" fill="none" stroke="#200e32"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5"></path>
                                </g>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="form-group with_icon">
                    <label>Numéro de téléphone</label>
                    <div class="input_group">
                        <input type="tel" class="form-control" name="phone" value="{{$user->phone}}" required="">
                        <div class="icon">
                            <svg id="Iconly_Two-tone_Call" data-name="Iconly/Two-tone/Call"
                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Call" transform="translate(2.5 2.5)">
                                    <path id="Call-2" data-name="Call"
                                          d="M.49,2.373C.807,1.849,2.549-.056,3.793,0a1.636,1.636,0,0,1,.967.517,16.863,16.863,0,0,1,2.468,3.34C7.471,5.026,6.078,5.7,6.5,6.878a9.873,9.873,0,0,0,5.619,5.616c1.177.426,1.851-.966,3.019-.723a16.894,16.894,0,0,1,3.34,2.468,1.639,1.639,0,0,1,.517.967c.046,1.309-1.977,3.077-2.371,3.3-.93.665-2.144.654-3.624-.034C8.874,16.757,2.274,10.282.524,6-.145,4.525-.192,3.3.49,2.373Z"
                                          fill="none" stroke="#200e32" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5">
                                    </path>
                                    <path id="Stroke_1" data-name="Stroke 1" d="M0,0,1.469,2.179"
                                          transform="translate(1.883 1.294)" fill="none" stroke="#200e32"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5" opacity="0.4"></path>
                                    <path id="Stroke_3" data-name="Stroke 3" d="M0,0,2.188,1.71"
                                          transform="translate(15.364 15.567)" fill="none" stroke="#200e32"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                          stroke-width="1.5" opacity="0.4"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="form-group with_icon">
                    <label>Adresse</label>
                    <div class="input_group">
                        <input type="text" class="form-control" name="address" value="{{$user->address}}"
                               required="">
                        <div class="icon">
                            <svg id="Iconly_Two-tone_Home" data-name="Iconly/Two-tone/Home"
                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Home" transform="translate(2.5 2)">
                                    <path id="Home-2" data-name="Home"
                                          d="M6.657,18.771V15.7a1.426,1.426,0,0,1,1.424-1.419h2.886A1.426,1.426,0,0,1,12.4,15.7h0v3.076A1.225,1.225,0,0,0,13.6,20h1.924A3.456,3.456,0,0,0,19,16.562h0V7.838a2.439,2.439,0,0,0-.962-1.9L11.458.685a3.18,3.18,0,0,0-3.944,0L.962,5.943A2.42,2.42,0,0,0,0,7.847v8.714A3.456,3.456,0,0,0,3.473,20H5.4a1.235,1.235,0,0,0,1.241-1.229h0"
                                          fill="none" stroke="#200e32" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5">
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Région</label>
                    <select class="form-control custom-select" name="country">
                        @foreach($countries as $loc)
                        <option value="{{$loc->id}}" {{$user->address == $loc->id ? 'selected' : ''}}>{{$loc->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Sexe</label>
                    <select class="form-control custom-select" name="gender">
                        @if($user->gender == "Homme")
                            <option value="Homme">Homme</option>
                             <option value="Femme">Femme</option>
                        @else
                            <option value="Femme">Femme</option>
                            <option value="Homme">Homme</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Code postal</label>
                    <div class="input_group">
                        <input type="text" class="form-control" name="postalCode" value="{{$user->postalCode}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Date de naissance</label>
                    <div class="input_group">
                        <input type="date" class="form-control" name="dob" value="{{$user->dob}}">
                    </div>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <div class="input_group">
                        <textarea name="description" placeholder="Écris quelque chose à propos de toi" class="form-control" id="" cols="30" rows="5">{{$user->description}}</textarea>
                    </div>
                </div>
                <hr>
<!--                @if($user->role == 1)
                    <div class="form-group">
                        <label>Catégorie spécialisée</label>
                        <select  onchange="categorychange(this)" class="form-control custom-select" name="category_id">
                            <option value="">Catégorie Spécialisée Selectc</option>
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}" {{$user->category_id == $cat->id ? 'selected' : ''}}>{{$cat->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sous-catégorie spécialisée</label>
                        <select name="subcategory_id" class="form-control custom-select maincategory">
                            <option value="{{$user->subcategory->id??''}}">{{$user->subcategory->title??''}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tarif à l'heure</label>
                        <div class="input_group">
                            <input type="text" class="form-control" name="rate_per_hour" value="{{$user->rate_per_hour}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Statut professionnel</label>
                        <select class="form-control custom-select workstatus" name="is_company">
                            @if($user->is_company == 1)
                                <option value="1">Société</option>
                             <option value="0">Individuelle</option>
                            @else
                           <option value="0">Individuelle</option>
                                <option value="1">Société</option>
                            @endif
                        </select>
                    </div>

                    <div class="form-group company" style="display: {{$user->is_company == 1 ? 'block' : 'none'}}">
                        <label>Nom de la Société</label>
                        <div class="input_group">
                            <input type="text" class="form-control" name="company_name" value="{{$user->company_name}}">
                        </div>
                    </div>
                    <div class="form-group company" style="display: {{$user->is_company == 1 ? 'block' : 'none'}}">
                        <label>Société Siret</label>
                        <div class="input_group">
                            <input type="text" class="form-control" name="siret" value="{{$user->siret}}">
                        </div>
                    </div>
                @endif-->
                <div class="form-group">
                    <button type="submit" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                        <span class="color-white">Sauvegarder</span>
                    </button>
                </div>


            </form>
        </div>

        <br>
        <br>
    </section>
@endsection
@section('script')
    <script>
        $('.workstatus').change(function(){
            var value = $(this).val();
            if (value == 1){
                $(".company").show();
            }else {
                $(".company").hide();
            }
        });
    </script>
@endsection
