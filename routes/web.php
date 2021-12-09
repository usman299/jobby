<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function (){
    $check =  preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    if($check){
        return redirect()->route('front.intro');
    }else{
        return  view('auth.login');
    }
});

Auth::routes();
//Route::get('/', 'FrontendController@index')->name('front.index');
Route::get('/intro', 'FrontendController@intro')->name('front.intro');
Route::get('/intro/jobber', 'FrontendController@introjobber')->name('intro.jobber');
Route::get('/intro/applicant', 'FrontendController@introapplicant')->name('intro.applicant');
Route::get('/splash', 'FrontendController@splash')->name('front.splash');

Route::get('/front/login/{id}', 'FrontendController@login')->name('front.login');
Route::get('/front/register/{id}', 'FrontendController@register')->name('front.register');


//App Routes
Route::group(['middleware' => ['auth', 'web', 'app']], function() {

Route::post('/fetchsubcategory', 'Front\ApplicantController@fetchsubcategory')->name('fetchsubcategory');

Route::get('/app', 'FrontendController@app')->name('front.app');
Route::get('/app/settings', 'FrontendController@settings')->name('app.settings');
Route::get('/categories', 'FrontendController@allCategories')->name('front.categories');
Route::get('/subCategories/{id}', 'FrontendController@allSubCategories')->name('front.subcategories');

Route::get('/applicant/services', 'Front\ApplicantController@services')->name('applicant.services');
Route::get('/applicant/single/service/{id}', 'Front\ApplicantController@singleService')->name('applicant.singleService');

//Services Add
Route::get('/jobber/services', 'Front\JobberController@allServices')->name('jobber.services');
Route::get('/jobber/single/services/{id}', 'Front\JobberController@singleServices')->name('jobber.single.services');
Route::post('/jobber/services/store', 'Front\JobberController@storeServices')->name('jobber.services.store');
Route::get('/jobber/services/edit/{id}', 'Front\JobberController@editServices')->name('jobber.services.edit');
Route::post('/jobber/services/update/{id}', 'Front\JobberController@updateServices')->name('jobber.services.update');
Route::get('/services/status/update/{id}', 'Front\JobberController@updateStatusServices')->name('services.status.update');

Route::post('/jobrequest/submit', 'Front\ApplicantController@jobrequestSubmit')->name('jobrequest.submit');
Route::get('/applicant/jobrequests', 'Front\ApplicantController@jobrequests')->name('applicant.jobrequests');
Route::get('/applicant/jobrequests/detail/{id}', 'Front\ApplicantController@jobrequestsDetail')->name('applicant.jobrequest.detail');
Route::get('/applicant/jobrequests/status/{id}', 'Front\ApplicantController@jobrequestsStatus')->name('applicant.jobrequest.status');
Route::get('/applicant/proposals', 'Front\ApplicantController@proposals')->name('applicant.proposals');
Route::get('/applicant/proposal/detail/{id}', 'Front\ApplicantController@proposalDetails')->name('applicant.proposal.detail');
Route::post('/proposal/accept/{id}', 'Front\ApplicantController@proposalAccept')->name('proposal.accept');

Route::post('/proposal/submit', 'Front\JobberController@proposalSubmit')->name('proposal.submit');
Route::get('/jobber/proposals', 'Front\JobberController@proposals')->name('jobber.proposals');


});


//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function() {

Route::get('/admin/profile', 'Admin\UsersController@adminProfile')->name('admin.profile');
Route::get('/home', 'HomeController@index')->name('home');

// START ROUTES CATEGORY

Route::get('/category/index', 'Admin\CategoryController@index')->name('category.index');
Route::get('/category/create', 'Admin\CategoryController@create')->name('category.create');
Route::post('/category/store', 'Admin\CategoryController@store')->name('category.store');
Route::get('/category/destroy/{id}', 'Admin\CategoryController@destroy')->name('category.destroy');

// END ROUTES CATEGORY


// START ROUTES Sub CATEGORY

Route::get('/subcategory/index', 'Admin\SubCategoryController@index')->name('subcategory.index');
Route::get('/subcategory/create', 'Admin\SubCategoryController@create')->name('subcategory.create');
Route::post('/subcategory/store', 'Admin\SubCategoryController@store')->name('subcategory.store');
Route::get('/subcategory/delete/{id}', 'Admin\SubCategoryController@destroy')->name('subcategory.delete');

// END ROUTES Sub CATEGORY

// START ROUTES Applicant
Route::get('/applicant/index', 'Admin\UsersController@applicant')->name('applicant.index');
Route::get('/applicant/profile/{id}', 'Admin\UsersController@applicantShowProfile')->name('applicant.profile');


// END ROUTES Applicant



// START ROUTES Jobber
Route::get('/jobber/index', 'Admin\UsersController@jobber')->name('jobber.index');
Route::get('/user/status/{status}/{id}', 'Admin\UsersController@status')->name('user.status');
Route::get('/user/delete/{id}', 'Admin\UsersController@destroy')->name('user.delete');
Route::get('/jobber/profile/{id}', 'Admin\UsersController@jobberShowProfile')->name('jobber.profile');


// END ROUTES jobber
Route::get('/skils/index', 'Admin\SkilsController@index')->name('skils.index');
Route::get('/skils/create', 'Admin\SkilsController@create')->name('skils.create');
Route::get('/skils/delete/{id}', 'Admin\SkilsController@destroy')->name('skils.delete');
Route::post('/skils/store', 'Admin\SkilsController@store')->name('skils.store');
Route::get('/skils/edit/{id}', 'Admin\SkilsController@edit')->name('skils.edit');
Route::post('/skils/update/{id}', 'Admin\SkilsController@update')->name('skils.update');
 Route::get('/fetch/subcategory/{id}', 'Admin\SkilsController@fetchSubcategory');


//  APP SETTING
Route::get('/setting/create', 'Admin\AppSettingController@create')->name('setting.create');
Route::post('/setting/store', 'Admin\AppSettingController@store')->name('setting.store');
//  END APP SETTING

//Slider Create
Route::get('/slider/create', 'Admin\AppSettingController@sliderCreate')->name('slider.create');
Route::post('/slider/store', 'Admin\AppSettingController@sliderStore')->name('slider.store');
Route::get('/slider/index', 'Admin\AppSettingController@sliderIndex')->name('slider.index');
Route::get('/slider/edit/{id}', 'Admin\AppSettingController@sliderEdit')->name('slider.edit');
Route::get('/slider/delete/{id}', 'Admin\AppSettingController@sliderDelete')->name('slider.delete');
Route::post('/slider/update/{id}', 'Admin\AppSettingController@countoryCreate')->name('slider.update');

//END SLIDER Create

//Coutnroy Add
Route::get('/countory/create', 'Admin\AppSettingController@countoryCreate')->name('countory.create');
Route::post('/countory/store', 'Admin\AppSettingController@countoryStore')->name('countory.store');
Route::get('/countory/index', 'Admin\AppSettingController@countoryIndex')->name('countory.index');
Route::get('/countory/delete/{id}', 'Admin\AppSettingController@countoryDelete')->name('countory.delete');
Route::get('/countory/edit/{id}', 'Admin\AppSettingController@countoryEdit')->name('countory.edit');
Route::post('/countory/update/{id}', 'Admin\AppSettingController@countoryUpdate')->name('countory.update');

//Countory End


});



