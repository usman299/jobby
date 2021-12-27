@extends('layouts.front')
@section('content')
    <section class="margin-b-20 emPage__CateJobs withOut_colorful padding-l-20 padding-r-20 emPage__detailsBlog">
        <h1 class="head_art">Commentaires</h1>
        @foreach($comments as $comment)
            <a href="#" class="emCategorie_itemJobs _list bg-blue">
                <img src="{{asset($comment->user->image)}}" style="height: 40px; border-radius: 50px" alt="">
                <div class="txt">
                    <h2>{{$comment->user->firstName}} {{$comment->user->lastName}}</h2>
                    <p style="margin-bottom: 10px">{{$comment->comment}}</p>
                    <h2>Créé à: {{$comment->created_at->format('d-m-y')}}</h2>
                </div>
            </a>
        @endforeach
    </section>
    <div style="bottom: 60px !important;" class="buttons__footer text-center">

            <div class="bg-white d-flex">
                <button type="button" data-toggle="modal"
                        data-target="#comment" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                    <span class="color-white">Ajouter un commentaire</span>
                </button>
            </div>

    </div>
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="comment" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Ajouter un commentaire</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('comment.submit')}}" method="POST">
                    @csrf
                    <div class="modal-body env-pb">
                        <div class="form-group input-lined">
                            <textarea class="form-control" rows="4" name="comment"></textarea>
                            <label for="address">Commentaire</label>
                        </div>
                    </div>
                    <input type="hidden" name="job_id" value="{{$id}}">
                    <div class="modal-footer">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Poster
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
