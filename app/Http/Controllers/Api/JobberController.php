<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Jobber\JobCollection;
use App\Ignorjobrequest;
use App\JobRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobberController extends Controller
{
    public function jobs(){
        $user = auth()->user();
        $jobStatus = Ignorjobrequest::where('user_id',$user->id)->pluck('j_id');
        $skills = json_decode($user->skills,true);
        $jobrequests = JobRequest::latest()->where('country_id', '=', $user->country)->whereNotIn('id',$jobStatus)->whereIn('subcategory_id',$skills)->where('service_date' , '>=' , Carbon::now()->toDateTimeString())->where('status', '=', 1)->get();
        $data = JobCollection::collection($jobrequests);
        return response()->json($data);
    }
}
