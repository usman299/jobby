<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AppSetting\AppSettingResource;
use App\AppSetting;

class AppSettingController extends Controller
{
    public function getAppSetting()
    {
       
        
        $appSetting = AppSetting::all();
        if($appSetting->isEmpty()){
           
            $success['message'] = 'AppSetting  Screens not Found';
            $success['success'] = false;
            return response()->json( $success, 404);

        }
        else{
             $data =   AppSettingResource::collection($appSetting);
            return response()->json($data,200);
           
        }
       
    }
}
