<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\JobberServicesOffers;
use App\SubCategory;
use App\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class JobberController extends Controller
{
    public function allServices(){
        $title = 'Services';
        $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->where('status','=',1)->get();
        return view('front.jobber.service.index',compact( 'title','services'));
    }
    public function singleServices($id){
        $title = 'Service';
        $services =JobberServicesOffers::where('status','=',1)->where('id','=',$id)->first();
        return view('front.jobber.service.edit', compact('title','services'));
    }
    public function storeServices(Request $request){

         $services = new JobberServicesOffers();
         $services->jobber_id = Auth::user()->id;
         $services->country_id = Auth::user()->country;
         $services->title = $request->title;
         $services->duration = $request->duration;
         $services->price = $request->price;
         $services->description = $request->description;

        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'jobberService/';
            $image1->move($destinationPath, $name);
            $services->img = 'jobberService/' . $name;
        }

        if($services->save()){
             $title = 'Services';
             $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->where('status','=',1)->get();
             Session::flash('message', "Your Offers Save");
             return view('front.jobber.service.index',compact( 'title','services'));
         }
         else{
             $title = 'Services';
             $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->where('status','=',1)->get();
             Session::flash('error', "Your Offers Not Save");
             return view('front.jobber.service.index',compact( 'title','services'));
         }


    }
    public function updateStatusServices($id){
        $servicess =  JobberServicesOffers::where('id','=',$id)->first();
        $servicess->status = 2;
        $servicess->update();
        $title = 'Services';
        $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->where('status','=',1)->get();
        Session::flash('error', "Your Offers Remove");
        return view('front.jobber.service.index',compact( 'title','services'));
    }
    public function editServices($id){

        $title = 'Services';
        $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->get();
        $servicesEdit =  JobberServicesOffers::where('id','=',$id)->first();
        return view('front.jobber.service.index',compact( 'title','services','servicesEdit'));
    }
    public function updateServices(Request $request,$id){

        $services =  JobberServicesOffers::where('id','=',$id)->where('status','=',1)->first();
        $services->jobber_id = Auth::user()->id;
        $services->country_id = Auth::user()->country;
        $services->title = $request->title;
        $services->duration = $request->duration;
        $services->price = $request->price;
        $services->description = $request->description;

        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'jobberService/';
            $image1->move($destinationPath, $name);
            $services->img = 'jobberService/' . $name;
        }

        if($services->update()){
            $title = 'Services';
            $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->where('status','=',1)->get();
            Session::flash('message', "Your Offers Update");
            return view('front.jobber.service.index',compact( 'title','services'));
        }
        else{
            $title = 'Services';
            $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->where('status','=',1)->get();
            Session::flash('error', "Your Offers Not Update");
            return view('front.jobber.service.index',compact( 'title','services'));
        }


    }
    public function proposalSubmit(Request $request){
        $check = Proposal::where('jobber_id', '=', Auth::user()->id)->where('jobRequest_id', '=', $request->id)->first();
        if ($check){
            $notification = array(
                'messege' => 'Already Applied',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }else{
            $proposal = new Proposal();
            $proposal->jobRequest_id = $request->id;
            $proposal->price = $request->price;
            $proposal->time_limit = $request->time_limit;
            $proposal->description = $request->description;
            $proposal->jobber_id = Auth::user()->id;
            $proposal->save();
            $notification = array(
                'messege' => 'Sauvegarde réussie!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function proposals(){
        $title = 'Propositions';
        $user = Auth::user();
        $activeProposals = Proposal::latest()->where('jobber_id', '=', $user->id)->where('status', '=', 1)->get();
        $acceptProposals = Proposal::latest()->where('jobber_id', '=', $user->id)->where('status', '=', 2)->get();
        return view('front.jobber.proposals.proposals', compact('title', 'acceptProposals', 'activeProposals'));
    }
}
