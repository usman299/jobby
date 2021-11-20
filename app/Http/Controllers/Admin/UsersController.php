<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
     public function applicant()
    {
        $applicant = User::where('role','=','1')->get();
        if($applicant!=null){
            return view('admin.user.applicant.index',compact('applicant'));
        }



    }
     public function jobber()
    {
        $jobber = User::where('role','=','2')->get();
        if($jobber!=null){
            return view('admin.user.jobber.index',compact('jobber'));
        }
        


    }
    public function jobberShowProfile($id)
    {
        $jobber = User::where('role','=','2')->first();
        if($jobber!=null){
            return view('admin.user.jobber.show',compact('jobber'));
        }
        


    }

     public function applicantShowProfile($id)
    {
        $applicant = User::where('role','=','1')->first();
        if($applicant!=null){
            return view('admin.user.applicant.show',compact('applicant'));
        }
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($status ,$id)
    {
        if ($status==0) {
            User::find($id)->update(['status' => $status]);
            // toastr()->error('User Dactivate');
           
            return redirect()->back();
        }
        else{
             User::find($id)->update(['status' => $status]);
             // toastr()->success('User Activate');
            return redirect()->back();

        }
       

       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
       $user = User::where('id','=',$id)->first();
       if ($user->delete()) {
        // toastr()->error('User Delete');
       return redirect()->back();
       }
       else{
        toastr()->Info('Something Wrong');
       return redirect()->back();
       }

    }
     public function logout()
    {
        Auth::logout();
       return redirect('/');
    }
     public function adminProfile()
    {
       
       return view('admin.user.profile');
    }


}
