<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Countory;
use App\Http\Controllers\Controller;
use App\Notfication;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function settings(){
        $title = 'Paramètres';
        $user = Auth::user();
        $countries = Countory::all();
        return view('front.settings.settings', compact('user','title', 'countries'));
    }
    public function profile(){
        $title = 'Profil';
        $user = Auth::user();
        $countries = Countory::all();
        $categories = Category::all();
        return view('front.settings.profile', compact('user','title', 'countries', 'categories'));
    }
    public function passwordChange(){
        $title = 'Changer le mot de passe';
        $user = Auth::user();
        return view('front.settings.passwordChange', compact('user','title'));
    }
    public function about(){
        $title = 'À propos de nous';
        $user = Auth::user();
        return view('front.settings.about', compact('user','title'));
    }
    public function notifications(){
        $title = 'Notifications';
        $user = Auth::user();
        $country_id = User::where('role','=',1)->where('status','=','1')->pluck('country');
        $category_id = User::where('role','=',1)->where('status','=','1')->pluck('category_id');
        $subcategory_id = User::where('role','=',1)->where('status','=','1')->pluck('subcategory_id');

        $notfication = Notfication::whereIn('country_id',$country_id)
            ->whereIn('category_id',$category_id)->whereIn('subcategory_id',$subcategory_id)->get();
        return view('front.settings.notifications', compact('user','title','notfication'));
    }
    public function support(){
        $title = 'Soutien';
        $user = Auth::user();
        return view('front.settings.support', compact('user','title'));
    }
    public function contact(){
        $title = 'Contact';
        $user = Auth::user();
        return view('front.settings.contact', compact('user','title'));
    }
    public function profileUpdate(Request $request){
        $user = Auth::user();
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'profileImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profileImage/';
            $image1->move($destinationPath, $name);
            $user->image = 'profileImage/' . $name;
        }
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->gender = $request->gender;
        $user->postalCode = $request->postalCode;
        $user->dob = $request->dob;
        $user->description = $request->description;
        $user->category_id = $request->category_id;
        $user->subcategory_id = $request->subcategory_id;
        $user->rate_per_hour = $request->rate_per_hour;
        $user->is_company = $request->is_company;
        $user->company_name = $request->company_name;
        $user->siret = $request->siret;
        $user->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function passwordUpdate(Request $request){
        $password=Auth::user()->password;
        $oldpass=$request->oldpass;
        $newpass=$request->password;
        $confirm=$request->password_confirmation;
        if (Hash::check($oldpass,$password)) {
            if ($newpass === $confirm) {
                $user=User::find(Auth::id());
                $user->password=Hash::make($request->password);
                $user->save();
                Auth::logout();
                $notification=array(
                    'messege'=>'Le mot de passe a été changé avec succès ! Connectez-vous maintenant avec votre nouveau mot de passe',
                    'alert-type'=>'success'
                );
                return Redirect('front/login/1')->with($notification);
            }else{
                $notification=array(
                    'messege'=>'Le nouveau mot de passe et la confirmation du mot de passe ne correspondent pas!',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
        }else{
            $notification=array(
                'messege'=>'Lancien mot de passe ne correspond pas!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
