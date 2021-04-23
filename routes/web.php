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

Route::resource('/', 'IndexController');

Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::group([
        'namespace' => 'Admin\\',
        'as' => 'admin.',
        'middleware' => ['auth']
    ], function () {
        Route::name('dashboard')->get('/dashboard', function () {
            return view('welcome');
        });

        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::name('show_details')->get('show_details', 'UsersController@showDetails');
        });
        Route::resource('users', 'UsersController');
        Route::resource('videos', 'VideoController');
        Route::resource('contacts', 'ContatoController');
    });
});
