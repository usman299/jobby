@extends('layouts.splash')
<!-- End. em_loading -->
@section('content')

    <div id="wrapper">
        <div id="content" style="background-image:url('{{asset($content->mainScreen)}}'); background-repeat: no-repeat; background-size: cover; position: relative;  height: 100vh; text-align: center; " >


            <!-- Start npPage_introDefault -->
            <section class="npPage_introDefault hero-text">

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
