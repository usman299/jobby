<?php

use App\Http\NotificationHelper;
use App\JobRequest;
use Carbon\Carbon;
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


Auth::routes(['verify' => true]);

Route::get('/save-token/{token}', function ($token) {
    Auth::user()->update(['device_token' => $token]);
    return redirect('app');
});
Route::get('/testmynot', function () {
    $activity = "Début du contrat";
    $msg = "Votre contrat commence avec le demandeur";
    $jobber = \App\User::where('id', 3)->first();
    NotificationHelper::pushNotificationJobber($msg, $jobber->pluck('device_token'), $activity);
});
Route::get('/broadcasting', function () {
    broadcast(new \App\Events\SendMessage("Hi im Broadcasting Message"))->toOthers();
});
Route::get('/ip', function () {
        $json = file_get_contents("https://ipinfo.io/".request()->ip()."/geo");
        $details = json_decode($json, true);
        return $details;
});
Route::get('/time', function () {
        $time = \Carbon\Carbon::now();
        return $time->format('H:i');
});
Route::get('/expirejobs', function () {
    $time = \Carbon\Carbon::now();
    $data = JobRequest::whereDate('service_date', '<=', Carbon::now())->whereTime('start_time', '<=', $time->format('H:i'))->where('status', 1);
       dd($data->get());
});
Route::get('/subscription/success/{user_id}/{session}/{subscription_id}', 'Api\v1\JobberController@subscriptionSuccess');
Route::get('/subscription/cancel', 'Api\v1\JobberController@subscriptionCancel');
Route::get('/testcrons', 'CronController@completeJobs');


Route::get('/stripe', function () {
  return view('stripe');
});
//Route::post('/stripe/post', function (Request $request) {
//
//    $stripe = new \Stripe\StripeClient('sk_test_51Ia9JLGGZGzjCRwlo1pfllMTHuOT1sacxSijeBVjgkyxFXbQvrxy2YdrFkZSFxEecdgS1cK9s1Ptgp6iRsgtvAaI00rAoXzlbI');
//
//    $id = $stripe->accounts->create(
//        [
//            'country' => 'FR',
//            'type' => 'custom',
//            'capabilities' => [
//                'card_payments' => ['requested' => true],
//                'transfers' => ['requested' => true],
//            ],
//
//            'account_token' => $request->token_account,
//        ]
//    );
//
//    $data2 = $stripe->accountLinks->create(
//        [
//            'account' => $id->id,
//            'refresh_url' => 'https://app.yummybox.fr/',
//            'return_url' => route('home'),
//            'type' => 'account_onboarding',
//        ]
//    );
//   return redirect($data2->url);
//    $token = $request->token_person;
//
//    \Stripe\Stripe::setApiKey('sk_test_51Ia9JLGGZGzjCRwlo1pfllMTHuOT1sacxSijeBVjgkyxFXbQvrxy2YdrFkZSFxEecdgS1cK9s1Ptgp6iRsgtvAaI00rAoXzlbI');
//
//    $person = \Stripe\Account::createPerson(
//        $id->id, // id of the account created earlier
//        [
//            'person_token' => $token,
//        ]
//    );
//
//})->name('stripe.post');
Route::get('/cron', 'CronController@draftjobs');
Route::get('/notresponce/proposals', 'CronController@notResponceProposals')->name('notresponce.proposals');
Route::get('/notjobber/proposals/send', 'CronController@notJobberSendProposals')->name('notjobber.proposals.send');
Route::get('/expire/jobrequest', 'CronController@expireJobRequest')->name('expire.jobrequest');
Route::get('/admin/login', 'Admin\JobbyAppController@adminLogin')->name('admin.login');
Route::get('/fetch/data/{id}', 'Admin\AppSettingController@fetchdata');
Route::get('/testnotification', 'HomeController@testnotification');

Route::get('/guest/user/{role}', 'FrontendController@guest')->name('guest.user');

