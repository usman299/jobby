<?php

namespace App\Http\Controllers;

use App\Contract;
use App\JobRequest;
use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $applicantCount = User::where('status','=',1)->where('role','=',2)->count();
        $jobberCount = User::where('status','=',1)->where('role','=',1)->count();
        $jobRequestCount = JobRequest::where('status','=',1)->count();
        $contractCount = Contract::where('status','=',3)->count();

        return view('admin.index',compact('applicantCount','jobberCount','contractCount','jobRequestCount'));
    }
}
