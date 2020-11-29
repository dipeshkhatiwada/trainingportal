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
Route::get('/login','App\Http\Controllers\AdminController@login')->name('admin.login');
Route::post('/login','App\Http\Controllers\AdminController@store')->name('login');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard','App\Http\Controllers\AdminController@dashboard')->name('dashboard');

//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia\Inertia::render('Dashboard');
//})->name('dashboard');