//Route::get('/', 'FrontendController@index');
Route::get('/privacy-policy', 'FrontendController@privacy')->name('front.privacy');
Route::get('/terms-and-conditions', 'FrontendController@terms')->name('front.terms');
//Route::get('/intro', 'FrontendController@intro')->name('front.intro')->middleware('guest');
Route::get('/intro',  function (){
    abort(404);
})->name('front.intro')->middleware('guest');
Route::get('/intro/jobber',  function (){
    abort(404);
})->name('intro.jobber');
Route::get('/intro/applicant',  function (){
    abort(404);
})->name('intro.applicant');
Route::get('/splash', 'FrontendController@splash')->name('front.splash');

//website routes
Route::get('/', 'FrontendController@website')->name('web.index');
Route::get('/about/us', 'FrontendController@about')->name('about.us');
Route::get('/conditions', 'FrontendController@conditions')->name('conditions');
Route::get('/suport/faq', 'FrontendController@suport')->name('suport.faq');
Route::get('/suport/priviciy', 'FrontendController@suportPriviciy')->name('suport.priviciy');
Route::get('/suport/terms', 'FrontendController@suportTerms')->name('suport.terms');
Route::get('/inscription', 'FrontendController@mainRegister')->name('inscription');
Route::get('/devenez/jobber', 'FrontendController@devenezJobber')->name('devenez.jobber');
Route::get('/main/category', 'FrontendController@mainCategory')->name('main.category');
Route::post('iframe', function (){
    abort(404);
})->name('iframe');
Route::get('/iframe/request/{id}', function (){
    abort(404);
})->name('iframe.category');
Route::post('/subcategory/search', 'FrontendController@search')->name('subcategory.search');
Route::get('/subcategory/view/{id}', 'FrontendController@subcategoryIndex')->name('subcategory.view');

Route::get('/single/blog/{id}', 'FrontendController@singleBlog')->name('single.blog');

Route::get('/front/login/{id}', 'FrontendController@login')->name('front.login');
Route::get('/front/register/{id}', 'FrontendController@register')->name('front.register');
Route::post('/fetchsubcategory', 'Front\ApplicantController@fetchsubcategory')->name('fetchsubcategory');
Route::post('/fetchquestions', 'FrontendController@fetchquestions')->name('fetchquestions');


