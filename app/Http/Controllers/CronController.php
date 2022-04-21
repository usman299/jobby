<?php

namespace App\Http\Controllers;

use App\JobStatus;
use App\Mail\DraftJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
}
