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

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'Api\UserController@details');

// START ROUTES CATEGORY

Route::get('categories', 'Api\CategoryController@geCategory');
Route::get('/subcategories/{category_id}', 'Api\CategoryController@geSubCategory');
Route::get('/skils/{category_id}/{subcategory_id}', 'Api\SkilsController@CategoryRelatedSkils');

// JOBREQUEST
Route::post('/job/request', 'Api\JobRequestController@jobRequestStore');
Route::get('/all/active/job', 'Api\JobRequestController@activeJobRequestGet');
Route::get('/all/close/job', 'Api\JobRequestController@closeJobRequestGet');
// ENDJOBREQUEST


// END ROUTES CATEGORY


//PROPOSOL
Route::post('/proposal', 'Api\ProposalController@proposalPostStore');
Route::get('/active/proposal', 'Api\ProposalController@allActiveProposal');
Route::get('/accept/proposal', 'Api\ProposalController@allAcceptProposal');
Route::get('/reject/proposal', 'Api\ProposalController@allRejectProposal');

//END PROPOSOL

// CONTRACT

Route::post('/contract', 'Api\ContractController@contractPostStore');

//END CONTRACT



});