<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderGalery;
use App\Category;
use App\SubCategory;

class FrontendController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function app(){
        $sliderGalery = SliderGalery::where('userRole','=',2)->get();
        $category = Category::take(9)->orderBy('id', 'DESC')->get();
        return view('front.index',compact('sliderGalery','category'));
    }
    public function allCategories(){
        $sliderGalery = SliderGalery::where('userRole','=',2)->get();
        $category = Category::all();
        return view('front.categories.index',compact('sliderGalery','category'));
    }
    public function allSubCategories($id){

        $subCategory = SubCategory::where('category_id','=',$id)->get();
        return view('front.subcategory.index',compact('subCategory'));
    }
    public function splash(){
        return view('front.splash');
    }
}
