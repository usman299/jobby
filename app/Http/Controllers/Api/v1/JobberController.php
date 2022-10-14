<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\Http\Resources\v1\Jobber\JobCollection;
use App\Http\Resources\v1\Jobber\ProposalCollection;
use App\Ignorjobrequest;
use App\JobberProfile;
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
        $skills1 = json_decode($jobberProfile->skills1, true);
        $skills2 = json_decode($jobberProfile->skills2, true);
        $jobrequests1 = JobRequest::latest()->where('country_id', '=', $user->country)->whereNotIn('id', $jobStatus)->whereIn('subcategory_id', $skills1)->where('service_date', '>=', Carbon::now()->toDateTimeString())->where('status', '=', 1)->get();
        $jobrequests2 = JobRequest::latest()->where('country_id', '=', $user->country)->whereNotIn('id', $jobStatus)->whereIn('childcategory_id', $skills2)->where('service_date', '>=', Carbon::now()->toDateTimeString())->where('status', '=', 1)->get();
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

    public function skillsOne(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();

        if ($request->subcategory_id) {

            foreach ($request->subcategory_id as $skill) {
                $data[] = $skill;
                $jobberProfile->skills1 = json_encode($data);
            }
        }
        $jobberProfile->update();
        return response()->json(['success' => 'Skills Update Successfully'], 200);
    }

    public function skillsTwo(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();

        if ($request->childcategory) {

            foreach ($request->childcategory as $skill) {
                $data[] = $skill;
                $jobberProfile->skills2 = json_encode($data);
            }
        }
        $jobberProfile->update();
        return response()->json(['success' => 'Skills Update Successfully'], 200);
    }

    public function jobrequestsIgnore($job_id)
    {

        $status = new Ignorjobrequest();
        $status->j_id = $job_id;
        $status->user_id = Auth::user()->id;
        $status->save();
        return response()->json(['success' => 'Job Ignore Successfully'], 200);

    }
}
