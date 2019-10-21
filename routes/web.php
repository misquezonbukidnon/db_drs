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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//HOME
Route::get('/home', 'HomeController@index')->name('home');

//End User Controls
//Get
Route::get('/userapplication', 'EndUsers@create');
Route::get('/edituser/{id}', 'EndUsers@edit');  
//Post
Route::post('/createuser', 'EndUsers@store');
Route::post('/updateuser/{id}', 'EndUsers@update');


//Office Controls
//Get
Route::get('/officereg', 'OfficesController@create');
Route::get('/editoffice/{id}', 'OfficesController@edit');
//Post
Route::post('/createoffice', 'OfficesController@store');
Route::post('/updateoffice/{id}', 'OfficesController@update');


//Device Type Controls
//Get
Route::get('/devicetypereg', 'DeviceTypeController@create');
Route::get('/editdevtype/{id}', 'DeviceTypeController@edit'); 
//Post
Route::post('/create', 'DeviceTypeController@store');
Route::post('/updatedevtype/{id}', 'DeviceTypeController@update');

//Device Registration Controls
//Get
Route::get('/devreg', 'DeviceRegController@displayrec');
Route::get('/devregselect/{id}', 'DeviceRegController@selectuser');
Route::get('/devregedit/{id}','DeviceRegController@editrecord');
//Post
Route::post('/createdevreg', 'DeviceRegController@store');
Route::post('/updatedevreg/{id}', 'DeviceRegController@update');