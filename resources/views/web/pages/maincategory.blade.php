@extends('web.layout.showcase')
@section('content')
    <section class="section section-md bg-default text-center">
        <div class="container">

        </div>
    </section>
    <section class="section section-md ">
        <div class="container">
            <div class="row">
                @foreach($category as $row)
                <div class="col-6 maincatalog">
                    <div class="table-job-offers-outer">
                        <table class="table-job-offers table-responsive">
                            <tr>

                                <td class="table-job-offers-main">
                                    <!-- Company Light-->
                                    <a onclick="stopLoad({{$row->id}})"href="#">
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
                @if($row->subcategorys)
                    @foreach($row->subcategorys as $subcat)
                    <div class="col-6 subcatalog{{$row->id}}" style="display: none">
                        <div class="table-job-offers-outer">
                            <table class="table-job-offers table-responsive">
                                <tr>
                                    <td class="table-job-offers-main">
                                        <!-- Company Light-->
                                <?php $route = Crypt::encryptString('request/subcategory/'.$subcat->id);  ?>
                               @if($subcat->id==1 || $subcat->id==2 || $subcat->id==3 || $subcat->id==4)
                                <a onclick="stopLoaddd({{$subcat->id}})"  href="#">
                                @else
                                <a  onclick="stopLoaddd({{$subcat->id}})"  href="{{route('iframe.category', ['id' => $route])}}">
                                @endif
                                        <article class="company-light">
                        <figure class="company-light-figure"><img class="company-light-image" src="{{asset($subcat->img)}}" style="border-radius: 5px" alt="" width="150" height="100%"/>
                                            </figure>
                                            <div class="company-light-main">
                        <h5 class="company-light-title" >{{$subcat->title}}</h5>
                                            </div>
                                        </article>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                           <?php $childcategories = App\ChildCategory::where('subcategory_id','=',$subcat->id)->get(); ?>
                               @if($childcategories)
                                @foreach($childcategories as $childcat)
                                    <div class="col-6 childcatalog{{$subcat->id}}" style="display: none" >
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

                @endforeach



            </div>
        </div>
    </section>

@endsection