//App Routes
Route::group(['middleware' => ['auth', 'web', 'app']], function () {

    Route::get('/switch/role/{id}/{role}', 'Front\JobberController@switchRole')->name('switch.role');
    Route::get('/app', 'FrontendController@app')->name('front.app')->middleware('verify');
    Route::post('/addlocation', 'FrontendController@addLocation')->name('addlocation');
    Route::get('/app/otp/verify', 'FrontendController@otpVerify')->name('otp.verify.app');
    Route::get('/app/otp/resend', 'FrontendController@otpVerifyResend')->name('otp.verify.resend');
    Route::post('/otp/verify/email', 'FrontendController@otpVerifyEmail')->name('otp.verify.email');
    Route::get('/categories', 'FrontendController@allCategories')->name('front.categories');
    Route::get('/subCategories/{id}', 'FrontendController@allSubCategories')->name('front.subcategories');


//    Subscription

    Route::get('/app/subscription', 'Front\SettingsController@appSubscription')->name('app.subscription');
    Route::get('/app/pay/subscription/{id}', 'Front\SettingsController@appPaySubscription')->name('app.pay.subscription');
    Route::post('/subscription/checkout/{id}', 'Front\SettingsController@appSubscriptionCheckout')->name('subscription.checkout');
    Route::get('/app/subscription/details', 'Front\SettingsController@appSubscriptionDetails')->name('app.subscription.details');
    //EVENTS
    Route::get('/app/contract/calander', 'Front\SettingsController@appCalander')->name('app.contract.calander');
    Route::post('/app/event/store', 'Front\SettingsController@appEventStore')->name('app.event.store');
    Route::get('/app/event/view/{id}', 'Front\SettingsController@appEventView')->name('app.event.view');

    Route::get('/jobber/skills', 'Front\SettingsController@skills')->name('jobber.skills');
    Route::get('/app/allcards', 'Front\SettingsController@appAllcards')->name('app.allcards');
    Route::get('/app/singlecards/{id}', 'Front\SettingsController@appSingleCards')->name('app.singlecards');
    Route::post('/app/card/pay/{id}', 'Front\SettingsController@cardpay')->name('app.card.pay');
    Route::post('/app/card/checkout/{id}', 'Front\SettingsController@cardCheckout')->name('card.checkout');
    Route::post('/redeem/voucher', 'Front\SettingsController@redeeemVoucher')->name('redeem.voucher');
    Route::get('/jobber/portfolio', 'Front\SettingsController@portfolio')->name('jobber.portfolio');
    Route::get('/jobber/experience', 'Front\SettingsController@experience')->name('jobber.experience');
    Route::post('/jobber/skills/submit', 'Front\SettingsController@skillsSubmit')->name('skills.submit');
    Route::get('/get/badge', 'Front\SettingsController@getBadge')->name('get.badge');
    Route::get('/proof/indentity', 'Front\SettingsController@identity')->name('proof.indentity');
    Route::get('/get/badge/pro', 'Front\SettingsController@getBadgepro')->name('badge.pro');
    Route::post('/get/badge/update', 'Front\SettingsController@badgeUpdate')->name('badge.update');
    Route::get('/app/settings', 'Front\SettingsController@settings')->name('app.settings');
    Route::get('/app/settings/profile', 'Front\SettingsController@profile')->name('settings.profile');
    Route::get('/app/logout', 'Front\SettingsController@appLogout')->name('app.logout');
//Balmce
    Route::get('/app/balance', 'Front\SettingsController@appBalanceIndex')->name('app.balance');
    Route::get('/app/balance/details', 'Front\SettingsController@appBalanceDetails')->name('app.balance.details');
    Route::post('/app/add/balance', 'Front\SettingsController@payment')->name('app.add.balance');
    Route::post('/app/add/walet', 'Front\SettingsController@addWalet')->name('app.add.walet');
    Route::post('/app/add/check', 'Front\SettingsController@addCheck')->name('app.add.check');

    Route::get('/app/notifications', 'Front\SettingsController@notifications')->name('app.notifications');
    Route::get('/app/about', 'Front\SettingsController@about')->name('app.about');
    Route::get('/app/support', 'Front\SettingsController@support')->name('app.support');
    Route::get('/app/contact', 'Front\SettingsController@contact')->name('app.contact');
    Route::post('/app/contact/store', 'Front\SettingsController@contactStore')->name('app.contact.store');
    Route::get('/app/password/change', 'Front\SettingsController@passwordChange')->name('password.change');
    Route::post('/profile/update', 'Front\SettingsController@profileUpdate')->name('profile.update');
    Route::post('/password/update', 'Front\SettingsController@passwordUpdate')->name('password.update');
    Route::post('/identity/store', 'Front\SettingsController@identityStore')->name('identity.store');
    Route::post('/experience/store', 'Front\SettingsController@experienceStore')->name('experience.store');
    Route::post('/portfolio/store', 'Front\SettingsController@portfolioStore')->name('portfolio.store');
    Route::post('/experience/update', 'Front\SettingsController@experienceupdate')->name('experience.update');

    Route::get('/job/comments/{id}', 'Front\ApplicantController@comments')->name('job.comments');
    Route::post('/comment/submit', 'Front\ApplicantController@commentSubmit')->name('comment.submit');

    Route::get('/applicant/transactions', 'Front\ApplicantController@transactions')->name('applicant.transactions');

    Route::get('/applicant/services', 'Front\ApplicantController@services')->name('applicant.services');
    Route::get('/applicant/jobber/services/{id}', 'Front\ApplicantController@jobberServices')->name('applicant.jobber.services');
    Route::get('/applicant/service/{id}', 'Front\ApplicantController@service')->name('applicant.service');
    Route::get('/applicant/single/service/{id}', 'Front\ApplicantController@singleService')->name('applicant.singleService');

    Route::Post('/applicant/services/contract/{id}', 'Front\ApplicantController@servicesContract')->name('applicant.services.contract');
    Route::Post('/applicant/proposals/contract/{id}', 'Front\ApplicantController@proposalsContract')->name('applicant.proposals.contract');
    Route::Post('/jobber/review/contract/{id}', 'Front\ApplicantController@jobberReviewContract')->name('jobber.review');

    Route::get('/jobber/earnings', 'Front\JobberController@earnings')->name('jobber.earnings');
    Route::get('/jobber/reviews', 'Front\JobberController@jobberReviews')->name('jobber.reviews');

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
    Route::get('/applicant/jobrequests/ignor/{id}', 'Front\ApplicantController@jobrequestsIgnor')->name('applicant.jobrequest.ignor');


    Route::get('/applicant/jobrequests/status/{id}', 'Front\ApplicantController@jobrequestsStatus')->name('applicant.jobrequest.status');
    Route::post('/applicant/jobrequests/repost', 'Front\ApplicantController@jobrequestsRepost')->name('applicant.jobrequest.repost');
    Route::get('/applicant/proposals', 'Front\ApplicantController@proposals')->name('applicant.proposals');
    Route::get('/applicant/proposal/detail/{id}', 'Front\ApplicantController@proposalDetails')->name('applicant.proposal.detail');
    Route::post('/proposal/accept/{id}', 'Front\ApplicantController@proposalAccept')->name('proposal.accept');
    Route::get('/proposal/reject/{id}', 'Front\ApplicantController@proposalReject')->name('proposal.reject');

    Route::post('/category/search', 'Front\ApplicantController@search')->name('category.search');

    Route::post('/proposal/submit', 'Front\JobberController@proposalSubmit')->name('proposal.submit');
    Route::get('/jobber/proposals', 'Front\JobberController@proposals')->name('jobber.proposals');

    Route::get('/proposal/payment/{id}', 'Front\PaymentController@payment')->name('proposal.payment');

    Route::get('/job/subcategory/{id}', 'Front\JobPostController@subcategory')->name('job.subcategory');
    Route::get('/job/childcatgory/{id}', 'Front\JobPostController@childcatgory')->name('job.childcatgory');

    Route::get('/job/request/{id}', 'Front\JobPostController@request')->name('job.request');
    Route::get('/request/subcategory/{id}', 'Front\JobPostController@requestSubcategory')->name('request.subcategory');


    Route::get('/job/request/status/{id}/{status}', 'Front\JobPostController@requestStatus')->name('job.request.status');
    Route::get('/request/subcategory/status/{id}/{status}', 'Front\JobPostController@requestSubcategoryStatus')->name('request.subcategory.status');


});


