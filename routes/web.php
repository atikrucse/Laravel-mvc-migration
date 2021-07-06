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

Route::get('ggg', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('Hello/hello');
});
Route::get('welcome2', 'TestController@welcome');

Route::get('data', 'TestController@data');

Route::get('/', 'MasterController@master');

Auth::routes();
Route::get('home', 'MasterController@master')->name('home');

// Auth::routes();
// Route::get('home', 'MasterController@master')->name('home');

Auth::routes();
Route::get('content', 'MasterController@content')->name('content');

Auth::routes();
Route::get('video', 'MasterController@video');

Route::get('audio', 'MasterController@audio');

Route::get('contact', 'MasterController@contact');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
