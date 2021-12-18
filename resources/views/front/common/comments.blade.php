@extends('layouts.front')
@section('content')
    <section class="margin-b-20 emPage__CateJobs withOut_colorful padding-l-20 padding-r-20 emPage__detailsBlog">
        <h1 class="head_art">Commentaires</h1>
        @foreach($comments as $comment)
            <a href="#" class="emCategorie_itemJobs _list bg-blue">
                <img src="{{asset($proposal->user->image)}}" style="height: 40px; border-radius: 50px" alt="">
                <div class="txt">
                    <h2>{{$comment->user->firstName}} {{$comment->user->lastName}}</h2>
                    <p style="margin-bottom: 10px">{{$comment->comment}}</p>
                    <h2>Created: {{$comment->created_at->format('d-m-y')}}</h2>
                </div>
            </a>
        @endforeach
    </section>
@endsection
