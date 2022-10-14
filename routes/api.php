<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', 'Api\v1\UserController@login');
Route::post('register', 'Api\v1\UserController@register');

Route::post('send/otp', 'Api\v1\UserController@sendOtpEmail');
Route::post('/otp/verify', 'Api\v1\UserController@otpVerifyEmail');
Route::post('/forget/password', 'Api\v1\UserController@forgetPassword');
Route::get('/app/otp/verify', 'FrontendController@otpVerify')->name('otp.verify.app');

Route::get('app/settings', 'Api\v1\AppSettingController@getAppSetting');
Route::get('/slider/galery/{role}', 'Api\v1\AppSettingController@sliderGalery');

Route::get('categories', 'Api\v1\CategoryController@geCategory');
Route::get('/subcategories/{category_id}', 'Api\v1\CategoryController@geSubCategory');
Route::get('/childCategories/{subcategory_id}', 'Api\v1\CategoryController@getChildCategories');

Route::get('/faq', 'Api\v1\AppSettingController@support');
Route::get('/about', 'Api\v1\AppSettingController@about');
Route::get('/terms/and/privacy', 'Api\v1\AppSettingController@termsPrivacy');
Route::get('/country', 'Api\v1\AppSettingController@country');

Route::group(['middleware' => 'auth:api'], function(){

    Route::group( ['prefix' => 'demandeur','namespace'=>'Api\v1'], function () {
        Route::post('/jobrequest/submit', 'ApplicantController@jobRequestSubmit');
        Route::post('/jobrequest/update', 'ApplicantController@jobRequestUpdate');
        Route::get('/job/proposals/{job_id}', 'ApplicantController@proposals');
        Route::get('/jobs/{status}', 'ApplicantController@jobs');
        Route::get('/contract/intent/{proposal_id}', 'ApplicantController@contractIntent');
        Route::post('/proposals/contract', 'ApplicantController@proposalsContract');
        Route::get('/contract/{job_id}', 'ApplicantController@contract');

    });
    Route::group( ['prefix' => 'jobber','namespace'=>'Api\v1'], function () {

        //Profile
        Route::post('/skills/one', 'JobberController@skillsOne');
        Route::post('/skills/two', 'JobberController@skillsTwo');

        Route::get('/jobs', 'JobberController@jobs');
        Route::get('/job/ignore/{job_id}', 'JobberController@jobrequestsIgnore');
        Route::post('/proposal/submit', 'JobberController@proposalSubmit');
        Route::get('/proposals', 'JobberController@proposals');
    });

    Route::get('/details', 'UserController@details');
    Route::get('/notification', 'Api\v1\AppSettingController@notifications');
    Route::post('/profile/update', 'Api\v1\UserController@update');
    Route::post('/password/update', 'Api\v1\UserController@passwordUpdate');
    Route::post('/profile/image/update', 'Api\v1\UserController@profileImage');
    Route::post('/timming', 'Api\v1\UserController@timming');
    Route::post('/progress/service', 'Api\v1\UserController@progressService');
    Route::post('/insurance', 'Api\v1\UserController@insurance');
    Route::post('/rules', 'Api\v1\UserController@rules');
    Route::post('/score', 'Api\v1\UserController@score');
    Route::post('/update/radius', 'Api\v1\UserController@radius');
    Route::get('/jobber/profile/{jobber_id}', 'Api\v1\UserController@jobberGetProfile');
    Route::get('/demandeur/profile/{demandeur_id}', 'Api\v1\UserController@demandeurGetProfile');

    Route::post('/document', 'Api\v1\UserController@document');
    Route::post('/security/document', 'Api\v1\UserController@securityDocument');
    Route::post('/comments', 'Api\v1\ApplicantController@comments');
    Route::get('/getComments/{id}', 'Api\v1\ApplicantController@getComments');

});




