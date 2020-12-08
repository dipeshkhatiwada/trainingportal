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

//catgory route
Route::get('/admin/category/create','App\Http\Controllers\CategoryController@create')->name('admin.category.create');
Route::get('/admin/category','App\Http\Controllers\CategoryController@index')->name('admin.category.index');
Route::post('/admin/category/store','App\Http\Controllers\CategoryController@store')->name('admin.category.store');
Route::delete('/admin/category/delete/{id}','App\Http\Controllers\CategoryController@destroy')->name('admin.category.delete');
Route::get('/admin/category/edit/{id}','App\Http\Controllers\CategoryController@edit')->name('admin.category.edit');
Route::put('/admin/category/update/{id}','App\Http\Controllers\CategoryController@update')->name('admin.category.update');

//subcatgory route
Route::get('/admin/subcategory/create','App\Http\Controllers\SubcategoryController@create')->name('admin.subcategory.create');
Route::get('/admin/subcategory','App\Http\Controllers\SubcategoryController@index')->name('admin.subcategory.index');
Route::post('/admin/subcategory/store','App\Http\Controllers\SubcategoryController@store')->name('admin.subcategory.store');
Route::delete('/admin/subcategory/delete/{id}','App\Http\Controllers\SubcategoryController@destroy')->name('admin.subcategory.delete');
Route::get('/admin/subcategory/edit/{id}','App\Http\Controllers\SubcategoryController@edit')->name('admin.subcategory.edit');
Route::put('/admin/subcategory/update/{id}','App\Http\Controllers\SubcategoryController@update')->name('admin.subcategory.update');
//post route
Route::get('/admin/post/create','App\Http\Controllers\PostController@create')->name('admin.post.create');
Route::get('/admin/post','App\Http\Controllers\PostController@index')->name('admin.post.index');
Route::post('/admin/post/store','App\Http\Controllers\PostController@store')->name('admin.post.store');
Route::delete('/admin/post/delete/{id}','App\Http\Controllers\PostController@destroy')->name('admin.post.delete');
Route::get('/admin/post/edit/{id}','App\Http\Controllers\PostController@edit')->name('admin.post.edit');
Route::put('/admin/post/update/{id}','App\Http\Controllers\PostController@update')->name('admin.post.update');

Route::post('/admin/post/get-by-category_id','App\Http\Controllers\SubcategoryController@get_by_category_id')->name('admin.subcategory.get_by_category_id');

//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia\Inertia::render('Dashboard');
//})->name('dashboard');
