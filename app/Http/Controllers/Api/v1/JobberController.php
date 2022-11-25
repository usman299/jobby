<?php

namespace App\Http\Controllers\Api\v1;

use App\Comments;
use App\Contract;
use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\Http\Resources\v1\Applicant\CommentsCollection;
use App\Http\Resources\v1\Common\Trancations;
use App\Http\Resources\v1\Jobber\CheckProfileCompletion;
use App\Http\Resources\v1\Jobber\JobCollection;
use App\Http\Resources\v1\Jobber\MyOffersCollection;
use App\Ignorjobrequest;
use App\JobberProfile;
use App\JobberSkills;
use App\JobRequest;
use App\Jobs\NewProposalJob;
use App\Payment;
use App\Proposal;
use App\Subpaymant;
use App\Subscribe;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobberController extends Controller
{
    public function jobs()
    {
        $user = auth()->user();
        $jobStatus = Ignorjobrequest::where('user_id', $user->id)->pluck('j_id');
        $jobrequests = JobRequest::latest()->whereNotIn('id', $jobStatus)->whereDate('service_date', '>=', Carbon::now())->where('status', '=', 1)->get();
        $data = [];
        foreach ($jobrequests as $row) {
            $earthRadius = 6378;
            $latFrom = deg2rad($user->latitude);
            $lonFrom = deg2rad($user->longitude);
            $latTo = deg2rad($row->lat);
            $lonTo = deg2rad($row->long);
            $latDelta = $latTo - $latFrom;
            $lonDelta = $lonTo - $lonFrom;
            $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
            $km = ($angle * $earthRadius) * 1.6;
            if ($km <= $user->radius) {
                $data[] = $row;
            }
        }
        $success = JobCollection::collection($data);
        return response()->json($success, 200);
    }

    public function scheduleJobs(){
        $jobs = Contract::where('jober_id', Auth::user()->id)->latest()->pluck('jobRequest_id');
        $jobrequests = JobRequest::latest()->whereIn('id', $jobs)->get()->unique('service_date');
        $data = [];
        foreach ($jobrequests as $job){
            $jobDetail = JobRequest::whereIn('id', $jobs)->whereDate('service_date', $job->service_date)->get();
            $data[$job->service_date->format('Y-m-d')] = JobCollection::collection($jobDetail);
        }
        if ($data == []){
            return response()->json(null);
        }else{
            return json_encode($data);
        }
    }

    public function proposalSubmit(Request $request)
    {
        $user = Auth::user();
        $check = Proposal::where('jobber_id', '=', $user->id)->where('jobRequest_id', '=', $request->id)->first();
        if ($check) {
            return response()->json(['error' => 'Déjà appliqué'], 400);
        } else {
            $proposal = new Proposal();
            $proposal->jobRequest_id = $request->id;
            $proposal->price = $request->price;
            $proposal->hours = $request->hours;
            $proposal->duration = $request->duration;
            $proposal->total_hours = $request->total_hours;
            $proposal->service_price = $request->service_price;
            $proposal->tax = $request->tax;
            $proposal->jobber_id = $user->id;
            $proposal->save();
            if ($user->subscription == 1) {
                $user->offers = $user->offers - 1;
                $user->update();
            }
            $activity = "Nouvelle proposition";
            $msg = "Vous avez une nouvelle proposition sur votre demande d'emploi";
            NotificationHelper::pushNotification($msg, $proposal->jobrequest->applicant->pluck('device_token'), $activity);
            NotificationHelper::addtoNitification($user->id, $proposal->jobrequest->applicant->id, $msg, $proposal->id, $activity, $user->country);
            $dataa = array(
                'firstName' => $proposal->jobrequest->applicant->firstName,
                'lastName' => $proposal->jobrequest->applicant->lastName,
                'email' => $proposal->jobrequest->applicant->email,
            );
            dispatch(new NewProposalJob($dataa))->delay(Carbon::now()->addSeconds(5));
        }
        return response()->json(['success' => 'Proposal Submit Successfully'], 200);
    }

    public function skills(Request $request)
    {
        $user = Auth::user();
        $checkSkills = JobberSkills::where('jobber_id', $user->id)->where('main_category', $request->main_category)->first();
        if ($checkSkills) {
            return response()->json(['error' => 'Skills against this user already update'], 400);
        } else {
            $jobberSkills = new JobberSkills();
            $jobberSkills->jobber_id = $user->id;
            $jobberSkills->main_category = $request->main_category;
            $jobberSkills->sub_category = $request->sub_category;
            $jobberSkills->description = $request->description;
            $jobberSkills->diploma = $request->diploma;
            $jobberSkills->diploma_name = $request->diploma_name ?? "";
            $jobberSkills->experience = $request->experience;
            $jobberSkills->job_type = $request->job_type;
            $jobberSkills->skills = $request->skills;
            $jobberSkills->equipments = $request->equipments;
            $jobberSkills->engagments = $request->engagments;
//            if ($request->skills) {
//                foreach ($request->skills as $skill) {
//                    $data[] = $skill;
//                    $jobberSkills->skills = json_encode($data);
//                }
//            }
//            if ($request->job_type) {
//                foreach ($request->job_type as $jobTypes) {
//                    $data1[] = $jobTypes;
//                    $jobberSkills->job_type = json_encode($data1);
//                }
//            }
//            if ($request->equipments) {
//                foreach ($request->equipments as $equipments) {
//                    $data2[] = $equipments;
//                    $jobberSkills->equipments = json_encode($data2);
//                }
//            }
//            if ($request->engagments) {
//                foreach ($request->engagments as $engagments) {
//                    $data3[] = $engagments;
//                    $jobberSkills->engagments = json_encode($data3);
//                }
//            }
            $jobberSkills->save();
            return response()->json(['success' => 'Skills Update Successfully'], 200);
        }
    }

    public function checkSkills()
    {
        $user = Auth::user();
        $checkSkills = JobberSkills::where('jobber_id', $user->id)->get();
        return response()->json([
            'bricolage' => $checkSkills->where('main_category', 1)->first() ? true : false,
            'jardinage' => $checkSkills->where('main_category', 2)->first() ? true : false,
            'livraison' => $checkSkills->where('main_category', 3)->first() ? true : false,
            'menage' => $checkSkills->where('main_category', 4)->first() ? true : false,
            'enfants' => $checkSkills->where('main_category', 5)->first() ? true : false,
            'animal' => $checkSkills->where('main_category', 6)->first() ? true : false,
            'informative' => $checkSkills->where('main_category', 7)->first() ? true : false,
            'aide' => $checkSkills->where('main_category', 8)->first() ? true : false,
            'course' => $checkSkills->where('main_category', 9)->first() ? true : false,
            'enviorment' => $checkSkills->where('main_category', 10)->first() ? true : false,
            'technical' => $checkSkills->where('main_category', 11)->first() ? true : false,
            'mechanique' => $checkSkills->where('main_category', 12)->first() ? true : false,
            'location' => $checkSkills->where('main_category', 13)->first() ? true : false,
            'amenegement' => $checkSkills->where('sub_category', 1)->first() ? true : false,
            'electric' => $checkSkills->where('sub_category', 2)->first() ? true : false,
            'renovation' => $checkSkills->where('sub_category', 3)->first() ? true : false,
            'plumber' => $checkSkills->where('sub_category', 4)->first() ? true : false,
        ]);
    }

    public function jobrequestsIgnore($job_id)
    {
        $status = new Ignorjobrequest();
        $status->j_id = $job_id;
        $status->user_id = Auth::user()->id;
        $status->save();
        return response()->json(['success' => 'Job Ignore Successfully'], 200);
    }

    public function timming(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->monday = $request->monday;
        $jobberProfile->tuesday = $request->tuesday;
        $jobberProfile->wednesday = $request->wednesday;
        $jobberProfile->thersday = $request->thersday;
        $jobberProfile->friday = $request->friday;
        $jobberProfile->saturday = $request->saturday;
        $jobberProfile->sunday = $request->sunday;
        if ($jobberProfile->update()) {
            return response()->json(['success' => 'Timing Update SuccessFully'], 200);
        } else {
            return response()->json(['error' => 'Something is wrong'], 400);
        }
    }

    public function progressService(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->answer1 = $request->answer1;
        $jobberProfile->answer2 = $request->answer2;
        $jobberProfile->answer3 = $request->answer3;
        $jobberProfile->answer4 = $request->answer4;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function insurance(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->insurance1 = $request->insurance1;
        $jobberProfile->insurance2 = $request->insurance2;
        $jobberProfile->insurance3 = $request->insurance3;
        $jobberProfile->insurance4 = $request->insurance4;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function rules(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->rules1 = $request->rules1;
        $jobberProfile->rules2 = $request->rules2;
        $jobberProfile->rules3 = $request->rules3;
        $jobberProfile->rules4 = $request->rules4;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function score(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->score = $request->score;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function document(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        if ($request->hasfile('eu_id_card_front')) {
            $image1 = $request->file('eu_id_card_front');
            $name = time() . 'eu_id_card_front' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_card_front = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_card_back')) {
            $image1 = $request->file('eu_id_card_back');
            $name = time() . 'eu_id_card_back' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_card_back = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_driving_front')) {
            $image1 = $request->file('eu_id_driving_front');
            $name = time() . 'eu_id_driving_front' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_driving_front = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_driving_back')) {
            $image1 = $request->file('eu_id_driving_back');
            $name = time() . 'eu_id_driving_back' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_driving_back = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_passport_front')) {
            $image1 = $request->file('eu_id_passport_front');
            $name = time() . 'eu_id_passport_front' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_passport_front = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_passport_back')) {
            $image1 = $request->file('eu_id_passport_back');
            $name = time() . 'eu_id_passport_back' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_passport_back = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_residence_permit_front')) {
            $image1 = $request->file('eu_id_residence_permit_front');
            $name = time() . 'eu_id_residence_permit_front' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_residence_permit_front = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_residence_permit_back')) {
            $image1 = $request->file('eu_id_residence_permit_back');
            $name = time() . 'eu_id_residence_permit_back' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_residence_permit_back = 'img/' . $name;
        }
        $jobberProfile->update();
        return response()->json(['success' => 'Document Upload SuccessFully'], 200);
    }

    public function securityDocument(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->vital_card_number = $request->vital_card_number;
        $jobberProfile->social_security_number = $request->social_security_number;
        if ($request->hasfile('vital_card')) {
            $image1 = $request->file('vital_card');
            $name = time() . 'vital_card' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->vital_card = 'img/' . $name;
        }
        if ($request->hasfile('social_security_certificate')) {
            $image1 = $request->file('social_security_certificate');
            $name = time() . 'social_security_certificate' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->social_security_certificate = 'img/' . $name;
        }
        $jobberProfile->update();
        return response()->json(['success' => 'Document Upload SuccessFully'], 200);
    }

    public function radius(Request $request)
    {
        $user = Auth::user();
        $user->latitude = $request->latitude;
        $user->longitude = $request->longitude;
        $user->radius = $request->radius;
        $user->address = $request->address;
        if ($user->save()) {
            return response()->json(['success' => 'Update Address SuccessFully'], 200);
        } else {
            return response()->json(['error' => 'Something is wrong'], 404);
        }
    }

    public function checkProfileCompletion()
    {
        $user = Auth::user();
        $jobber = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $success = new CheckProfileCompletion($jobber);
        return response()->json($success, 200);
    }

    public function getBadgePro(Request $request)
    {
        $user = Auth::user();
        $user->is_company = "Yes";
        $user->company_name = $request->company_name;
        $user->vat_type = $request->vat_type;
        $user->company_address = $request->company_address;
        $user->siret = $request->siret;
        $user->pro = 1;
        if ($user->update()) {
            return response()->json(['success' => 'Update Info SuccessFully']);
        } else {
            return response()->json(['error' => 'Something is wrong'], 404);
        }
    }
    public function subscriptions()
    {
        $subscription = Subscribe::whereIn('id', [1,2,3])->get();
        return $subscription;
    }
    public function myOffers()
    {
        $user = Auth::user();
        $offers = Proposal::where('jobber_id', $user->id)->get();
        $data = MyOffersCollection::collection($offers);
        return response()->json($data);
    }
    public function singleJob($id){
        $job = JobRequest::find($id);
        $success = new JobCollection($job);
        return response()->json($success, 200);
    }
    public function myComments(){
        $comments = Comments::where('user_id', Auth::user()->id)->get();
        $success = CommentsCollection::collection($comments);
        return response()->json($success, 200);
    }
    public function transactions(){
        $user = Auth::user();
        $payments = Payment::where('jobber_id', $user->id)->where('status', 1)->latest()->get();
        return response()->json([
            'wallet' => (string)$user->wallet??"",
            'transactions' => Trancations::collection($payments)
        ]);
    }
    public function subscriptionIntent(){

        \Stripe\Stripe::setApiKey( env('STRIPE_SECRET'));

        $user= Auth::user();
        $customer = \Stripe\Customer::create([
            'email' => Auth::user()->email,
            'name' => Auth::user()->firstName.' '.Auth::user()->lastName,
            'description' => 'Test Customer',
            'payment_method' => ['card'],
        ]);
        $user->stripe_id = $customer->id;
        $user->save();

        $intent = \Stripe\Subscription::create([
            'customer' => $customer->id,
            'items' => [
                ['price' => 'price_1M7X4rD4LNNtfNaOitKMyx5y'],
            ],
        ]);
//        $payment_intent = \Stripe\PaymentIntent::create([
//            'amount' => 6.99 * 100,
//            'currency' => 'EUR',
//            'customer' => $customer->id,
//            'description' => "Description"
//        ]);
        return $intent->client_secret;
    }
    public function subscriptionSave(Request $request)
    {
        $subscription = Subscribe::where('id','=',$request->sub_id)->first();
        $user = Auth::user();
        $sub = new Subpaymant();
        $sub->sub_id = $subscription->id;
        $sub->user_id = Auth::user()->id;
        $sub->price = $request->total;
        $sub->key_id = $request->plan;
        $sub->card_holder_name = $request->card_holder_name;
        $sub->paymentMethodId = $request->paymentMethodId;
        $sub->message = $request->message;

        if($sub->save())
        {
            $user = User::find($sub->user_id);
            $user->subscription = $subscription->id;
            $user->paymant_id = $sub->id;
            $user->sub_date = $sub->created_at;
            $user->offers = 0;
            $user->update();
        }
        \Stripe\Stripe::setApiKey( env('STRIPE_SECRET'));

        \Stripe\Subscription::create([
            'customer' => $user->stripe_id,
            'default_payment_method' => $request->paymentMethodId,
            'items' => [
                ['price' => $request->plan],
            ],
        ]);
        return response()->json(['success' => 'Subscription Created Successfully']);
    }
}
