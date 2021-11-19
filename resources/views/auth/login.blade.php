<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Mister jobby</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/jobby-logo.jpg')}}">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="#"><img style="width: 80px;" src="{{asset('admin/images/jobby-logo.jpg')}}" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Connectez-vous à votre compte</h4>
                                   <form method="POST" action="{{ route('login') }}" >
                                        @csrf

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>E-mail</strong></label>
                                            <input type="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required autocomplete="email"  autofocus>
                                        </div>

                                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                         @enderror 
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong><!-- password -->Mot de passe</strong></label>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="" required autocomplete="current-password">
                                        </div>
                                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                         @enderror
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1 text-white">
                                                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                   <!--  Remember my preference -->
                                                    <label class="custom-control-label" for="basic_checkbox_1">Rappelez-vous ma préférence</label>
                                                </div>
                                            </div>
                                           <!--  <div class="form-group">
                                                <a class="text-white" href="">Forgot Password?</a>
                                            </div> -->
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block"><!-- Sign Me In -->Inscrivez-moi</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="./page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/js/deznav-init.js')}}"></script>

</body>

</html>


