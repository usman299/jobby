<?php

namespace App\Http\Controllers;

use App\JobStatus;
use App\Mail\DraftJobs;
use App\Contract;
use App\JobberProfile;
use App\JobRequest;
use App\Mail\NotResponce;
use App\Mail\JobberNotResponse;
use App\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class CronController extends Controller
{
//    y funcion draft wali job posts k users ko email send kr k un ka status change kr deta hy ic sy bas ek user ko ek dfa email jay ge
    public function draftjobs(){
        $start = Carbon::now();
        $drafts = JobStatus::where('status', 0)->get();
        foreach ($drafts as $draft){
            if ($draft->sub){
                if ($draft->sub_category != 0){
//                    Mail::to($draft->user->email)->send(new DraftJobs($draft));
                    $job = new \App\Jobs\SendEmailJob($draft->user->email , $draft);
                    $job->delay($start->addSeconds(36));
                    dispatch($job);
                    $draft->status = 1;
                    $draft->update();
                }
            }else{
                if ($draft->child_category != 0){
//                    Mail::to($draft->user->email)->send(new DraftJobs($draft));
                    $job = new \App\Jobs\SendEmailJob($draft->user->email , $draft);
                    $job->delay($start->addSeconds(36));
                    dispatch($job);
                    $draft->status = 1;
                    $draft->update();
                }
            }
            sleep(50);
        }
    }
    //jb proposal par applicant responce na de
    public function notResponceProposals(){
        $jobRequest = JobRequest::where('status','=',1)->whereDate('created_at', Carbon::yesterday())->get();
        foreach ($jobRequest as $row ){
            $contract = Contract::where('jobRequest_id',$row->id)->first();
        if($contract==null){
            $dataa = array(
                'firstName' => $row->applicant->firstName,
                'lastName' => $row->applicant->lastName,

            );
            Mail::to($row->applicant->email)->send(new  NotResponce($dataa));
             return 1;
            }
        }

    }

    //Jb Jobber Jobrequest pe responce na kre
    public function notJobberSendProposals(){
        $jobRequest = JobRequest::where('status','=',1)->whereDate('created_at', Carbon::yesterday())->get();
        foreach ($jobRequest as $row ){
            $proposal = Proposal::where('jobRequest_id',$row->id)->first();

            if($proposal==null){
                $dataa = array(
                    'firstName' => $row->applicant->firstName,
                    'lastName' => $row->applicant->lastName,
                );
                Mail::to($row->applicant->email)->send(new  JobberNotResponse($dataa));
                return 1;
            }
        }

    }

}
