@extends('web.layout.showcase')
@section('content')
    <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">FAQ</h3>
            </div>
        </div>
        <div class="breadcrumbs-custom-aside">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('web.index')}}">Accueil</a></li>

                    <li class="active">FAQ</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Accordion-->
    <section class="section section-md">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-7">
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        @foreach($question as $key=>$row )
                            @if($key+1<2)
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-1" role="tab">
                                <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1" aria-expanded="true">{{$row->question}}
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="collapse show" id="accordion1-collapse-{{$row->id}}" role="tabpanel" aria-labelledby="accordion1-heading-{{$row->id}}" data-parent="#accordion1">
                                <div class="card-body">
                                    <p>{{$row->answer}}</p>
                                </div>
                            </div>
                        </article>
                            @else

                            <article class="card card-custom card-corporate">
                                <div class="card-header" id="accordion1-heading-4" role="tab">
                                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion1-collapse-{{$row->id}}" aria-controls="accordion1-collapse-4" aria-expanded="false">{{$row->question}}
                                            <div class="card-arrow"></div></a></div>
                                </div>
                                <div class="collapse" id="accordion1-collapse-{{$row->id}}" role="tabpanel" aria-labelledby="accordion1-heading-{{$row->id}}" data-parent="#accordion1">
                                    <div class="card-body">
                                        <p>{{$row->answer}}</p>
                                    </div>
                                </div>
                            </article>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
