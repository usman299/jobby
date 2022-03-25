<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\Category;
use App\Condition;
use App\Mail\AllContact;
use App\Contact;
use App\Contract;
use App\Countory;
use App\Diploma;
use App\Http\Controllers\Controller;
use App\JobberProfile;
use App\Notfication;
use App\Payment;
use App\Portfolio;
use App\QuestionAnswer;
use App\SubCategory;
use App\User;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use function Sodium\compare;

class SettingsController extends Controller
{
    public function settings(){
        $title = 'Paramètres';
        $user = Auth::user();
        $contract = Contract::where('jober_id', $user->id)->where('status', '!=', '3')->get()->count();
        $payment = Payment::where('jobber_id', $user->id)->sum('jobber_get');
        return view('front.settings.settings', compact('user','title', 'contract', 'payment'));
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
        $about = About::first();
        return view('front.settings.about', compact('user','title','about'));
    }
    public function notifications(){
        $title = 'Notifications';
        $user = Auth::user();
        $notfications = Notfication::latest()->where('r_id','=',$user->id)->paginate('20');
        Notfication::latest()->where('r_id','=',$user->id)->update(['status' => 1]);
        return view('front.settings.notifications', compact('user','title','notfications'));
    }
    public function support(){
        $title = 'Soutien';
        $user = Auth::user();
        $questionAnswer = QuestionAnswer::all();
        return view('front.settings.support', compact('user','title','questionAnswer'));
    }
    public function contact(){
        $title = 'Contact';
        $user = Auth::user();
        return view('front.settings.contact', compact('user','title'));
    }

    public function contactStore(Request $request){

        $user = Auth::user();
        $contact = new Contact();
        if($user->role == 1){
            $role = 'Demandeur';
        }
        else{
            $role = 'Jobber';
         }
        $contact->user_id =  $user->id;
        $contact->role = $user->role;
        $contact->name = $request->name;
        $contact->email =$request->email;
        $contact->subject =$request->subject;
        $contact->message =$request->message;

        if($contact->save()) {
            $dataa = array(
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'email' => $request->email,
                'role' => $role,
                'subject' => $request->subject,
                'message' => $request->message,
            );
            Mail::to('mughalusman5554@gmail.com')->send(new  AllContact($dataa));
            $notification = array(
                'messege' => 'Sauvegarde réussie!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
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
        /*$user->category_id = $request->category_id;
        $user->subcategory_id = $request->subcategory_id;
        $user->rate_per_hour = $request->rate_per_hour;*/

        $user->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function badgeUpdate(Request $request){
        $user = Auth::user();
        $user->is_company = $request->is_company;
        $user->company_name = $request->company_name;
        $user->vat_type = $request->vat_type;
        $user->company_address = $request->company_address;
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
    public function getBadge(){
        $user = Auth::user();
        $title = 'Obtenir badge PRO';
        return view('front.settings.badge.get', compact('title', 'user'));
    }
    public function getBadgepro(){
        $title = 'Obtenir badge PRO';
        $user = Auth::user();
        return view('front.settings.badge.pro', compact('title', 'user'));
    }
    public function identity(){
        $user = Auth::user();
        $title = 'Preuve d\'identité';
        return view('front.settings.identity', compact('title', 'user'));
    }
    public function identityStore(Request $request){
        $user = Auth::user();
        $user->euorpion = $request->euorpion;
        $user->identity_type = $request->identity_type;
        $user->security_no = $request->security_no;

        if ($request->hasfile('identity_document')) {
            $image1 = $request->file('identity_document');
            $name = time() . 'profileImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profileImage/';
            $image1->move($destinationPath, $name);
            $user->identity_document = 'profileImage/' . $name;
        }
        $user->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function skills(){
        $user = Auth::user();
        $title = 'Compétences';
        $categories = Category::all();
        return view('front.settings.skills', compact('title', 'user', 'categories'));
    }
    public function portfolio(){
        $user = Auth::user();
        $title = 'Réalisation';
        $portfolio = Portfolio::where('jobber_id', $user->id)->get();
        return view('front.settings.portfolio', compact('title', 'user', 'portfolio'));
    }
    public function experience(){
        $user = Auth::user();
        $profile = JobberProfile::where('jobber_id', $user->id)->first();
        $title = 'Diplômes et expérience';
        $diplomas = Diploma::where('jobber_id', $user->id)->get();

        return view('front.settings.experience', compact('title', 'user', 'diplomas', 'profile'));
    }
    public function skillsSubmit(Request $request){
        $user = Auth::user();
        if($request->skills){
            foreach($request->skills as $skill)
            {
                $data[] = $skill;
                $user->skills = json_encode($data);
            }
        }
        $user->update();

        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function experienceStore(Request $request){
        $exper = new Diploma();
        $exper->jobber_id = Auth::user()->id;
        $exper->title = $request->title;
        if ($request->hasfile('file')) {
            $image1 = $request->file('file');
            $name = time() . 'profileImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profileImage/';
            $image1->move($destinationPath, $name);
            $exper->file = 'profileImage/' . $name;
        }
        $exper->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function portfolioStore(Request $request){
        $portfolio = new Portfolio();
        $portfolio->jobber_id = Auth::user()->id;
        $portfolio->title = $request->title;
        if($request->hasFile('file')){
            $image= $request->file('file');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(470, 250)->save( public_path('/images/' . $filename ) );
            $portfolio->file= '/images/'.$filename;
        }
        $portfolio->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function experienceupdate(Request $request){
        $user = Auth::user();
        $profile = JobberProfile::where('jobber_id', $user->id)->first();
        $profile->experince = $request->experince;
        $profile->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
