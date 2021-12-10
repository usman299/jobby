<?php

namespace App\Http\Controllers\Front;

use App\Contract;
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
    public function servicesContract(Request $request, $id){
        $applicant_id = Auth::user()->id;

            $check = Contract::where('applicant_id', '=', Auth::user()->id)->where('service_id', '=', $id)->first();

        if ($check){
            $notification = array(
                'messege' => 'Already Applied',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        else {

                $service = JobberServicesOffers::find($id);
                if ($service != null) {
                    $contract = new Contract();
                    $contract->service_id = $id;
                    $contract->applicant_id = $applicant_id;
                    $contract->jober_id = $service->jobber_id;
                    $contract->e_time = $request->e_time;
                    $contract->price = $request->price;
                    $contract->description = $request->description;
                    $contract->save();
                    $notification = array(
                        'messege' => 'Contract  Generate Successfulyy',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                } else {
                    $notification = array(
                        'messege' => 'Service Not Found',
                        'alert-type' => 'error'
                    );
                    return redirect()->back()->with($notification);
                }
            }
        }

    public function proposalsContract(Request $request, $id){
        $applicant_id = Auth::user()->id;

        $check = Contract::where('applicant_id', '=', Auth::user()->id)->where('proposal_id', '=', $id)->first();

        if ($check){
            $notification = array(
                'messege' => 'Already Applied',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        else {

            $service = JobberServicesOffers::find($id);
            if ($service != null) {
                $contract = new Contract();
                $contract->proposal_id = $id;
                $contract->applicant_id = $applicant_id;
                $contract->jober_id = $service->jobber_id;
                $contract->e_time = $request->e_time;
                $contract->price = $request->price;
                $contract->description = $request->description;
                $contract->save();
                $notification = array(
                    'messege' => 'Contract  Generate Successfulyy',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Proposal Not Found',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        }
    }

    public function getApplicantContract(){
        $title = 'Contract';
        $user = Auth::user();
        $activeContract = Contract::latest()->where('applicant_id', '=', $user->id)->where('status', '=', 1)->get();
        $acceptContract = Contract::latest()->where('applicant_id', '=', $user->id)->where('status', '=', 2)->get();
        return view('front.applicant.contract.index', compact('title', 'activeContract', 'acceptContract'));
    }

    public function detialsApplicantContract($id){
        $title = 'Contract';
        $contract = Contract::find($id);
        return view('front.applicant.contract.detials', compact('title', 'contract'));
    }


}
