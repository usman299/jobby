@extends('layouts.front')
@section('content')
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
                                        <input  id="for{{$subcategory->id}}" @if(in_array($subcategory->id, $skills)) checked @endif  value="{{$subcategory->id}}" type="checkbox" name="skills[]"><br>
                                        <label for="for{{$subcategory->id}}" >
                                            <p>{{$subcategory->title}}</p></label>
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
