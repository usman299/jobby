<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function app(){
        return view('front.index');
    }
    public function splash(){
        return view('front.splash');
    }
}
