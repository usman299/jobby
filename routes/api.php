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
Route::get('/stripe/success/{id}', 'Api\v1\StripeConnectController@success')->name('success.connect');


Route::post('login', 'Api\v1\UserController@login');
Route::post('register', 'Api\v1\UserController@register');

Route::post('send/otp', 'Api\v1\UserController@sendOtpEmail');
Route::post('/otp/verify', 'Api\v1\UserController@otpVerifyEmail');
Route::post('/forget/password', 'Api\v1\UserController@forgetPassword');
Route::get('/app/otp/verify', 'FrontendController@otpVerify')->name('otp.verify.app');

Route::get('app/settings', 'Api\v1\AppSettingController@getAppSetting');
Route::get('/slider/galery/{role}', 'Api\v1\AppSettingController@sliderGalery');

Route::get('categories', 'Api\v1\CategoryController@geCategory');
Route::get('search/categories', 'Api\v1\CategoryController@searchCategory');
Route::get('/subcategories/{category_id}', 'Api\v1\CategoryController@geSubCategory');
Route::get('/childCategories/{subcategory_id}', 'Api\v1\CategoryController@getChildCategories');

Route::get('/faq', 'Api\v1\AppSettingController@support');
Route::get('/pages', 'Api\v1\AppSettingController@pages');
Route::get('/about', 'Api\v1\AppSettingController@about');
Route::get('/terms/and/privacy', 'Api\v1\AppSettingController@termsPrivacy');
Route::get('/country', 'Api\v1\AppSettingController@country');

Route::group(['middleware' => 'auth:api'], function(){

    Route::post('create/chat', 'Api\v1\UserController@createChat');
    Route::get('chats', 'Api\v1\UserController@chats');

    Route::group( ['prefix' => 'demandeur','namespace'=>'Api\v1'], function () {

        Route::post('/jobrequest/submit', 'ApplicantController@jobRequestSubmit');
        Route::post('/jobrequest/update', 'ApplicantController@jobRequestUpdate');
        Route::get('/job/proposals/{job_id}', 'ApplicantController@proposals');
        Route::get('/jobs/{status}', 'ApplicantController@jobs');
        Route::get('/job/close/{job_id}', 'ApplicantController@closejob');
        Route::post('/job/complete/{job_id}', 'ApplicantController@jobComplete');
        Route::get('/contract/intent/{proposal_id}', 'ApplicantController@contractIntent');
        Route::post('/proposals/contract', 'ApplicantController@proposalsContract');
        Route::post('/pay/via/wallet', 'ApplicantController@payViaWallet');
        Route::get('/contract/{job_id}', 'ApplicantController@contract');
        Route::get('/cancel/contract/{contract_id}', 'ApplicantController@cancelContract');

        Route::post('/comments', 'ApplicantController@comments');
        Route::get('/getComments/{id}', 'ApplicantController@getComments');

        Route::post('/cesu/ticket/submit', 'ApplicantController@cesuSubmit');
        Route::get('/my/cesu/tickets', 'ApplicantController@cesuTickets');
        Route::get('/my/wallet/details', 'ApplicantController@walletDetails');
        Route::post('/redeem/gift/card', 'ApplicantController@redeemGiftCard');

        Route::get('/transactions', 'ApplicantController@transactions');

    });
    Route::group( ['prefix' => 'jobber','namespace'=>'Api\v1'], function () {

        Route::get('/schedule/jobs', 'JobberController@scheduleJobs');
        Route::get('/jobs', 'JobberController@jobs');
        Route::get('/points', 'JobberController@points');
        Route::get('/single/job/{job_id}', 'JobberController@singleJob');
        Route::get('/job/ignore/{job_id}', 'JobberController@jobrequestsIgnore');
        Route::post('/proposal/submit', 'JobberController@proposalSubmit');

        //Stripe Connect
        Route::get('/stripe/express/dashboard', 'StripeConnectController@expressDashboard');
        Route::get('/stripe/connect', 'StripeConnectController@stripeConnect');
        Route::get('/stripe/connect/status', 'StripeConnectController@isConnected');
        Route::get('/get/payment/intent/{reciever_id}/{price}', 'StripeConnectController@getConnectedAccountIntent');

        //Profile
        Route::post('/skills', 'JobberController@skills');
        Route::post('/timing', 'JobberController@timming');
        Route::post('/progress/service', 'JobberController@progressService');
        Route::post('/insurance', 'JobberController@insurance');
        Route::post('/rules', 'JobberController@rules');
        Route::post('/score', 'JobberController@score');
        Route::post('/update/radius', 'JobberController@radius');
        Route::post('/document', 'JobberController@document');
        Route::post('/security/document', 'JobberController@securityDocument');

        Route::get('/check/profile/completion', 'JobberController@checkProfileCompletion');
        Route::get('/check/skills', 'JobberController@checkSkills');
        Route::get('/my/skills', 'JobberController@mySkills');
        Route::post('/update/skills/{skill_id}', 'JobberController@updateSkills');

        Route::post('/get/pro/badge', 'JobberController@getBadgePro');
        Route::get('/subscriptions', 'JobberController@subscriptions');
        Route::get('/my/offers/{id}', 'JobberController@myOffers');
        Route::get('/my/comments', 'JobberController@myComments');
        Route::get('/transactions', 'JobberController@transactions');
        Route::get('/reviews', 'JobberController@reviews');

        Route::get('/get/subscription/intent', 'JobberController@subscriptionIntent');
        Route::post('/subscription/save', 'JobberController@subscriptionSave');

        Route::get('/subscription/payment/{plan_id}/{user_id}/{subscription_id}', 'JobberController@subscriptionPayment');
        Route::get('/retrieve/subscription', 'JobberController@retriveSubscription');
        Route::get('/payment/record', 'JobberController@paymentRecord');

    });

    Route::get('/jobber/profile/{jobber_id}', 'Api\v1\UserController@jobberGetProfile');
    Route::get('/demandeur/profile/{demandeur_id}', 'Api\v1\UserController@demandeurGetProfile');
    Route::get('/notification', 'Api\v1\AppSettingController@notifications');
    Route::post('/profile/update', 'Api\v1\UserController@update');
    Route::post('/password/update', 'Api\v1\UserController@passwordUpdate');
    Route::post('/profile/image/update', 'Api\v1\UserController@profileImage');
    Route::get('/save-token/{token}', 'Api\v1\UserController@token');
});
