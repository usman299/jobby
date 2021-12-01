<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contract;
use App\Proposal;
use App\Http\Resources\Contract\GetActiveContractCollection;
use App\Http\Resources\Contract\GetCancelContractCollection;
use App\Http\Resources\Contract\GetCompleteContractCollection;
use Illuminate\Support\Facades\Auth; 
use Validator;
class ContractController extends Controller
{
    public $successStatus = 200;
   public function contractPostStore(Request $request, $id) 
    {      
    	  
    	$validator = Validator::make($request->all(), [ 
            
            's_time'  => 'required',
            'e_time' => 'required',
            'price' => 'required', 
            'status'  => 'required',
            'review_id_applicant' => 'required',
            'jobber_id_applicant' => 'required', 
            
        ]);
             
    	  
         if (Auth::guard('api')->check()) {
	            
                   
                   $input = $request->all(); 
                   $proposalRequest = Proposal::where('id','=',$id)->where('status','=',2)->first();
                   if($proposalRequest){
                   $input['applicant_id']= Auth::guard('api')->user()->id;
                   $input['proposal_id']= $proposalRequest->jobber_id;
                   $input['jober_id']= $proposalRequest->jobber_id;
                   $proposal = Contract::create($input);
                   $success['message'] = 'Contract Add Successfully!';
                   $success['success'] = true;
                   return response()->json($success, $this->successStatus); 
                   }
                   else{
                    $success['message'] = 'First Accept Proposel then generate Contract';
                    $success['success'] = false;
                    return response()->json( $success, 200);

                   }
                   
                
            }
  
         else {
                 $success['message'] = 'User not authorized';
                  $success['success'] = false;
                  return response()->json( $success, 401);
              }
   }


// CONTRACT GET BY APPLICANT_ID IN 
public function activeContractapplicantGet() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $applicant_id = Auth::guard('api')->user()->id;
                 $jobRequestContractActive = Contract::where('applicant_id','=',$applicant_id)->where('status','=',1)->get();
                 $jobRequestContractComplete = Contract::where('applicant_id','=',$applicant_id)->where('status','=',2)->get();
                 $jobRequestContractReject = Contract::where('applicant_id','=',$applicant_id)->where('status','=',0)->get();
                 if($jobRequestContractActive->isEmpty() && $jobRequestContractComplete->isEmpty() && $jobRequestContractReject->isEmpty()){
                    $success['message'] = 'jobRequestContract  not Found';
                    $success['success'] = false;
                    return response()->json( $success, 200);
                    }
                  else{
            
                          $data1 =   GetActiveContractCollection::collection($jobRequestContractActive);
                          $data2 =   GetActiveContractCollection::collection($jobRequestContractComplete);
                          $data3 =   GetActiveContractCollection::collection($jobRequestContractReject);

                          $success['jobRequestContractActive'] = $data1;
                          $success['jobRequestContractComplete'] = $data2;
                          $success['jobRequestContractReject'] = $data3;
                          $success['success'] = true;
                          
                           return response()->json($success,200);
                           
                          
                       }
                   }
            
                   else {
                    $success['message'] = 'User not authorized';
                    $success['success'] = false;
                    return response()->json( $success, 401);
                      }
   }

   public function activeContractJobberGet() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $jobber_id = Auth::guard('api')->user()->id;
                 $jobRequestContractActive = Contract::where('jober_id','=',$jobber_id)->where('status','=',1)->get();
                 $jobRequestContractComplete = Contract::where('jober_id','=',$jobber_id)->where('status','=',2)->get();
                 $jobRequestContractReject = Contract::where('jober_id','=',$jobber_id)->where('status','=',0)->get();
                 if($jobRequestContractActive->isEmpty() && $jobRequestContractComplete->isEmpty() && $jobRequestContractReject->isEmpty()){
                    $success['message'] = 'jobRequestContract  not Found';
                    $success['success'] = false;
                    return response()->json( $success, 200);
                    }
                  else{
            
                          $data1 =   GetActiveContractCollection::collection($jobRequestContractActive);
                          $data2 =   GetActiveContractCollection::collection($jobRequestContractComplete);
                          $data3 =   GetActiveContractCollection::collection($jobRequestContractReject);

                          $success['jobRequestContractActive'] = $data1;
                          $success['jobRequestContractComplete'] = $data2;
                          $success['jobRequestContractReject'] = $data3;
                          $success['success'] = true;
                          
                           return response()->json($success,200);
                           
                          
                       }
                   }
            
                   else {
                    $success['message'] = 'User not authorized';
                    $success['success'] = false;
                    return response()->json( $success, 401);
                      }
   }
}
