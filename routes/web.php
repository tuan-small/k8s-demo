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


Route::get('/',[
    'as' => 'input',
    'uses' => 'App\Http\Controllers\TestController@input'
    ]) ;

Route::post('/store',[
    'as' => 'store',
    'uses' => 'App\Http\Controllers\TestController@store'
    ]) ;

