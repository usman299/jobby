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
Route::get('/all/jobRequest', 'Api\JobRequestController@allJobRequestGet');
Route::get('/all/close/job', 'Api\JobRequestController@closeJobRequestGet');
Route::get('/edit/job/request/{id}', 'Api\JobRequestController@editJobRequestGet');
Route::post('/job/request/update/{id}', 'Api\JobRequestController@jobRequestUpdate');
Route::get('/delete/job/request/{id}', 'Api\JobRequestController@deleteJobRequestGet');
Route::get('/status/job/request/{id}', 'Api\JobRequestController@updateStatusJobRequest');

//jobber
Route::get('/jober/get/jobRequest', 'Api\JobRequestController@jobberJobRequestGet');
// ENDJOBREQUEST

//Slider get
Route::get('/slider/galery/{role}', 'Api\AppSettingController@sliderGalery');
//End Slider get


// END ROUTES CATEGORY


//PROPOSOL
Route::post('/send/proposel/{jobRequest_id}', 'Api\ProposalController@proposalPostStore');
Route::get('/all/proposalRequest', 'Api\ProposalController@allProposalRequest');
Route::get('/accept/proposal', 'Api\ProposalController@allAcceptProposal');
Route::get('/reject/proposal', 'Api\ProposalController@allRejectProposal');


//Applicant
Route::get('/applicant/get/proposalRequest', 'Api\ProposalController@applicantPropsalRequestGet');
Route::get('/accept/proposal/request/{id}', 'Api\ProposalController@acceptStatusPrposelRequest');
Route::get('/reject/proposal/request/{id}', 'Api\ProposalController@rejectStatusPrposelRequest');

//END PROPOSOL

// CONTRACT

Route::post('/contract/store/{id}', 'Api\ContractController@contractPostStore');
Route::get('/contract/applicant', 'Api\ContractController@activeContractapplicantGet');
Route::get('/contract/jobber', 'Api\ContractController@activeContractJobberGet');

//END CONTRACT


//Reviews
Route::post('/reviews/store/{contract_id}', 'Api\ReviewController@reviewsStore');
//END Reviews



});