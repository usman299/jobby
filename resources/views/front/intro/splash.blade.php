@extends('layouts.splash')
<!-- End. em_loading -->
@section('content')
<div class="spalsh__screen mx-auto">
    <div class="logo">
        <img src="{{asset('main/logo.jpg')}}" width="117" height="47" alt="">
    </div>

    <div class="env-pb d-flex justify-content-center">
        <p class="absolute bottom-0 mb-0 size-11 color-text padding-b-30">
            Copyright © Ikae Digital 2021
        </p>
    </div>

</div>
<script src="{{asset('assets/js/splash.js')}}"></script>
@endsection
<!-- splash -->

