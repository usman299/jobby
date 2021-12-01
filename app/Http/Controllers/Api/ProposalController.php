<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Proposal;
use App\JobRequest;
use Illuminate\Support\Facades\Auth; 
use App\Http\Resources\Proposal\ProposalPostCollection;
use App\Http\Resources\Proposal\GetAcceptProposalCollection;
use App\Http\Resources\Proposal\GetActiveProposalCollection;
use App\Http\Resources\Proposal\GetRejectProposalCollection;

class ProposalController extends Controller
{
    public $successStatus = 200;
   public function proposalPostStore(Request $request ,$jobRequest_id) 
    {      
    	$validator = Validator::make($request->all(), [ 
            
            'description'  => 'required',
            'time_limit' => 'required',
            'price' => 'required', 
            
        ]);
             
    	  
         if (Auth::guard('api')->check()) {
	            
            $jobRequest = JobRequest::where('id','=',$jobRequest_id)->where('status','=',1)->first();
               
            if($jobRequest){
                   $input = $request->all(); 
                   $input['jobber_id']= Auth::guard('api')->user()->id;
                   $input['jobRequest_id']= $jobRequest_id;
                   $proposal = Proposal::create($input);
                   $success['message'] = 'Proposal Add Successfully!';
                   $success['success'] = true;
                   return response()->json($success, $this->successStatus);
            }
            else{
                  $success['message'] = 'JobRequest not Found';
                    $success['success'] = false;
                    return response()->json( $success, $this->successStatus);

            }
                    
   
            }
  
         else {
            $success['message'] = 'User not authorized';
            $success['success'] = false;
            return response()->json( $success, 401);
              }
   }

    public function allProposalRequest() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $jobber_id = Auth::guard('api')->user()->id;
                 $activeProposol = Proposal::where('jobber_id','=',$jobber_id)->where('status','=',1)->get();
                 $acceptProposol = Proposal::where('jobber_id','=',$jobber_id)->where('status','=',2)->get();
                 $rejectProposol = Proposal::where('jobber_id','=',$jobber_id)->where('status','=',0)->get();
                 if($activeProposol->isEmpty() && $acceptProposol->isEmpty() && $rejectProposol->isEmpty()  ){
                    $success['message'] = 'Proposol  not Found';
                    $success['success'] = false;
                    return response()->json( $success, 200);
                 }
                  else{
            
                          $data1 =   GetActiveProposalCollection::collection($activeProposol);
                          $data2 =   GetActiveProposalCollection::collection($acceptProposol);
                          $data3 =   GetActiveProposalCollection::collection($rejectProposol);
                          $success['activeProposol'] = $data1;
                          $success['acceptProposol'] = $data2;
                          $success['rejectProposol'] = $data3;
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
    public function allAcceptProposal() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $jober_id = Auth::guard('api')->user()->id;
                 $activeProposol = Proposal::where('jobber_id','=',$jobber_id)->where('status','=','accept')->get();
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


   public function updateStatusPrposelRequest($id) 
  {      

      
       if (Auth::guard('api')->check()) {
              
          
               $jobber_id = Auth::guard('api')->user()->id;
               $proposalRequest = Proposal::where('id','=',$id)->first();
               if(!$proposalRequest){
                  $success['message'] = ' Proposel Request   not Found';
                  $success['success'] = false;
                  return response()->json( $success, 200);
                    }
                else{  
                   
                    if($proposalRequest->status==1 || $proposalRequest->status!=0 ){
                        $proposalRequest->status= 0;
                        $proposalRequest->update();
                        $data['message']='Proposel Request Reject';
                        $data['success']=true;
  
                         return response()->json($data,200);
                     }
                     else if($proposalRequest->status==1 || $proposalRequest->status==0){
                        $proposalRequest->status= 2;
                        $proposalRequest->update();
                        $data['message']='Proposel Request Accept';
                        $data['success']=true;

                         return response()->json($data,200);

                     }
                     else {
                        $proposalRequest->status= 1;
                        $proposalRequest->update();
                        $data['message']='Proposel Request Active';
                        $data['success']=true;

                         return response()->json($data,200);

                     }
                 }}
          
                 else {
                  $success['message'] = 'User not authorized';
                  $success['success'] = false;
                  return response()->json( $success, 401);
                    }
 }


 public function applicantPropsalRequestGet() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 
                 $proposelRequestActive = Proposal::where('status','=',1)->get();
                 
                 if($proposelRequestActive->isEmpty()  ){
                    $success['message'] = 'Proposel Request  not Found';
                    $success['success'] = false;
                    return response()->json( $success, 200);
                      }
                  else{

                         $success['success'] = true;
                        
                        $data =   GetActiveProposalCollection::collection($proposelRequestActive);
                        $success['applicantJobRequest'] = $data;


                           return response()->json($success ,200);
                       }
                   }
            
                   else {
                    $success['message'] = 'User not authorized';
                    $success['success'] = false;
                    return response()->json( $success, 401);
                        
                      }
   }



}
