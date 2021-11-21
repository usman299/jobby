<?php

namespace App\Http\Controllers\Admin;
use App\AppSetting;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appSetting = AppSetting::first();

        return view('admin.appSetting.create',compact('appSetting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $chek = AppSetting::get();
        if($chek->isEmpty()) {
            $validator = Validator::make($request->all(), [
                'mainScreen' => 'mimes:jpeg,jpg,png|required', 
                'appLogo' => 'mimes:jpeg,jpg,png|required', 
                'jobberIntroScreen1' => 'mimes:jpeg,jpg,png|required', 
                'jobberIntroScreen2'  => 'mimes:jpeg,jpg,png|required',
                'jobberIntroScreen3' => 'mimes:jpeg,jpg,png|required',
                'applicantIntroScreen1' => 'mimes:jpeg,jpg,png|required',
                'applicantIntroScreen2'  => 'mimes:jpeg,jpg,png|required',
                'applicantIntroScreen3' => 'mimes:jpeg,jpg,png|required',
            ]);
            $appSetting = new AppSetting();
  
            if ($request->hasfile('mainScreen')) {
            $image1 = $request->file('mainScreen');
            $name = time() . 'mainScreen' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->mainScreen = 'image/' . $name;
        }
        if ($request->hasfile('appLogo')) {
            $image1 = $request->file('appLogo');
            $name = time() . 'appLogo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->appLogo = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen1')) {
            $image1 = $request->file('jooberIntroScreen1');
            $name = time() . 'jooberIntroScreen1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen1 = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen2')) {
            $image1 = $request->file('jooberIntroScreen2');
            $name = time() . 'jooberIntroScreen2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen2 = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen3')) {
            $image1 = $request->file('jooberIntroScreen3');
            $name = time() . 'jooberIntroScreen3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen3 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen1')) {
            $image1 = $request->file('applicantIntroScreen1');
            $name = time() . 'applicantIntroScreen1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen1 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen2')) {
            $image1 = $request->file('applicantIntroScreen2');
            $name = time() . 'applicantIntroScreen2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen2 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen3')) {
            $image1 = $request->file('applicantIntroScreen3');
            $name = time() . 'applicantIntroScreen3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen3 = 'image/' . $name;
        }

        $appSetting->save();
        toastr()->success('Added Setting ');
          return back();


       }

       else{

           $appSetting = AppSetting::find(1);
if($request->hasfile('mainScreen')==false){
           
        if ($request->hasfile('appLogo')) {
            $image1 = $request->file('appLogo');
            $name = time() . 'appLogo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->appLogo = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen1')) {
            $image1 = $request->file('jooberIntroScreen1');
            $name = time() . 'jooberIntroScreen1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen1 = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen2')) {
            $image1 = $request->file('jooberIntroScreen2');
            $name = time() . 'jooberIntroScreen2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen2 = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen3')) {
            $image1 = $request->file('jooberIntroScreen3');
            $name = time() . 'jooberIntroScreen3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen3 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen1')) {
            $image1 = $request->file('applicantIntroScreen1');
            $name = time() . 'applicantIntroScreen1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen1 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen2')) {
            $image1 = $request->file('applicantIntroScreen2');
            $name = time() . 'applicantIntroScreen2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen2 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen3')) {
            $image1 = $request->file('applicantIntroScreen3');
            $name = time() . 'applicantIntroScreen3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen3 = 'image/' . $name;
        }

    } 

    //SCREEN END

    if($request->hasfile('appLogo')==false){
           
        if ($request->hasfile('mainScreen')) {
            $image1 = $request->file('mainScreen');
            $name = time() . 'mainScreen' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->mainScreen = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen1')) {
            $image1 = $request->file('jooberIntroScreen1');
            $name = time() . 'jooberIntroScreen1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen1 = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen2')) {
            $image1 = $request->file('jooberIntroScreen2');
            $name = time() . 'jooberIntroScreen2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen2 = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen3')) {
            $image1 = $request->file('jooberIntroScreen3');
            $name = time() . 'jooberIntroScreen3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen3 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen1')) {
            $image1 = $request->file('applicantIntroScreen1');
            $name = time() . 'applicantIntroScreen1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen1 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen2')) {
            $image1 = $request->file('applicantIntroScreen2');
            $name = time() . 'applicantIntroScreen2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen2 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen3')) {
            $image1 = $request->file('applicantIntroScreen3');
            $name = time() . 'applicantIntroScreen3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen3 = 'image/' . $name;
        }

    } 

    //APPLOGO END

    if($request->hasfile('jooberIntroScreen1')==false){
           
        if ($request->hasfile('mainScreen')) {
            $image1 = $request->file('mainScreen');
            $name = time() . 'mainScreen' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->mainScreen = 'image/' . $name;
        }
        if ($request->hasfile('appLogo')) {
            $image1 = $request->file('appLogo');
            $name = time() . 'appLogo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->appLogo = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen2')) {
            $image1 = $request->file('jooberIntroScreen2');
            $name = time() . 'jooberIntroScreen2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen2 = 'image/' . $name;
        }
        if ($request->hasfile('jooberIntroScreen3')) {
            $image1 = $request->file('jooberIntroScreen3');
            $name = time() . 'jooberIntroScreen3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->jooberIntroScreen3 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen1')) {
            $image1 = $request->file('applicantIntroScreen1');
            $name = time() . 'applicantIntroScreen1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen1 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen2')) {
            $image1 = $request->file('applicantIntroScreen2');
            $name = time() . 'applicantIntroScreen2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen2 = 'image/' . $name;
        }
        if ($request->hasfile('applicantIntroScreen3')) {
            $image1 = $request->file('applicantIntroScreen3');
            $name = time() . 'applicantIntroScreen3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image1->move($destinationPath, $name);
            $appSetting->applicantIntroScreen3 = 'image/' . $name;
        }

    } 
  //END JOBBERINTRO1 SCREEN END

  if($request->hasfile('jooberIntroScreen2')==false){
           
    if ($request->hasfile('mainScreen')) {
        $image1 = $request->file('mainScreen');
        $name = time() . 'mainScreen' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->mainScreen = 'image/' . $name;
    }
    if ($request->hasfile('appLogo')) {
        $image1 = $request->file('appLogo');
        $name = time() . 'appLogo' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->appLogo = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen1')) {
        $image1 = $request->file('jooberIntroScreen1');
        $name = time() . 'jooberIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen3')) {
        $image1 = $request->file('jooberIntroScreen3');
        $name = time() . 'jooberIntroScreen3' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen3 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen1')) {
        $image1 = $request->file('applicantIntroScreen1');
        $name = time() . 'applicantIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen2')) {
        $image1 = $request->file('applicantIntroScreen2');
        $name = time() . 'applicantIntroScreen2' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen2 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen3')) {
        $image1 = $request->file('applicantIntroScreen3');
        $name = time() . 'applicantIntroScreen3' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen3 = 'image/' . $name;
    }

} 

