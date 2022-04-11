<?php

namespace App\Http\Controllers\Admin;

use App\Card;
use App\Contract;
use App\Countory;
use App\Diploma;
use App\Http\Controllers\Controller;
use App\JobberProfile;
use App\JobRequest;
use App\Proposal;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCards(){
        $cards = Card::all();
        return view('admin.cards.index', compact('cards'));
    }
    public function createCards(){
        return view('admin.cards.create');
    }
    public function storeCards(Request $request){
        $cards = new Card();
        $cards->title = $request->title;
        $cards->sku = $request->sku;
        if ($request->hasfile('photo')) {
            $image1 = $request->file('photo');
            $name = time() . 'photo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'card/';
            $image1->move($destinationPath, $name);
            $cards->photo = 'card/' . $name;

        }
        $cards->save();
        toastr()->success('Votre carte ajoutée');
        return redirect()->back();
    }
    public function deleteCards($id){
        $cards = Card::find($id);
        $cards->delete();
        toastr()->error('Votre carte Supprimer');
        return redirect()->back();
    }
    public function searhApplicantCountry($id)
    {
        $applicant = User::where('country','=',$id)->where('role','=','2')->get();
        if($applicant!=null){
            $countory = Countory::all();
            return view('admin.user.applicant.index',compact('applicant','countory'));
        }
    }
     public function applicant()
    {
        $applicant = User::where('role','=','2')->get();
        if($applicant!=null){
            $countory = Countory::all();
            return view('admin.user.applicant.index',compact('applicant','countory'));
        }

    }

    public function searhJobberCountry($id)
    {
        $jobber = User::where('country','=',$id)->where('role','=','1')->get();
        if($jobber!=null){
            $countory = Countory::all();
            return view('admin.user.jobber.index',compact('jobber','countory'));
        }
    }
     public function jobber()
    {
        $jobber = User::where('role','=','1')->get();
        if($jobber!=null){
            $countory = Countory::all();
            return view('admin.user.jobber.index',compact('jobber','countory'));
        }



    }
    public function jobberShowProfile($id)
    {
        $jobber = User::where('id','=',$id)->first();
        $country =Countory::all();
        $jobberprofile = JobberProfile::where('jobber_id','=',$id)->first();
        $proposal = Proposal::where('jobber_id','=',$id)->latest()->get();
        $contract = Contract::where('jober_id','=',$id)->where('status','=',3)->latest()->get();
        $diplomas = Diploma::where('jobber_id','=',$id)->latest()->get();

        return view('admin.user.jobber.show',compact('jobber','proposal','contract','country','jobberprofile','diplomas'));

    }

     public function applicantShowProfile($id)
    {
        $applicant = User::where('id','=',$id)->first();
        $country =Countory::all();
        $jobRequest = JobRequest::where('applicant_id','=',$id)->where('status','=',1)->latest()->get();
        $contract = Contract::where('applicant_id','=',$id)->where('status','=',3)->latest()->get();

        return view('admin.user.applicant.show',compact('applicant','jobRequest','contract','country'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($status ,$id)
    {
        if ($status==0) {
            User::find($id)->update(['status' => $status]);
            // toastr()->error('User Dactivate');

            return redirect()->back();
        }
        else{
             User::find($id)->update(['status' => $status]);
             // toastr()->success('User Activate');
            return redirect()->back();

        }




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $user = User::where('id','=',$id)->first();
       if ($user->delete()) {
        // toastr()->error('User Delete');
       return redirect()->back();
       }
       else{
        toastr()->Info('Something Wrong');
       return redirect()->back();
       }

    }
     public function logout()
    {
        Auth::logout();
       return redirect('/');
    }
     public function adminProfile()
    {
       $country = Countory::all();
       $user = AUth::user();
       return view('admin.user.profile',compact('country','user'));
    }
    public  function adminProfileUpdate(Request $request,$id){

        $user = User::where('id','=',$id)->first();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->country = $request->countory_id;
        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/images/';
            $image1->move($destinationPath, $name);
            $user->image = 'admin/images/' . $name;
        }
        if($user->Update()){

            toastr()->success('Data has been Update successfully!');
            return back();

        }
    }

    public  function adminPasswordUpdate(Request $request,$id){

        $user = User::find($id);
        if($request->password == $request->confirm_password){
            $user->password = Hash::make(($request->password));
            $user->update();
            toastr()->success('Password has been Update successfully!');
            return back();
        }
        else{
            toastr()->error('Password Not Update!');
            return back();
        }
    }


}
