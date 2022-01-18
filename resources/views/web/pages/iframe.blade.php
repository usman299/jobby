@extends('web.layout.showcase')
@section('content')
    <style>
        .iframe{
            height: 800px;
            width: 60%;
            margin: auto;
            border: 0px
        }
        @media only screen and (max-width: 668px) {
            .iframe{
                height: 100vh;
                width: 100%;

            }
        }

    </style>

    <iframe src="{{asset($route)}}" class="iframe"  title="W3Schools Free Online Web Tutorials">
    </iframe>

@endsection
