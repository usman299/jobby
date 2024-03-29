<?php
namespace App\Http\Controllers\Admin;
use App\About;
use App\AppSetting;
use App\Blog;
use App\Contact;
use App\Countory;
use App\Http\Controllers\Controller;
use App\Http\NotificationHelper;
use App\JobFactory;
use App\QuestionAnswer;
use App\SCaseServices;
use App\SliderGalery;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Validator;
class AppSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $appSetting = AppSetting::first();
        return view('admin.appSetting.create', compact('appSetting'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $chek = AppSetting::get();
        if ($chek->isEmpty()) {
            $validator = Validator::make($request->all(), [
                'mainScreen' => 'mimes:jpeg,jpg,png|required',
                'appLogo' => 'mimes:jpeg,jpg,png|required',
                'jobberIntroScreen1' => 'mimes:jpeg,jpg,png|required',
                'jobberIntroScreen2' => 'mimes:jpeg,jpg,png|required',
                'jobberIntroScreen3' => 'mimes:jpeg,jpg,png|required',
                'applicantIntroScreen1' => 'mimes:jpeg,jpg,png|required',
                'applicantIntroScreen2' => 'mimes:jpeg,jpg,png|required',
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
        } else {
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
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    public function sliderCreate()
    {
        $countory = Countory::all();
        return view('admin.slider.create', compact('countory'));
    }
    public function sliderStore(Request $request)
    {
        $slider = new SliderGalery();
        $slider->userRole = $request->userRole;
        $slider->countory_id = $request->countory_id;
        if ($request->hasfile('img')) {
            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(410, 200)->save(public_path('admin/images/' . $name));
            $slider->img = 'admin/images/' . $name;
        }
        $slider->save();
        toastr()->success('Added Slider Galery ');
        return redirect()->back();
    }
    public function sliderIndex()
    {
        $slider = SliderGalery::all();
        return view('admin.slider.index', compact('slider'));
    }
    public function sliderEdit($id)
    {
        $slider = SliderGalery::where('id', '=', $id)->first();
        $countory = Countory::all();
        return view('admin.slider.edit', compact('slider', 'countory'));
    }
    public function sliderUpdate($id, Request $request)
    {
        $slider = SliderGalery::where('id', '=', $id)->first();
        $slider->userRole = $request->userRole;
        if ($request->hasfile('img')) {
            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(410, 200)->save(public_path('admin/images/' . $name));
            $slider->img = 'admin/images/' . $name;
        }
        $slider->Update();
        toastr()->success('Update Slider Galery ');
        return back();
    }
    public function sliderDelete($id)
    {
        $slider = SliderGalery::where('id', '=', $id)->first();
        $slider->delete();
        toastr()->error('Your Data Delted');
        return back();
    }
    public function countoryCreate()
    {
        return view('admin.countory.create');
    }
    public function countoryStore(Request $request)
    {
        $countory = new Countory();
        $countory->name = $request->name;
        if ($countory->save()) {
            $countory = Countory::all();
            toastr()->success(' Your Data Save ');
            return view('admin.countory.index', compact('countory'));
        } else {
            toastr()->info('Your Data Not Save');
            return back();
        }
    }
    public function countoryIndex()
    {
        $countory = Countory::all();
        return view('admin.countory.index', compact('countory'));
    }
    public function countoryDelete($id)
    {
        $countory = Countory::where('id', '=', $id)->first();
        $countory->delete();
        toastr()->error('Your Data Delted');
        return back();
    }
    public function countoryEdit($id)
    {
        $countory = Countory::where('id', '=', $id)->first();
        return view('admin.countory.edit', compact('countory'));
    }
    public function countoryUpdate(Request $request, $id)
    {
        $countory = Countory::where('id', '=', $id)->first();
        $countory->name = $request->name;
        if ($countory->update()) {
            $countory = Countory::all();
            toastr()->success('Update Your Data ');
            return view('admin.countory.index', compact('countory'));
        } else {
            toastr()->info('Your Data Not Update');
            return back();
        }
    }
    public function questionCreate()
    {
        return view('admin.setting.questionAns.create');
    }
    public function questionStore(Request $request)
    {
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->question = $request->question;
        $questionAnswer->answer = $request->answer;
        $questionAnswer->save();
        toastr()->success('Your Data  Added');
        return redirect()->route('question.index');
    }
    public function questionIndex()
    {
        $questionAnswer = QuestionAnswer::all();
        return view('admin.setting.questionAns.index', compact('questionAnswer'));
    }
    public function questionEdit($id)
    {
        $questionAnswer = QuestionAnswer::where('id', '=', $id)->first();
        return view('admin.setting.questionAns.edit', compact('questionAnswer'));
    }
    public function questionUpdate(Request $request, $id)
    {
        $questionAnswer = QuestionAnswer::where('id', '=', $id)->first();
        $questionAnswer->question = $request->question;
        $questionAnswer->answer = $request->answer;
        $questionAnswer->update();
        toastr()->success('Your Data  Update');
        return redirect()->route('question.index');
    }
    public function questionDelete($id)
    {
        $questionAnswer = QuestionAnswer::where('id', '=', $id)->first();
        $questionAnswer->delete();
        toastr()->error('Your Data  Update');
        return back();
    }
    public function aboutCreate()
    {
        $about = About::first();
        return view('admin.setting.about.index', compact('about'));
    }
    public function aboutStore(Request $request)
    {
        $about = About::first();
        $about->description = $request->description;
        $about->copyright = $request->copyright;
        $about->condition = $request->condition;
        $about->update();
        toastr()->success('Your Data  Update');
        return back();
    }
    public function demandeurContact()
    {
        $contact = Contact::all();
        return view('admin.setting.contact.index', compact('contact'));
    }
    public function jobberContact()
    {
        $contact = Contact::all();
        return view('admin.setting.contact.index', compact('contact'));
    }
    public function contactDetials($id)
    {
        $contact = Contact::where('id', '=', $id)->first();
        return view('admin.setting.contact.show', compact('contact'));
    }
    public function createNotfication()
    {
        return view('admin.notfication.create');
    }
    public function fetchdata($id)
    {
        $user = User::where('role', '=', $id)->get();
        return response()->json($user);
    }
    public function sendNotfication(Request $request)
    {
        if ($request->user_id[0] == "send_to_all") {
            $firebaseToken = User::Where('role', '=', $request->user_role)->whereNotNull('device_token')->pluck('device_token')->all();
            $users = User::where('role', '=', $request->user_role)->get();
            foreach ($users as $user) {
                NotificationHelper::addtoNitification(Auth::user()->id, $user->id, $request->notification, 0, 'Message de l\'administrateur', $user->country);
            }
        } else {
            $firebaseToken = User::Where('role', '=', $request->user_role)->whereIn('id', $request->user_id)->whereNotNull('device_token')->pluck('device_token')->all();
            foreach ($request->user_id as $user) {
                $country = User::where('id', '=', $user)->first();
                NotificationHelper::addtoNitification(Auth::user()->id, $user, $request->notification, 0, 'Message de l\'administrateur', $country->country);
            }
        }
        if ($request->user_role == 1){
            NotificationHelper::pushNotificationJobber("Message de l\'administrateur", $firebaseToken, $request->notification);
        }else{
            NotificationHelper::pushNotification("Message de l\'administrateur", $firebaseToken, $request->notification);
        }
        toastr()->success('Envoyé avec succès à tous');
        return back();
    }
    public function servicesCreate()
    {
        $srvice = SCaseServices::first();
        return view('admin.showCaseSetting.service', compact('srvice'));
    }
    public function serviceStore(Request $request)
    {
        $srvice = SCaseServices::first();
        $srvice->title = $request->title;
        $srvice->title1 = $request->title1;
        $srvice->title2 = $request->title2;
        $srvice->title3 = $request->title3;
        $srvice->title4 = $request->title4;
        $srvice->description1 = $request->description1;
        $srvice->description2 = $request->description2;
        $srvice->description3 = $request->description3;
        $srvice->description4 = $request->description4;
        if ($request->hasfile('img')) {
            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(540, 413)->save(public_path('admin/images/' . $name));
            $srvice->img = 'admin/images/' . $name;
        }
        $srvice->update();
        toastr()->success('Your Data  Update');
        return back();
    }
    public function testiCreate()
    {
        return view('admin.showCaseSetting.testi.create');
    }
    public function testiIndex()
    {
        $testi = Testimonial::get();
        return view('admin.showCaseSetting.testi.index', compact('testi'));
    }
    public function testiStore(Request $request)
    {
        $testi = new Testimonial();
        $testi->name = $request->name;
        $testi->destination = $request->destination;
        $testi->description = $request->description;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(540, 413)->save(public_path('admin/images/' . $name));
            $testi->image = 'admin/images/' . $name;
        }
        $testi->save();
        toastr()->success('Your Data  Added');
        return back();
    }
    public function testiDelete($id)
    {
        $testi = Testimonial::where('id', '=', $id)->first();
        $testi->delete();
        toastr()->error('Your Data  Delete');
        return back();
    }
    public function testiEdit($id)
    {
        $testi = Testimonial::where('id', '=', $id)->first();
        return view('admin.showCaseSetting.testi.edit', compact('testi'));
    }
    public function testiUpdate(Request $request, $id)
    {
        $testi = Testimonial::where('id', '=', $id)->first();
        $testi->name = $request->name;
        $testi->destination = $request->destination;
        $testi->description = $request->description;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(369, 253)->save(public_path('admin/images/' . $name));
            $testi->image = 'admin/images/' . $name;
        }
        $testi->Update();
        toastr()->success('Your Data  Update');
        return back();
    }
    public function blogCreate()
    {
        return view('admin.showCaseSetting.blog.create');
    }
    public function blogIndex()
    {
        $blog = Blog::latest()->get();
        return view('admin.showCaseSetting.blog.index', compact('blog'));
    }
    public function blogStore(Request $request)
    {
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->description = $request->description;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(540, 413)->save(public_path('admin/images/' . $name));
            $blog->image = 'admin/images/' . $name;
        }
        $blog->save();
        toastr()->success('Your Data  Added');
        return back();
    }
    public function blogDelete($id)
    {
        $blog = Blog::where('id', '=', $id)->first();
        $blog->delete();
        toastr()->error('Your Data  Delete');
        return back();
    }
    public function blogEdit($id)
    {
        $blog = Blog::where('id', '=', $id)->first();
        return view('admin.showCaseSetting.blog.edit', compact('blog'));
    }
    public function blogUpdate(Request $request, $id)
    {
        $blog = Blog::where('id', '=', $id)->first();
        $blog->name = $request->name;
        $blog->description = $request->description;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(540, 413)->save(public_path('admin/images/' . $name));
            $blog->image = 'admin/images/' . $name;
        }
        $blog->Update();
        toastr()->success('Your Data  Update');
        return back();
    }
    public function jobfactoryCreate()
    {
        $jobfactory = JobFactory::first();
        return view('admin.showCaseSetting.jobfactory', compact('jobfactory'));
    }
    public function jobfactoryStore(Request $request)
    {
        $jobfactory = JobFactory::first();
        $jobfactory->title = $request->title;
        $jobfactory->description = $request->description;
        $jobfactory->url1 = $request->url1;
        $jobfactory->url2 = $request->url2;
        if ($request->hasfile('image')) {
            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(540, 413)->save(public_path('admin/images/' . $name));
            $jobfactory->image = 'admin/images/' . $name;
        }
        $jobfactory->update();
        toastr()->success('Your Data  Update');
        return back();
    }
}
