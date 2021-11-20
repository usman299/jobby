<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JobRequest;
use App\Http\Resources\JobRequest\PostJobRequestCollection;
use App\Http\Resources\JobRequest\JobRequestActiveCollection;
use App\Http\Resources\JobRequest\JobRequestCloseCollection;
use Illuminate\Support\Facades\Auth; 
use Validator;

class JobRequestController extends Controller
{
	 public $successStatus = 200;
   public function jobRequestStore(Request $request) 
    {      
    	$validator = Validator::make($request->all(), [ 
            'applicant_id' => 'required',
            'category_id' => 'required', 
            'subcategory_id' => 'required', 
            'title'  => 'required',
            'estimate_time' => 'required',
            'max_price' => 'required', 
            'min_price'  => 'required',
            'description' => 'required',
            'file' => 'required',
            'status' => 'required',
        ]);
             
    	  
         if (Auth::guard('api')->check()) {
	            
                     
                   $input = $request->all(); 
                   $jobRequest = JobRequest::create($input);
                   $success['message'] = 'Job Add Successfully!';
                   $success['success'] = true;
                    

                    
                return response()->json(['success'=>$success], $this->successStatus); 
            }
  
         else {
            return response()->json(['error' => 'User not authorized', 'success' => false], 401);
              }
   }

   public function activeJobRequestGet() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $applicant_id = Auth::guard('api')->user()->id;
                 $jobRequest = JobRequest::where('applicant_id','=',$applicant_id)->where('status','=','active')->get();
                 if($jobRequest->isEmpty()){
                     return response()->json(['error' => 'jobRequest  not Found', 'success' => false], 404); }
                  else{
            
                          $data =   JobRequestActiveCollection::collection($jobRequest);
                           return response()->json(['data' => $data ,'success' => true],200);
                       }
                   }
            
                   else {
                        return response()->json(['error' => 'User not authorized', 'success' => false], 401);
                      }
   }
public function closeJobRequestGet() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $applicant_id = Auth::guard('api')->user()->id;
                 $jobRequest = JobRequest::where('applicant_id','=',$applicant_id)->where('status','=','close')->get();
                 if($jobRequest->isEmpty()){
                     return response()->json(['error' => 'jobRequest  not Found', 'success' => false], 404); }
                  else{
            
                          $data =   JobRequestActiveCollection::collection($jobRequest);
                           return response()->json(['data' => $data ,'success' => true],200);
                       }
                   }
            
                   else {
                        return response()->json(['error' => 'User not authorized', 'success' => false], 401);
                      }
   }



}
