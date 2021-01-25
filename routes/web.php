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


Route::get('/','App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/contact-us','App\Http\Controllers\HomeController@contact')->name('home.contact');
Route::post('/contact-us','App\Http\Controllers\HomeController@contactStore')->name('home.contact.store');

//search url
Route::get('/search','App\Http\Controllers\HomeController@search')->name('home.search');


Route::get('/login','App\Http\Controllers\AdminController@login')->name('admin.login');
Route::post('/login','App\Http\Controllers\AdminController@store')->name('login');
Route::get('/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard','App\Http\Controllers\AdminController@dashboard')->name('dashboard');

Route::get('category/create','App\Http\Controllers\CategoryController@create')               ->name('category.create');
Route::get('category','App\Http\Controllers\CategoryController@index')                       ->name('category.index');
Route::post('category/store','App\Http\Controllers\CategoryController@store')                ->name('category.store');
Route::delete('category/delete/{id}','App\Http\Controllers\CategoryController@destroy')      ->name('category.delete');
Route::get('category/edit/{id}','App\Http\Controllers\CategoryController@edit')              ->name('category.edit');
Route::put('category/update/{id}','App\Http\Controllers\CategoryController@update')          ->name('category.update');


////////////////////////////////////////////
Route::get('/category/{slug}','App\Http\Controllers\HomeController@category')->name('home.category');
Route::get('/subcategory/{cat_slug}/{sub_slug}','App\Http\Controllers\HomeController@subcategory')->name('home.subcategory');
Route::get('/news/{slug}','App\Http\Controllers\HomeController@detail')->name('news.detail');




Route::middleware(['auth:sanctum', 'verified'])->prefix('/admin/')->namespace('App\\Http\\Controllers\\')->name('admin.')->group(function (){


    Route::get('/user/create','AdminController@createUser')->name('admin.user.create');
    Route::post('/user/store','AdminController@storeUser')->name('user.store');
    Route::post('/user','AdminController@User')->name('user.index');

    //  ------- category route   ----------- //
   

//subcatgory route
    Route::get('subcategory/create','SubcategoryController@create')->name('subcategory.create');
    Route::get('subcategory','SubcategoryController@index')->name('subcategory.index');
    Route::post('subcategory/store','SubcategoryController@store')->name('subcategory.store');
    Route::delete('subcategory/delete/{id}','SubcategoryController@destroy')->name('subcategory.delete');
    Route::get('subcategory/edit/{id}','SubcategoryController@edit')->name('subcategory.edit');
    Route::put('subcategory/update/{id}','SubcategoryController@update')->name('subcategory.update');
//post route
    Route::get('post/create','PostController@create')->name('post.create');
    Route::get('post','PostController@index')->name('post.index');
    Route::post('post/store','PostController@store')->name('post.store');
    Route::delete('post/delete/{id}','PostController@destroy')->name('post.delete');
    Route::get('post/edit/{id}','PostController@edit')->name('post.edit');
    Route::put('post/update/{id}','PostController@update')->name('post.update');
    Route::get('post/show/{id}','PostController@show')->name('post.show');

    Route::post('post/get-by-category_id','SubcategoryController@get_by_category_id')->name('subcategory.get_by_category_id');

    Route::post('post/ckeditor','PostController@upload')->name('ckeditor.upload');


    Route::get('contact',          'ContactController@index')->name('contact.index');
    Route::get('contact/show/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/delete/{id}','ContactController@destroy')->name('contact.delete');

    Route::get('setting',          'SettingController@index')->name('setting');
    Route::post('setting/store','SettingController@store')->name('setting.store');
    Route::post('setting/update/{id}','SettingController@update')->name('setting.update');

});


//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia\Inertia::render('Dashboard');
//})->name('dashboard');
