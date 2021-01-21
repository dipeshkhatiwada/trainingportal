<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/home','App\Http\Controllers\api\HomeController@index')->name('api.home.index');
Route::post('/login','App\Http\Controllers\api\AdminController@store')->name('login');

Route::get('/test', function (Request $request) {
    return 'test success';
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
