<?php

namespace App\Http\Controllers\Api\v1;

use App\ChildCategory;
use App\Comments;
use App\Contract;
use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\Http\Resources\v1\Applicant\CommentsCollection;
use App\Http\Resources\v1\Common\Trancations;
use App\Http\Resources\v1\Jobber\CheckProfileCompletion;
use App\Http\Resources\v1\Jobber\JobCollection;
use App\Http\Resources\v1\Jobber\MyOffersCollection;
use App\Http\Resources\v1\Jobber\ReviewsCollection;
use App\Ignorjobrequest;
use App\JobberProfile;
use App\JobberSkills;
use App\JobRequest;
use App\Jobs\NewProposalJob;
use App\Payment;
use App\Points;
use App\Proposal;
use App\SubCategory;
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
        $skillSets = JobberSkills::where('jobber_id', $user->id)->get();
        $skills = [];
        foreach ($skillSets as $skillSet) {
            $skills = array_merge($skills, explode(',', $skillSet->skills));
        }
        $jobrequests = JobRequest::
        whereNotIn('id', $jobStatus)
            ->whereDate('service_date', '>=', Carbon::now())
            ->whereIn('skils', $skills)
            ->where('status', '=', '1')
            ->latest()
            ->get();
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

    public function scheduleJobs()
    {
        $jobs = Contract::where('jober_id', Auth::user()->id)->latest()->pluck('jobRequest_id');
        $jobrequests = JobRequest::latest()->whereIn('id', $jobs)->get()->unique('service_date');
        $data = [];
        foreach ($jobrequests as $job) {
            $jobDetail = JobRequest::whereIn('id', $jobs)->whereDate('service_date', $job->service_date)->get();
            $data[$job->service_date->format('Y-m-d')] = JobCollection::collection($jobDetail);
        }
        if ($data == []) {
            return response()->json(null);
        } else {
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
            NotificationHelper::pushNotification($msg, [$proposal->jobrequest->applicant->device_token], $activity);
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

    public function updateSkills(Request $request, $id)
    {
        $user = Auth::user();
        $jobberSkills = JobberSkills::where('jobber_id', $user->id)->where('id', $id)->first();
        if (!$jobberSkills) {
            return response()->json(['error' => 'Something happened wrong'], 400);
        }
        $jobberSkills->description = $request->description ?? $jobberSkills->description;
        $jobberSkills->diploma = $request->diploma ?? $jobberSkills->diploma;
        $jobberSkills->diploma_name = $request->diploma_name ?? $jobberSkills->diploma_name;
        $jobberSkills->experience = $request->experience ?? $jobberSkills->experience;
        $jobberSkills->skills = $request->skills ?? $jobberSkills->skills;
        $jobberSkills->equipments = $request->equipments ?? $jobberSkills->equipments;
        $jobberSkills->engagments = $request->engagments ?? $jobberSkills->engagments;
        if ($jobberSkills->update()) {
            return response()->json(['success' => 'Skills Update Successfully']);
        } else {
            return response()->json(['error' => 'Something happened wrong'], 400);
        }
    }

    public function skills(Request $request)
    {
        $user = Auth::user();
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
        $jobberSkills->save();
        return response()->json(['success' => 'Skills Update Successfully'], 200);
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
        $user->is_company = 1;
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
        $subscription = Subscribe::whereIn('id', [1, 2, 3])->get();
        return $subscription;
    }

    public function myOffers($id)
    {
        $user = Auth::user();
        $offers = Proposal::where('jobber_id', $user->id)->where('status', $id)->latest()->get();
        $data = MyOffersCollection::collection($offers);
        return response()->json($data);
    }

    public function singleJob($id)
    {
        $job = JobRequest::find($id);
        $success = new JobCollection($job);
        return response()->json($success, 200);
    }

    public function myComments()
    {
        $comments = Comments::where('user_id', Auth::user()->id)->get();
        $success = CommentsCollection::collection($comments);
        return response()->json($success, 200);
    }

    public function transactions()
    {
        $user = Auth::user();
        $payments = Payment::where('jobber_id', $user->id)->where('status', 1)->latest()->get();
        return response()->json([
            'wallet' => (string)$user->wallet ?? "",
            'transactions' => Trancations::collection($payments)
        ]);
    }

    public function reviews()
    {
        $user = Auth::user();
        return response()->json([
            'total_reviews' => $user->reviews()->count(),
            'rating' => $user->rating(),
            'stars_5' => $user->reviews()->where('star', 5)->count(),
            'stars_4' => $user->reviews()->where('star', 4)->count(),
            'stars_3' => $user->reviews()->where('star', 3)->count(),
            'stars_2' => $user->reviews()->where('star', 2)->count(),
            'stars_1' => $user->reviews()->where('star', 1)->count(),
            'reviews' => ReviewsCollection::collection($user->reviews()),
        ]);
    }

    public function mySkills()
    {
        $skills = JobberSkills::where('jobber_id', Auth::user()->id)->get();
        $data = [];
        foreach ($skills as $key => $skill) {
            $data[$key] = [
                'id' => $skill->id,
                'main_category_id' => (int)$skill->main_category ?? 0,
                'main_category' => (string)$skill->category->title ?? "0",
                'sub_category' => empty($skill->subcategory) ? "" : (string)$skill->subcategory->title ?? "0",
                'image' => isset($skill->subcategory) ? $skill->subcategory->img : $skill->category->img,
                'child_categories' => empty($skill->sub_category) ? [] : ChildCategory::where('subcategory_id', $skill->sub_category)->select('id', 'title')->get(),
                'sub_categories' => SubCategory::where('category_id', '!=', '1')->where('category_id', $skill->main_category)->select('id', 'title')->get() ?? [],
                'skills' => $skill->skills ?? "",
                'equipments' => $skill->equipments ?? "",
                'engagments' => $skill->engagments ?? "",
                'experience' => $skill->experience ?? "",
                'diploma_name' => $skill->diploma_name ?? "",
                'description' => $skill->description ?? "",
            ];
        }
        return $data;
    }

    public function subscriptionPayment($plan_id, $user_id, $subscription_id)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            $checkout_session = \Stripe\Checkout\Session::create([
                'line_items' => [[
                    'price' => $plan_id,
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'success_url' => route('web.index') . '/subscription/success/' . $user_id . '/{CHECKOUT_SESSION_ID}/'.$subscription_id,
                'cancel_url' => route('web.index') . '/subscription/cancel',
            ]);
            return response()->json(['url' => $checkout_session->url]);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function subscriptionSuccess($user_id, $session_id, $subscription_id)
    {
        $subscription = Subscribe::where('id', '=', $subscription_id)->first();
        $sub = new Subpaymant();
        $sub->sub_id = $subscription->id;
        $sub->user_id = $user_id;
        $sub->price = $subscription->price;
        $sub->key_id = $session_id;
        $sub->save();
        if ($sub->save()) {
            $user = User::find($user_id);
            $user->subscription = $subscription->id;
            $user->paymant_id = $sub->id;
            $user->sub_date = $sub->created_at;
            $user->offers = "Unlimited";
            $user->update();
        }
        return view('application.success');
    }

    public function subscriptionCancel(){
        return view('application.cancel');
    }

    public function retriveSubscription()
    {
        $sub_payment = Subpaymant::find(Auth::user()->paymant_id);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        if (Auth::user()->subscription == 1){
            return response()->json([
                'active_subscription_id' => "1",
                'subscription_status' => "Active",
                'subscription_portal' => "",
                'remaining_offers' => ucfirst(Auth::user()->offers)
            ]);
        }else{
            $checkout_session = \Stripe\Checkout\Session::retrieve($sub_payment->key_id);
            $sub = \Stripe\Subscription::retrieve($checkout_session->subscription, []);
            $session = \Stripe\BillingPortal\Session::create([
                'customer' => $checkout_session->customer,
                'return_url' => route('web.index') . '/subscription/cancel',
            ]);
            return response()->json([
                'active_subscription_id' => (string)Auth::user()->subscription??"",
                'subscription_status' => ucfirst($sub->status),
                'subscription_portal' => $session->url,
                'remaining_offers' => ucfirst(Auth::user()->offers)
            ]);
        }
    }

    public function points(){
        $points = Points::latest()->where('user_id', Auth::user()->id);
        return response()->json([
            'points' => $points->get()->sum('points'),
            'history' => $points->select('points', 'created_at', 'job_id')->get()
        ]);
    }
    public function paymentRecord(){
        $user = Auth::user();
        $payments = Payment::where('jobber_id', $user->id)->where('status', 1)
            ->whereYear('created_at', '=', "2023");
        return response()->json([
           'jan' =>  number_format($payments->whereMonth('created_at', '=', "01")->sum('price'), 2),
           'feb' =>  number_format($payments->whereMonth('created_at', '=', "02")->sum('price'), 2),
           'mar' =>  number_format($payments->whereMonth('created_at', '=', "03")->sum('price'), 2),
           'apr' =>  number_format($payments->whereMonth('created_at', '=', "04")->sum('price'), 2),
           'may' =>  number_format($payments->whereMonth('created_at', '=', "05")->sum('price'), 2),
           'jun' =>  number_format($payments->whereMonth('created_at', '=', "06")->sum('price'), 2),
           'jul' =>  number_format($payments->whereMonth('created_at', '=', "07")->sum('price'), 2),
           'aug' =>  number_format($payments->whereMonth('created_at', '=', "08")->sum('price'), 2),
           'sep' =>  number_format($payments->whereMonth('created_at', '=', "09")->sum('price'), 2),
           'oct' =>  number_format($payments->whereMonth('created_at', '=', "10")->sum('price'), 2),
           'nov' =>  number_format($payments->whereMonth('created_at', '=', "11")->sum('price'), 2),
           'dec' =>  number_format($payments->whereMonth('created_at', '=', "12")->sum('price'), 2),
        ]);
    }
}
