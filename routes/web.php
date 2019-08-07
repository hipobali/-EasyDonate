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

Route::group(['middleware'=>['auth']],function (){
    Route::get('/home', 'HomeController@index')->name('home');

});

Route::get('/', function () {
    return view('welcome');
});

//Language Change
Route::get('locale/{locale}',function ($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});

Route::get('/donor/home/',[
   'uses'=>'donorController@getDonorHome',
   'as'=>'donor_home'
]);
Route::get('donation/form/',[
    'uses'=>'donorController@getDonationForm',
    'as'=>'get_donation_form'
]);
Route::post('donate/Form',[
    'uses'=>'donorController@postDonateForm',
    'as'=>'donate_form'
]);
Route::get('delete/donor/request/{id}',[
    'uses'=>'donorController@getDeleteDonorRequest',
    'as'=>'delete_donor_request'
]);

Route::get('search/category/{q}',[
   'uses'=>'homeController@getSearchCategory',
   'as'=>'search_category'
]);

Route::group(['prefix'=>'foundation','middleware'=>'foundation'],function (){
    Auth::routes(
        [ 'register' => false,]
    );
    Route::get('/register/view',[
        'uses'=>'FoundationController@getFoundationRegister',
        'as'=>'foundation_register_view'
    ]);
    Route::get('/login/view',[
       'uses'=>'FoundationController@getFoundationLogin',
       'as'=>'foundation_login_view'
    ]);
    Route::post('/register/post',[
        'uses'=>'FoundationController@postFoundationRegister',
        'as'=>'foundation_register'
    ]);
    Route::get('/request/view/',[
       'uses'=>'FoundationController@getFoundationRequestView',
       'as'=>'foundation_request_view'
    ]);
    Route::post('/request/post/{id}',[
        'uses'=>'FoundationController@postFoundationRequest',
        'as'=>'foundation_request_post'
    ]);
    Route::get('/image/post/{f_post_image}',[
        'uses'=>'FoundationController@foundationImagePost',
        'as'=>'f_image_post'
    ]);
    Route::get('data/profile/{foundation_profile}',[
        'uses'=>'FoundationController@getFoundationProfile',
        'as'=>'getFoundationProfile'
    ]);
    Route::post('report/form/{id}',[
       'uses'=>'FoundationController@postFoundationReport',
       'as'=>'report_form'
    ]);
});

Route::group(['prefix'=>'people','middleware'=>'people'],function (){
    Auth::routes(
        [ 'register' => false,]
    );

    Route::get('/register/view',[
        'uses'=>'peopleController@getPeopleRegister',
        'as'=>'people_register_view'
    ]);
    Route::get('/login/view',[
        'uses'=>'peopleControllerController@getPeopleLogin',
        'as'=>'people_login_view'
    ]);
    Route::post('/people/register/post',[
        'uses'=>'peopleController@postPeopleRegister',
        'as'=>'people_register'
    ]);
    Route::post('/request/post/form/{id}',[
       'uses'=>'peopleController@postPeopleRequest',
       'as'=>'user_post_form'
    ]);
    Route::get('/request/post/view',[
       'uses'=>'peopleController@getPeoplePostView',
       'as'=>'request_user_post'
    ]);
    Route::get('/user/post/{image}',[
        'uses'=>'peopleController@getUserPostImage',
        'as'=>'get_user_post_image'
    ]);
    Route::get('user/data/{user_profile}',[
        'uses'=>"peopleController@getUserProfile",
        'as'=>'get_user_profile'
    ]);
});

Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    Auth::routes(
        [ 'register' => false,]
    );
    Route::get('/register',function (){
        return view('admin_register');
    });
    Route::post('/register/post',[
       'uses'=>'adminController@postAdminRegister',
       'as'=>'admin_register'
    ]);
    Route::get('/foundation/data',[
        'uses'=>'adminController@getFoundationData',
        'as'=>'admin_foundation_data'
    ]);
    Route::get('foundation_data/profile/{foundation_profile}',[
        'uses'=>'adminController@getFoundationProfile',
        'as'=>'getFoundationProfile'
    ]);
    Route::get('/foundation_data/certificate/{foundation_certificate}',[
        'uses'=>'adminController@getFoundationCertificate',
        'as'=>'getFoundationCertificate'
    ]);
    Route::get('foundation_data/delete/{id}',[
        'uses'=>'adminController@foundationDataDelete',
        'as'=>'foundationInfoDelete'
    ]);
    Route::get('people_in_need/data',[
        'uses'=>'adminController@getUserData',
        'as'=>'admin_peopleInNeed_data'
    ]);
    Route::get('user_data/{user_profile}',[
        'uses'=>"adminController@getUserProfile",
        'as'=>'getUserProfile'
    ]);
    Route::get('user_data/delete/{id}',[
        'uses'=>'adminController@userInfoDelete',
        'as'=>'userInfoDelete'
    ]);
    Route::get('category/data/',[
        'uses'=>'adminController@getCategory',
        'as'=>'category_view'
    ]);
    Route::post('category/data/post/',[
        'uses'=>'adminController@postCategory',
        'as'=>'category_post'
    ]);
    Route::get('category/delete/data/{id}',[
       'uses'=>'adminController@getDeleteCategory',
       'as'=>'category_delete'
    ]);
    Route::post('category/update/data/{id}',[
       'uses'=>'adminController@postUpdateCategory',
       'as'=>'category_update'
    ]);
    Route::get('foundation/post/data/',[
       'uses'=>'adminController@getFoundationPostData',
        'as'=>'admin_foundation_post_data'
    ]);
    Route::get('foundation/post/delete/{id}',[
        'uses'=>'adminController@foundationPostDataDelete',
        'as'=>'foundation_post_data_delete'
    ]);
    Route::get('foundation/report/post/data',[
       'uses'=>'adminController@getFoundationReportData',
        'as'=>'admin_foundation_report_data'
    ]);
    Route::get('foundation/people/post/data',[
       'uses'=>'adminController@getPeoplePostData',
       'as'=>'admin_foundation_people_post_data'
    ]);
    Route::get('people/post/delete/{id}',[
        'uses'=>'adminController@getPeoplePostDataDelete',
        'as'=>'user_post_data_delete'
    ]);
    Route::get('people/post/{image}',[
        'uses'=>'adminController@getPeoplePostImage',
        'as'=>'get_user_post_image'
    ]);
});



