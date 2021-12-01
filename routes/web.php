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








Auth::routes();
Route::get('/', 'FrontendController@index')->name('front.index');
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

//END SLIDER Create






