<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
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
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 

            return response()->json(['data'=>$success , 'success' => true], $this-> successStatus);
           
        } 
        else{ 
            return response()->json(['message'=>'SOme thing Wrong', 'success' => false], 401); 
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
                    $user = User::create($input);
                    $success['id'] =  $user->id; 
                     $success['token'] =  $user->createToken('MyApp')-> accessToken; 

                    // $success['fname'] =  $user->fname;
                    // $success['lname'] =  $user->lname;
                    // $success['email'] =  $user->email;
                    // $success['role'] =  $user->role;
                    
          
                    
                return response()->json(['data'=>$success , 'success' => true], $this->successStatus); 
    }
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 
}