//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function () {

    Route::get('admin/checks/index', 'Admin\UsersController@indexChecks')->name('checks.index');
    Route::get('admin/pass/checks/index', 'Admin\UsersController@passIndexChecks')->name('pass.checks.index');
    Route::get('admin/check/status/{id}/{status}', 'Admin\UsersController@checkStatus')->name('check-status');
    Route::post('admin/add/balance', 'Admin\UsersController@addBalnce')->name('admin.add.balance');

    Route::get('admin/cards/index', 'Admin\UsersController@indexCards')->name('cards.index');
    Route::get('admin/cards/delete/{id}', 'Admin\UsersController@deleteCards')->name('card.delete');
    Route::get('admin/cards/sale', 'Admin\UsersController@sale')->name('cards.sale');
    Route::get('admin/cards/create', 'Admin\UsersController@createCards')->name('cards.create');
    Route::post('admin/cards/store', 'Admin\UsersController@storeCards')->name('cards.store');

    Route::get('/admin/profile', 'Admin\UsersController@adminProfile')->name('admin.profile');
    Route::post('/admin/profile/update/{id}', 'Admin\UsersController@adminProfileUpdate')->name('admin.profile.update');
    Route::post('/admin/password/update{id}', 'Admin\UsersController@adminPasswordUpdate')->name('admin.password.update');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin/notfication', 'Admin\AppSettingController@createNotfication')->name('admin.notfication');
    Route::post('/admin/notfication/send', 'Admin\AppSettingController@sendNotfication')->name('admin.notfication.send');


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
    Route::get('/jobber/mark/pro/{id}', 'Admin\UsersController@jobberPro')->name('jobber.mark.pro');
    Route::get('/jobber/mark/verified/{id}', 'Admin\UsersController@jobberVerified')->name('mark.jobber.verified');


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

