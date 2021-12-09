@extends('layouts.front')
@section('content')
    <style>
        #output_image{
            border-style: ridge;
            width: 150px;
            height: 120px;
        }
    </style>
    <!-- Start input_SaerchDefault -->
    <section class="padding-t-70 change_colorSearch">
        <div class="input_SaerchDefault">
            <div class="form-group with_icon mb-0">
                <div class="input_group">
                    <input type="search" class="form-control border-0" placeholder="Tapez votre mot de recherche...">
                    <div class="icon">
                        <svg id="Iconly_Two-tone_Search" data-name="Iconly/Two-tone/Search"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Search" transform="translate(2 2)">
                                <circle id="Ellipse_739" cx="8.989" cy="8.989" r="8.989"
                                        transform="translate(0.778 0.778)" fill="none" stroke="#200e32"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                        stroke-width="1.5"></circle>
                                <path id="Line_181" d="M0,0,3.524,3.515" transform="translate(16.018 16.485)"
                                      fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-miterlimit="10" stroke-width="1.5" opacity="0.4"></path>
                            </g>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End. input_SaerchDefault -->

    <!-- Start em_swiper_products -->
    <section class="emCoureses__grid course__list">
        <div class="em_bodyCarousel padding-t-10">
            <div class="item-link hoverNone">

                <div class="group">

                    <button type="button" class="btn bg-primary m-0 color-white  d-flex align-items-center rounded-10  justify-content-center" data-toggle="modal" data-target="#mdllContent-form" style="float: right">
                        Ajouter
                    </button>

                </div>
            </div>
        </div>
        <div class="em_bodyCarousel padding-t-20">
        @if (Session::has('message'))
            <div class="alert alert-success solid alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                <strong>Success!</strong> {{ Session::get('message') }}.
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                <strong>Error!</strong> {{ Session::get('error') }}.
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>
        @endif
        </div>
        <div class="em_bodyCarousel ">
            <!-- em_itemCourse_grid -->
            @foreach($services as $row)
            <div class="em_itemCourse_grid list padding-t-10">
                <a href="{{route('jobber.single.services',['id'=>$row->id])}}" class="card">

                    <div class="row no-gutters">

                        <div class="col-4">
                            <div class="cover_card">
                                <img src="{{asset($row->img)}}" class="card-img-top" alt="img">
                            </div>
                        </div>
                        <div class="col-8 my-auto">
                            <div class="card-body">
                                <div class="head_card">
                                    <span > {{$row->duration}}</span>


                                </div>


                                <h5 class="card-title">
                                    {{$row->title}}
                                </h5>
                                <p class="card-text">
                                    {{$row->description}}
                                </p>
                                <div class="card_footer">
                                    <div class="card_user">

                                        <span class="color-text"><strong>{{$row->price}}€</strong></span>
                                    </div>

                                    <div class="amount_co size-14 weight-600 color-secondary">
                                        <span class="label_default margin-t-10 margin-r-10">Active</span>

                                        <span class="icon">



                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </a>
                @endforeach
            </div>
            <!-- em_itemCourse_grid -->
        </div>
    </section>
    <!-- Form Modal -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllContent-form"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable height-full">
            <div class="modal-content rounded-0">
                <div class="modal-header padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Ajouter un Service</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="padding-t-60">
                        <div class="em__signTypeOne">

                            <div class="em__body px-0">
                                <form method="POST" action="{{ route('jobber.services.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group input-lined">
                                        <input type="text" id="title" name="title" class="form-control" placeholder=" Entrez la Titre" required="">
                                        <label for="title"  style="font-size: 15px;"><strong>Titre</strong> <strong style="color: red;">*</strong></label>
                                    </div>
                                    <div class="form-group input-lined">
                                        <input type="text" class="form-control" id="duration" name="duration" placeholder=" Entrez la Durée"
                                               required="">
                                        <label for="duration" class="margin-t-20" style="font-size: 15px;"> <strong>Durée</strong> <strong style="color: red;">*</strong> </label>
                                    </div>
                                    <div class="form-group input-lined">
                                        <input type="text" id="price" name="price" class="form-control" placeholder=" Entrez la  Prix"
                                               required="">
                                        <label for="price" class="margin-t-20" style="font-size: 15px;"><strong>Le Prix</strong> <strong style="color: red;">*</strong> </label>
                                    </div>
                                    <div class="form-group input-lined ">
                                        <label class="form-group input-lined @error('img') is-invalid @enderror margin-t-30" >
                                            <i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre Image(850x650)</strong><input type="file" style="display: none;"name="img" value="{{ old('img') }}" required autocomplete="img" accept="image/png, image/gif, image/jpeg" id="imgInp" onchange="preview_image(event)">
                                        </label>
                                    </div>
                                    <div class="form-group input-lined ">
                                        <img id="output_image" src="{{ asset('assets/img/0ffd6s54.jpg')  }}" />
                                    </div>

