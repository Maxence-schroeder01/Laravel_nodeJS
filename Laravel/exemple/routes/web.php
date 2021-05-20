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

//Route::get('/', function () {
  //  return view('vue1');
//});

Route::get('contact', 'App\Http\Controllers\ContactController@getForm');
Route::post('contact', 'App\Http\Controllers\ContactController@postForm');


//Route::get('users', 'App\Http\Controllers\UsersController@getInfos');
//Route::post('users', 'App\Http\Controllers\UsersController@postInfos');


