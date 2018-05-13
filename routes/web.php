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

Route::get('/', function () {
    return view('welcome');
});

// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/', 'HomeController@user')->name('user_dashboard');
    Route::resource('attendences', 'AttendenceController');
});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@admin')->name('admin_dashboard');
    Route::get('student/create', 'AdminController@create');
    Route::post('student/create', 'AdminController@store')->name('create');
    Route::get('student/edit/{id}', 'AdminController@edit');
    Route::post('student/update/{id}', 'AdminController@update')->name('update');
    Route::get('student/delete/{id}', 'AdminController@destroy');
    Route::get('studentlist', 'AdminController@listing')->name('listing');

});

Auth::routes();
