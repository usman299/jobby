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

    Route::group( ['prefix' => 'demandeur'], function () {
        Route::post('/jobrequest/submit', 'Api\v1\ApplicantController@jobRequestSubmit');
        Route::post('/jobrequest/update', 'Api\v1\ApplicantController@jobRequestUpdate');
        Route::get('/job/proposals/{job_id}', 'Api\v1\ApplicantController@proposals');
        Route::get('/jobs/{status}', 'Api\v1\ApplicantController@jobs');
        Route::get('/contract/intent/{proposal_id}', 'Api\v1\ApplicantController@contractIntent');
        Route::post('/proposals/contract', 'Api\v1\ApplicantController@proposalsContract');
        Route::get('/contract/{job_id}', 'Api\v1\ApplicantController@contract');

    });
    Route::group( ['prefix' => 'jobber'], function () {
        Route::get('/jobs', 'Api\v1\JobberController@jobs');
        Route::post('/proposal/submit', 'Api\v1\JobberController@proposalSubmit');
        Route::get('/proposals', 'Api\v1\JobberController@proposals');
    });

    Route::get('/details', 'UserController@details');
    Route::get('/notification', 'Api\v1\AppSettingController@notifications');
    Route::post('/profile/update', 'Api\v1\UserController@update');
    Route::post('/password/update', 'Api\v1\UserController@passwordUpdate');
    Route::post('/profile/image/update', 'Api\v1\UserController@profileImage');


    Route::get('/get/profile', 'Api\v1\UserController@details');
    Route::get('/jobber/profile/{id}', 'Api\v1\UserController@jobberProfile');


    Route::post('/comments', 'Api\v1\ApplicantController@comments');
    Route::get('/getComments/{id}', 'Api\v1\ApplicantController@getComments');

});
Route::post('send/otp', 'Api\v1\UserController@sendOtpEmail');
Route::post('/otp/verify', 'Api\v1\UserController@otpVerifyEmail');
Route::post('/forget/password', 'Api\v1\UserController@forgetPassword');
Route::get('/app/otp/verify', 'FrontendController@otpVerify')->name('otp.verify.app');



