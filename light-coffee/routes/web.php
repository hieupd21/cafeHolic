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

Route::get('/', 'HomeController@home')->name('home');

Auth::routes();

// ADMIN
Route::group(['prefix' => 'home', 'middleware' => 'CheckLogedOut'], function () {
    Route::get('/', 'HomeController@dashboard')->name('dashboard');

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::post('/', 'CategoryController@create')->name('category.create');
        Route::get('/{id}', 'CategoryController@edit')->name('category.edit');
        Route::post('/{id}', 'CategoryController@update')->name('category.update');
        Route::delete('/{id}', 'CategoryController@delete')->name('category.delete');
    });
});
