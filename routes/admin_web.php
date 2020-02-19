<?php
Route::get('dashboard','Backend\dashboardController@index')->name('dashboard');
Route::view('admin', 'Admin.login');
Route::group(['middleware' => ['admin', 'auth']], function () {
    Route::view('dashboard', 'Admin.admin_dashboard');
    Route::get('logout', 'UserController@logout');
    // Route::get('profile','UserController@profile');
    Route::post('change_password','UserController@change_password');

});

// user view
Route::view('login', 'Admin.login')->name('login');
Route::post('dashboard', 'UserController@login');

Route::get('/', 'FrontendController@home');
Route::get('about-us', 'FrontendController@about_us');
Route::get('contact-us', 'FrontendController@contact_us');

