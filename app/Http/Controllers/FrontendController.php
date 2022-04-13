<?php

namespace App\Http\Controllers;

use App\About;
use App\Mail\OtpMail;
use Mail;
use App\AppSetting;
use App\Blog;
use App\ChildCategory;
use App\Condition;
use App\Countory;
use App\Ignorjobrequest;
use App\JobFactory;
use App\JobRequest;
use App\Notfication;
use App\QuestionAnswer;
use App\Questions;
use App\SCaseServices;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;
use App\SliderGalery;
use App\Category;
use App\JobberServicesOffers;
use App\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Session;

class FrontendController extends Controller
{
    public function index(Request $request){
        $check =  preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        if($check){
           /* Cookie::queue('name', "bilawal", 35791394);
            $value = $request->cookie('name');*/
                return redirect()->route('front.intro');
        }else{
            return  redirect()->route('web.index');
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
        $skills = json_decode($user->skills,true);
        $jobStatus = Ignorjobrequest::where('user_id',$user->id)->pluck('j_id');
//        ->whereNotIn('id',$jobStatus)->whereIn('subcategory_id',$skills)
        $jobrequests = JobRequest::latest()->where('country_id', '=', $user->country)->where('status', '=', 1)->paginate(10);


        return view('front.index',compact('sliderGalery','category', 'title', 'jobrequests','services','category','subcategory','childcatgory','skills'));
    }
    public function website(){
        $category = Category::all();
        $service = SCaseServices::first();
        $testi = Testimonial::get();
        $blog = Blog::get();
        $jobFactory = JobFactory::first();
        return view('web.index',compact('category','service','testi','blog','jobFactory'));
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
        $user = Auth::user();
        $categories = Category::all();
        return view('front.auth.register', compact('id','user','categories'));
    }
    public function fetchquestions(Request $request){
        $questions = Questions::where('subcategory_id', '=', $request->id)->get();
        return response()->json($questions);
    }
    public function privacy(){
        $title = 'Politique de confidentialité';
        $condition = Condition::first();
        return view('front.privacy', compact('title','condition'));
    }
    public function iframe2($id){
        $route = Crypt::decryptString($id);
        return view('web.pages.iframe',compact('route'));
    }
    public function terms(){
        $title = 'Termes et conditions';
        $condition = Condition::first();
        return view('front.terms', compact('title','condition'));
    }
    public function conditions(){
        $title = 'Termes et conditions';
        $condition = Condition::first();
        return view('front.settings.condtions', compact('title','condition'));
    }
    public function mainRegister(){

        return view('web.pages.mainregister');
    }
    public function devenezJobber(){
        $category = Category::all();
        return view('web.pages.jobber',compact('category'));
    }
    public function mainCategory(){
        $category = Category::all();
        return view('web.pages.maincategory',compact('category'));
    }
    public function iframe(Request $request){
         $route = $request->route;
        return view('web.pages.iframe',compact('route'));
    }
    public function search(Request $request){

        $subcategory = SubCategory::where('title', 'LIKE', '%' .$request->keywords. '%')->get();
        $childsubcategory = ChildCategory::where('title', 'LIKE', '%' .$request->keywords. '%')->get();
        return view('web.pages.search', compact('subcategory', 'childsubcategory'));
    }

    public function subcategoryIndex($id){
        $subcategory = SubCategory::where('category_id', '=', $id)->get();
        $category = Category::where('id', '=', $id)->first();
        return view('web.pages.subcategory', compact('subcategory','category'));
    }
    public function singleBlog($id){
        $blog = Blog::where('id','=',$id)->first();
        return view('web.pages.singleblog', compact('blog'));
    }
    public function about(){
        $jobfactory = JobFactory::first();
        $about = About::first();
        $service = SCaseServices::first();
        return view('web.pages.about',compact('jobfactory','about','service'));
    }
    public function suport(){
        $question = QuestionAnswer::all();
        return view('web.pages.suport',compact('question'));
    }
    public function suportPriviciy(){
        $condition = Condition::first();
        return view('web.pages.privicy',compact('condition'));
    }
    public function suportTerms(){
        $condition = Condition::first();
        return view('web.pages.terms',compact('condition'));
    }
    public function otpVerify(){
        $otp = rand(1000, 9999);
        $user = Auth::user();

            $users = User::where('email', '=', $user->email)->update(['otp' => $otp]);


        $email = $user->email;
        $dataa = array(
                'otp' => $otp,
            );

        Mail::to($user->email)->send(new  OtpMail($dataa));
        return view('front.sendotp', compact('email'));
    }
    public function otpVerifyEmail(Request $request){
        $user = User::where('email', $request->email)->where('otp', $request->otp)->first();
        if ($user) {
            $user->otp = null;
            $user->email_verified_at = 1;
            $user->update();

            return redirect('/app');
        } else {

            Session::flash('message', " Votre OTP ne correspond pas Veuillez réessayer!");
            return redirect()->back();
        }
    }
    public function addLocation(Request $request){
        $user = Auth::user();
        $user->latitude = $request->latitude;
        $user->longitude = $request->longitude;
        $user->update();
        return response()->json(['success' => '1']);


    }

}
