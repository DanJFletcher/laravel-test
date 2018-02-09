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
Route::domain('cms.' . env('APP_DOMAIN'))->group(function () {
    Route::get('/', function () {
        return view('welcome', ['sub_domain' => 'cms']);
    });
});

Route::domain('{sub_domain}.' . env('APP_DOMAIN'))->group(function () {
    Route::get('/', 'BoomController@index');
});
