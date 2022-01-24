@extends('layouts.front')
@section('content')
    <style>
        .emPage__detailsCourse .em__header .user_publish svg {
            width: 29px;
            height: 23px;
        }

         #output_image{
             border-style: ridge;
             width: 150px;
             height: 120px;
         }

    </style>
    <!-- Start emPage_SubCategories -->
    <section class="embanner_SubCategories">
        <div class="em_head">
            <div class="cover_course">
                <img src="{{ asset($services->img ?? ' ')  }}"  loading="lazy"  alt="">

            </div>
        </div>
    </section>
    <!-- End. emPage_SubCategories -->

    <!-- Start emPage__detailsCourse -->
    <section class="emPage__detailsCourse ">
        <div class="em__header">
            <div class="user_publish">
                <div class="size-22 weight-700 color-primary">
                    <span class="color-text">{{$services->price ?? ''}}€</span>
                </div>


{{--                <span>{{$services->user->firstName }} {{$services->user->lastName }}</span>--}}

            </div>
            <div class="size-18 weight-600 color-primary">
                <span class="icon">
                      <a href="{{route('services.status.update', ['id' => $services->id ])}}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zM4 18.385L5.763 17H20V5H4v13.385zM13.414 11l2.475 2.475-1.414 1.414L12 12.414 9.525 14.89l-1.414-1.414L10.586 11 8.11 8.525l1.414-1.414L12 9.586l2.475-2.475 1.414 1.414L13.414 11z"/></svg>
                        </a>
                       <a href="{{route('jobber.services.edit', ['id' => $services->id])}}" data-toggle="modal" data-target="#mdllContent-form" style="float: right" >
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-7.466 7.466.008 4.247 4.238-.007L21 7.243V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z"/></svg>
                    </a>




                    </span>

            </div>
        </div>
        <div class="em__body">
            <div class="title_course">
                <h1>{{$services->title ?? ''}}</h1>
                <p class="card-text">
                    {{$services->description ?? ''}}
                </p>
            </div>
        </div>

{{--        <div class="em__certification margin-20">--}}
{{--            <div class="box">--}}
{{--                <div class="title">--}}
{{--                    <h3>Certification</h3>--}}
{{--                    <p>After finishing this course you'll get a graduation diploma. Be sure to watch all the--}}
{{--                        chapters all the way.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
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
                                    <form method="POST" action="{{ route('jobber.services.update',['id'=>$services->id]) }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group input-lined">
                                            <select onchange="categorychange(this)" name="category_id" class="form-control" required="">
                                                <option value="">Choisir une catégorie</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{$cat->id}}" {{ $cat->id == $services->category_id ? 'selected' : '' }}>{{$cat->title}}</option>
                                                @endforeach
                                            </select>
                                            <label for="duration" class="margin-t-20" style="font-size: 15px;"> <strong>Catégorie</strong> <strong style="color: red;">*</strong> </label>
                                        </div>
                                        <div class="form-group input-lined">
                                            <select name="subcategory_id" class="form-control maincategory" >

                                            </select>
                                            <label for="duration" class="margin-t-20" style="font-size: 15px;"> <strong>Sous-catégorie</strong> <strong style="color: red;">*</strong> </label>
                                        </div>
                                        <div class="form-group input-lined">
                                            <input type="text" id="title" name="title" value="{{$services->title}}" class="form-control" placeholder=" Entrez la Titre" required="">
                                            <label for="title"  style="font-size: 15px;"><strong>Titre</strong> <strong style="color: red;">*</strong></label>
                                        </div>
                                        <div class="form-group input-lined">
                                            <input type="text" class="form-control" value="{{$services->duration}}" id="duration" name="duration" placeholder=" Entrez la Durée"
                                                   required="">
                                            <label for="duration" class="margin-t-20" style="font-size: 15px;"> <strong>Durée</strong> <strong style="color: red;">*</strong> </label>
                                        </div>
                                        <div class="form-group input-lined">
                                            <input type="text" id="price" name="price" value="{{$services->price}}" class="form-control" placeholder=" Entrez la  Prix"
                                                   required="">
                                            <label for="price" class="margin-t-20" style="font-size: 15px;"><strong>Le Prix</strong> <strong style="color: red;">*</strong> </label>
                                        </div>
                                        <div class="form-group input-lined ">
                                            <label class="form-group input-lined @error('img') is-invalid @enderror margin-t-30" >
                                                <i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre Image(850x650)</strong><input type="file" style="display: none;"name="img" value="{{ old('img') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp" onchange="preview_image(event)">
                                            </label>
                                        </div>
                                        <div class="form-group input-lined ">
                                            <img id="output_image" src="{{ asset($services->img ?? '')  }}"  loading="lazy"  />
                                        </div>

                                        {{--                                        <label for="pass" class="margin-t-20" style="font-size: 15px;"> <strong>Image</strong> <strong style="color: red;">*</strong></label>--}}


                                        <div class="form-group input-lined">
                                            <textarea class="form-control"  name="description" rows="4" id="description" placeholder="Entrez la  Description">{{$services->description ??' '}}</textarea>
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
    <!-- End. emPage__detailsCourse -->
@endsection
