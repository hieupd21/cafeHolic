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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/detail/{id}', 'HomeController@detail')->name('home.detail');
Route::post('/detail/{id}', 'HomeController@comment')->name('home.comment');
Route::get('/category/{id}/{name}', 'HomeController@category')->name('home.category');
Route::get('/search', 'HomeController@search')->name('home.search');

Route::group(['prefix' => 'cart'], function () {
    Route::get('/add/{id}', 'CartController@addCart')->name('cart.add');
    Route::get('/', 'CartController@showCart')->name('cart.show');
    Route::get('/{id}', 'CartController@deleteCart')->name('cart.delete');
});

Route::get('/checkout', 'HomeController@checkout')->name('home.checkout');

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function () {
        Route::get('/', 'LoginController@getLogin')->name('getLogin');
        Route::post('/', 'LoginController@postLogin')->name('postLogin');
        Route::get('/signup', 'LoginController@getSignUp')->name('getSignUp');
    });

    Route::group(['prefix' => 'signup'], function () {
        Route::post('/', 'SignupController@postSignUp')->name('postSignUp');
    });

    Route::get('/logout', 'DashboardController@getLogout')->name('logout');

    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut'], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@getCate')->name('category');
            Route::post('/', 'CategoryController@createCate')->name('category.create');
            Route::get('/{id}', 'CategoryController@editCate')->name('category.edit');
            Route::post('/{id}', 'CategoryController@updateCate')->name('category.update');
            Route::delete('/{id}', 'CategoryController@deleteCate')->name('category.delete');
        });
    
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct')->name('product');
            Route::post('/', 'ProductController@storeProduct')->name('product.store');
            Route::get('/create', 'ProductController@createProduct')->name('product.create');
            Route::get('/show/{id}', 'ProductController@showProduct')->name('product.show');
            Route::post('/{id}', 'ProductController@updateProduct')->name('product.update');
            Route::delete('/{id}', 'ProductController@deleteProduct')->name('product.delete');
            Route::get('/{id}', 'ProductController@editProduct')->name('product.edit');
        });
    });
});
