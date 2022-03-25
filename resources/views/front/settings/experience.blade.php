@extends('layouts.front')
@section('content')
    <section class="bg-white em__signTypeOne typeTwo np__account padding-t-70">
        <div class="padding-20">
            <span class="size-12 text-uppercase color-text d-block">Mes diplômes</span>
        </div>
        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                @foreach($diplomas as $diploma)
                <li>
                    <a href="#" class="item-link">
                        <div class="group">
                            <span class="path__name">{{$diploma->title}}</span>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="padding-20">
            <span class="size-12 text-uppercase color-text d-block">Mon expérience</span>
        </div>
        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <a data-toggle="modal"
                       data-target="#experience" class="item-link">
                        <div class="group">
                            <span class="path__name">{{$profile->experince  ?? ' '}}</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <div style="bottom: 80px !important;" class="buttons__footer text-center">

        <div class="bg-white d-flex">
            <button type="button" data-toggle="modal"
                    data-target="#comment" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                <span class="color-white">Ajouter un nouveau diplôme</span>
            </button>
        </div>

    </div>
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="comment" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Ajouter un nouveau diplôme</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('experience.store')}}" class="formsubmit"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body env-pb">
                        <div class="form-group input-lined">
                            <input type="text" class="form-control" name="title" required>
                            <label for="address">Titre</label>
                        </div>
                        <div class="form-group input-lined">
                            <input type="file" class="form-control" name="file" required>
                            <label for="address">PDF/Image</label>
                        </div>
                    </div>
                    <input type="hidden" name="job_id" value="">
                    <div class="modal-footer">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Sauvegarder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="experience" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Mon expérience</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('experience.update')}}" class="formsubmit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input_group padding-20">
                        @if($profile)
                        <div class="bg-white ">
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="experince1" value="Je n’en ai aucune" {{$profile->experince == "Je n’en ai aucune" ? 'checked' : ''}} name="experince" class="custom-control-input ">
                                <label class="custom-control-label padding-l-10" for="experince1">
                                    Je n’en ai aucune
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="experince2" value="J’ai moins d’un an" {{$profile->experince == "J’ai moins d’un an" ? 'checked' : ''}} name="experince" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="experince2">
                                    J’ai moins d’un an
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="experince3" value="J’ai entre 2 et 4 ans" {{$profile->experince == "J’ai entre 2 et 4 ans" ? 'checked' : ''}} name="experince" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="experince3">
                                    J’ai entre 2 et 4 ans
                                </label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" id="experince4" value="J’ai plus de 5 ans" {{$profile->experince == "J’ai plus de 5 ans" ? 'checked' : ''}} name="experince" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="experince4">
                                    J’ai plus de 5 ans
                                </label>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Sauvegarder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
