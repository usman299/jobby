@extends('layouts.front')
@section('content')
    <style>
        .div-inline-list{
            text-align: center;
        }
        .div-inline-list > .product-container{
            display: inline-block;
        }
        .product-container{
            position: relative;
            width: 100px;
            height: 86px;
            padding: 10px;
        }

        .product{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        .clickable{
            position: absolute;
            width: 100%;
            height: 70%;
            top: 0px;
            left: 0px;
            border: 1px solid #0076ff;
            border-radius: 4px;
            transition: all ease .5s;
            z-index: 10;
        }
        .checked-box{
            position: absolute;
            top: 0px;
            right: 0px;
            width: 22px;
            height: 22px;
            background-color: #0055ff;
            color: #fff;
            text-align: center;
            border-top-right-radius: 4px;
            display: none;
        }

        input[name="myradio"]:checked + .clickable{
            border-color: #0055ff;
            box-shadow: 0px 0px 6px 2px #0055ff;
        }

        input[name="myradio"]:checked + .clickable .checked-box{
            display: block;
        }
    </style>
        <section class="bg-white em__signTypeOne typeTwo np__account padding-t-70">
            <form action="{{route('skills.submit')}}" method="POST">
                @csrf
                <?php
                $skills = json_decode($user->skills);
                ?>
                @foreach($categories as $category)
                    <div class="padding-10">
                        <hr>
                        <p>{{$category->title}}</p>
                        <div class="row">
                            @foreach($category->subcategorys as $key => $subcategory)

                                <div class="col-4">
                                    @if($subcategory->id = $skills[$key])
                                    <input  id="for{{$subcategory->id}}" checked value="{{$subcategory->id}}" type="checkbox" name="skills[]">
                                        <br>
                                    <label for="for{{$subcategory->id}}">
                                        <p>{{$subcategory->title}}</p></label>
                                    @else
                                        <input  id="for{{$subcategory->id}}" value="{{$subcategory->id}}" type="checkbox" name="skills[]"><br>
                                        <label for="for{{$subcategory->id}}" >
                                            <p>{{$subcategory->title}}</p></label>
                                    @endif

                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <div class="padding-10">
                <button type="submit" class="btn btn-primary">Soumettre</button>
                </div>
            </form>
        </section>

@endsection
@section('script')
    <script>
        function start(element) {
            var backgroundColor = element.style.backgroundColor;
            if (backgroundColor === "white") {
                element.style.backgroundColor = "#007bff";
            } else {
                element.style.backgroundColor = "white";
            }
        }

    </script>
@endsection
