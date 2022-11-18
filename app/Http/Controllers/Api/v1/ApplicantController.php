<?php

namespace App\Http\Controllers\Api\v1;

use App\Card;
use App\Check;
use App\Comments;
use App\Contract;
use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\Http\Resources\v1\Applicant\CesuCollection;
use App\Http\Resources\v1\Applicant\CommentsCollection;
use App\Http\Resources\v1\Applicant\ContractCollection;
use App\Http\Resources\v1\Applicant\JobCollectionResource;
use App\Http\Resources\v1\Applicant\JobRequestCollection;
use App\Http\Resources\v1\Applicant\WalletDetails;
use App\Http\Resources\v1\Common\Trancations;
use App\Http\Resources\v1\Jobber\ProposalCollection;
use App\JobRequest;
use App\JobStatus;
use App\Payment;
use App\Proposal;
use App\Reviews;
use App\User;
use App\Wallet;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class ApplicantController extends Controller
{
    public function jobRequestSubmit(Request $request)
    {
        $user = Auth::user();
        try {
            $jobrequest = new JobRequest();
            $jobrequest->applicant_id = $user->id;
            $jobrequest->category_id = $request->category_id;
            $jobrequest->subcategory_id = $request->subcategory_id;
            $jobrequest->childcategory_id = $request->childcategory_id;
            $jobrequest->country_id = $request->country_id;
            $jobrequest->title = $request->title;
            $jobrequest->description = $request->description;
            $jobrequest->service_date = $request->service_date;
            $jobrequest->start_time = $request->start_time;
            $endtime = Carbon::parse($request->start_time);
            $endTime = $endtime->addMinutes($request->duration*60);
            $jobrequest->end_time = $endTime->format('H:i');
            $jobrequest->duration = $request->duration;
            $jobrequest->hours = $request->hours;
            $jobrequest->estimate_budget = $request->estimate_budget;
            $jobrequest->address = $request->address . '-' . $request->state . '-' . $request->postal;
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
            $jobrequest->detail_description = $request->detail_description;
            $jobrequest->lat = $request->latitude ?? $user->latitude;
            $jobrequest->long = $request->longitude ?? $user->longitude;
            $jobrequest->pickup_address = $request->pickup_address;
            $jobrequest->destination_address = $request->destination_address;
            $jobrequest->jobbers = $request->jobbers;
            $jobrequest->urgent = $request->urgent;
            $jobrequest->dob = $request->dob;
            if ($request->childcategory_id == 29) {
                if ($request->child_question) {
                    foreach ($request->child_question as $ques) {
                        $data[] = $ques;
                        $jobrequest->child_question = json_encode($data);
                    }
                }
                if ($request->child_dob) {
                    foreach ($request->child_dob as $dateofbirth) {
                        $dataa[] = $dateofbirth;
                        $jobrequest->child_dob = json_encode($dataa);
                    }
                }
            }

            if ($request->hasFile('image1')) {
                $image1 = $request->file('image1');
                $name1 = time() . 'image1' . '.' . $image1->getClientOriginalExtension();
                $destinationPath = 'images';
                ini_set('memory_limit', '256M');
                $img = Image::make($image1);
                $img->resize(250, 250, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $name1);
                $jobrequest->image1 = $destinationPath . '/' . $name1;
            }
            if ($request->hasFile('image2')) {
                $image2 = $request->file('image2');
                $name2 = time() . 'image1' . '.' . $image2->getClientOriginalExtension();
                $destinationPath = 'images';
                ini_set('memory_limit', '256M');
                $img2 = Image::make($image2);
                $img2->resize(250, 250, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $name2);
                $jobrequest->image2 = $destinationPath . '/' . $name2;
            }
            if ($request->hasFile('image3')) {
                $image3 = $request->file('image3');
                $name3 = time() . 'image1' . '.' . $image3->getClientOriginalExtension();
                $destinationPath = 'images';
                ini_set('memory_limit', '256M');
                $img3 = Image::make($image3);
                $img3->resize(250, 250, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $name3);
                $jobrequest->image3 = $destinationPath . '/' . $name3;
            }
            $jobrequest->save();
            if ($request->status) {
                $status = JobStatus::find($request->status);
                $status->delete();
            }


            $activity = "Demande d'emploi";
            $msg = "Il y a une nouvelle offre d'emploi dans votre région";

            $jobbers = User::where('id', '!=', $user->id)->where('country', '=', $user->country)->get();
            foreach ($jobbers as $jobber) {
                NotificationHelper::addtoNitification($user->id, $jobber->id, $msg, $jobrequest->id, $activity, $user->country);
            }
            NotificationHelper::pushNotification($msg, $jobbers->pluck('device_token'), $activity);

            return response()->json(['success' => 'JobRequest Submit Successfully'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'JobRequest Not Submit Successfully' . $e->getMessage()], 400);
        }
    }

    public function jobRequestUpdate(Request $request)
    {
        $jobrequest = JobRequest::find($request->job_id);
        $jobrequest->service_date = $request->service_date;
        $jobrequest->start_time = $request->start_time;
        $endtime = Carbon::parse($request->start_time);
        $endTime = $endtime->addMinutes($jobrequest->duration*60);
        $jobrequest->end_time = $endTime->format('H:i');
        $jobrequest->detail_description = $request->detail_description;
        $jobrequest->status = 1;
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $name1 = time() . 'image1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'images';
            ini_set('memory_limit', '256M');
            $img = Image::make($image1);
            $img->resize(250, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $name1);
            $jobrequest->image1 = $destinationPath . '/' . $name1;
        }
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $name2 = time() . 'image1' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'images';
            ini_set('memory_limit', '256M');
            $img2 = Image::make($image2);
            $img2->resize(250, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $name2);
            $jobrequest->image2 = $destinationPath . '/' . $name2;
        }
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $name3 = time() . 'image1' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'images';
            ini_set('memory_limit', '256M');
            $img3 = Image::make($image3);
            $img3->resize(250, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $name3);
            $jobrequest->image3 = $destinationPath . '/' . $name3;
        }
        $jobrequest->update();
        return response()->json(['success' => 'JobRequest Updated Successfully'], 200);
    }

    public function jobs($status)
    {
        $user = Auth::user();
        $jobrequests = JobRequest::latest()->where('applicant_id', $user->id)->where('status', $status)->get();
        $data = JobCollectionResource::collection($jobrequests);
        return response()->json($data);
    }

    public function closejob($id)
    {
        $user = Auth::user();
        $jobrequests = JobRequest::latest()->where('applicant_id', $user->id)->where('id', $id)->first();
        $jobrequests->status = 2;
        if ($jobrequests->update()){
            return response()->json(['success' => 'Job close successfully']);
        }else{
            return response()->json(['error' => 'Something is wrong'], 400);
        }
    }

    public function proposals($id)
    {
        $jobs = Proposal::where('jobRequest_id', $id)->get();
        $data = ProposalCollection::collection($jobs);
        return response()->json($data);
    }

    public function comments(Request $request)
    {
        $comments = new Comments();
        $comments->job_id = $request->job_id;
        $comments->comment = $request->comment;
        $comments->user_id = Auth::user()->id;
        $comments->save();
        return response()->json(['success' => 'Comments Save Successfully'], 200);

    }

    public function getComments($id)
    {
        $comments = Comments::where('job_id', '=', $id)->latest()->get();
        $success = CommentsCollection::collection($comments);
        return response()->json($success, 200);
    }

    public function contractIntent($proposal_id)
    {
        $proposal = Proposal::find($proposal_id);

        if (isset($proposal->price)) {
            Stripe::setApiKey('sk_test_bNs6F2GH5AWstJEQg7KT852l00SdVU7GF0');
            $payment_intent = PaymentIntent::create([
                'amount' => ($proposal->price) * 100,
                'currency' => 'EUR'
            ]);
        }
        $success = $payment_intent->client_secret;
        return response()->json($success, 200);
    }

    public function proposalsContract(Request $request)
    {
        $applicant_id = Auth::user();
        $proposal = Proposal::find($request->proposal_id);
        $proposal->status = 2;
        $proposal->update();
        $jobrequest = JobRequest::find($proposal->jobRequest_id);
        $jobrequest->status = 1;
        $jobrequest->update();

        $contract = new Contract();
        $contract->proposal_id = $request->proposal_id;
        $contract->jobRequest_id = $proposal->jobRequest_id;
        $contract->applicant_id = $applicant_id->id;
        $contract->jober_id = $proposal->jobber_id;
        $contract->s_time = $jobrequest->start_time;
        $contract->e_time = $request->e_time;
        $contract->price = $proposal->price;
        $contract->description = $request->description;
        $contract->contract_no = 'CN-' . rand(10000, 90000);
        $contract->save();

        $payment = new Payment();
        $payment->contract_id = $contract->id;
        $payment->applicant_id = $applicant_id->id;
        $payment->jobber_id = $proposal->jobber_id;
        $payment->price = $request->price;
        $payment->contract_price = $proposal->price;
        $payment->percentage = $request->percentage;
        $payment->jobber_get = (double)$proposal->price - (double)$request->percentage;
        $payment->type = 'direct';
        $payment->invoice_no = 'IN-' . rand(10000, 90000);
        $payment->save();

        $activity = "Début du contrat";
        $msg = "Votre contrat commence avec le demandeur";

        NotificationHelper::pushNotification($msg, $proposal->jobber->device_token, $activity);
        NotificationHelper::addtoNitification($applicant_id->id, $proposal->jobber_id, $msg, $contract->id, $activity, $applicant_id->country);

        return response()->json(['success' => 'Contract Save Successfully'], 200);
    }
    public function contract($job_id)
    {
        $contract = Contract::where('jobRequest_id','=',$job_id)->get();
        $success = ContractCollection::collection($contract);
        return response()->json($success, 200);
    }
    public function jobComplete(Request $request, $id){
        $user = Auth::user();
        $jobrequests = JobRequest::where('id', $id)->first();
        $jobrequests->status = 2;
        $jobrequests->update();

        $contract = Contract::where('jobRequest_id', $id)->first();
        $contract->status = 2;
        $contract->update();

        $payment = Payment::where('contract_id', $contract->id)->first();
        $payment->status = 1;
        $payment->update();

        $jobber = User::find($contract->jober_id);
        $jobber->wallet = $jobber->wallet + $payment->jobber_get;
        $jobber->update();

        $review = new Reviews();
        $review->sender_id = $user->id;
        $review->reciver_id = $contract->jober_id;
        $review->contract_id = $contract->id;
        $review->message = $request->message;
        $review->star = $request->star;
        $review->save();

        if ($review->save()){
            return response()->json(['success' => 'Job complete successfully']);
        }else{
            return response()->json(['error' => 'Something is wrong'], 400);
        }
    }
    public function cesuSubmit(Request $request){
        $cesu = new Check();
        $cesu->user_id = Auth::user()->id;
        $cesu->number = $request->number;
        if ($cesu->save()){
            return response()->json(['success' => 'Cesy Ticked add successfully']);
        }else{
            return response()->json(['error' => 'Something is wrong'], 400);
        }
    }
    public function cesuTickets(){
        $tickets = Check::where('user_id', Auth::user()->id)->get();
        $success = CesuCollection::collection($tickets);
        return response()->json($success, 200);
    }
    public function walletDetails(){
        $user = Auth::user()->id;
        $wallet = Wallet::where('user_id', $user->id)->get();
        return response()->json([
            'wallet' => (string)$user->wallet??"0",
            'details' => WalletDetails::collection($wallet)
        ]);
    }
    public function redeemGiftCard(Request $request){
        $user = Auth::user();
        $card = Card::where('sku', $request->number)->first();
        if ($card){
            $card->status = 1;
            $card->update();
            $walet = new Wallet();
            $walet->amount = '100';
            $walet->user_id = $user->id;
            $walet->paymant_type = 'GIFT CARD';
            $walet->transaction_type = 'ingoing';
            $walet->save();

            $user->wallet = $user->wallet + 100;
            $user->update();
            return response()->json(['success' => 'Gift Card Redeem successfully']);
        }else{
            return response()->json(['error' => 'Gift Card Number not exist'], 404);
        }
    }
    public function transactions(){
        $payments = Payment::where('applicant_id', Auth::user()->id)->latest()->get();
        $success = Trancations::collection($payments);
        return response()->json($success, 200);
    }
}
