<?php

namespace App\Http\Controllers;

use App\JobStatus;
use App\Mail\DraftJobs;
use App\Contract;
use App\JobberProfile;
use App\JobRequest;
use App\Mail\NotResponce;
use App\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class CronController extends Controller
{
    public function draftjobs(){
        $drafts = JobStatus::where('status', 0)->get();
        foreach ($drafts as $draft){
            if ($draft->sub){
                if ($draft->sub_category != 0){
                    Mail::to($draft->user->email)->send(new DraftJobs($draft));
                }
            }else{
                if ($draft->child_category != 0){
                    Mail::to($draft->user->email)->send(new DraftJobs($draft));
                }
            }
        }
    }
    public function notResponceProposals(){
        $jobRequest = JobRequest::where('status','=',1)->get();
        foreach ($jobRequest as $row ){
            $day = $row->created_at->diffInHours(Carbon::now());
            if($day>=24){
                $contract = Contract::where('jobRequest_id',$row->id)->first();
                if(!$contract){
                    $dataa = array(
                        'firstName' => $contract->applicant->firstName,
                        'lastName' => $contract->applicant->lastName,
                    );
                    Mail::to($contract->applicant->email)->send(new  NotResponce($dataa));
                    return 1;
                }
                else{
                    return 0;
                }
            }


        }






        return view('front.settings.gift',compact('card','title'));
    }
}