//END JOBBERINTRO2 SCREEN END

if($request->hasfile('jooberIntroScreen3')==false){
           
    if ($request->hasfile('mainScreen')) {
        $image1 = $request->file('mainScreen');
        $name = time() . 'mainScreen' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->mainScreen = 'image/' . $name;
    }
    if ($request->hasfile('appLogo')) {
        $image1 = $request->file('appLogo');
        $name = time() . 'appLogo' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->appLogo = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen1')) {
        $image1 = $request->file('jooberIntroScreen1');
        $name = time() . 'jooberIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen2')) {
        $image1 = $request->file('jooberIntroScreen2');
        $name = time() . 'jooberIntroScreen2' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen2 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen1')) {
        $image1 = $request->file('applicantIntroScreen1');
        $name = time() . 'applicantIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen2')) {
        $image1 = $request->file('applicantIntroScreen2');
        $name = time() . 'applicantIntroScreen2' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen2 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen3')) {
        $image1 = $request->file('applicantIntroScreen3');
        $name = time() . 'applicantIntroScreen3' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen3 = 'image/' . $name;
    }

} 

//END JOBBERINTRO3 SCREEN END

if($request->hasfile('applicantIntroScreen1')==false){
           
    if ($request->hasfile('mainScreen')) {
        $image1 = $request->file('mainScreen');
        $name = time() . 'mainScreen' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->mainScreen = 'image/' . $name;
    }
    if ($request->hasfile('appLogo')) {
        $image1 = $request->file('appLogo');
        $name = time() . 'appLogo' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->appLogo = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen1')) {
        $image1 = $request->file('jooberIntroScreen1');
        $name = time() . 'jooberIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen2')) {
        $image1 = $request->file('jooberIntroScreen2');
        $name = time() . 'jooberIntroScreen2' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen2 = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen3')) {
        $image1 = $request->file('jooberIntroScreen3');
        $name = time() . 'jooberIntroScreen3' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen3 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen2')) {
        $image1 = $request->file('applicantIntroScreen2');
        $name = time() . 'applicantIntroScreen2' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen2 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen3')) {
        $image1 = $request->file('applicantIntroScreen3');
        $name = time() . 'applicantIntroScreen3' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen3 = 'image/' . $name;
    }

} 

