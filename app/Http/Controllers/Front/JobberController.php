<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Contract;
use App\Http\Controllers\Controller;
use App\JobberServicesOffers;
use App\JobRequest;
use App\Notfication;
use App\Payment;
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
        $categories = Category::all();
        return view('front.jobber.service.index',compact( 'title','services','categories'));
    }
    public function singleServices($id){
        $title = 'Service';
        $services =JobberServicesOffers::where('status','=',1)->where('id','=',$id)->first();
        $categories = Category::all();
        return view('front.jobber.service.edit', compact('title','services','categories'));
    }
    public function storeServices(Request $request){
         $user = Auth::User();
         $services = new JobberServicesOffers();
         $services->jobber_id = $user->id;
         $services->country_id = $user->country;
         $services->title = $request->title;
         $services->duration = $request->duration;
         $services->price = $request->price;
         $services->category_id = $request->category_id;
         $services->subcategory_id = $request->subcategory_id;
         $services->skils = $request->skils;
         $services->description = $request->description;

        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'jobberService/';
            $image1->move($destinationPath, $name);
            $services->img = 'jobberService/' . $name;
        }

        if($services->save()){

             Session::flash('message', "Your Offers Save");
             return redirect()->route('jobber.services');

         }
         else{

             Session::flash('error', "Your Offers Not Save");
             return redirect()->route('jobber.services');
         }


    }
    public function updateStatusServices($id){
        $servicess =  JobberServicesOffers::where('id','=',$id)->first();
        $servicess->status = 2;
        $servicess->update();
        $title = 'Services';
        Session::flash('error', "Your Offers Remove");
        return redirect()->route('jobber.services');
    }
    public function editServices($id){

        $title = 'Services';
        $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->get();
        $servicesEdit =  JobberServicesOffers::where('id','=',$id)->first();
        $categories = Category::all();
        return view('front.jobber.service.index',compact( 'title','services','servicesEdit','categories'));
    }
    public function updateServices(Request $request,$id){
        $user = Auth::user();
        $services =  JobberServicesOffers::where('id','=',$id)->where('status','=',1)->first();
        $services->jobber_id = $user->id;
        $services->country_id = $user->country;
        $services->title = $request->title;
        $services->duration = $request->duration;
        $services->price = $request->price;
        $services->category_id = $request->category_id;
        if($request->subcategory_id) {
            $services->subcategory_id = $services->subcategory_id;
        }
        $services->skils = $request->skils;
        $services->description = $request->description;

        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'jobberService/';
            $image1->move($destinationPath, $name);
            $services->img = 'jobberService/' . $name;
        }

        if($services->update()){

            Session::flash('message', "Your Offers Update");
            return redirect()->route('jobber.services');
        }
        else{

            Session::flash('error', "Your Offers Not Update");
            return redirect()->route('jobber.services');
        }


    }
    public function proposalSubmit(Request $request){
        $check = Proposal::where('jobber_id', '=', Auth::user()->id)->where('jobRequest_id', '=', $request->id)->first();
        if ($check){
            $notification = array(
                'messege' => 'Déjà appliqué',
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
            if($proposal->save()){
                $notfications = new Notfication();
                $jobRequest = JobRequest::where('id','=',$request->id)->first();
                $notfications->sender_id = Auth::user()->id;
                $notfications->reciver_id = $jobRequest->applicant_id;
                $notfications->generate_id = $proposal->id;
                $notfications->message = 'Il y a une nouvelle demande de proposition dans votre région';
                $notfications->activity = 'Proposition';
                $notfications->category_id = $jobRequest->category_id;
                $notfications->subcategory_id = $jobRequest->subcategory_id;
                $notfications->country_id = Auth::user()->country;
                $notfications->save();
            }

            $notification = array(
                'messege' => 'Proposition envoyer !',
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
        $rejectProposals = Proposal::latest()->where('jobber_id', '=', $user->id)->where('status', '=', 3)->get();
        return view('front.jobber.proposals.proposals', compact('title', 'acceptProposals', 'activeProposals', 'rejectProposals'));
    }
    public function getJobberContract(){
        $title = 'Contract';
        $user = Auth::user();
        $activeContract = Contract::latest()->where('jober_id', '=', $user->id)->get();
        $completeContract = Contract::latest()->where('jober_id', '=', $user->id)->where('status', '=', 3)->get();
        $cancelContract = Contract::latest()->where('jober_id', '=', $user->id)->where('status', '=', 5)->get();
        return view('front.jobber.contract.index', compact('title', 'activeContract', 'completeContract','cancelContract'));
    }
    public function detialsJobberContract($id){
        $title = 'Contract';
        $contract = Contract::find($id);
        return view('front.jobber.contract.detials', compact('title', 'contract'));
    }
    public function contractStatus($id){
        $contract = Contract::find($id);
        $contract->status = 2;
        if($contract->update()){
            $notification = array(
                'messege' => 'Accept This Booking',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function earnings(){
        $title = 'Revenus';
        $user = Auth::user();
        $earnings = Payment::where('jobber_id', '=', $user->id)->where('status', 1)->get();
        return view('front.jobber.earnings.index', compact('earnings', 'title'));
    }
}
