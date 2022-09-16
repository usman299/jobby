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

    Route::get('/details', 'Api\v1\UserController@details');
    Route::get('/notification', 'Api\v1\AppSettingController@notifications');
    Route::post('/profile/update', 'Api\v1\UserController@update');
    Route::post('/profile/image/update', 'Api\v1\UserController@profileImage');
    Route::get('/get/profile', 'Api\v1\UserController@details');

    Route::get('/jobs', 'Api\v1\JobberController@jobs');
    Route::post('/proposal/submit', 'Api\v1\JobberController@proposalSubmit');
    Route::get('/proposals', 'Api\v1\JobberController@proposals');

    Route::post('/jobrequest/submit', 'Api\v1\ApplicantController@jobRequestSubmit');
    Route::get('/job/proposals/{id}', 'Api\v1\ApplicantController@proposals');
    Route::get('/demandeur/jobs/{status}', 'Api\v1\ApplicantController@jobs');

});


