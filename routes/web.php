<?php
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

use Illuminate\Support\Facades\Auth;

//Home
 Route::group(['middleware'=>['auth']],function (){

     Route::get('/home', 'HomeController@index')->name('home');

 });
//Welcome
 Route::get('/','welcomeController@getWelcome')->name('/');


//foundation
// Route::get('foundation/register/view','FoundationController@getFoundationRegister')->name('foundation_register_view');
// Route::post('foundation/register/post','FoundationController@postFoundationRegister')->name('foundation_register');

//people
// Route::get('people/register/view','peopleController@getPeopleRegister')->name('people_register_view');
// Route::post('/people/register/post','peopleController@postPeopleRegister')->name('people_register');

//Language Change
 Route::get('locale/{locale}',function ($locale){
     Session::put('locale',$locale);
     return redirect()->back();
 });

//donor
 Route::get('/donor/home/','donorController@getDonorHome')->name('donor_home');
 Route::get('donation/form/','donorController@getDonationForm')->name('get_donation_form');
 Route::post('donate/Form','donorController@postDonateForm')->name('donate_form');
 Route::get('delete/donor/request/{id}','donorController@getDeleteDonorRequest')->name('delete_donor_request');

//search
 Route::get('search/category/{q}','homeController@getSearchCategory')->name('search_category');
 Route::get('search/foundation/{q}','homeController@getSearchFoundation')->name('search_foundation');
 Route::get('donor/search/category/{q}','donorController@getSearchCategory')->name('donor_search_category');
 Route::get('donor/search/foundation/{q}','donorController@getSearchFoundation')->name('donor_search_foundation');
 Route::get('donate/form/cancel/','donorController@getDonateCancle')->name('donate_form_cancel');

//contact
 Route::get('/User/ContactUs/','donorController@getContactUs')->name('contact_us_nav');

//terms and conditions
 Route::get('/User/termsandconditions','donorController@getTermsAndConditions')->name('terms_and_conditions');

//about us
 Route::get('/User/about_us','donorController@getAboutUs')->name('about_us');

//Mail
 Route::post('/Send/Mail/','MailController@sendEmail')->name('send_mail');

 Route::group(['prefix'=>'foundation','middleware'=>'foundation'],function (){
     Auth::routes(
         [ 'register' => false,]
     );
     Route::get('/request/view/','FoundationController@getFoundationRequestView')->name('foundation_request_view');
     Route::post('/request/post/{id}','FoundationController@postFoundationRequest')->name('foundation_request_post');
     Route::get('/image/post/{f_post_image}','FoundationController@foundationImagePost')->name('f_image_post');
     Route::get('data/profile/{foundation_profile}','FoundationController@getFoundationProfile')->name('getFoundationProfile');
     Route::post('report/form/{id}','FoundationController@postFoundationReport')->name('report_form');

 });

 Route::group(['prefix'=>'people','middleware'=>'people'],function (){
     Auth::routes(
         [ 'register' => false,]
     );
     Route::post('/request/post/form/{id}','peopleController@postPeopleRequest')->name('user_post_form');
     Route::get('/request/post/view','peopleController@getPeoplePostView')->name('request_user_post');
     Route::get('/user/post/{image}','peopleController@getUserPostImage')->name('get_user_post_image');
     Route::get('confirm/user/post/{image}','peopleController@getConfirmUserPostImage')->name('confirm_user_post_image');
     Route::get('user/data/{user_profile}','peopleController@getUserProfile')->name('get_user_profile');
 });

 Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
     Auth::routes(
         [ 'register' => false,]
     );
     Route::get('/register',function (){
         return view('admin_register');
     });
     Route::get('/adminhome','adminController@index')->name('adminhome');
     Route::post('/register/post','adminController@postAdminRegister')->name('admin_register');
     Route::get('/foundation/data','adminController@getFoundationData')->name('admin_foundation_data');
     Route::get('foundation_data/profile/{foundation_profile}','adminController@getFoundationProfile')->name('getFoundationProfile');
     Route::get('/foundation_data/certificate/{foundation_certificate}','adminController@getFoundationCertificate')->name('getFoundationCertificate');
     Route::get('foundation_data/delete/{id}','adminController@foundationDataDelete')->name('foundationInfoDelete');
     Route::get('people_in_need/data','adminController@getUserData')->name('admin_peopleInNeed_data');
     Route::get('user_data/{user_profile}','adminController@getUserProfile')->name('getUserProfile');
     Route::get('user_data/delete/{id}','adminController@userInfoDelete')->name('userInfoDelete');

     Route::resource('category','Admin\CategoryController');
     Route::resource('foundation_data','Admin\FoundationDataController');
     Route::resource('people_data','Admin\PeopleDataController');

     Route::get('foundation/post/data/','adminController@getFoundationPostData')->name('admin_foundation_post_data');
     Route::get('foundation/post/delete/{id}','adminController@foundationPostDataDelete')->name('foundation_post_data_delete');
     Route::get('foundation/report/post/data','adminController@getFoundationReportData')->name('admin_foundation_report_data');
     Route::get('foundation/people/post/data','adminController@getPeoplePostData')->name('admin_foundation_people_post_data');
     Route::get('people/post/delete/{id}','adminController@getPeoplePostDataDelete')->name('user_post_data_delete');
     Route::get('people/post/{image}','adminController@getPeoplePostImage')->name('get_user_post_image');

 });

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/foundation', 'Auth\LoginController@showFoundationLoginForm');
Route::get('/login/people', 'Auth\LoginController@showPeopleLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/foundation', 'Auth\RegisterController@showFoundationRegisterForm');
Route::get('/register/people','Auth\RegisterController@showPeopleRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/foundation', 'Auth\LoginController@foundationLogin');
Route::post('/login/people', 'Auth\LoginController@peopleLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/foundation', 'Auth\RegisterController@createFoundation');
Route::post('/register/people', 'Auth\RegisterController@createPeople');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth');;
Route::view('/foundation', 'foundation')->middleware('auth');;
Route::view('/people', 'people')->middleware('auth');;
