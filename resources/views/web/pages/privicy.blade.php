@extends('web.layout.showcase')
@section('content')
    <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">Politique de Confidentialité</h3>
            </div>
        </div>
        <div class="breadcrumbs-custom-aside">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('web.index')}}">Accueil</a></li>
                    <li class="active">Politique de confidentialité</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Privacy Policy-->
    <section class="section section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xl-8">
                    <!-- Terms list-->
                    <dl class="list-terms">
                        <dt class="heading-4">Politique de confidentialité</dt>
                        <dd class="heading-6">{!! $condition->description1 !!}</dd>

                    </dl>
                </div>
            </div>
        </div>
    </section>

@endsection
