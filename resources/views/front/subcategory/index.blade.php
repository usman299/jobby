@extends('layouts.front')
@section('content')
    <main class="emPage__public">

    <!-- Start input_SaerchDefault -->
            <section class="margin-t-10 padding-t-50 padding-l-20 padding-r-20" id="searchDefault">
                <div class="input_SaerchDefault">
                    <div class="form-group with_icon mb-0">
                        <div class="input_group">
                            <input type="search" class="form-control h-48" {{--Find your favorite product--}} placeholder="Trouvez votre produit préféré">
                            <div class="icon">
                                <svg id="Iconly_Two-tone_Search" data-name="Iconly/Two-tone/Search"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="Search" transform="translate(2 2)">
                                        <circle id="Ellipse_739" cx="8.989" cy="8.989" r="8.989"
                                                transform="translate(0.778 0.778)" fill="none" stroke="#200e32"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="1.5" />
                                        <path id="Line_181" d="M0,0,3.524,3.515" transform="translate(16.018 16.485)"
                                              fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                                    </g>
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End. input_SaerchDefault -->

            <!-- Start em_swiper_products -->
            <section class="margin-b-20">
                <div class="padding-20 pb-0">
                    <p class="size-13 color-text m-0">
                        {{$subCategory->count()}} Sous-catégorie disponible
                    </p>
                </div>
                <div class="emContent_listJobs padding-20">
               @if(!$subCategory->isEmpty())
                    @foreach($subCategory as $row)
                    <a href="{{route('applicant.services')}}" class="em__itemList_jobs">
                        <div class="media align-items-center">
                            <div class="img_logo">
                                <img src="{{ asset($row->img ?? ' ')  }}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="txt ">
                                    <h3 class="margin-t-20 ">{{$row->title}}</h3>

                                </div>
                            </div>
                        </div>

                    </a>
                    @endforeach
                    @else
                        <p style="text-align: center;" class="margin-t-40; " ><strong>Pas de sous-catégorie disponible</strong></p>
                   @endif
                </div>



            </section>
            <!-- End. em_swiper_products -->
    </main>
@endsection
