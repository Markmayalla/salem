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

Route::get('/', 'WebPagesController@home');
Route::get('/about', 'WebPagesController@about');
Route::get('/projects', 'WebPagesController@projects');
Route::get('/contacts', 'WebPagesController@contacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('services', 'ServiceController');
    Route::resource('clients', 'ClientController');
    Route::resource('projects', 'ProjectController');
    Route::resource('slides', 'SlideController');
    Route::resource('certificates', 'CertificateController');
    Route::resource('settings', 'SettingController');
});
