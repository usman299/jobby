<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reviews;
use App\Http\Resources\Reviews\ReviewCollection;
use Illuminate\Support\Facades\Auth; 
use Validator;
use App\Contract;

class ReviewController extends Controller
{
    public $successStatus = 200;
    public function reviewsStore(Request $request ,$contract_id) 
     {      
         $validator = Validator::make($request->all(), [ 
             
             'message'  => 'required',
             'star' => 'required',
             
             
         ]);
              
           
          if (Auth::guard('api')->check()) {
                 
             $reviews = Contract::where('id','=',$contract_id)->where('status','=',2)->first();
                
             if($reviews){
                    $input = $request->all(); 
                    $input['sender_id']= $reviews->applicant_id;
                    $input['reciver_id']= $reviews->jober_id;
                    $input['contract_id']= $contract_id;
                    $proposal = Reviews::create($input);
                    $success['message'] = 'Review Add Successfully!';
                    $success['success'] = true;
                    return response()->json($success, $this->successStatus);
             }
             else{
                   $success['message'] = 'Contract not Found';
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

 public function allJobberReview() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $jobber_id = Auth::guard('api')->user()->id;
                 $jobberReviews = Reviews::where('reciver_id','=',$jobber_id)->get();
                 

                 if($jobberReviews->isEmpty()){
                    $success['message'] = 'Review   not Found';
                    $success['success'] = false;
                    return response()->json( $success, 200);
                 }
                  else{
            
                          $data =   ReviewCollection::collection($jobberReviews);
                         
                         
                          $success['jobberReviews'] = $data;
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
