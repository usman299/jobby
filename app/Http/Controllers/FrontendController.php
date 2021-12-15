<?php

namespace App\Http\Controllers;

use App\AppSetting;
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
        $services =JobberServicesOffers::where('status','=',1)->where('country_id','=',$user->country)->take(4)->orderBy('id', 'DESC')->get();
        $category = Category::take(9)->where('countory_id', '=',$user->country)->orderBy('id', 'DESC')->get();
        $jobrequests = JobRequest::latest()->where('country_id', '=', $user->country)->where('category_id', '=', $user->category_id)->where('status', '=', 1)->paginate(10);

        $country_id = User::where('role','=',1)->where('status','=','1')->pluck('country');
        $category_id = User::where('role','=',1)->where('status','=','1')->pluck('category_id');
        $subcategory_id = User::where('role','=',1)->where('status','=','1')->pluck('subcategory_id');

        $country_id1 = User::where('role','=',2)->where('status','=','1')->pluck('country');
        $category_id1 = User::where('role','=',2)->where('status','=','1')->pluck('category_id');
        $subcategory_id1 = User::where('role','=',2)->where('status','=','1')->pluck('subcategory_id');



        $notfication = Notfication::whereIn('country_id',$country_id)
            ->whereIn('category_id',$category_id)->whereIn('subcategory_id',$subcategory_id)->where('status','=',1)->get();
        $notfications = Notfication::whereIn('country_id',$country_id1)
            ->whereIn('category_id',$category_id1)->whereIn('subcategory_id',$subcategory_id1)->where('status','=',1)->get();


        return view('front.index',compact('sliderGalery','category', 'title', 'jobrequests','services','notfication','notfications'));
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
}
