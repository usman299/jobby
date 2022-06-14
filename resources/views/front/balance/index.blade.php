@extends('layouts.front')
@section('content')
    <!-- Start box__dashboard -->
    <section class="box__dashboard">

            <div class="group">
            <a href="#" class="btn item_link">

                <div class="txt" style="text-align: center!important;" >
                    <span style="font-size: 90px; color: black;margin-left: 130px;" > {{Auth::user()->walet ?? '0'}}€</span>
                </div>
            </a>

        </div>



        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <a href="" data-toggle="modal" data-target="#propsal" class="item-link">
                        <div class="group">
                            <div class="icon bg-primary">
                                <svg id="Iconly_Curved_Paper_Plus" data-name="Iconly/Curved/Paper Plus"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Paper_Plus" data-name="Paper Plus" transform="translate(2.89 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M13.07,4.394,8.582.119A14.408,14.408,0,0,0,6.642,0C1.663,0,0,1.837,0,7.323s1.663,7.323,6.642,7.323,6.65-1.829,6.65-7.323A16.661,16.661,0,0,0,13.07,4.394Z"
                                              transform="translate(0)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M0,0V2.107A2.662,2.662,0,0,0,2.663,4.769H5"
                                              transform="translate(8.141 0.065)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_5" data-name="Stroke 5" d="M3.879.5H0"
                                              transform="translate(4.562 7.599)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_7" data-name="Stroke 7" d="M.5,3.879V0"
                                              transform="translate(6.002 6.16)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Ajouter une carte-cadeau</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=""  data-toggle="modal" data-target="#check" class="item-link">
                        <div class="group">
                            <div class="icon bg-turquoise">
                                <svg id="Iconly_Curved_Paper_Plus" data-name="Iconly/Curved/Paper Plus"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Paper_Plus" data-name="Paper Plus" transform="translate(2.89 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1"
                                              d="M13.07,4.394,8.582.119A14.408,14.408,0,0,0,6.642,0C1.663,0,0,1.837,0,7.323s1.663,7.323,6.642,7.323,6.65-1.829,6.65-7.323A16.661,16.661,0,0,0,13.07,4.394Z"
                                              transform="translate(0)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M0,0V2.107A2.662,2.662,0,0,0,2.663,4.769H5"
                                              transform="translate(8.141 0.065)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_5" data-name="Stroke 5" d="M3.879.5H0"
                                              transform="translate(4.562 7.599)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_7" data-name="Stroke 7" d="M.5,3.879V0"
                                              transform="translate(6.002 6.16)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Ajouter un CESU</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{route('app.balance.details')}}" class="item-link">
                        <div class="group">
                            <div class="icon bg-purple">
                                <svg id="Iconly_Curved_Paper" data-name="Iconly/Curved/Paper"
                                     xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                     viewBox="0 0 19 19">
                                    <g id="Paper" transform="translate(2.889 2.177)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M4.275.5H0"
                                              transform="translate(4.161 9.554)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_2" data-name="Stroke 2" d="M2.657.5H0"
                                              transform="translate(4.16 6.378)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_3" data-name="Stroke 3"
                                              d="M13.07,4.394,8.582.119A14.408,14.408,0,0,0,6.642,0C1.663,0,0,1.837,0,7.323s1.663,7.323,6.642,7.323,6.65-1.829,6.65-7.323A16.661,16.661,0,0,0,13.07,4.394Z"
                                              transform="translate(0)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                        <path id="Stroke_5" data-name="Stroke 5"
                                              d="M0,0V2.107A2.662,2.662,0,0,0,2.663,4.769H5"
                                              transform="translate(8.142 0.065)" fill="none" stroke="#fff"
                                              stroke-linecap="round" stroke-linejoin="round"
                                              stroke-miterlimit="10" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Historique des transactions/span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>



    </section>
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="propsal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Ajouter une carte-cadeau</h1>
                    </div><br>

                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('app.add.balance')}}" class="formsubmit" method="POST">
                    @csrf
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <div class="itemCountr_manual1 horizontal itemButtons -lg border-0 min-w-145">
                            <a href="#" data-dir="down" class="btn btn_counter1 rounded-circle co_down border">
                                <i class="tio-remove"></i>
                            </a>
                            <input type="number" name="balance"  class="form-control input_no color-secondary durationplus" value="0">
                            <a href="#" data-dir="up" class="btn btn_counter1 rounded-circle co_up bg-secondary">
                                <i class="tio-add color-white"></i>
                            </a>
                        </div>
                    </div>
                </div>



                    <div class="modal-footer">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Prochaine
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="check" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Ajouter un CESU</h1>
                    </div><br>

                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('app.add.check')}}" class="formsubmit" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                        <div class="itemProduct_sm">
                            <div class="itemCountr_manual1 horizontal itemButtons -lg border-0 min-w-145">
                                <input type="file" name="img" value="">
                            </div>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Submit
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
