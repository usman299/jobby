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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');
// START APPSETTING
Route::get('app/settings', 'Api\AppSettingController@getAppSetting');

// END START APPSETTING

Route::get('/faq', 'Api\AppSettingController@support');
Route::get('/about', 'Api\AppSettingController@about');

Route::group(['middleware' => 'auth:api'], function(){

Route::get('/get/profile', 'Api\UserController@getProfile');

// START ROUTES CATEGORY
Route::get('categories', 'Api\CategoryController@geCategory');
Route::get('/subcategories/{category_id}', 'Api\CategoryController@geSubCategory');


//Slider get
Route::get('/slider/galery/{role}', 'Api\AppSettingController@sliderGalery');
//End Slider get
Route::get('/notfication', 'Api\AppSettingController@notifications');







});
