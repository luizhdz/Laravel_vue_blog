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
Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    // your routes
    Route::get('/', function () {
      return redirect('blog');
    });

    Route::resource('blog','BlogController');

    Route::group(['middleware' => ['role:admin']], function() {
      Route::resource('category','CategoryController');
      Route::get('/getCategories','CategoryController@getCategories');

      Route::resource('tag','TagController');
    });

    Route::group(['middleware' => ['roles:admin|writer']], function() {
      Route::resource('article','ArticleController');
    });

});
