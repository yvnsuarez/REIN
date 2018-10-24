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

/* ADMIN REGISTRATION */
Route::get('/admin/register', function(){
    return view('Admin.Register');
});
Route::post('/welcome', 'Web\Admin\AdminRegisterController@register');

/* This is the landing page - guest*/
Route::get('/', function(){
    return view('landingPage');
});



/* PARTNER REGISTRATION */
Route::get('/partner/register', function(){
    return view('Partner.Register');
});
Route::post('/partner/welcome', 'Web\PartnerCompany\PartnerRegisterController@register');



Auth::Routes();

Route::prefix('admin')->group(function() {
    Route::get('/login','Web\AdminAuth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Web\AdminAuth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Web\AdminAuth\AdminLoginController@adminLogout')->name('admin.logout');

    Route::post('/password/email','Web\AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Web\AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/reset','Web\AdminAuth\ResetPasswordController@reset');
    Route::get('/password/reset/{token}','Web\AdminAuth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    
    Route::get('/home', 'Web\AdminController@index')->name('admin.home');
    Route::get('/dashboard', 'Web\AdminController@index')->name('admin.dashboard');
    Route::resource('/partners', 'Web\Admin\PartnerController');
    Route::resource('/motorists', 'Web\Admin\MotoristsController');
    Route::resource('/transactionlogs', 'Web\Admin\ReportsController');
    Route::get('/useractivity', 'Web\Admin\UserActivityController@index')->name('admin.useractivity');
});


Route::prefix('partner')->group(function() {
    Route::get('/login','Web\PartnerAuth\PartnerLoginController@showLoginForm')->name('partner.login');
    Route::post('/login','dWeb\PartnerAuth\PartnerLoginController@login')->name('partner.login.submit');
    Route::post('/logout', 'Web\PartnerAuth\PartnerLoginController@adminLogout')->name('partner.logout');

    Route::post('/password/email','Web\PartnerAuth\ForgotPasswordController@sendResetLinkEmail')->name('partner.password.email');
    Route::get('/password/reset','Web\PartnerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/reset','Web\PartnerAuth\ResetPasswordController@reset');
    Route::get('/password/reset/{token}','Web\PartnerAuth\ResetPasswordController@showResetForm')->name('partner.password.reset');
    
    Route::get('/home', 'Web\PartnerController@index')->name('partner.dashboard');
    Route::get('/requests', 'Web\PartnerCompany\RequestsController@index')->name('partner.requests');

    Route::get('/requests/{id}/accept', 'Web\PartnerCompany\RequestsController@showaccept');
    Route::post('/requests/{id}/accepted', 'Web\PartnerCompany\RequestsController@accept');

    Route::get('/requests/{id}/assign', 'Web\PartnerCompany\RequestsController@showassign');
    Route::post('/requests/{id}/assined', 'Web\PartnerCompany\RequestsController@assign');

    Route::get('/requests/{id}/decline', 'Web\PartnerCompany\RequestsController@showdecline');
    Route::post('/requests/{id}/declined', 'Web\PartnerCompany\RequestsController@declne');

    Route::resource('/assistants', 'Web\PartnerCompany\AssistantsController');
    Route::resource('/transactionlogs', 'Web\PartnerCompany\LogsController');
    Route::resource('/flags', 'Web\PartnerCompany\FeedbacksController');
});

