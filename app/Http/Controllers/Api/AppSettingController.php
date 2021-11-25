<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AppSetting\AppSettingResource;
use App\Http\Resources\AppSetting\SliderGaleryCollection;
use App\AppSetting;
use App\SliderGalery;

class AppSettingController extends Controller
{
    public function getAppSetting()
    {
       
        
        $appSetting = AppSetting::all();
        if($appSetting->isEmpty()){
           
            $success['message'] = 'AppSetting  Screens not Found';
            $success['success'] = false;
            return response()->json( $success, 200);

        }
        else{
             $data =   AppSettingResource::collection($appSetting);
            return response()->json($data,200);
           
        }
       
    }

    public function sliderGalery($role)
    {
       
        
        $appSliderGalery = SliderGalery::where('userRole','=',$role)->get();
        if($appSliderGalery->isEmpty()){
           
            $success['message'] = 'appSliderGalery  not Found';
            $success['success'] = false;
            return response()->json( $success, 200);

        }
        else{
             $data =   SliderGaleryCollection::collection($appSliderGalery);
            return response()->json($data,200);
           
        }
       
    }
}
