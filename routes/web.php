<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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



Auth::routes();
Route::get('/map', function (){
    $json = file_get_contents("https://ipinfo.io/json");
//        $json = file_get_contents("http://www.geoplugin.net/json.gp?ip=" . request()->ip());
    $details = json_decode($json);
    dd($details);
    return view('map');
});
Route::get('/success', function (){
    return view('front.payment.success');
});
Route::get('/', 'FrontendController@index');
Route::get('/intro', 'FrontendController@intro')->name('front.intro')->middleware('guest');
Route::get('/intro/jobber', 'FrontendController@introjobber')->name('intro.jobber');
Route::get('/intro/applicant', 'FrontendController@introapplicant')->name('intro.applicant');
Route::get('/splash', 'FrontendController@splash')->name('front.splash');

Route::get('/front/login/{id}', 'FrontendController@login')->name('front.login');
Route::get('/front/register/{id}', 'FrontendController@register')->name('front.register');
Route::post('/fetchsubcategory', 'Front\ApplicantController@fetchsubcategory')->name('fetchsubcategory');
Route::post('/fetchquestions', 'FrontendController@fetchquestions')->name('fetchquestions');


//App Routes
Route::group(['middleware' => ['auth', 'web', 'app']], function() {


Route::get('/app', 'FrontendController@app')->name('front.app');
Route::get('/categories', 'FrontendController@allCategories')->name('front.categories');
Route::get('/subCategories/{id}', 'FrontendController@allSubCategories')->name('front.subcategories');

Route::get('/get/badge', 'Front\SettingsController@getBadge')->name('get.badge');
Route::get('/proof/indentity', 'Front\SettingsController@identity')->name('proof.indentity');
Route::get('/get/badge/pro', 'Front\SettingsController@getBadgepro')->name('badge.pro');
Route::post('/get/badge/update', 'Front\SettingsController@badgeUpdate')->name('badge.update');
Route::get('/app/settings', 'Front\SettingsController@settings')->name('app.settings');
Route::get('/app/settings/profile', 'Front\SettingsController@profile')->name('settings.profile');
Route::get('/app/about', 'Front\SettingsController@about')->name('app.about');
Route::get('/app/notifications', 'Front\SettingsController@notifications')->name('app.notifications');
Route::get('/app/support', 'Front\SettingsController@support')->name('app.support');
Route::get('/app/contact', 'Front\SettingsController@contact')->name('app.contact');
Route::post('/app/contact/store', 'Front\SettingsController@contactStore')->name('app.contact.store');
Route::get('/app/password/change', 'Front\SettingsController@passwordChange')->name('password.change');
Route::post('/profile/update', 'Front\SettingsController@profileUpdate')->name('profile.update');
Route::post('/password/update', 'Front\SettingsController@passwordUpdate')->name('password.update');
Route::post('/identity/store', 'Front\SettingsController@identityStore')->name('identity.store');

Route::get('/job/comments/{id}', 'Front\ApplicantController@comments')->name('job.comments');
Route::post('/comment/submit', 'Front\ApplicantController@commentSubmit')->name('comment.submit');

Route::get('/applicant/services', 'Front\ApplicantController@services')->name('applicant.services');
Route::get('/applicant/jobber/services/{id}', 'Front\ApplicantController@jobberServices')->name('applicant.jobber.services');
Route::get('/applicant/service/{id}', 'Front\ApplicantController@service')->name('applicant.service');
Route::get('/applicant/single/service/{id}', 'Front\ApplicantController@singleService')->name('applicant.singleService');

Route::Post('/applicant/services/contract/{id}', 'Front\ApplicantController@servicesContract')->name('applicant.services.contract');
Route::Post('/applicant/proposals/contract/{id}', 'Front\ApplicantController@proposalsContract')->name('applicant.proposals.contract');
Route::Post('/jobber/review/contract/{id}', 'Front\ApplicantController@jobberReviewContract')->name('jobber.review');

Route::get('/jobber/contract', 'Front\JobberController@getJobberContract')->name('jobber.contract');
Route::get('/jobber/contract/details/{id}', 'Front\JobberController@detialsJobberContract')->name('jobber.contract.details');
Route::get('/contract/status/{id}', 'Front\JobberController@contractStatus')->name('contract.status');

Route::get('/applicant/contract', 'Front\ApplicantController@getApplicantContract')->name('applicant.contract');
Route::get('/applicant/contract/details/{id}', 'Front\ApplicantController@detialsApplicantContract')->name('applicant.contract.details');
Route::get('/applicant/contract/status/{id}/{status}', 'Front\ApplicantController@applicantContractDetailsStatus')->name('applicant.contract.status');

Route::get('/jobber/services', 'Front\JobberController@allServices')->name('jobber.services');
Route::get('/jobber/single/services/{id}', 'Front\JobberController@singleServices')->name('jobber.single.services');
Route::post('/jobber/services/store', 'Front\JobberController@storeServices')->name('jobber.services.store');
Route::get('/jobber/services/edit/{id}', 'Front\JobberController@editServices')->name('jobber.services.edit');
Route::post('/jobber/services/update/{id}', 'Front\JobberController@updateServices')->name('jobber.services.update');
Route::get('/services/status/update/{id}', 'Front\JobberController@updateStatusServices')->name('services.status.update');

Route::post('/jobrequest/submit/{id}', 'Front\ApplicantController@jobrequestSubmit')->name('jobrequest.submit');
Route::post('/job/subcategory/submit/{id}', 'Front\ApplicantController@jobSubcategorySubmit')->name('job.subcategory.submit');

Route::get('/applicant/jobrequests', 'Front\ApplicantController@jobrequests')->name('applicant.jobrequests');
Route::get('/applicant/jobrequests/detail/{id}', 'Front\ApplicantController@jobrequestsDetail')->name('applicant.jobrequest.detail');
Route::get('/applicant/jobrequests/status/{id}', 'Front\ApplicantController@jobrequestsStatus')->name('applicant.jobrequest.status');
Route::get('/applicant/proposals', 'Front\ApplicantController@proposals')->name('applicant.proposals');
Route::get('/applicant/proposal/detail/{id}', 'Front\ApplicantController@proposalDetails')->name('applicant.proposal.detail');
Route::post('/proposal/accept/{id}', 'Front\ApplicantController@proposalAccept')->name('proposal.accept');
Route::get('/proposal/reject/{id}', 'Front\ApplicantController@proposalReject')->name('proposal.reject');

Route::post('/proposal/submit', 'Front\JobberController@proposalSubmit')->name('proposal.submit');
Route::get('/jobber/proposals', 'Front\JobberController@proposals')->name('jobber.proposals');

Route::get('/proposal/payment/{id}', 'Front\PaymentController@payment')->name('proposal.payment');

Route::get('/job/subcategory/{id}', 'Front\JobPostController@subcategory')->name('job.subcategory');
Route::get('/job/childcatgory/{id}', 'Front\JobPostController@childcatgory')->name('job.childcatgory');
Route::get('/job/request/{id}', 'Front\JobPostController@request')->name('job.request');
Route::get('/request/subcategory/{id}', 'Front\JobPostController@requestSubcategory')->name('request.subcategory');

});


