<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Users\UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Resources\Users\UserCollection;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * login api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password'), 'role' => request('role')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['user'] = new UserCollection($user);
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\JsonResponse
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
            $success['user'] = new UserCollection($userR);
            return response()->json(['success' => $success], $this->successStatus);
        } else {
           return response()->json(['error' => 'Email Already Exist'], 400);
        }
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function details()
    {
        $user = Auth::guard('api')->user();
        $data = new UserResource($user);
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
        $user->image = $request->image;
        $user->postalCode = $request->postalCode;
        $user->category_id = $request->category_id;
        $user->subcategory_id = $request->subcategory_id;
        $user->update();

        $success['message'] = 'Your Data Updated';
        $success['success'] = true;

        return response()->json($success, $this->successStatus);

    }
}



