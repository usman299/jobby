<?php

namespace App\Http\Controllers;

use App\Contract;
use App\JobberProfile;
use App\JobRequest;
use App\Mail\NotResponce;
use App\Proposal;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CronController extends Controller
{
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
