<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\ChildCategory;
use App\ChMessage;
use App\Comments;
use App\Contract;
use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\Ignorjobrequest;
use App\JobberProfile;
use App\JobRequest;
use App\JobStatus;
use App\JobViews;
use App\Mail\NewProposal;
use App\Payment;
use App\Proposal;
use App\Reviews;
use App\User;
use App\Notfication;
use Golchha21\ReSmushIt\Facades\Optimize;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\SubCategory;
use App\JobberServicesOffers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use DB;
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

        if ($request->urgent){
            $jobrequest->urgent = 1;
        }else{
            $jobrequest->urgent = 0;
        }


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
        $jobrequest->save();

        $status = JobStatus::find($request->status);
        $status->delete();

        $activity = "Demande d'emploi";
        $msg = "Il y a une nouvelle offre d'emploi dans votre région";

        $jobbers = User::where('id', '!=', $user->id)->where('country', '=', $user->country)->get();
        foreach ($jobbers as $jobber){
            NotificationHelper::addtoNitification($user->id, $jobber->id, $msg, $jobrequest->id, $activity, $user->country);
        }
        NotificationHelper::pushNotification($msg, $jobbers->pluck('device_token'), $activity);

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

        if ($request->urgent){
            $jobrequest->urgent = 1;
        }else{
            $jobrequest->urgent = 0;
        }

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
        $jobrequest->save();

        $status = JobStatus::find($request->status);
        $status->delete();

        $activity = "Demande d'emploi";
        $msg = "Il y a une nouvelle offre d'emploi dans votre région";

        $jobbers = User::where('id', '!=', $user->id)->where('country', '=', $user->country)->get();
        foreach ($jobbers as $jobber){
            NotificationHelper::addtoNitification($user->id, $jobber->id, $msg, $jobrequest->id, $activity, $user->country);
        }
        NotificationHelper::pushNotification($msg, $jobbers->pluck('device_token'), $activity);

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
        $draft = JobStatus::where('user_id', $user->id)->get();
        return view('front.applicant.jobrequests.jobrequests', compact('jobrequests','title', 'jobrequestsClose','draft'));
    }
    public function jobrequestsDetail($id){
        $user = Auth::user();
        $title = 'Détails de la demande';

        $jobrequest = JobRequest::find($id);
        $check_already_exist = JobViews::where('job_id', $id)->where('user_id', $user->id)->first();
        if (!$check_already_exist){
            $job_views = new JobViews();
            $job_views->job_id = $id;
            $job_views->user_id = $user->id;
            $job_views->save();
        }
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
    public function jobrequestsIgnor($id){

        $status = new Ignorjobrequest();
        $status->j_id = $id;
        $status->user_id = Auth::user()->id;
        $status->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
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
        $reviews = Reviews::where('reciver_id','=',$proposal->jobber_id)->get();
        $jobberprofile = JobberProfile::where('jobber_id','=',$proposal->jobber_id)->first();
           if (!$reviews->isempty()){
               $totalReview = Reviews::where('reciver_id','=',$proposal->jobber_id)->sum('star');
               $total = $reviews->count();
               $totalReviews = round($totalReview / $total);
               $fiveStar = (Reviews::where('star', '=', 5)->where('reciver_id','=',$proposal->jobber_id)->count() / $total) * 100;
               $fourStar = (Reviews::where('star', '=', 4)->where('reciver_id','=',$proposal->jobber_id)->count() / $total) * 100;
               $threeStar = (Reviews::where('star', '=', 3)->where('reciver_id','=',$proposal->jobber_id)->count() / $total) * 100;
               $twoStar = (Reviews::where('star', '=', 2)->where('reciver_id','=',$proposal->jobber_id)->count() / $total) * 100;
               $oneStar = (Reviews::where('star', '=', 1)->where('reciver_id','=',$proposal->jobber_id)->count() / $total) * 100;
           }
           else{
               $reviews =null;
               $totalReviews=0;
               $total=0;
               $fiveStar=0;
               $fourStar=0;
               $threeStar=0;
               $twoStar=0;
               $oneStar=0;
           }
        return view('front.applicant.proposals.details', compact('title', 'proposal','reviews','totalReviews','total','fiveStar','fourStar','threeStar', 'twoStar' ,'oneStar','jobberprofile'));
    }
    public function proposalAccept(Request $request, $id){
        $user = Auth::user();
        $proposal = Proposal::find($id);
        $proposal->status = 2;
        $proposal->update();

        $jobrequest = JobRequest::find($proposal->jobRequest_id);
        $jobrequest->status = 2;
        $jobrequest->update();

        $messageID = mt_rand(9, 999999999) + time();
        $message = new ChMessage();
        $message->id = $messageID;
        $message->type = 'user';
        $message->from_id = $user->id;
        $message->to_id = $proposal->jobber_id;
        $message->body = $request->description;
        $message->save();

        $activity = "Accepter la proposition";
        $msg = "Votre proposition est acceptée par le jobber";

        NotificationHelper::pushNotification($msg, $proposal->jobber->device_token, $activity);
        NotificationHelper::addtoNitification($user->id, $proposal->jobber_id, $msg, $proposal->id, $activity, $user->country);

        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->route('applicant.proposals')->with($notification);
    }
    public function proposalReject($id){
        $user = Auth::user();
        $proposal = Proposal::find($id);
        $proposal->status = 3;
        $proposal->update();

        $activity = "Rejet de la proposition";
        $msg = "Votre proposition est rejetée par le jobber";

        NotificationHelper::pushNotification($msg, $proposal->jobber->device_token, $activity);
        NotificationHelper::addtoNitification($user->id, $proposal->jobber_id, $msg, $proposal->id, $activity, $user->country);

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

        $applicant_id = Auth::user();

        $proposal = Proposal::find($id);
        $proposal->status = 2;
        $proposal->update();

        $jobrequest = JobRequest::find($proposal->jobRequest_id);
        $jobrequest->status = 2;
        $jobrequest->update();

        $contract = new Contract();
        $contract->proposal_id = $id;
        $contract->jobRequest_id = $proposal->jobRequest_id;
        $contract->applicant_id = $applicant_id->id;
        $contract->jober_id =  $proposal->jobber_id;
        $contract->e_time = $request->e_time;
        $contract->price = $proposal->price;
        $contract->description = $request->description;
        $contract->contract_no = 'CN-'.rand(10000, 90000);
        $contract->save();

        $payment = new Payment();
        $payment->contract_id = $contract->id;
        $payment->applicant_id = $applicant_id->id;
        $payment->jobber_id =  $proposal->jobber_id;

        $payment->price =  $request->total;
        $payment->contract_price =   $proposal->price;
        $payment->percentage =  $request->percentage;
        $payment->jobber_get =  $proposal->price - $request->percentage;

        $payment->type =  'card';
        $payment->invoice_no =  'IN-'.rand(10000, 90000);
        $payment->save();

        $activity = "Début du contrat";
        $msg = "Votre contrat commence avec le demandeur";

        NotificationHelper::pushNotification($msg, $proposal->jobber->device_token, $activity);
        NotificationHelper::addtoNitification($applicant_id->id, $proposal->jobber_id, $msg, $contract->id, $activity, $applicant_id->country);


        return view('front.payment.success', compact('contract'));
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
        $reviews = Reviews::where('reciver_id','=',$contract->jobber->id)->get();
        $jobberprofile = JobberProfile::where('jobber_id','=',$contract->jobber->id)->first();
        if (!$reviews->isempty()){
            $totalReview = Reviews::where('reciver_id','=',$contract->jobber->id)->sum('star');
            $total = $reviews->count();
            $totalReviews = round($totalReview / $total);
            $fiveStar = (Reviews::where('star', '=', 5)->where('reciver_id','=',$contract->jobber->id)->count() / $total) * 100;
            $fourStar = (Reviews::where('star', '=', 4)->where('reciver_id','=',$contract->jobber->id)->count() / $total) * 100;
            $threeStar = (Reviews::where('star', '=', 3)->where('reciver_id','=',$contract->jobber->id)->count() / $total) * 100;
            $twoStar = (Reviews::where('star', '=', 2)->where('reciver_id','=',$contract->jobber->id)->count() / $total) * 100;
            $oneStar = (Reviews::where('star', '=', 1)->where('reciver_id','=',$contract->jobber->id)->count() / $total) * 100;
        }
        else{
            $reviews =null;
            $totalReviews=0;
            $total=0;
            $fiveStar=0;
            $fourStar=0;
            $threeStar=0;
            $twoStar=0;
            $oneStar=0;
        }
        return view('front.applicant.contract.detials', compact('title', 'contract','reviews','totalReviews','total','fiveStar','fourStar','threeStar', 'twoStar' ,'oneStar','jobberprofile'));
    }
    public function applicantContractDetailsStatus($id,$status){
         $user = Auth::user();
         $contract = Contract::find($id);
         $contract->status = $status;
         $contract->update();

            if ($status==2) {
                $activity = "Travail terminé";
                $msg = "Votre travail est terminé par jobber";

                NotificationHelper::pushNotification($msg, $contract->applicant->device_token, $activity);
                NotificationHelper::addtoNitification($user->id, $contract->applicant->id, $msg, $id, $activity, $user->country);

                $notification = array(
                    'messege' => 'Contrat de livraison avec succès',
                    'alert-type' => 'success'
                );
            }
            elseif ($status==3) {
                Payment::where('contract_id', $contract->id)->update(['status' => 1]);
                $activity = "Contrat accepté";
                $msg = "Félicitations, votre contrat est accepté";

                NotificationHelper::pushNotification($msg, $contract->jobber->device_token, $activity);
                NotificationHelper::addtoNitification($user->id, $contract->jobber->id, $msg, $id, $activity, $user->country);

                $notification = array(
                    'messege' => 'Contrat terminé avec succès',
                    'alert-type' => 'success'
                );
            }
            elseif ($status==4){
                $notification = array(
                    'messege' => 'Réponse de l\'administrateur en attente',
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
             if($request->star<4) {
                 $dataa = array(
                     'firstName' => $contract->applicant->firstName,
                     'lastName' => $contract->applicant->lastName,

                 );

                 Mail::to($contract->applicant->email)->send(new  NewProposal($dataa));
             }

         }
         else{
             $review->reciver_id = $contract->jober_id;
             if($request->star<4) {
                 $dataa = array(
                     'firstName' => $contract->jobber->firstName,
                     'lastName' => $contract->jobber->lastName,

                 );

                 Mail::to($contract->jobber->email)->send(new  NewProposal($dataa));
             }
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
     public function transactions(){
         $title = 'Transactions';
         $user = Auth::user();
         $transactions = Payment::latest()->where('applicant_id', '=', $user->id)->get();
         return view('front.applicant.earnings.index', compact('transactions', 'title'));
     }
     public function search(Request $request){

         $subcategory = SubCategory::where('title', 'LIKE', '%' .$request->search. '%')->get();
         $childsubcategory = ChildCategory::where('title', 'LIKE', '%' .$request->search. '%')->get();
         return view('front.applicant.search', compact('subcategory', 'childsubcategory'));
     }
}
