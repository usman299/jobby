<?php

namespace App\Http\Controllers\Api\v1;

use App\About;
use App\AppSetting;
use App\Condition;
use App\Countory;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\AppSetting\AboutResource;
use App\Http\Resources\v1\AppSetting\AppSettingResource;
use App\Http\Resources\v1\AppSetting\CountryCollection;
use App\Http\Resources\v1\AppSetting\FAQCollection;
use App\Http\Resources\v1\AppSetting\NotficationCollection;
use App\Http\Resources\v1\AppSetting\SliderGaleryCollection;
use App\Notfication;
use App\QuestionAnswer;
use App\SliderGalery;
use Illuminate\Support\Facades\Auth;

class AppSettingController extends Controller
{
    public function getAppSetting()
    {
        $appSetting = AppSetting::all();
        $success = AppSettingResource::collection($appSetting);
        return response()->json($success, 200);
    }

    public function sliderGalery($role)
    {
        $appSliderGalery = SliderGalery::where('userRole', '=', $role)->get();
        $success = SliderGaleryCollection::collection($appSliderGalery);
        return response()->json($success, 200);
    }

    public function notifications()
    {
        $user = Auth::user();
        $data = Notfication::latest()->where('r_id', '=', $user->id)->get();
        Notfication::latest()->where('r_id', '=', $user->id)->update(['status' => 1]);
        $success = NotficationCollection::collection($data);
        return response()->json($success, 200);
    }

    public function support()
    {
        $data = QuestionAnswer::latest()->get();
        $success = FAQCollection::collection($data);
        return response()->json($success, 200);
    }

    public function about()
    {
        $about = About::first();
        $data = new AboutResource($about);
        return response()->json($data, 200);
    }

    public function country()
    {
        $country = Countory::all();
        $data =  CountryCollection::collection($country);
        return response()->json($data, 200);
    }
    public function termsPrivacy()
    {
        $condition = Condition::first();
        return response([
            'privacy' => $condition->description1,
            'terms' => $condition->description2
        ]);
    }
    public function pages(){
        $appSetting = AppSetting::first();
        return response()->json([
            'insurance' => $appSetting->insurance??"",
            'help' => $appSetting->help??"",
            'tax_certificate' => $appSetting->tax_certificate??"",
            'tax_credit' => $appSetting->tax_credit??"",
            'facebook' => $appSetting->facebook??"",
            'instagram' => $appSetting->instagram??"",
            'twitter' => $appSetting->twitter??"",
            'youtube' => $appSetting->youtube??"",
        ]);
    }
}
