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


Route::group(['prefix' => '/'], function () {
 	Route::get('', 'IndexController@indexAction');
 	Route::get('about', 'IndexController@aboutAction');
 	Route::get('contact', 'IndexController@contactAction');
 	Route::get('post', 'IndexController@postAction');
    Route::post('result', 'IndexController@result');
});
Route::group(['prefix' => '/session'], function () {
    Route::get('', 'SessionController@sessionAction');
});
