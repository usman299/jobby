<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\JobRequest;
use App\Proposal;
use App\User;
use App\SubCategory;
use App\JobberServicesOffers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
   public function services(){
       $title = 'Services populaires';
       $services =JobberServicesOffers::latest()->where('status','=',1)->where('country_id','=',Auth::user()->country)->get();
       return view('front.applicant.services.services', compact('title','services'));
   }
   public function singleService($id){
       $title = 'Service';
       $services =JobberServicesOffers::where('status','=',1)->where('id','=',$id)->first();
       return view('front.applicant.services.singleService', compact('title','services'));
   }
    public function fetchsubcategory(Request $request){
        $subcategories = SubCategory::where('category_id', '=', $request->id)->get();
        return response()->json($subcategories);
    }
    public function jobrequestSubmit(Request $request){
        $user = Auth::user();
        $jobrequest = new JobRequest();
        $jobrequest->applicant_id = $user->id;
        $jobrequest->category_id = $request->category_id;
        $jobrequest->subcategory_id = $request->subcategory_id;
        $jobrequest->title = $request->title;
        $jobrequest->min_price = $request->min_price;
        $jobrequest->max_price = $request->max_price;
        $jobrequest->description = $request->description;
        $jobrequest->estimate_time = $request->estimate_time;
        $jobrequest->country_id = $user->country;
        $jobrequest->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('applicant.jobrequests')->with($notification);
    }
    public function jobrequests(){
        $title = 'Demandes demploi';
        $jobrequests = JobRequest::latest()->where('applicant_id', Auth::user()->id)->where('status', 1)->get();
        $jobrequestsClose = JobRequest::latest()->where('applicant_id', Auth::user()->id)->where('status', 2)->get();
        return view('front.applicant.jobrequests.jobrequests', compact('jobrequests','title', 'jobrequestsClose'));
    }
    public function jobrequestsDetail($id){
        $title = 'Demander Détails';
        $jobrequest = JobRequest::find($id);
        return view('front.applicant.jobrequests.detail', compact('jobrequest','title'));
    }
    public function jobrequestsStatus($id){
        $jobrequest = JobRequest::find($id);
        $jobrequest->status = 2;
        $jobrequest->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('applicant.jobrequests')->with($notification);
    }
    public function proposals(){
        $title = 'Propositions';
        $user = Auth::user();
        $jobs = JobRequest::where('applicant_id', $user->id)->pluck('id');
        $activeProposals = Proposal::latest()->whereIn('jobRequest_id', $jobs)->where('status', '=', 1)->get();
        $acceptProposals = Proposal::latest()->whereIn('jobRequest_id', $jobs)->where('status', '=', 2)->get();
        return view('front.applicant.proposals.proposals', compact('title', 'acceptProposals', 'activeProposals'));
    }
    public function proposalDetails($id){
        $title = 'Propositions';
       $proposal = Proposal::find($id);
        return view('front.applicant.proposals.details', compact('title', 'proposal'));
    }
    public function proposalAccept(Request $request, $id){
        $proposal = Proposal::find($id);
        $proposal->status = 2;
        $proposal->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('applicant.proposals')->with($notification);
    }
}
