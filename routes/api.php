<?php

use Illuminate\Http\Request;

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


Route::group(['middleware' => 'auth:api'], function () {

//Motorist
        Route::post('CreateComplaints', 'ComplaintsController@store');
        Route::post('CreateRequests', 'RequestsController@store');
        Route::post('CreateCars', 'CarsController@store');
        Route::post('CreateComplaints', 'ComplaintsController@store');
        Route::post('CreateImages', 'ComplaintsController@store');
        Route::post('CreateLocation','LocationController@store');
        Route::post('CreateService','ServicesController@store');

//viewAll
        Route::get('Transactions','TransactionController@index');

// Assistant
 
        //CREATE
        Route::post('CreateReport', 'ReportsController@store');
        Route::post('CreatePayments', 'PaymentsController@store');
        Route::post('Create', 'Controller@store');
        Route::post('Create', 'Controller@store');

//PartnerCompanies
   
//VIEW All
        Route::get('Request', 'Requests@index');
        Route::get('Assistant', 'AssistantController@index');
        Route::get('Transaction', 'TransactionController@index');
        Route::get('Reports', 'API\reportsController@index');
        

// VIEW 1
        Route::post('CreateAssistant', 'AssistantController@show');

//CREATE
        Route::post('CreateAssistant', 'AssistantController@store');
   
  
        //VIEW All
                Route::get('partners', 'PartnerCompany@index');
                Route::get('Assistant', 'AssistantController@index');
                Route::get('Transaction', 'TransactionController@index');
                
        // VIEW 1
                
                
        //CREATE
                Route::post('CreatePartner', 'PartnerCompanyController@store');
        
                Route::get('detail', 'API\UserController@details');
           
});