//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function() {

Route::get('/admin/profile', 'Admin\UsersController@adminProfile')->name('admin.profile');
Route::post('/admin/profile/update/{id}', 'Admin\UsersController@adminProfileUpdate')->name('admin.profile.update');
    Route::post('/admin/password/update{id}', 'Admin\UsersController@adminPasswordUpdate')->name('admin.password.update');

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/questions', 'Admin\QuestionController@index')->name('admin.questions');
Route::get('/questions/delete/{id}', 'Admin\QuestionController@delete')->name('question.delete');
Route::get('/questions/create', 'Admin\QuestionController@create')->name('question.create');
Route::post('/questions/store', 'Admin\QuestionController@store')->name('question.store');



Route::get('/category/create', 'Admin\CategoryController@create')->name('category.create');
Route::post('/category/store', 'Admin\CategoryController@store')->name('category.store');
Route::get('/category/index', 'Admin\CategoryController@index')->name('category.index');
Route::get('/category/destroy/{id}', 'Admin\CategoryController@destroy')->name('category.destroy');
Route::get('/category/edit/{id}', 'Admin\CategoryController@edit')->name('category.edit');
Route::post('/category/update/{id}', 'Admin\CategoryController@update')->name('category.update');


Route::get('/subcategory/index', 'Admin\SubCategoryController@index')->name('subcategory.index');
Route::get('/subcategory/create', 'Admin\SubCategoryController@create')->name('subcategory.create');
Route::post('/subcategory/store', 'Admin\SubCategoryController@store')->name('subcategory.store');
Route::get('/subcategory/delete/{id}', 'Admin\SubCategoryController@destroy')->name('subcategory.delete');

Route::get('/fetchcategory/{id}', 'Admin\CategoryController@fetchCategory')->name('fetchcategory');
Route::get('/subcategory/edit/{id}', 'Admin\SubCategoryController@edit')->name('subcategory.edit');
Route::post('/subcategory/update/{id}', 'Admin\SubCategoryController@update')->name('subcategory.update');

// END ROUTES Sub CATEGORY

    //Start Child Category
    Route::get('/childcategory/index', 'Admin\ChildCategoryControlle@index')->name('childcategory.index');
    Route::get('/childcategory/create', 'Admin\ChildCategoryControlle@create')->name('childcategory.create');
    Route::post('/childcategory/store', 'Admin\ChildCategoryControlle@store')->name('childcategory.store');


//    Route::get('/fetchsubcategory/{id}', 'Admin\ChildCategoryControlle@fetchSubCategory')->name('fetchsubcategory');
    Route::get('/childcategory/edit/{id}', 'Admin\ChildCategoryControlle@edit')->name('childcategory.edit');
    Route::post('/childcategory/update/{id}', 'Admin\ChildCategoryControlle@update')->name('childcategory.update');


    //END CHILDCATEGORY

