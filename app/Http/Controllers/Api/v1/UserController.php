<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Applicant\DemProfileResource;
use App\Http\Resources\v1\Jobber\ProfileResource;

use App\JobberProfile;
use App\Jobs\OtpMailJob;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * login api
     *
     * @return JsonResponse
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password'), 'role' => request('role')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['id'] = $user->id;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    /**
     * Register api
     *
     * @return JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $email = User::where('email', '=', $input['email'])->first();
        if (!$email) {
            $user = User::create($input);
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['id'] = $user->id;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Email Already Exist'], 400);
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->gender = $request->gender;
        if($request->longitude) {
            $user->longitude = $request->longitude;
        }
        if($request->longitude) {
            $user->longitude = $request->longitude;
        }
        $user->dob = $request->dob;
        $user->professional = $request->professional;
        $user->update();
        return response()->json(['success' => 'Successfully Updated']);
    }

    public function profileImage(Request $request)
    {
        $user = Auth::user();
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'profileImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'profileImage/';
            $image1->move($destinationPath, $name);
            $user->image = 'profileImage/' . $name;
        }
        if ($user->update()){
            return response()->json(['success' => 'Successfully Updated']);
        }else{
            return response()->json(['error' => 'Something Happend Wrong'], 400);
        }
    }

    public function passwordUpdate(Request $request)
    {
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->update();
        return response()->json(['success' => 'Successfully Updated']);
    }

    public function sendOtpEmail(Request $request)
    {
        $otp = rand(1000, 9999);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            $user->otp = $otp;
            $user->update();
            $dataa = array(
                'otp' => $otp,
                'email' => $user->email,
            );
            dispatch(new OtpMailJob($dataa))->delay(Carbon::now()->addSeconds(5));
            return response()->json(['success' => 'Otp send'], 200);
        } else {
            return response()->json(['error' => 'User not exist'], 404);
        }

    }

    public function otpVerifyEmail(Request $request)
    {
        $user = User::where('email', $request->email)->where('otp', $request->otp)->first();
        if ($user) {
            $user->otp = null;
            $user->email_verified_at = 1;
            $user->update();
            return response()->json(['success' => 'Otp Verify'], 200);
        } else {
            return response()->json(['success' => 'Otp Not match'], 200);
        }
    }

    public function forgetPassword(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->update();
        auth()->login($user, true);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['user'] = new UserResource($user);
        return response()->json(['success' => $success], 200);
    }

    public function jobberGetProfile($jobber_id)
    {
        $user = User::where('id','=',$jobber_id)->where('role','=',1)->first();
        $success = new ProfileResource($user);
        return response()->json($success,200);

    }
    public function demandeurGetProfile($demandeur_id)
    {
        $user = User::where('id','=',$demandeur_id)->where('role','=',2)->first();
        $success = new DemProfileResource($user);
        return response()->json($success,200);

    }
}
