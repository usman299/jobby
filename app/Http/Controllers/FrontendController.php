<?php

namespace App\Http\Controllers;

use App\AppSetting;
use App\ChildCategory;
use App\Countory;
use App\JobRequest;
use App\Notfication;
use App\Questions;
use App\User;
use Illuminate\Http\Request;
use App\SliderGalery;
use App\Category;
use App\JobberServicesOffers;
use App\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class FrontendController extends Controller
{
    public function index(Request $request){
        $check =  preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        if($check){
           /* Cookie::queue('name', "bilawal", 35791394);
            $value = $request->cookie('name');*/
                return redirect()->route('front.intro');
        }else{
            return  view('auth.login');
        }
    }
    public function app(){
        $title = 'Accueil';
        $user = Auth::user();
        $sliderGalery = SliderGalery::where('userRole','=',$user->role)->where('countory_id', '=',$user->country)->get();
        $subcategory = SubCategory::all();
        $childcatgory = ChildCategory::all();
        $services =JobberServicesOffers::where('status','=',1)->where('country_id','=',$user->country)->take(4)->orderBy('id', 'DESC')->get();
        $category = Category::all();
        $jobrequests = JobRequest::latest()->where('country_id', '=', $user->country)->where('status', '=', 1)->paginate(10);


        return view('front.index',compact('sliderGalery','category', 'title', 'jobrequests','services','category','subcategory','childcatgory'));
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
    public function fetchquestions(Request $request){
        $questions = Questions::where('subcategory_id', '=', $request->id)->get();
        return response()->json($questions);
    }
    public function privacy(){
        $title = 'Politique de confidentialité';
        return view('front.privacy', compact('title'));
    }
    public function terms(){
        $title = 'Termes et conditions';
        return view('front.terms', compact('title'));
    }

}
