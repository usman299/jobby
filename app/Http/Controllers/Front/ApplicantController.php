<?php

namespace App\Http\Controllers\Front;

use App\ChildCategory;
use App\Comments;
use App\Contract;
use App\Http\Controllers\Controller;
use App\JobRequest;
use App\Proposal;
use App\Reviews;
use App\User;
use App\Notfication;
use Validator;
use App\SubCategory;
use App\JobberServicesOffers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ApplicantController extends Controller
{
   public function services(){

       $title = 'Services populaires';
       $services =JobberServicesOffers::latest()->where('status','=',1)->where('country_id','=',Auth::user()->country)->get();

       return view('front.applicant.services.services', compact('title','services'));
   }
    public function service($id){

        $title = 'Services populaires';
        $services =JobberServicesOffers::latest()->where('status','=',1)->where('country_id','=',Auth::user()->country)->where('subcategory_id','=',$id)->get();

        return view('front.applicant.services.index', compact('title','services'));
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
    public function jobRequestSubmit(Request $request, $id){
        $child = ChildCategory::find($id);
        $user = Auth::user();
        $jobrequest = new JobRequest();
        $jobrequest->applicant_id = $user->id;
        $jobrequest->category_id = $child->category->id;
        $jobrequest->subcategory_id = $child->subcategory->id;
        $jobrequest->childcategory_id = $id;
        $jobrequest->country_id = $user->country;

        $jobrequest->title = $child->title;
        $jobrequest->description = $request->description;
        $jobrequest->service_date = $request->service_date;
        $jobrequest->start_time = $request->start_time;
        $jobrequest->duration = $request->duration;
        $jobrequest->hours = $request->hours;
        $jobrequest->estimate_budget = $request->estimate_budget;
        $jobrequest->address = $request->address;
        $jobrequest->phone = $request->phone;

        $jobrequest->small = $request->small;
        $jobrequest->medium = $request->medium;
        $jobrequest->large = $request->large;
        $jobrequest->verylarge = $request->verylarge;
        $jobrequest->question = $request->question;
        $jobrequest->surface = $request->surface;
        $jobrequest->count = $request->count;
        $jobrequest->input = $request->input;
        $jobrequest->detail_description = $request->detail_description;

        $jobrequest->lat = $request->lat;
        $jobrequest->long = $request->long;


        if($request->hasFile('image1')){
            $image= $request->file('image1');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/images/' . $filename ) );
            $jobrequest->image1= '/images/'.$filename;
        }
        if($request->hasFile('image2')){
            $image2= $request->file('image2');
            $filename2 = time() . '.' . $image2->getClientOriginalExtension();
            Image::make($image2)->resize(300, 300)->save( public_path('/images/' . $filename2 ) );
            $jobrequest->image2= '/images/'.$filename2;
        }
        if($request->hasFile('image3')){
            $image3= $request->file('image3');
            $filename3 = time() . '.' . $image3->getClientOriginalExtension();
            Image::make($image3)->resize(300, 300)->save( public_path('/images/' . $filename3 ) );
            $jobrequest->image3= '/images/'.$filename3;
        }

        if($jobrequest->save()){
            $notfications = new Notfication();
            $notfications->sender_id = $user->id;
            $notfications->generate_id = $jobrequest->id;
            $notfications->message = 'Il y a une nouvelle demande d\'emploi dans votre région';
            $notfications->activity = 'Demande d\'emploi';
            $notfications->category_id = $request->category_id;
            $notfications->subcategory_id = $request->subcategory_id;
            $notfications->country_id = $user->country;
            $notfications->save();
        }
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('applicant.jobrequests')->with($notification);
    }
    public function jobSubcategorySubmit(Request $request, $id){
        $subCategory = SubCategory::find($id);
        $user = Auth::user();
        $jobrequest = new JobRequest();
        $jobrequest->applicant_id = $user->id;
        $jobrequest->category_id = $subCategory->category->id;
        $jobrequest->subcategory_id = $id;
        $jobrequest->country_id = $user->country;

        $jobrequest->title = $subCategory->title;
        $jobrequest->description = $request->description;
        $jobrequest->service_date = $request->service_date;
        $jobrequest->start_time = $request->start_time;
        $jobrequest->duration = $request->duration;
        $jobrequest->hours = $request->hours;
        $jobrequest->estimate_budget = $request->estimate_budget;
        $jobrequest->address = $request->address;
        $jobrequest->phone = $request->phone;

        $jobrequest->small = $request->small;
        $jobrequest->medium = $request->medium;
        $jobrequest->large = $request->large;
        $jobrequest->verylarge = $request->verylarge;
        $jobrequest->question = $request->question;
        $jobrequest->question1 = $request->question1;
        $jobrequest->question2 = $request->question2;
        $jobrequest->question3 = $request->question3;
        $jobrequest->surface = $request->surface;
        $jobrequest->count = $request->count;
        $jobrequest->input = $request->input;
        $jobrequest->pickup_address = $request->pickup_address;
        $jobrequest->destination_address = $request->destination_address;
        $jobrequest->dob = $request->dob;
        $jobrequest->detail_description = $request->detail_description;

        $jobrequest->lat = $request->lat;
        $jobrequest->long = $request->long;
        if($request->hasFile('image1')){
            $image1= $request->file('image1');
            $filename1 = time() . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(300, 300)->save( public_path('/images/' . $filename1 ) );
            $jobrequest->image1= '/images/'.$filename1;
        }
        if($request->hasFile('image2')){
            $image2= $request->file('image2');
            $filename2 = time() . '.' . $image2->getClientOriginalExtension();
            Image::make($image2)->resize(300, 300)->save( public_path('/images/' . $filename2 ) );
            $jobrequest->image2= '/images/'.$filename2;
        }
        if($request->hasFile('image3')){
            $image3= $request->file('image3');
            $filename3 = time() . '.' . $image3->getClientOriginalExtension();
            Image::make($image3)->resize(300, 300)->save( public_path('/images/' . $filename3 ) );
            $jobrequest->image3= '/images/'.$filename3;
        }
        if($jobrequest->save()){
            $notfications = new Notfication();
            $notfications->sender_id = $user->id;
            $notfications->generate_id = $jobrequest->id;
            $notfications->message = 'Il y a une nouvelle demande d\'emploi dans votre région';
            $notfications->activity = 'Demande d\'emploi';
            $notfications->category_id = $request->category_id;
            $notfications->subcategory_id = $request->subcategory_id;
            $notfications->country_id = $user->country;
            $notfications->save();
        }
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('applicant.jobrequests')->with($notification);
    }
    public function jobrequests(){
       $user = Auth::user();
        $title = 'Demandes demploi';
        $jobrequests = JobRequest::latest()->where('applicant_id', $user->id)->where('status', 1)->get();
        $jobrequestsClose = JobRequest::latest()->where('applicant_id', $user->id)->where('status', 2)->get();
        return view('front.applicant.jobrequests.jobrequests', compact('jobrequests','title', 'jobrequestsClose'));
    }
    public function jobrequestsDetail($id){
        $title = 'Détails de la demande';
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
        $rejectProposals = Proposal::latest()->whereIn('jobRequest_id', $jobs)->where('status', '=', 3)->get();
        return view('front.applicant.proposals.proposals', compact('title', 'acceptProposals', 'activeProposals', 'rejectProposals'));
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
    public function proposalReject($id){
        $proposal = Proposal::find($id);
        $proposal->status = 3;
        $proposal->update();
        $notification = array(
            'messege' => 'Sauvegarde Reject!',
            'alert-type' => 'error'
        );
        return redirect()->route('applicant.proposals')->with($notification);
    }
    public function servicesContract(Request $request, $id){
           $applicant_id = Auth::user()->id;

            $check = Contract::where('applicant_id', '=', $applicant_id)->where('service_id', '=', $id)->first();

        if ($check){
            $notification = array(
                'messege' => 'Already Applied',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        else {

                $service = JobberServicesOffers::find($id);
                if ($service) {
                    $contract = new Contract();
                    $contract->service_id = $id;
                    $contract->applicant_id = $applicant_id;
                    $contract->jober_id = $service->jobber_id;
                    $contract->e_time = $request->e_time;
                    $contract->price = $service->price;
                    $contract->description = $request->description;
                    $contract->save();
                    $notification = array(
                        'messege' => 'Contract  Generate Successfulyy',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }
            }
        }

    public function proposalsContract(Request $request, $id){
        $applicant_id = Auth::user()->id;

        $check = Contract::where('applicant_id', '=', $applicant_id)->where('proposal_id', '=', $id)->first();

        if ($check){
            $notification = array(
                'messege' => 'Vous avez déjà un contrat sur cette proposition',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        else {
                $proposal = Proposal::find($id);
                $proposal->status = 2;
                $proposal->update();
                $contract = new Contract();
                $contract->proposal_id = $id;
                $contract->applicant_id = $applicant_id;
                $contract->jober_id =  $proposal->jobber_id;
                $contract->e_time = $request->e_time;
                $contract->price = $request->price;
                $contract->description = $request->description;
                $contract->save();
                $notification = array(
                    'messege' => 'Contrat créé avec succès',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
        }
    }

    public function getApplicantContract(){
        $title = 'Contract';
        $user = Auth::user();
        $activeContract = Contract::latest()->where('applicant_id', '=', $user->id)->get();
        $completeContract = Contract::latest()->where('applicant_id', '=', $user->id)->where('status', '=', 3)->get();
        $cancelContract = Contract::latest()->where('applicant_id', '=', $user->id)->where('status', '=', 5)->get();
        return view('front.applicant.contract.index', compact('title', 'activeContract', 'completeContract','cancelContract'));
    }

    public function detialsApplicantContract($id){
        $title = 'Contract';
        $contract = Contract::find($id);
        return view('front.applicant.contract.detials', compact('title', 'contract'));
    }
    public function applicantContractDetailsStatus($id,$status){

             $contract = Contract::find($id);

             $contract->status = $status;
             $contract->update();
            if ($status==2) {
                $notification = array(
                    'messege' => 'Contract  Deliver Successfuly',
                    'alert-type' => 'success'
                );
            }
            elseif ($status==3) {
                $notification = array(
                    'messege' => 'Contract  Complete Successfuly',
                    'alert-type' => 'success'
                );
            }
            elseif ($status==4){

                $notification = array(
                    'messege' => 'Wating Admin Response',
                    'alert-type' => 'info'
                );

            }
            return redirect()->back()->with($notification);



    }

    public function jobberServices($id){

        $title = 'Services offerts';
        $services =JobberServicesOffers::latest()->where('status','=',1)->where('jobber_id','=',$id)->get();

        return view('front.applicant.services.services', compact('title','services'));
    }
    public function jobberReviewContract(Request $request ,$id){
         $user = Auth::user();
         $review = new Reviews();
         $review->message = $request->message;
         $review->star = $request->star;
         $review->sender_id = Auth::user()->id;
         $contract = Contract::where('id','=',$id)->first();
         if($user->role==1) {
             $review->reciver_id = $contract->applicant_id;
         }
         else{
             $review->reciver_id = $contract->jober_id;
         }

         $review->contract_id = $id;
         if($review->save()){
             if($user->role==1) {
                 $contract->jobber_id_applicant = $review->id;
             }
             else {
                 $contract->review_id_applicant = $review->id;
             }
             }
             $contract->save();
             $notification = array(
                 'messege' => 'Your Review Added',
                 'alert-type' => 'success'
             );
             return redirect()->back()->with($notification);
         }

     public function comments($id){
         $title = 'Commentaires';
       $comments = Comments::where('job_id', '=', $id)->get();
       return view('front.common.comments', compact('comments', 'title', 'id'));
     }
     public function commentSubmit(Request $request){
         $comment = new Comments();
         $comment->job_id = $request->job_id;
         $comment->user_id = Auth::user()->id;
         $comment->comment = $request->comment;
         $comment->save();
         $notification = array(
             'messege' => 'Le commentaire a été ajouté avec succès',
             'alert-type' => 'success'
         );
         return redirect()->back()->with($notification);
     }
}
