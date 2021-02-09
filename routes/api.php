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
Route::post('/user/login','App\Http\Controllers\api\AdminController@store');

Route::get('/test', function (Request $request) {
    return 'test success';
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return 'user';
});
Route::middleware(['auth:api'])->prefix('/user/')->namespace('App\\Http\\Controllers\\api\\')->name('admin.')->group(function (){

    Route::prefix('category/')->name('category.')->group(function (){
        Route::get('create','CategoryController@create')               ->name('create');
        Route::get('','CategoryController@index')                       ->name('index');
        Route::post('store','CategoryController@store')                ->name('store');
        Route::delete('delete/{id}','CategoryController@destroy')      ->name('delete');
        Route::get('edit/{id}','CategoryController@edit')              ->name('edit');
        Route::post('update/{id}','CategoryController@update')          ->name('update');

    });
});
