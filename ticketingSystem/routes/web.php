<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => ['auth', 'client']], function(){
	Route::get('/home', 'HomeController@display');
	Route::post('/create', 'HomeController@insert');
	Route::post('/update', 'HomeController@update');
});

Route::group(['middleware' => ['auth', 'admin']], function(){
	Route::get('/admin', 'AdminPageController@display');
	Route::post('/admin/insert', 'AdminPageController@insert');
	Route::post('/admin/inprogress', 'AdminPageController@status_inprogress');
	//Route::post('/admin/resolved', 'AdminPageController@status_resolved');
	Route::post('/admin/reopen', 'AdminPageController@status_reopen');
	Route::get('/admin/closed_ticket', 'AdminPageController@display_closed_ticket');
	//Route::delete('/delete/{id}', 'AdminPageController@delete');
});













