<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\JobberServicesOffers;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
   public function services(){
       $title = 'Services populaires';
       $services =JobberServicesOffers::where('status','=',1)->get();
       return view('front.applicant.services.services', compact('title','services'));
   }
   public function singleService($id){
       $title = 'Service';
       $services =JobberServicesOffers::where('status','=',1)->where('id','=',$id)->first();
       return view('front.applicant.services.singleService', compact('title','services'));
   }
}
