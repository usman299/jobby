<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Jobber\ProfileResource;
use \App\Http\Resources\v1\Users\UserResource;
use App\User;
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
        if ($request->latitude) {
            $user->latitude = $request->latitude;
        }
        if ($request->longitude) {
            $user->longitude = $request->longitude;
        }
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->update();
        return response()->json(['success' => 'Successfully Updated']);
    }
    public function profileImage(Request  $request){
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
}



