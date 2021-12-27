@extends('layouts.front')
@section('content')
    <section class="bg-white em__signTypeOne typeTwo np__account padding-t-70">
        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                @if($portfolio->count())
                @foreach($portfolio as $row)
                    <li>
                        <div href="#" class="item-link">
                            <div class="group">
                                <span class="path__name">{{$row->title}}</span>
                            </div>
                            <a href="#">
                                <div class="group">
                                    <span class="short__name"></span>
                                    <i class="ri-folder-5-line"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                @endforeach
                @else
                    <li>
                        <a href="#" class="item-link">
                        <div class="group">
                            <span class="path__name">Aucune réussite trouvée</span>
                        </div>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </section>
    <div style="bottom: 60px !important;" class="buttons__footer text-center">

        <div class="bg-white d-flex">
            <button type="button" data-toggle="modal"
                    data-target="#comment" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                <span class="color-white">Ajouter une nouvelle réussite</span>
            </button>
        </div>

    </div>
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="comment" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Ajouter une nouvelle réussite</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('portfolio.store')}}" class="formsubmit"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body env-pb">
                        <div class="form-group input-lined">
                            <input type="text" class="form-control" name="title" required>
                            <label for="address">Réalisation Titre</label>
                        </div>
                        <div class="form-group input-lined">
                            <input type="file" class="form-control" accept="image/*" name="file" required>
                            <label for="address">Image</label>
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

@endsection
