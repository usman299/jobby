<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contract;
use App\Http\Resources\Contract\GetActiveContractCollection;
use App\Http\Resources\Contract\GetCancelContractCollection;
use App\Http\Resources\Contract\GetCompleteContractCollection;
use Illuminate\Support\Facades\Auth; 
use Validator;
class ContractController extends Controller
{
    public $successStatus = 200;
   public function contractPostStore(Request $request) 
    {      
    	  
    	$validator = Validator::make($request->all(), [ 
            'proposal_id' => 'required',
            'jober_id' => 'required', 
            'applicant_id' => 'required', 
            's_time'  => 'required',
            'e_time' => 'required',
            'price' => 'required', 
            'status'  => 'required',
            'review_id_applicant' => 'required',
            'jobber_id_applicant' => 'required', 
            
        ]);
             
    	  
         if (Auth::guard('api')->check()) {
	            
                     
                   $input = $request->all(); 
                   $proposal = Contract::create($input);
                   $success['message'] = 'Contract Add Successfully!';
                   $success['success'] = true;
                    

                    
                return response()->json(['success'=>$success], $this->successStatus); 
            }
  
         else {
            return response()->json(['error' => 'User not authorized', 'success' => false], 401);
              }
   }


// CONTRACT GET BY APPLICANT_ID IN 
public function activeContractapplicantGet($applicant_id) 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $applicant_id = Auth::guard('api')->user()->id;
                 $jobRequest = Contract::where('applicant_id','=',$applicant_id)->where('status','=','active')->get();
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
