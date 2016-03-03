<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    // Authorization routes
    Route::auth();

    // Dashboard routes
    Route::group(['prefix' => 'dashboard'], function() {
        Route::get('/', 'HomeController@index');
    });

    // Affiliate routes
    Route::group(['prefix' => 'a'], function() {
        Route::get('/', 'AffiliateController@index');
        Route::get('/{username}', 'AffiliateController@affiliate');
        Route::get('/signup/{username}', 'AffiliateController@signup');
    });

    // Admin routes
    Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function() {
        Route::get('/', 'AdminController@index');
    });
});