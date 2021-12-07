<?php

namespace App\Http\Controllers\Admin;
use App\AppSetting;
use App\SliderGalery;
use App\Countory;
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

        $appSetting->update();
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
    public function sliderCreate()
    {
        return view('admin.slider.create');
    }
    public function sliderStore(Request $request)
    {
       $slider = new SliderGalery();

       $slider->userRole = $request->userRole;
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/images/';
            $image1->move($destinationPath, $name);
            $slider->img = 'admin/images/' . $name;
        }
        $slider->save();
        toastr()->success('Added Slider Galery ');
        $slider = SliderGalery::all();
        return view('admin.slider.index',compact('slider'));
    }

    public function sliderIndex()
    {
        $slider = SliderGalery::all();
        return view('admin.slider.index',compact('slider'));
    }
    public function sliderEdit($id)
    {
        $slider = SliderGalery::where('id','=',$id)->first();
        return view('admin.slider.edit',compact('slider'));
    }
    public function sliderUpdate($id,Request $request)
    {
        $slider = SliderGalery::where('id','=',$id)->first();

        $slider->userRole = $request->userRole;
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/images/';
            $image1->move($destinationPath, $name);
            $slider->img = 'admin/images/' . $name;
        }
        $slider->Update();
        toastr()->success('Update Slider Galery ');
        $slider = SliderGalery::all();
        return view('admin.slider.index',compact('slider'));
    }
    public function sliderDelete($id)
    {
        $slider = SliderGalery::where('id','=',$id)->first();
        $slider->delete();
         toastr()->error('Your Data Delted');
         return back();
    }
    public function countoryCreate()
    {

        return view('admin.countory.create');
    }
    public function countoryStore(Request $request)
    {  $countory= new Countory();
       $countory->name = $request->name;
       if($countory->save()){
           $countory = Countory::all();
           toastr()->success(' Your Data Save ');
           return view('admin.countory.index',compact('countory'));
       }
       else{
           toastr()->info('Your Data Not Save');
           return back();
       }



    }
    public function countoryIndex()
    {
        $countory = Countory::all();
        return view('admin.countory.index',compact('countory'));
    }
    public function countoryDelete($id)
    {
        $countory = Countory::where('id','=',$id)->first();
        $countory->delete();
        toastr()->error('Your Data Delted');
        return back();
    }
    public function countoryEdit($id)
    {
        $countory = Countory::where('id','=',$id)->first();

        return view('admin.countory.edit',compact('countory'));

    }
    public function countoryUpdate(Request $request,$id)
    {  $countory = Countory::where('id','=',$id)->first();
        $countory->name = $request->name;
        if($countory->update()){
            $countory = Countory::all();
            toastr()->success('Update Your Data ');
            return view('admin.countory.index',compact('countory'));
        }
        else{
            toastr()->info('Your Data Not Update');
            return back();
        }



    }
}
