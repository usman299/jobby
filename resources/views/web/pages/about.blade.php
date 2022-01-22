@extends('web.layout.showcase')
@section('content')
    <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">À propos de nous</h3>
            </div>
        </div>
        <div class="breadcrumbs-custom-aside">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('web.index')}}">Accueil</a></li>
                    <li class="active">À propos de nous</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Welcome to JobsFactory-->
    <section class="section section-md">
        <div class="container">
            <div class="row row-30 align-items-center">
                <div class="col-lg-6 height-fill">
                    <figure class="figure-responsive"><img src="{{asset($service->img)}}" alt="" width="573" height="368"/>
                    </figure>
                </div>
                <div class="col-lg-6">
                    <article class="box-info">
                        <h3>À propos de nous</h3>
                        <p>{{$about->description}}</p>
                    </article>
                </div>
            </div>
        </div>

    </section>
    <!-- Counters-->



    <!-- CTA-->
    <section class="section section-md bg-gray-100 text-center">
        <div class="container">
            <h3>{{$jobfactory->name}}</h3>
            <p class="offset-top-20px"><span style="max-width: 670px;"> {{$jobfactory->description}}</span></p>
            <div class="group"><a class="button button-primary button-fixed-size" href="{{$jobfactory->url1}}"><img src="{{asset('front/images/google-play-download-138x35.png')}}" alt="" width="138" height="35"/></a><a class="button button-primary button-fixed-size" href="{{$jobfactory->url2}}"><img src="{{asset('front/images/appstore.svg')}}" alt=""></a></div>
        </div>
    </section>

@endsection
