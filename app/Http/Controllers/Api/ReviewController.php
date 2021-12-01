<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reviews;
use App\Http\Resources\Contract\GetActiveContractCollection;
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
    
 
}
