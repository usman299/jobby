@extends('layouts.front')
@section('content')

    <!-- Start emPageAbout -->
    <section class="emPageAbout padding-t-80">
        <div class="em__pkLink bg-white border-t-0">
            <ul class="nav__list mb-0">
                @foreach($childcatgories as $cat)
                    <li>
                        <a href="{{route('job.request', ['id' => $cat->id])}}" class="item-link">
                            <div class="group">
                                <span class="path__name">{{$cat->title}}</span>
                            </div>
                            <div class="group">
                                <span class="short__name"></span>
                                <i class="tio-chevron_right -arrwo"></i>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </section>
    <!-- End. emPageAbout -->

@endsection
