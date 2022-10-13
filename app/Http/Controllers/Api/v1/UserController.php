<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Jobber\ProfileResource;
use App\Http\Resources\v1\Users\UserResource;
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
            $success['user'] = new UserResource($user);
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
            $userR = User::find($user->id);
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['user'] = new UserResource($userR);
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Email Already Exist'], 400);
        }
    }

    public function details()
    {
        $user = Auth::guard('api')->user();
        $data = new UserResource($user);
        return response()->json($data);
    }

    public function jobberProfile($id)
    {
        $user = User::find($id);
        $data = new ProfileResource($user);
        return response()->json($data);
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
        $user->update();
        return response()->json(['success' => 'Successfully Updated']);
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

    public function timming(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->monday = $request->monday;
        $jobberProfile->tuesday = $request->tuesday;
        $jobberProfile->wednesday = $request->wednesday;
        $jobberProfile->thersday = $request->thersday;
        $jobberProfile->friday = $request->friday;
        $jobberProfile->saturday = $request->saturday;
        $jobberProfile->sunday = $request->sunday;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function progressService(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->answer1 = $request->answer1;
        $jobberProfile->answer2 = $request->answer2;
        $jobberProfile->answer3 = $request->answer3;
        $jobberProfile->answer4 = $request->answer4;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function insurance(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->insurance1 = $request->insurance1;
        $jobberProfile->insurance2 = $request->insurance2;
        $jobberProfile->insurance3 = $request->insurance3;
        $jobberProfile->insurance4 = $request->insurance4;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function rules(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->rules1 = $request->rules1;
        $jobberProfile->rules2 = $request->rules2;
        $jobberProfile->rules3 = $request->rules3;
        $jobberProfile->rules4 = $request->rules4;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function score(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->score = $request->score;
        $jobberProfile->update();
        return response()->json(['success' => 'Profile Update SuccessFully'], 200);
    }

    public function document(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        if ($request->hasfile('eu_id_card_front')) {
            $image1 = $request->file('eu_id_card_front');
            $name = time() . 'eu_id_card_front' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_card_front = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_card_back')) {
            $image1 = $request->file('eu_id_card_back');
            $name = time() . 'eu_id_card_back' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_card_back = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_driving_front')) {
            $image1 = $request->file('eu_id_driving_front');
            $name = time() . 'eu_id_driving_front' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_driving_front = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_driving_back')) {
            $image1 = $request->file('eu_id_driving_back');
            $name = time() . 'eu_id_driving_back' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_driving_back = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_passport_front')) {
            $image1 = $request->file('eu_id_passport_front');
            $name = time() . 'eu_id_passport_front' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_passport_front = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_passport_back')) {
            $image1 = $request->file('eu_id_passport_back');
            $name = time() . 'eu_id_passport_back' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_passport_back = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_residence_permit_front')) {
            $image1 = $request->file('eu_id_residence_permit_front');
            $name = time() . 'eu_id_residence_permit_front' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_residence_permit_front = 'img/' . $name;
        }
        if ($request->hasfile('eu_id_residence_permit_back')) {
            $image1 = $request->file('eu_id_residence_permit_back');
            $name = time() . 'eu_id_residence_permit_back' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->eu_id_residence_permit_back = 'img/' . $name;
        }
        $jobberProfile->update();
        return response()->json(['success' => 'Document Upload SuccessFully'], 200);
    }

    public function securityDocument(Request $request)
    {
        $user = Auth::user();
        $jobberProfile = JobberProfile::where('jobber_id', '=', $user->id)->first();
        $jobberProfile->vital_card_number = $request->vital_card_number;
        $jobberProfile->social_security_number = $request->social_security_number;
        if ($request->hasfile('vital_card')) {
            $image1 = $request->file('vital_card');
            $name = time() . 'vital_card' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->vital_card = 'img/' . $name;
        }
        if ($request->hasfile('social_security_certificate')) {
            $image1 = $request->file('social_security_certificate');
            $name = time() . 'social_security_certificate' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $jobberProfile->social_security_certificate = 'img/' . $name;
        }
        $jobberProfile->update();
        return response()->json(['success' => 'Document Upload SuccessFully'], 200);
    }
    public function radius(Request $request)
    {
        $user = Auth::user();

    }
}



