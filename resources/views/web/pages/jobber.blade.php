@extends('web.layout.showcase')
@section('content')
    <style>
        .figure-responsive img {
            min-width: 103%;
        }
        .text-center {
            text-align: left !important;
        }
    </style>
    <section class="section section-md bg-default text-center">
        <div class="container">

            <div class="row ">

                <div class="col-md-6 col-lg-6">
                      <h6 style="float: left">Devenez Jobber</h6><br>
                    <h4 style="float: left">Rendez des services et <br>augmentez vos revenus</h4>
                    <form method="POST" action="{{ route('iframe') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="route" value="/front/register/1">
                    <button type="submit" class="button button-xs button-primary button-icon  " style="margin-right: 400px; width: 62%;" >S'inscrire maintenant </button><br>
                    </form>
                    <div style="margin-top: 20px;"><b style="margin-right: 249px; color: black;font-size: 18px; margin-top: 200px;">OU</b></div><br>
                    <div style="float: left; font-size: 15px; color: black"><p>Inscrivez-vous en téléchargeant l'application « Misster Jobby »</p></div>
                    <div class="group" style="float: left"><a class=" button button-warning button-fixed-size" href="#"><img src="{{asset('images/android.png')}}" alt="" width="138" height="35"/></a><a class=" button button-warning  button-fixed-size" href="#"><img src="{{asset('images/apple2.png')}}" alt="" width="138" height="35"></a></div>


                </div>
                <div class="col-md-6 col-lg-6">
                    <figure class="figure-responsive block-5"><img src="{{asset('images/devenez.png')}}" alt="" width="740" height="513"/>
                    </figure>
                </div>
            </div>

        </div>
    </section><hr>
    <section class="section section-md bg-default text-center">
        <div class="container">

            <div class="row ">
                @foreach($category as $row)
                <div class="col-md-3 col-lg-3" style="margin-top: 10px;">
                    <img src="{{asset($row->img)}}" style="border-radius: 50%; width: 50px; height: 50px;" > &nbsp  <span style="color: black; font-size: 17px; "><b>{{$row->title}}</b></span>
                </div>
                @endforeach

            </div>

        </div>
    </section><hr>

    <section class="section section-md bg-default text-center">
        <div class="container">
            <h3 style="text-align: center">C’est vous qui choisissez !</h3>
            <div class="row ">



                <div class="col-md-4 col-lg-4">
                    <div class="box-line-icon icon mercury-icon-partners"></div>
                    <span style="color: black; font-size: 18px;"><p style="">Choisissez votre emploi du temps</p></span>
                    <p style="float: left">Proposez vos services en fonction de vos disponibilités à date et heure précise. Suivez et organisez vos journées avec l’application.</p>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="box-line-icon icon mercury-icon-group"></div>
                    <span style="color: black; font-size: 18px;"><p style="">Choisissez votre rémunération</p></span>
                    <p style="float: left">Définissez votre rémunération horaire pour chaque job en fonction des besoins et de vos expériences. Suivez et touchez vos revenus quand vous voulez.</p>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="box-line-icon icon mercury-icon-target"></div>
                    <span style="color: black; font-size: 18px;"><p style="">Inscrivez-vous et commencez maintenant</p></span>
                    <p style="float: left">Complétez votre profil en quelques minutes depuis l'application et répondez aux demandes de service autour de vous.</p>


            </div>

        </div>
        </div>
    </section><hr>
    <section class="section section-md bg-default text-center">
        <div class="container">

            <div class="row ">


                <div class="col-md-6 col-lg-6">

                    <span style="color: black; float: left; font-size: 18px;"><p style=""><b>Nous sommes là pour vous aider</b></p></span>

                </div>
                <div class="col-md-6 col-lg-6">

                    <p style="float: left; font-size: 14px;">En cas de besoin, consultez notre centre d'aide ou écrivez-nous via le formulaire de contact<br> <a href="#" style="float: left">Obtenir de l'aide></a></p>    </div>


            </div>
        </div>
    </section><hr>

@endsection
