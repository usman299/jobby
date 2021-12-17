@extends('layouts.splash')
<!-- End. em_loading -->
@section('style')
    <style>

        /* Mark input boxes that gets an error on validation: */
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
                <div class="em_titleSign">
                    <div class="brand">
                        <h1>Créer un compte</h1>
                    </div>
                </div>
                <form id="regForm" class="loginformsubmit" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="em__body question_tabs">
                        <div class="tab">
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
                        <div class="tab">
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
                        </div>
                        <div class="tab">
                            <div class="form-group" style="text-align: left!important;">
                                <h1>Select Specialized Profile</h1>
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
                                        <select onchange="subcategorychange(this)" name="subcategory_id" class="form-control custom-select maincategory">
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
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

@endsection