//END APPLICANTINTRO1 SCREEN END

if($request->hasfile('applicantIntroScreen2')==false){
           
    if ($request->hasfile('mainScreen')) {
        $image1 = $request->file('mainScreen');
        $name = time() . 'mainScreen' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->mainScreen = 'image/' . $name;
    }
    if ($request->hasfile('appLogo')) {
        $image1 = $request->file('appLogo');
        $name = time() . 'appLogo' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->appLogo = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen1')) {
        $image1 = $request->file('jooberIntroScreen1');
        $name = time() . 'jooberIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen2')) {
        $image1 = $request->file('jooberIntroScreen2');
        $name = time() . 'jooberIntroScreen2' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen2 = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen3')) {
        $image1 = $request->file('jooberIntroScreen3');
        $name = time() . 'jooberIntroScreen3' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen3 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen1')) {
        $image1 = $request->file('applicantIntroScreen1');
        $name = time() . 'applicantIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen3')) {
        $image1 = $request->file('applicantIntroScreen3');
        $name = time() . 'applicantIntroScreen3' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen3 = 'image/' . $name;
    }

} 


//END APPLICANTINTRO2 SCREEN END

if($request->hasfile('applicantIntroScreen2')==false){
           
    if ($request->hasfile('mainScreen')) {
        $image1 = $request->file('mainScreen');
        $name = time() . 'mainScreen' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->mainScreen = 'image/' . $name;
    }
    if ($request->hasfile('appLogo')) {
        $image1 = $request->file('appLogo');
        $name = time() . 'appLogo' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->appLogo = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen1')) {
        $image1 = $request->file('jooberIntroScreen1');
        $name = time() . 'jooberIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen2')) {
        $image1 = $request->file('jooberIntroScreen2');
        $name = time() . 'jooberIntroScreen2' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen2 = 'image/' . $name;
    }
    if ($request->hasfile('jooberIntroScreen3')) {
        $image1 = $request->file('jooberIntroScreen3');
        $name = time() . 'jooberIntroScreen3' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->jooberIntroScreen3 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen1')) {
        $image1 = $request->file('applicantIntroScreen1');
        $name = time() . 'applicantIntroScreen1' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen1 = 'image/' . $name;
    }
    if ($request->hasfile('applicantIntroScreen2')) {
        $image1 = $request->file('applicantIntroScreen2');
        $name = time() . 'applicantIntroScreen2' . '.' . $image1->getClientOriginalExtension();
        $destinationPath = 'image/';
        $image1->move($destinationPath, $name);
        $appSetting->applicantIntroScreen2 = 'image/' . $name;
    }

} 

        $appSetting->save();
        toastr()->success('Update Setting ');
        return back();

        }

        
        
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
