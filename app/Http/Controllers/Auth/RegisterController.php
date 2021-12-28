<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\JobberProfile;
use App\Providers\RouteServiceProvider;
use App\Questions;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /*if (request()->file('document1')) {
            $image1 = request()->file('document1');
            $name = time() . 'documents' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'documents/';
            $image1->move($destinationPath, $name);
        }else{
            $name = "";
        }
        if (request()->file('document2')) {
            $image2 = request()->file('document2');
            $name2 = time() . 'documents' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'documents/';
            $image2->move($destinationPath, $name2);
        }else{
            $name2 = "";
        }*/
        $user = User::create([
            'firstName' => $data['fname'],
            'lastName' => $data['lname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'role' => $data['role'],
            'dob' => $data['dob'],
            'country' => $data['country'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'postalCode' => $data['postalCode'],
            'description' => $data['description'],
            'category_id' => $data['category_id'] ?? '',
            'subcategory_id' => $data['subcategory_id']?? '',
            /*'document1' => 'documents/' . $name,
            'document2' => 'documents/' . $name2,*/
            'password' => Hash::make($data['password']),
        ]);
        $data['jobber_id'] = $user->id;

        JobberProfile::create($data);

        return $user;
    }
}
