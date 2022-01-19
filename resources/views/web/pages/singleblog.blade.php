@extends('web.layout.showcase')
@section('content')
    <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">{{$blog->name}}</h3>
            </div>
        </div>
        <div class="breadcrumbs-custom-aside">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('web.index')}}">Accueil</a></li>
                    <li class="active">{{$blog->name}}</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-md">
        <div class="container">
            <div class="blog-layout">
                <div class="blog-layout-main">
                    <article class="post-creative"><img class="post-creative-image" src="{{asset($blog->image)}}" alt="" width="768" height="475"/>
                        <div class="post-creative-meta">
                            <div class="post-creative-meta-inner">
                                <div class="post-creative-author"><img class="post-creative-author-image" src="{{asset('images/logoo.png')}}" alt="" width="36" height="36"/>
                                    <p>
                                        by&nbsp;<a href="#">Mister Jobby</a></p>
                                </div>
                                <div>
                                    <ul class="post-creative-meta-list">
                                        <li> <span class="icon mdi mdi-clock"> </span>
                                            <?php
                                            \Carbon\Carbon::setLocale('fr');
                                            $date = \Carbon\Carbon::parse($blog->created_at);
                                            ?>

                                            <time datetime="2019">{{$date->diffForHumans()}}</time>
                                        </li>
{{--                                        <li><span class="icon fl-justicons-visible6"></span><span>3678 </span></li>--}}
{{--                                        <li><span class="icon mdi mdi-message-outline"></span><span>3</span></li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h5>{{$blog->name}}</h5>
                        <p>{!! $blog->description !!}</p>

                    </article>

                </div>

            </div>
        </div>
    </section>

@endsection


