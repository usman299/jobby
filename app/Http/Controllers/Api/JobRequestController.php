<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JobRequest;
use App\Http\Resources\JobRequest\PostJobRequestCollection;
use App\Http\Resources\JobRequest\JobRequestActiveCollection;
use App\Http\Resources\JobRequest\JobRequestCloseCollection;
use App\Http\Resources\JobRequest\EditJobRequestResource;
use Illuminate\Support\Facades\Auth; 
use Validator;

class JobRequestController extends Controller
{
	 public $successStatus = 200;
   public function jobRequestStore(Request $request) 
    {      
    	
             
    	  
         if (Auth::guard('api')->check()) {
                
            
                     
                   $input = $request->all(); 
                   $input['applicant_id']= Auth::guard('api')->user()->id;
                   
                   if ($request->hasfile('file')) {

                    $image1 = $request->file('file');
                    $name = time() . 'file' . '.' . $image1->getClientOriginalExtension();
                    $destinationPath = 'applicant/file/';
                    $image1->move($destinationPath, $name);
                    $input['file'] = 'applicant/file/' . $name;
                }
        

                   $jobRequest = JobRequest::create($input);
                   $success['message'] = 'Job Add Successfully!';
                   $success['success'] = true;
                    

                    
                return response()->json($success, $this->successStatus); 
            }
  
         else {
            $success['message'] = 'User not authorized';
            $success['success'] = false;
            return response()->json( $success, 401);
            
              }
   }

   public function activeJobRequestGet() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $applicant_id = Auth::guard('api')->user()->id;
                 $jobRequest = JobRequest::where('applicant_id','=',$applicant_id)->where('status','=','1')->get();
                 if($jobRequest->isEmpty()){
                    $success['message'] = 'jobRequest  not Found';
                    $success['success'] = false;
                    return response()->json( $success, 200);
                      }
                  else{

                         $success['success'] = true;
                        
                          $data =   JobRequestActiveCollection::collection($jobRequest);
                          $success['data'] = $data;

                           return response()->json($success ,200);
                       }
                   }
            
                   else {
                    $success['message'] = 'User not authorized';
                    $success['success'] = false;
                    return response()->json( $success, 401);
                        
                      }
   }
public function closeJobRequestGet() 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
                     
                 $applicant_id = Auth::guard('api')->user()->id;
                 $jobRequest = JobRequest::where('applicant_id','=',$applicant_id)->where('status','=','0')->get();
                 if($jobRequest->isEmpty()){
                    $success['message'] = 'Close jobRequest   not Found';
                    $success['success'] = false;
                    return response()->json( $success, 200);
                      }
                  else{
            
                          $data =   JobRequestActiveCollection::collection($jobRequest);
                           return response()->json($data,200);
                       }
                   }
            
                   else {
                    $success['message'] = 'User not authorized';
                    $success['success'] = false;
                    return response()->json( $success, 401);
                      }
   }

   public function editJobRequestGet($id) 
    {      
    	
         if (Auth::guard('api')->check()) {
	            
            
                 $applicant_id = Auth::guard('api')->user()->id;
                 $jobRequest = JobRequest::where('applicant_id','=',$applicant_id)->where('id','=',$id)->where('status','=','1')->get();
                 if($jobRequest->isEmpty()){
                    $success['message'] = ' jobRequest   not Found';
                    $success['success'] = false;
                    return response()->json( $success, 200);
                      }
                  else{
            
                          $data =   EditJobRequestResource::collection($jobRequest);
                           return response()->json($data,200);
                       }
                   }
            
                   else {
                    $success['message'] = 'User not authorized';
                    $success['success'] = false;
                    return response()->json( $success, 401);
                      }
   }

   public function jobRequestUpdate(Request $request,$id) 
    {      
    	
             
    	  
         if (Auth::guard('api')->check()) {
                
            // $jobRequest = JobRequest::where('id','=',$id)->first();
                     
                   $input = $request->all(); 
                   $input['applicant_id']= Auth::guard('api')->user()->id;
                   if($request->skils!=null){
                   $input['skils'] = implode(',', $request->skils);}
                   if ($request->hasfile('file')) {

                    $image1 = $request->file('file');
                    $name = time() . 'file' . '.' . $image1->getClientOriginalExtension();
                    $destinationPath = 'applicant/file/';
                    $image1->move($destinationPath, $name);
                    $input['file'] = 'applicant/file/' . $name;
                }
        

                   $jobRequest = JobRequest::where('id','=',$id)->update($input);
                   $success['message'] = 'Job UpdateS Successfully!';
                   $success['success'] = true;
                    

                    
                return response()->json($success, $this->successStatus); 
            }
  
         else {
            $success['message'] = 'User not authorized';
            $success['success'] = false;
            return response()->json( $success, 401);
            
              }
   }

   public function deleteJobRequestGet($id) 
   {      
       
        if (Auth::guard('api')->check()) {
               
           
                $applicant_id = Auth::guard('api')->user()->id;
                $jobRequest = JobRequest::where('applicant_id','=',$applicant_id)->where('id','=',$id)->first();
                if(!$jobRequest){
                   $success['message'] = ' jobRequest   not Found';
                   $success['success'] = false;
                   return response()->json( $success, 200);
                     }
                 else{
                         $jobRequest->delete();
                         $data['message']='Job Request Deleted';
                         $data['status']=true;

                          return response()->json($data,200);
                      }
                  }
           
                  else {
                   $success['message'] = 'User not authorized';
                   $success['success'] = false;
                   return response()->json( $success, 401);
                     }
  }
  public function updateStatusJobRequest($id) 
  {      
      
       if (Auth::guard('api')->check()) {
              
          
               $applicant_id = Auth::guard('api')->user()->id;
               $jobRequest = JobRequest::where('applicant_id','=',$applicant_id)->where('id','=',$id)->first();
               if(!$jobRequest){
                  $success['message'] = ' jobRequest   not Found';
                  $success['success'] = false;
                  return response()->json( $success, 200);
                    }
                else{  
                   
                    if($jobRequest->status==1){
                        $jobRequest->status= 0;
                        $jobRequest->update();
                        $data['message']='Job Request Close';
                        $data['status']=true;

                         return response()->json($data,200);
                     }
                     else{
                        $jobRequest->status= 1;
                        $jobRequest->update();
                        $data['message']='Job Request Active';
                        $data['status']=true;

                         return response()->json($data,200);

                     }
                 }}
          
                 else {
                  $success['message'] = 'User not authorized';
                  $success['success'] = false;
                  return response()->json( $success, 401);
                    }
 }



}
