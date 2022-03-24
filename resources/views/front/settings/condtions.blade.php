@extends('layouts.front')
@section('content')

    <!-- Start emPageAbout -->
    <section class="emPageAbout padding-t-60">
        <div class="emBox___logo bg-snow">
            <div class="brand margin-b-10">
                <img style="height: 46px" src="{{asset('main/logo.jpg')}}"  loading="lazy"  alt="">

            </div>
            <p class="color-text size-12 m-0">Version 1.0.0 - Mister Jobby</p>
        </div>
        <div class="content_text bg-white emBlock__border margin-b-10">
            <p>{!! $condition->description2 !!}﻿</p>
        </div>

    </section>
    <!-- End. emPageAbout -->


@endsection
