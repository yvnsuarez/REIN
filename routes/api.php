<?php

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

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::post('sendhtmlemail', 'API\MailController@html_email');
Route::post('token', 'API\UserController@send');


Route::group(['middleware' => 'auth:api'], function () {

//Motorist
    Route::group(['middleware' => 'scope:motorist'], function () {
        Route::post('UpdateStatus', 'API\ReportsController@updateStatus');
        Route::post('CreateFeedback', 'API\FeedbacksController@store');
        Route::post('ViewCars', 'API\UserController@ViewCar');
        
        Route::post('CreateLocation', 'API\LocationController@store');
        Route::post('UpdateReport', 'API\ReportsController@update');
        Route::post('ViewReport', 'API\ReportsController@viewupdate');
        Route::post('CreateCars', 'API\CarsController@store');
        Route::post('ReportShow', 'API\ReportsController@show');
        Route::post('notify', 'API\ReportsController@notification');
        
        Route::post('CreateService', 'API\ServicesController@store');
        Route::post('CreateReports', 'API\ReportsController@store');
    });

// Assistant
    Route::group(['middleware' => 'scope:assistant'], function () {
        //CREATE
        Route::post('Transactions', 'API\TransactionController@index');
        Route::post('ViewDetails', 'API\ReportsController@index');
        Route::post('CreatePayments', 'PaymentsController@store');

        Route::post('notifyassistant', 'API\ReportsController@notificationAssistant');

    });

});
