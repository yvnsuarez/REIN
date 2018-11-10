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
// Route::get('/admin/register', function(){
//     if
//     return view('Admin.Register');
// });

Route::get('/admin/register', 'Web\Admin\AdminRegisterController@index');
Route::post('/welcome', 'Web\Admin\AdminRegisterController@register');

// GUEST
Route::get('/', function(){
    return view('landingPage');
});


Auth::Routes(['verify' => true]);

Route::prefix('admin')->group(function() {
    
    Route::get('/login','Web\AdminAuth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Web\AdminAuth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Web\AdminAuth\AdminLoginController@adminLogout')->name('admin.logout');

    Route::post('/password/email','Web\AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    
    Route::get('/home', 'Web\AdminController@index')->name('admin.home');
    Route::get('/dashboard', 'Web\AdminController@index')->name('admin.dashboard');

    Route::post('/home/filtered', 'Web\AdminController@daterange');
    Route::post('/dashboard/filtered', 'Web\AdminController@daterange');

    Route::resource('/partners', 'Web\Admin\PartnerController');
    Route::resource('/motorists', 'Web\Admin\MotoristsController');
    
    Route::get('/transactionlogs', 'Web\Admin\TransactionLogsController@index');
    Route::get('/transactionlogs/{id}', 'Web\Admin\TransactionLogsController@showTransaction');
    Route::get('/transactionlogs/downloadSingleTransaction/{id}', 'Web\Admin\TransactionLogsController@singleTransactionPDF');
    
    Route::get('/useractivity', 'Web\Admin\UserActivityController@index')->name('admin.useractivity');
    Route::get('/useractivity/{ID}', 'Web\Admin\UserActivityController@showUserActivity');

    Route::resource('/adminfunction', 'Web\Admin\AdminFunctionController');
});


Route::prefix('partner')->group(function() {
    
    Route::get('/verify/{id}', 'API\MailController@verify');
    Route::get('/login','Web\PartnerAuth\PartnerLoginController@showLoginForm')->name('partner.login');
    Route::post('/login','Web\PartnerAuth\PartnerLoginController@login')->name('partner.login.submit');
    Route::get('/logout', 'Web\PartnerAuth\PartnerLoginController@partnerLogout')->name('partner.logout');

    Route::post('/password/email','Web\PartnerAuth\ForgotPasswordController@sendResetLinkEmail')->name('partner.password.email');
    Route::get('/password/reset','Web\PartnerAuth\ForgotPasswordController@showLinkRequestForm')->name('partner.password.request');
    Route::post('/password/reset','Web\PartnerAuth\ResetPasswordController@reset');
    Route::get('/password/reset/{token}','Web\PartnerAuth\ResetPasswordController@showResetForm')->name('partner.password.reset');
    
    Route::get('/home', 'Web\PartnerController@index')->name('partner.home');
    Route::get('/dashboard', 'Web\PartnerController@index')->name('partner.dashboard');

    Route::post('/home/filtered', 'Web\PartnerController@daterange');
    Route::post('/dashboard/filtered', 'Web\PartnerController@daterange');

    // Route::resource('/requests', 'Web\PartnerCompany\RequestsController@index');
    Route::get('/requests', 'Web\PartnerCompany\RequestsController@index')->name('partner.requests');
    Route::get('/requests/{id}/accept', 'Web\PartnerCompany\RequestsController@showaccept');
    Route::post('/requests/{id}/accepted', 'Web\PartnerCompany\RequestsController@accept');

    Route::get('/requests/{id}/assign', 'Web\PartnerCompany\RequestsController@showassign');
    Route::post('/requests/{id}/assigned', 'Web\PartnerCompany\RequestsController@assign');

    Route::get('/requests/{id}/decline', 'Web\PartnerCompany\RequestsController@showdecline');
    Route::post('/requests/{id}/declined', 'Web\PartnerCompany\RequestsController@decline');

    Route::resource('/assistants', 'Web\PartnerCompany\AssistantsController');

    Route::get('/transactionlogs', 'Web\PartnerCompany\TransactionLogsController@index');
    Route::get('/transactionlogs/{id}', 'Web\PartnerCompany\TransactionLogsController@showTransaction');
    Route::get('/transactionlogs/downloadSingleTransaction/{id}', 'Web\PartnerCompany\TransactionLogsController@singleTransactionPDF');

    Route::get('/feedbacks', 'Web\PartnerCompany\FeedbacksController@index');
    Route::get('/feedbacks/{ID}', 'Web\PartnerCompany\FeedbacksController@showFeedback');
});

