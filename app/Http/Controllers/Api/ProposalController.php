<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Proposal;
use Illuminate\Support\Facades\Auth; 
use App\Http\Resources\Proposal\ProposalPostCollection;
use App\Http\Resources\Proposal\GetAcceptProposalCollection;
use App\Http\Resources\Proposal\GetActiveProposalCollection;
use App\Http\Resources\Proposal\GetRejectProposalCollection;

class ProposalController extends Controller
{
    public $successStatus = 200;
   public function proposalPostStore(Request $request) 
    {      
    	
    	$validator = Validator::make($request->all(), [ 
            'job_req_id' => 'required',
            'jober_id' => 'required', 
            'status' => 'required', 
            'description'  => 'required',
            'time_limit' => 'required',
            'price' => 'required', 
            
        ]);
             
    	  
         if (Auth::guard('api')->check()) {
	            
                     
                   $input = $request->all(); 
                   $proposal = Proposal::create($input);
                   $success['message'] = 'Proposal Add Successfully!';
                   $success['success'] = true;
                    

                    
                return response()->json(['success'=>$success], $this->successStatus); 
            }
  
         else {
            return response()->json(['error' => 'User not authorized', 'success' => false], 401);
              }
   }

    public function allActiveProposal() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $jober_id = Auth::guard('api')->user()->id;
                 $activeProposol = Proposal::where('jober_id','=',$jober_id)->where('status','=','active')->get();
                 if($activeProposol->isEmpty()){
                     return response()->json(['error' => 'Proposol  not Found', 'success' => false], 404); }
                  else{
            
                          $data =   GetActiveProposalCollection::collection($activeProposol);
                           return response()->json(['data' => $data ,'success' => true],200);
                       }
                   }
            
                   else {
                        return response()->json(['error' => 'User not authorized', 'success' => false], 401);
                      }
   }
    public function allAcceptProposal() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $jober_id = Auth::guard('api')->user()->id;
                 $activeProposol = Proposal::where('jober_id','=',$jober_id)->where('status','=','accept')->get();
                 if($activeProposol->isEmpty()){
                     return response()->json(['error' => 'Proposol  not Found', 'success' => false], 404); }
                  else{
            
                          $data =   GetAcceptProposalCollection::collection($activeProposol);
                           return response()->json(['data' => $data ,'success' => true],200);
                       }
                   }
            
                   else {
                        return response()->json(['error' => 'User not authorized', 'success' => false], 401);
                      }
   }
   public function allRejectProposal() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $jober_id = Auth::guard('api')->user()->id;
                 $activeProposol = Proposal::where('jober_id','=',$jober_id)->where('status','=','reject')->get();
                 if($activeProposol->isEmpty()){
                     return response()->json(['error' => 'Proposol  not Found', 'success' => false], 404); }
                  else{
            
                          $data =   GetRejectProposalCollection::collection($activeProposol);
                           return response()->json(['data' => $data ,'success' => true],200);
                       }
                   }
            
                   else {
                        return response()->json(['error' => 'User not authorized', 'success' => false], 401);
                      }
   }

}
