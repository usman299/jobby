<?php
namespace App\Http\Controllers\API;
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
     * @return \Illuminate\Http\Response
     */
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password'), 'role' => request('role')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['user'] =  new UserCollection($user);
            return response()->json(['success' => $success], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
/**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'role'  => 'required',
            'password' => 'required',
            'confirmPassword' => 'required|same:password',
        ]);
                     if ($validator->fails()) {
                        return response()->json(['error'=>$validator->errors()], 401);
                    }
                    $input = $request->all();
                    $input['password'] = bcrypt($input['password']);

                    $email = User::where('email','=',$input['email'])->first();
                    if($email != null){
                        $success['message'] = 'Your Email Exit Already';
                        $success['success'] = false;
                        return response()->json( $success, 200);
                    }
                    else{
                    $user = User::create($input);
                    $success['id'] =  $user->id;
                    $success['token'] =  $user->createToken('MyApp')-> accessToken;
                    $success['success'] = true;

                    // $success['fname'] =  $user->fname;
                    // $success['lname'] =  $user->lname;
                    // $success['email'] =  $user->email;
                    // $success['role'] =  $user->role;



                return response()->json($success, $this->successStatus); }
    }
/**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user = Auth::guard('api')->user()->id();

        $data =   UserCollection::collection($user);
        $success['data'] = $data;
        $success['success'] = true;

    return response()->json($success,$this->successStatus);

    }
    public function getProfile()
    {
        $user = Auth::guard('api')->user();


        $data =   UserCollection::collection($user);
        $success['data'] = $data;
        $success['success'] = true;
        return response()->json($success,$this->successStatus);
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



