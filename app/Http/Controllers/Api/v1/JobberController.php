<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\Http\Resources\v1\Jobber\CheckProfileCompletion;
use App\Http\Resources\v1\Jobber\JobCollection;
use App\Http\Resources\v1\Jobber\ProposalCollection;
use App\Ignorjobrequest;
use App\JobberProfile;
use App\JobberSkills;
use App\JobRequest;
use App\Jobs\NewProposalJob;
use App\Proposal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobberController extends Controller
{
    public function jobs()
    {
        $user = auth()->user();
        $jobStatus = Ignorjobrequest::where('user_id', $user->id)->pluck('j_id');
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $skills1 = json_decode($jobberProfile->skills1 ?? "[]", true);
        $skills2 = json_decode($jobberProfile->skills2 ?? "[]", true);
        $jobrequests1 = JobRequest::latest()->whereNotIn('id', $jobStatus)->whereIn('subcategory_id', $skills1)->where('service_date', '>=', Carbon::now()->toDateTimeString())->where('status', '=', 1)->get();
        $jobrequests2 = JobRequest::latest()->whereNotIn('id', $jobStatus)->whereIn('childcategory_id', $skills2)->where('service_date', '>=', Carbon::now()->toDateTimeString())->where('status', '=', 1)->get();
        $merged = $jobrequests1->merge($jobrequests2);
        $result = $merged->all();
        $data = [];
        foreach ($result as $row) {
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
            NotificationHelper::pushNotification($msg, $proposal->jobrequest->applicant->device_token, $activity);
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

    public function proposals()
    {
        $user = Auth::user();
        $activeProposals = Proposal::latest()->where('jobber_id', '=', $user->id)->where('status', '=', 1)->get();
        $acceptProposals = Proposal::latest()->where('jobber_id', '=', $user->id)->where('status', '=', 2)->get();
        $rejectProposals = Proposal::latest()->where('jobber_id', '=', $user->id)->where('status', '=', 3)->get();
        $success['activeProposal'] = ProposalCollection::collection($activeProposals);
        $success['acceptProposal'] = ProposalCollection::collection($acceptProposals);
        $success['rejectProposal'] = ProposalCollection::collection($rejectProposals);
        return response()->json($success, 200);
    }

    public function skills(Request $request)
    {
        $user = Auth::user();
        $checkSkills = JobberSkills::where('jobber_id', $user->id)->where('main_category', $request->main_category)->orWhere('sub_category', $request->sub_category)->first();
        if ($checkSkills) {
            return response()->json(['error' => 'Skills against this user already update'], 400);
        } else {
            $jobberSkills = new JobberSkills();
            $jobberSkills->jobber_id = $user->id;
            $jobberSkills->main_category = $request->main_category;
            $jobberSkills->sub_category = $request->sub_category;
            $jobberSkills->description = $request->description;
            $jobberSkills->diploma = $request->diploma;
            $jobberSkills->diploma_name = $request->diploma_name;
            $jobberSkills->experience = $request->experience;
            if ($request->skills) {
                foreach ($request->skills as $skill) {
                    $data[] = $skill;
                    $jobberSkills->skills = json_encode($data);
                }
            }
            if ($request->job_type) {
                foreach ($request->job_type as $jobTypes) {
                    $data1[] = $jobTypes;
                    $jobberSkills->job_type = json_encode($data1);
                }
            }
            if ($request->equipments) {
                foreach ($request->equipments as $equipments) {
                    $data2[] = $equipments;
                    $jobberSkills->equipments = json_encode($data2);
                }
            }
            if ($request->engagments) {
                foreach ($request->engagments as $engagments) {
                    $data3[] = $engagments;
                    $jobberSkills->engagments = json_encode($data3);
                }
            }
            $jobberSkills->save();
            return response()->json(['success' => 'Skills Update Successfully'], 200);
        }
    }

    public function checkSkills()
    {
        $user = Auth::user();
        $checkSkills = JobberSkills::where('jobber_id', $user->id)->get();
        return response()->json([
            '1' => $checkSkills->where('main_category', 1)->first() ? true : false,
            '2' => $checkSkills->where('main_category', 2)->first() ? true : false,
            '3' => $checkSkills->where('main_category', 3)->first() ? true : false,
            '4' => $checkSkills->where('main_category', 4)->first() ? true : false,
            '5' => $checkSkills->where('main_category', 5)->first() ? true : false,
            '6' => $checkSkills->where('main_category', 6)->first() ? true : false,
            '7' => $checkSkills->where('main_category', 7)->first() ? true : false,
            '8' => $checkSkills->where('main_category', 8)->first() ? true : false,
            '9' => $checkSkills->where('main_category', 9)->first() ? true : false,
            '10' => $checkSkills->where('main_category', 10)->first() ? true : false,
            '11' => $checkSkills->where('main_category', 11)->first() ? true : false,
            '12' => $checkSkills->where('main_category', 12)->first() ? true : false,
            '13' => $checkSkills->where('main_category', 13)->first() ? true : false,
            '14' => $checkSkills->where('sub_category', 1)->first() ? true : false,
            '15' => $checkSkills->where('sub_category', 2)->first() ? true : false,
            '16' => $checkSkills->where('sub_category', 3)->first() ? true : false,
            '17' => $checkSkills->where('sub_category', 4)->first() ? true : false,
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
}