// SHOCASE SEETING
    Route::get('/services/create', 'Admin\AppSettingController@servicesCreate')->name('services.create');
    Route::post('/services/store', 'Admin\AppSettingController@serviceStore')->name('services.store');

    Route::get('/testi/create', 'Admin\AppSettingController@testiCreate')->name('testi.create');
    Route::get('/testi/index', 'Admin\AppSettingController@testiIndex')->name('testi.index');
    Route::post('/testi/store', 'Admin\AppSettingController@testiStore')->name('testi.store');
    Route::get('/testi/delete/{id}', 'Admin\AppSettingController@testiDelete')->name('testi.delete');
    Route::get('/testi/edit/{id}', 'Admin\AppSettingController@testiEdit')->name('testi.edit');
    Route::post('/testi/update/{id}', 'Admin\AppSettingController@testiUpdate')->name('testi.update');

    Route::get('/blog/create', 'Admin\AppSettingController@blogCreate')->name('blog.create');
    Route::get('/blog/index', 'Admin\AppSettingController@blogIndex')->name('blog.index');
    Route::post('/blog/store', 'Admin\AppSettingController@blogStore')->name('blog.store');
    Route::get('/blog/delete/{id}', 'Admin\AppSettingController@blogDelete')->name('blog.delete');
    Route::get('/blog/edit/{id}', 'Admin\AppSettingController@blogEdit')->name('blog.edit');
    Route::post('/blog/update/{id}', 'Admin\AppSettingController@blogUpdate')->name('blog.update');
    Route::get('/jobfactory/create', 'Admin\AppSettingController@jobfactoryCreate')->name('jobfactory.create');
    Route::post('/jobfactory/store', 'Admin\AppSettingController@jobfactoryStore')->name('jobfactory.store');


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
    Route::get('/admin/contract/{status}', 'Admin\JobbyAppController@contractIndex')->name('admin.contract');
    Route::get('/contract/show/{id}', 'Admin\JobbyAppController@contractShow')->name('contract.show');
    Route::get('/admin/contract/status/{id}/{status}', 'Admin\JobbyAppController@adminContractStatus')->name('admin.contract.status');

    Route::get('/paymant/details', 'Admin\JobbyAppController@paymantDetials')->name('paymant.details');

    Route::get('/app/condition', 'Admin\JobbyAppController@condition')->name('app.condition');
    Route::get('/app/insurance', 'Admin\JobbyAppController@insurance')->name('app.insurance');
    Route::get('/app/tax_certificate', 'Admin\JobbyAppController@tax_certificate')->name('app.tax_certificate');
    Route::get('/app/tax_credit', 'Admin\JobbyAppController@tax_credit')->name('app.tax_credit');
    Route::get('/app/help', 'Admin\JobbyAppController@help')->name('app.help');
    Route::post('/pages/store', 'Admin\JobbyAppController@pagesStore')->name('pages.store');
    Route::post('/app/condition/store', 'Admin\JobbyAppController@conditionStore')->name('app.condition.store');
    Route::get('/app/mail/register', 'Admin\JobbyAppController@mailRegisterCreate')->name('app.mail.register');
    Route::post('/app/mail/store', 'Admin\JobbyAppController@mailRegisterStore')->name('app.mail.store');


});