{{--                                        <label for="pass" class="margin-t-20" style="font-size: 15px;"> <strong>Image</strong> <strong style="color: red;">*</strong></label>--}}


                                    <div class="form-group input-lined">
                                        <textarea class="form-control" name="description" rows="4" id="description" placeholder="Entrez la  Description"></textarea>
                                        <label for="description" class="margin-t-20" style="font-size: 15px;"> <strong>La Description</strong> <strong style="color: red;">*</strong></label>
                                    </div>

                                    <div class="form-group input-lined margin-t-20">
                                    <button type="submit" class="btn w-100 bg-primary  m-0 color-white h-55 d-flex align-items-center rounded-10 justify-content-center ">
                                        Soumettre
                                    </button>
                                    </div>


                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    <!-- End. em_swiper_products1 -->
    <!-- Form Modal -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="modelcontent-form"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable height-full">
            <div class="modal-content rounded-0">
                <div class="modal-header padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Ajouter un Service</h1>
                    </div>
                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="padding-t-60">
                        <div class="em__signTypeOne">

                            <div class="em__body px-0">
                                <form method="POST" action="{{ route('jobber.services.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group input-lined">
                                        <input type="text" id="title" name="title" class="form-control" placeholder=" Entrez la Titre" required="">
                                        <label for="title"  style="font-size: 15px;"><strong>Titre</strong> <strong style="color: red;">*</strong></label>
                                    </div>
                                    <div class="form-group input-lined">
                                        <input type="text" class="form-control" id="duration" name="duration" placeholder=" Entrez la Durée"
                                               required="">
                                        <label for="duration" class="margin-t-20" style="font-size: 15px;"> <strong>Durée</strong> <strong style="color: red;">*</strong> </label>
                                    </div>
                                    <div class="form-group input-lined">
                                        <input type="text" id="price" name="price" class="form-control" placeholder=" Entrez la  Prix"
                                               required="">
                                        <label for="price" class="margin-t-20" style="font-size: 15px;"><strong>Le Prix</strong> <strong style="color: red;">*</strong> </label>
                                    </div>
                                    <div class="form-group input-lined">
                                        <input type="file" id="img" class="form-control" name="img" required="">
                                        <label for="pass" class="margin-t-20" style="font-size: 15px;"> <strong>Image</strong> <strong style="color: red;">*</strong></label>
                                    </div>
                                    <div class="form-group input-lined">
                                        <textarea class="form-control" name="description" rows="4" id="description" placeholder="Entrez la  Description"></textarea>
                                        <label for="description" class="margin-t-20" style="font-size: 15px;"> <strong>La Description</strong> <strong style="color: red;">*</strong></label>
                                    </div>

                                    <div class="form-group input-lined margin-t-20">
                                        <button type="submit" class="btn w-100 bg-primary  m-0 color-white h-55 d-flex align-items-center rounded-10 justify-content-center ">
                                            Soumettre
                                        </button>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- End. em_swiper_products 2-->


    <!-- Start spinner_loading -->
    <div class="margin-b-10 env-pb">
        <div class="spinner_loading">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <script>
        function preview_image(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

    </script>
    <!-- End. spinner_loading -->
@endsection
