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
    public function testnotification(){
        $firebaseToken = User::whereNotNull('device_token')->pluck('device_token')->all();

        $SERVER_API_KEY = 'AAAAY_MYego:APA91bHuBjDm8fcxm2sPpl3hq_aFRWvd6wOzK8JkJgxorMR0n3WnjlNjGptPlURrSdmuWtxcskabFSgKRmqYXXe-GCT1ZVkfhc8NYBnpNY-flbAyOZo0roiOQZU5LXQEGoZNIn2uHpHk';

        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => "Mister Jobby",
                "body" => "TEST NOTIFICATION",
            ]
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);
        dd($response);
    }
}
