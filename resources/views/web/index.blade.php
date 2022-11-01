@extends('web.layout.showcase')
@section('content')
    @php
    $jobber = \App\JobberSkills::where('jobber_id', 3)->where('main_category', 5)->first();

    @endphp
    @foreach (collect($jobber->job_type) as $abc)
        <h1>{{$abc}}</h1>
    @endforeach
    <!-- Welcome to JobsFactory-->
    <div class="jumbotron-creative-inner">
        <div class="container">
            <div class="jumbotron-creative-main">
                <h2 class="jumbotron-creative-title">Trouvez le prestataire idéal pour tous les services du
                    quotidien</h2>
                <div class="form-layout-search-outer">
                    <form action="{{route('subcategory.search' ) }}" class="form-layout-search form-lg" method="post">
                        @csrf

                        <div class="form-wrap form-wrap-icon">
                            <input class="form-input" id="form-keywords" type="text" name="keywords"
                                   data-constraints="@Required">
                            <label class="form-label" for="form-keywords">Mots clés</label><span
                                class="icon fl-bigmug-line-circular224"></span>
                        </div>

                        <div class="form-wrap form-wrap-button form-wrap-button-icon-only">
                            <button class="button button-lg button-primary button-icon-only" type="submit"
                                    aria-label="search"><span class="icon icon-4 fl-bigmug-line-search74"></span>
                            </button>
                        </div>
                    </form>
                </div>
                <p class="big text-gray-800">Nous offrons&nbsp;<a href="#">Emploi et services</a> à l'heure actuelle!
                </p>
            </div>
        </div>
        <div class="jc-decoration">
            <div class="jc-decoration-item jc-decoration-item-1">
                <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970"
                     preserveAspectRatio="none">
                    <path
                        d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
                </svg>
            </div>
            <div class="jc-decoration-item jc-decoration-item-2">
                <svg version="1.1" x="0px" y="0px" viewbox="0 0 1446 970" width="1446" height="970"
                     preserveAspectRatio="none">
                    <path
                        d="M-0.000,33.000 C-0.000,33.000 80.000,54.000 113.000,83.000 C146.000,112.000 147.000,152.000 183.000,174.000 C219.000,196.000 288.000,172.000 334.000,193.000 C380.000,214.000 379.000,282.000 427.000,317.000 C475.000,352.000 548.000,336.000 588.000,371.000 C628.000,406.000 614.000,483.000 647.000,513.000 C680.000,543.000 786.000,537.000 841.000,587.000 C896.000,637.000 885.000,739.000 932.000,776.000 C979.000,813.000 1026.000,796.000 1069.000,817.000 C1112.000,838.000 1135.000,865.000 1189.000,893.000 C1243.000,921.000 1433.000,970.000 1433.000,970.000 L1446.000,0.000 L-0.000,33.000 Z"></path>
                </svg>
            </div>
            <img class="jc-decoration-image"  loading="lazy"  src="{{asset('front/images/home-1-748x528.png')}}" alt="" width="748"
                 height="528"/>
        </div>
    </div>
    </header>
    <!-- Welcome to JobsFactory-->
    <section class="section section-md bg-default text-center">
        <div class="container">
            <h3>{{$service->title}}</h3>
{{--            <p class="text-spacing-05">Un endroit où les principaux employeurs recherchent déjà votre talent et votre--}}
{{--                expérience.</p>--}}
            <div class="row row-50 justify-content-center align-items-center text-left">
                <div class="col-md-10 col-lg-6">
                    <figure class="figure-responsive block-5"><img  loading="lazy"  loading="lazy"  loading="lazy"   src="{{asset($service->img)}}"
                                                                   alt="" width="540" height="413"/>
                    </figure>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="row row-50 row-xl-70">
                        <div class="col-sm-6">
                            <!-- Box Line-->
                            <article class="box-line box-line_sm">
                                <div class="box-line-inner">
                                    <div class="box-line-icon icon mercury-icon-group"></div>
                                    <h4 class="box-line-title">{{$service->title1}}</h4>
                                    <h6>{{$service->description1}}</h6>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6">
                            <!-- Box Line-->
                            <article class="box-line box-line_sm">
                                <div class="box-line-inner">
                                    <div class="box-line-icon icon mercury-icon-partners"></div>
                                    <h4 class="box-line-title">{{$service->title2}}</h4>
                                    <h6>{{$service->description2}}</h6>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6">
                            <!-- Box Line  -->
                            <article class="box-line box-line_sm">
                                <div class="box-line-inner">
                                    <div class="box-line-icon icon mercury-icon-chat"></div>
                                    <h4 class="box-line-title">{{$service->title3}}</h4>
                                    <h6>{{$service->description3}}</h6>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6">
                            <!-- Box Line-->
                            <article class="box-line box-line_sm">
                                <div class="box-line-inner">
                                    <div class="box-line-icon icon mercury-icon-target"></div>
                                    <h4 class="box-line-title">{{$service->title4}}</h4>
                                    <h6>{{$service->description4}}</h6>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <section class="section section-sm bg-default">
        <div class="container">
            <h4>De quel service avez-vous besoin ?</h4>
            <p>Pour chaque situation, trouvez le prestataire dont les compétences répondent<br>
                à vos attentes et à votre niveau d’exigence.<span style="float: right"> <strong
                        style="color: blue">-50%</strong> crédit d'impôt selon la catégorie</span></p>
            <div class="col-lg-12 col-xl-12" style="margin-top: 30px;">
                <div class="row">
                    @foreach($category as $row)
                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 maincatalog">
                            <!-- Profile Classic--><a  href="{{route('subcategory.view',['id'=>$row->id])}}">
                                <figure class="profile-classic-figure"><img style="border-radius: 20px;"  loading="lazy"
                                                                            class="profile-classic-image"
                                                                            src="{{asset($row->img)}}"  loading="lazy"  alt=""
                                                                            width="266"/>
                                </figure>
                                <div class="profile-classic-main">
                                    <h5 class="profile-classic-name"><b>{{$row->title}}</b></h5>

                                </div>
                            </a>
                        </div>


                    @endforeach

                </div>

            </div>
        </div>
    </section>
    <!-- Success Stories-->
    <section class="parallax-container section-md bg-primary bg-overlay-1 text-center"
             data-parallax-img="{{asset($jobFactory->image)}}">
        <div class="parallax-content">
            <div class="container">
                <h3>Réussites </h3>
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-md-items="2" data-dots="true" data-nav="false"
                     data-stage-padding="0" data-loop="false" data-margin="30" data-autoplay="true"
                     data-mouse-drag="false">
                    @foreach($testi as $row)
                    <blockquote class="quote-mary">
                        <div class="quote-mary-main">
                            <svg class="quote-mary-mark" version="1.1" x="0px" y="0px" viewbox="0 0 36 28" width="38"
                                 height="28">
                                <path
                                    d="M13,0l-2.4,13.3H15V28H0V13.1L4,0H13z M34,0l-2.4,13.3H36V28H20.9V13.1L25,0H34z"></path>
                            </svg>
                            <div class="quote-mary-text">
                                <p>{!! $row->description !!}</p>
                            </div>
                        </div>
                        <div class="quote-mary-meta"><img class="quote-mary-avatar"  loading="lazy"
                                                          src="{{asset($row->image)}}"  loading="lazy"  alt=""
                                                          width="73" height="73"/>
                            <div class="quote-mary-info">
                                <cite class="quote-mary-cite heading-5">{{$row->name}}</cite>
                                <p class="quote-mary-subtitle">{!! $row->destination !!}</p>
                            </div>
                        </div>
                    </blockquote>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <!-- Latest Posts-->
    <section class="section section-md bg-gray-100">
        <div class="container">
            <h3 class="text-center">Derniers articles</h3>
            <div class="row row-30 row-xl-70">
                @foreach($blog as $row)
                <div class="col-12 col-lg-4">
                    <!-- Post Minimal-->
                    <article class="post-minimal"><a class="post-minimal-media" href="{{route('single.blog',['id'=>$row->id])}}"><img
                                class="post-minimal-image"  loading="lazy"  src="{{asset($row->image)}}" alt=""
                                width="369" height="253"/></a>
                        <div class="post-minimal-main">
                            <h5 class="post-minimal-title"><a href="{{route('single.blog',['id'=>$row->id])}}"></a>{{$row->name}}</h5>
                            <p>{!! Str::limit($row->description, 145) !!}</p>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>

                            <time class="post-minimal-time" datetime="2019">{{$date->diffForHumans()}}</time>
                        </div>
                    </article>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- CTA-->
    <section class="section section-md bg-default text-center">
        <div class="container">
            <h3>{{$jobFactory->title}}</h3>
            <p class="offset-top-20px"><span style="max-width: 670px;">{!! $jobFactory->description !!}</span></p>
            <div class="group"><a class="button button-primary button-fixed-size" href="{{$jobFactory->url1}}"><img
                        src="{{asset('images/2560px-Google_Play_Store_badge_EN.svg.png')}}"  loading="lazy"  alt="" width="138" height="35"/></a><a
                    class="button button-primary button-fixed-size" href="{{$jobFactory->url2}}"><img
                        src="{{asset('images/App-Store-Button-transparent.png')}}"  loading="lazy"  alt=""></a></div>
        </div>
    </section>
@endsection
