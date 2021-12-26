@extends('layouts.front')
@section('content')
    <section class="em_swiper_products emCoureses__grid margin-b-20 margin-t-80">
        <div class="em_bodyCarousel padding-t-20">
            @if($subcategory)
            <div class="owl-carousel owl-theme owlThemeCorses">
                @foreach($subcategory as $cat)
                <div class="item">
                    <div class="em_itemCourse_grid">
                        <a href="{{route('request.subcategory', ['id' => $cat->id])}}" class="card">
                            <div class="">
                                <img src="{{ asset($cat->category->img ?? ' ')  }}" class="card-img-top" alt="img">
                            </div>
                            <div class="txt">
                                <h6 class="card-title" style="margin: 10px;">
                                    {{$cat->title}}
                                </h6>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
            @if($childsubcategory)
            <div class="owl-carousel owl-theme owlThemeCorses">
                @foreach($childsubcategory as $cat)
                <div class="item">
                    <div class="em_itemCourse_grid">
                        <a href="{{route('job.request', ['id' => $cat->id])}}" class="card">
                            <div class="">
                                <img src="{{ asset($cat->img ?? ' ')  }}" class="card-img-top" alt="img">
                            </div>
                            <div class="txt">
                                <h6 class="card-title" style="margin: 10px;">
                                    {{$cat->title}}
                                </h6>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
@endsection
