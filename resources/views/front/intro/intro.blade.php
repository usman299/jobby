@extends('layouts.splash')
<!-- End. em_loading -->
@section('content')

    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->

            <!-- End.main_haeder -->

            <!-- Start npPage_introDefault -->
            <section class="npPage_introDefault">


                <img src="{{$content->mainScreen}}" style="width: 100%" alt="">
                <br>
                <br>
                <div class="content_text">
                    <h2 class="txt_gradient">Faites un Misterjobby</h2>
                    <p style="padding: 20px">
                       Les meilleurs Stooters pour vos travaux et services de quotidien, en moins dune heure
                    </p>
                </div>
                <div class="npButtons_networks env-pb margin-b-20">
                    <a href="{{route('intro.jobber')}}" class="btn rounded-pill border-snow" style="background: linear-gradient(to right, #febc31, #fe4d86);">
                        <span style="color: white" class="color-secondary">Publier une demander</span>
                    </a>
                    <a href="{{route('intro.applicant')}}" class="btn rounded-pill border-snow"  style="background: linear-gradient(to right, #4ce9fe, #378afe);">
                        <span style="color: white"  class="color-secondary">Postuler aux missions</span>
                    </a>
                </div>

            </section>
            <!-- End. npPage_introDefault -->


        </div>
    </div>

@endsection
