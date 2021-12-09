<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\SubCategory;
use App\JobberServicesOffers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobberController extends Controller
{
    public function allServices(){
        $title = 'Services';
        $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->get();
        return view('front.jobber.service.index',compact( 'title','services'));
    }
    public function storeServices(Request $request){

         $services = new JobberServicesOffers();
         $services->jobber_id = Auth::user()->id;
         $services->country_id = Auth::user()->country;
         $services->title = $request->title;
         $services->duration = $request->duration;
         $services->price = $request->price;
         $services->description = $request->description;

        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'jobberService/';
            $image1->move($destinationPath, $name);
            $services->img = 'jobberService/' . $name;
        }

        if($services->save()){
             $title = 'Services';
             $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->get();
             Session::flash('message', "Your Offers Save");
             return view('front.jobber.service.index',compact( 'title','services'));
         }
         else{
             $title = 'Services';
             $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->get();
             Session::flash('error', "Your Offers Not Save");
             return view('front.jobber.service.index',compact( 'title','services'));
         }


    }
    public function updateStatusServices($id,$status){
        $services =  JobberServicesOffers::where('id','=',$id)->first();
        $services->status = $status;
        $services->update();
        return back();
    }
    public function editServices($id){
        $title = 'Services';
        $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->get();
        $servicesEdit =  JobberServicesOffers::where('id','=',$id)->first();
        return view('front.jobber.service.index',compact( 'title','services','servicesEdit'));
    }
    public function updateServices(Request $request,$id){

        $services =  JobberServicesOffers::where('id','=',$id)->first();
        $services->jobber_id = Auth::user()->id;
        $services->country_id = Auth::user()->country;
        $services->title = $request->title;
        $services->duration = $request->duration;
        $services->price = $request->price;
        $services->description = $request->description;

        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'jobberService/';
            $image1->move($destinationPath, $name);
            $services->img = 'jobberService/' . $name;
        }

        if($services->update()){
            $title = 'Services';
            $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->get();
            Session::flash('message', "Your Offers Update");
            return view('front.jobber.service.index',compact( 'title','services'));
        }
        else{
            $title = 'Services';
            $services = JobberServicesOffers::where('jobber_id','=',AUth::user()->id)->get();
            Session::flash('error', "Your Offers Not Update");
            return view('front.jobber.service.index',compact( 'title','services'));
        }


    }
}
