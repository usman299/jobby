<?php

namespace App\Http\Controllers;

use App\AppSetting;
use Illuminate\Http\Request;
use App\SliderGalery;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function app(){
        $title = 'Accueil';
        $user = Auth::user();
        $sliderGalery = SliderGalery::where('userRole','=',$user->role)->get();
        $category = Category::take(9)->orderBy('id', 'DESC')->get();
        return view('front.index',compact('sliderGalery','category', 'title'));
    }
    public function allCategories(){
        $title = 'Catégories';
        $sliderGalery = SliderGalery::where('userRole','=',2)->get();
        $category = Category::all();
        return view('front.categories.index',compact('sliderGalery','category', 'title'));
    }
    public function allSubCategories($id){
        $title = 'Sous catégories';
        $subCategory = SubCategory::where('category_id','=',$id)->get();
        return view('front.subcategory.index',compact('subCategory', 'title'));
    }
    public function splash(){
        return view('front.intro.splash');
    }
    public function intro(){
        $content = AppSetting::find(1);
        return view('front.intro.intro', compact('content'));
    }
    public function introjobber(){
        $content = AppSetting::find(1);
        return view('front..intro.introjobber', compact('content'));
    }
    public function introapplicant(){
        $content = AppSetting::find(1);
        return view('front.intro.introapplicant', compact('content'));
    }
    public function login($id){
        return view('front.auth.login', compact('id'));
    }
    public function register($id){
        return view('front.auth.register', compact('id'));
    }
}
