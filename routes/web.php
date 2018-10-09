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

Route::view('/', 'auth.login');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('contact', 'ContactController');
    Route::get('contact-delete/{id}', 'ContactController@delete');

    Route::resource('appointment', 'AppointmentController');
    Route::get('appointment-delete/{id}', 'AppointmentController@delete');
 
    Route::resource('project', 'ProjectController');
    Route::get('project-delete/{id}', 'ProjectController@delete');

    Route::resource('provider', 'ProviderController');
    Route::get('provider-delete/{id}', 'ProviderController@delete');

   	Route::get('user/profile/{id}', 'UserController@profile')->name('user.profile');
    Route::put('user/profile/{id}', 'UserController@profileUpdate')->name('user.profile.update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
