@extends('web.layout.showcase')
@section('content')
    <section class="section section-md bg-default text-center">
        <div class="" style=" margin-right: 954px;font-size: 20px; color: black">
           <a href="{{route('web.index')}}"><b>Accueil</b></a> > <a href="#"><b>{{$category->title}}</b></a>
        </div>
    </section>
    <section class="section section-md ">
        <div class="container">
            <div class="row">
                @if($subcategory)
                    @foreach($subcategory as $row)
                        <div class="col-6 maincatalog">
                            <div class="table-job-offers-outer">
                                <table class="table-job-offers table-responsive">
                                    <tr>

                                        <td class="table-job-offers-main">
                                            <!-- Company Light-->
                                            <?php $route = Crypt::encryptString('request/subcategory/'.$row->id);  ?>
                                            @if($row->id==1 || $row->id==2 || $row->id==3 || $row->id==4)
                                                <a onclick="stopLoad({{$row->id}})"  href="#">
                                                    @else
                                                        <a  href="{{route('iframe.category', ['id' => $route])}}">
                                                            @endif
                                                            <article class="company-light">
                                                                <figure class="company-light-figure"><img class="company-light-image" src="{{asset($row->img)}}" style="border-radius: 5px" alt="" width="150" height="100%"/>
                                                                </figure>
                                                                <div class="company-light-main">
                                                                    <h5 class="company-light-title">{{$row->title}}</h5>
                                                                </div>
                                                            </article>
                                                        </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php $childcategories = App\ChildCategory::where('subcategory_id','=',$row->id)->get(); ?>
                        @if($childcategories)
                            @foreach($childcategories as $childcat)
                                <div class="col-6 subcatalog{{$row->id}}" style="display: none" >
                                    <div class="table-job-offers-outer">
                                        <table class="table-job-offers table-responsive">
                                            <tr>
                                                <td class="table-job-offers-main">
                                                    <!-- Company Light-->
                                                    <?php $route = Crypt::encryptString('job/request/'.$childcat->id);  ?>
                                                    <a href="{{route('iframe.category', ['id' => $route])}}">
                                                        <article class="company-light">
                                                            <figure class="company-light-figure"><img class="company-light-image" src="{{asset($childcat->img)}}" style="border-radius: 5px" alt="" width="150" height="100%"/>
                                                            </figure>
                                                            <div class="company-light-main">
                                                                <h5 class="company-light-title">{{$childcat->title}}</h5>
                                                            </div>
                                                        </article>
                                                    </a>

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    @endforeach
                @endif




            </div>
        </div>
    </section>

@endsection