// START ROUTES Applicant
Route::get('/applicant/index', 'Admin\UsersController@applicant')->name('applicant.index');
Route::get('/applicant/country/{id}', 'Admin\UsersController@searhApplicantCountry')->name('search.applicant.country');
Route::get('/applicant/profile/{id}', 'Admin\UsersController@applicantShowProfile')->name('applicant.profile');


Route::get('/jobber/index', 'Admin\UsersController@jobber')->name('jobber.index');
Route::get('/jobber/country/{id}', 'Admin\UsersController@searhJobberCountry')->name('search.jobber.country');
Route::get('/user/status/{status}/{id}', 'Admin\UsersController@status')->name('user.status');
Route::get('/user/delete/{id}', 'Admin\UsersController@destroy')->name('user.delete');
Route::get('/jobber/profile/{id}', 'Admin\UsersController@jobberShowProfile')->name('jobber.profile');


Route::get('/skils/index', 'Admin\SkilsController@index')->name('skils.index');
Route::get('/skils/create', 'Admin\SkilsController@create')->name('skils.create');
Route::get('/skils/delete/{id}', 'Admin\SkilsController@destroy')->name('skils.delete');
Route::post('/skils/store', 'Admin\SkilsController@store')->name('skils.store');
Route::get('/skils/edit/{id}', 'Admin\SkilsController@edit')->name('skils.edit');
Route::post('/skils/update/{id}', 'Admin\SkilsController@update')->name('skils.update');
Route::get('/fetch/subcategory/{id}', 'Admin\SkilsController@fetchSubcategory');


Route::get('/setting/create', 'Admin\AppSettingController@create')->name('setting.create');
Route::post('/setting/store', 'Admin\AppSettingController@store')->name('setting.store');

Route::get('/slider/create', 'Admin\AppSettingController@sliderCreate')->name('slider.create');
Route::post('/slider/store', 'Admin\AppSettingController@sliderStore')->name('slider.store');
Route::get('/slider/index', 'Admin\AppSettingController@sliderIndex')->name('slider.index');
Route::get('/slider/edit/{id}', 'Admin\AppSettingController@sliderEdit')->name('slider.edit');
Route::get('/slider/delete/{id}', 'Admin\AppSettingController@sliderDelete')->name('slider.delete');
Route::post('/slider/update/{id}', 'Admin\AppSettingController@sliderUpdate')->name('slider.update');

Route::get('/countory/create', 'Admin\AppSettingController@countoryCreate')->name('countory.create');
Route::post('/countory/store', 'Admin\AppSettingController@countoryStore')->name('countory.store');
Route::get('/countory/index', 'Admin\AppSettingController@countoryIndex')->name('countory.index');
Route::get('/countory/delete/{id}', 'Admin\AppSettingController@countoryDelete')->name('countory.delete');
Route::get('/countory/edit/{id}', 'Admin\AppSettingController@countoryEdit')->name('countory.edit');
Route::post('/countory/update/{id}', 'Admin\AppSettingController@countoryUpdate')->name('countory.update');

Route::get('/question/create', 'Admin\AppSettingController@questionCreate')->name('question.create');
Route::post('/question/store', 'Admin\AppSettingController@questionStore')->name('question.store');
Route::get('/question/index', 'Admin\AppSettingController@questionIndex')->name('question.index');
Route::get('/question/edit/{id}', 'Admin\AppSettingController@questionEdit')->name('question.edit');
Route::post('/question/update{id}', 'Admin\AppSettingController@questionUpdate')->name('question.update');
Route::get('/question/delete/{id}', 'Admin\AppSettingController@questionDelete')->name('question.delete');

//ABout Description
Route::get('/about/create', 'Admin\AppSettingController@aboutCreate')->name('about.create');
Route::post('/about/store', 'Admin\AppSettingController@aboutStore')->name('about.store');

Route::get('/demandeur/contact', 'Admin\AppSettingController@demandeurContact')->name('demandeur.contact');
Route::get('/contact/details/{id}', 'Admin\AppSettingController@contactDetials')->name('contact.details');
Route::get('/jobber/contact', 'Admin\AppSettingController@jobberContact')->name('jobber.contact');




    Route::get('/admin/job/request', 'Admin\JobbyAppController@jobRequestIndex')->name('admin.jobrequest');
    Route::get('/admin/search/country/{id}', 'Admin\JobbyAppController@jobRequestSearchCountry')->name('search.country');
    Route::get('/job/request/show/{id}', 'Admin\JobbyAppController@jobRequestShow')->name('jobrequest.show');
    Route::get('/admin/proposal', 'Admin\JobbyAppController@proposalIndex')->name('admin.proposal');
    Route::get('/proposol/show/{id}', 'Admin\JobbyAppController@proposalShow')->name('proposol.show');
    Route::get('/admin/contract', 'Admin\JobbyAppController@contractIndex')->name('admin.contract');
    Route::get('/contract/show/{id}', 'Admin\JobbyAppController@contractShow')->name('contract.show');
    Route::get('/admin/contract/status/{id}/{status}', 'Admin\JobbyAppController@adminContractStatus')->name('admin.contract.status');






});



