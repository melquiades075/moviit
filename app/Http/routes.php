<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => ''], function(){

    Route::get('/',      

    	['uses' => 'VisitsController@index',  'as' => 'indexVisits']

    );

    Route::post('/clients/visits',

    	['uses' => 'VisitsController@clientsVisits',  'as' => 'clientsVisits']

    );

    Route::get('/update/request/table',
    
    	['uses' => 'VisitsController@updateRequestTable',  'as' => 'updateRequestTable']
    
    );

});
