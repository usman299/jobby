<?php

namespace App\Http\Controllers\Api;

use App\About;
use App\AppSetting;
use App\Http\Controllers\Controller;
use App\Http\Resources\AppSetting\AboutResource;
use App\Http\Resources\AppSetting\AppSettingResource;
use App\Http\Resources\AppSetting\FAQCollection;
use App\Http\Resources\AppSetting\NotficationCollection;
use App\Http\Resources\AppSetting\SliderGaleryCollection;
use App\Notfication;
use App\QuestionAnswer;
use App\SliderGalery;
use Illuminate\Support\Facades\Auth;

class AppSettingController extends Controller
{
    public function getAppSetting()
    {
        $appSetting = AppSetting::all();
        if ($appSetting->isEmpty()) {

            $success['message'] = 'AppSetting  Screens not Found';
            $success['success'] = false;
            return response()->json($success, 200);

        } else {
            $data = AppSettingResource::collection($appSetting);
            $success['success'] = true;
            $success['data'] = $data;
            return response()->json($success, 200);

        }

    }

    public function sliderGalery($role)
    {
        $appSliderGalery = SliderGalery::where('userRole', '=', $role)->get();
        if ($appSliderGalery->isEmpty()) {

            $success['message'] = 'appSliderGalery  not Found';
            $success['success'] = false;

            return response()->json($success, 200);

        } else {
            $data = SliderGaleryCollection::collection($appSliderGalery);
            $success['success'] = true;
            $success['data'] = $data;
            return response()->json($success, 200);

        }

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


}
