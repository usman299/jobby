@extends('web.layout.showcase')
@section('content')
    <style>
        .box-line {
            text-align: left;
        }
    </style>
    <section class="section section-md bg-default text-center">
        <div class="container">
            <h3>Bienvenue chez   <span class="text-primary">Mister Jobby</span></h3>

            <div class="row row-50 justify-content-center align-items-center text-left">

                <div class="col-md-10 col-lg-10">
                    <div class="row row-50 row-xl-70">
                        <div class="col-sm-4">
                            <!-- Box Line-->

                            <article class="box-line box-line_sm">
                                <div class="box-line-inner">
                                    <div class="box-line-icon icon mercury-icon-group"></div>
                                    <h4 class="box-line-title">J'ai besoin d'un service</h4>
                                    <h6>Trouvez le prestataire idéal pour

                                        vos services du quotidien.</h6>
                                </div>
                            </article>
                            <form method="POST" action="{{ route('iframe') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="route" value="/front/register/2">

                                <button type="submit" class="button button-xs button-primary button-icon  " style="border-radius: 10px; padding: 10px 58px;" >S'inscrire maintenant </button><br>
                            </form>
                        </div>
                        <div class="col-sm-4">
                            <!-- Box Line-->

                            <article class="box-line box-line_sm">
                                <div class="box-line-inner">

                                    <h4 style="margin-top: 80px;">OU</h4>

                                </div>
                            </article>

                        </div>
                        <div class="col-sm-4">
                            <!-- Box Line-->

                            <article class="box-line box-line_sm">

                                <div class="box-line-inner">
                                    <div class="box-line-icon icon mercury-icon-partners"></div>
                                    <h4 class="box-line-title">Devenir jobber</h4>
                                    <h6>Notre service client est à votre

                                        Augmentez vos revenus en rendant service près de chez vous.</h6>
                                </div>


                            </article>
                            <div class="box-line-inner">
                            <form method="POST" action="{{ route('iframe') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="route" value="/front/register/1">

                                <button type="submit" class="button button-xs button-primary button-icon  " style="border-radius: 10px; padding: 10px 58px;" >S'inscrire maintenant </button><br>
                            </form>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="row row-50 row-xl-70">
                        <div class="col-sm-12">
                            <p style="text-align: center; font-size: 17px;">Vous avez déjà un compte ? <a href="#"> Connectez-vous</a></p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
