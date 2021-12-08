<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
   public function services(){
       $title = 'Services populaires';
       return view('front.applicant.services.services', compact('title'));
   }
   public function singleService(){
       $title = 'Service';
       return view('front.applicant.services.singleService', compact('title'));
   }
}
