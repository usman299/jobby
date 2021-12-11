@extends('layouts.front')
@section('content')
    <section class="padding-t-70 components_page padding-b-30">


        <div class="bg-white padding-20">
            <form action="{{route('password.update')}}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="form-group">
                        <label>Ancien mot de passe</label>
                        <div class="input_group">
                            <input type="password" class="form-control {{ $errors->has('oldpass') ? ' is-invalid' : '' }}" required name="oldpass">
                        </div>
                        @if ($errors->has('oldpass'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('oldpass') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nouveau mot de passe</label>
                        <div class="input_group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" required name="password">
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nouveau mot de passe</label>
                        <div class="input_group">
                            <input type="password" class="form-control" required name="password_confirmation">
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


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
