<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\Http\Resources\v1\Applicant\JobRequestCollection;
use App\Http\Resources\v1\Jobber\JobCollection;
use App\Http\Resources\v1\Jobber\ProposalCollection;
use App\JobRequest;
use App\JobStatus;
use App\Proposal;
use App\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $jobrequest->lat = $request->lat ?? $user->latitude;
            $jobrequest->long = $request->long ?? $user->longitude;
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
                $name = time() . 'images' . '.' . $image1->getClientOriginalExtension();
                $destinationPath = 'images/';
                $image1->move($destinationPath, $name);
                $jobrequest->image1 = 'images/' . $name;

            }
            if ($request->hasFile('image2')) {
                $image2 = $request->file('image2');
                $name2 = time() . 'images' . '.' . $image2->getClientOriginalExtension();
                $destinationPath = 'images/';
                $image2->move($destinationPath, $name2);
                $jobrequest->image2 = 'images/' . $name2;
            }
            if ($request->hasFile('image3')) {
                $image3 = $request->file('image3');
                $name3 = time() . 'images' . '.' . $image3->getClientOriginalExtension();
                $destinationPath = 'images/';
                $image3->move($destinationPath, $name3);
                $jobrequest->image3 = 'images/' . $name3;
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

    public function jobs($status)
    {
        $user = Auth::user();
        $jobrequests = JobRequest::latest()->where('applicant_id', $user->id)->where('status', $status)->get();
        $data = JobCollection::collection($jobrequests);
        return response()->json($data);
    }
    public function proposals()
    {
        $user = Auth::user();
        $jobs = JobRequest::where('applicant_id', $user->id)->pluck('id');
        $activeProposals = Proposal::latest()->whereIn('jobRequest_id', $jobs)->where('status', '=', 1)->get();
        $acceptProposals = Proposal::latest()->whereIn('jobRequest_id', $jobs)->where('status', '=', 2)->get();
        $rejectProposals = Proposal::latest()->whereIn('jobRequest_id', $jobs)->where('status', '=', 3)->get();
        $success['activeProposal'] = ProposalCollection::collection($activeProposals);
        $success['acceptProposal'] = ProposalCollection::collection($acceptProposals);
        $success['rejectProposal'] = ProposalCollection::collection($rejectProposals);
        return response()->json($success, 200);
    }
}
