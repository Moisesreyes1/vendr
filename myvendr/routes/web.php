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

/* Home Route */
Route::get('/', function () {
    return view('home');
});


Auth::routes();
/*Logout out */
Route::get('/logout', 'LogoutController@logout');

Route::get('/home', 'HomeController@index')->name('home');

/* Deliveries view*/
Route::get('/deliveries', 'DeliveriesController@index')->name('deliveries.index');
Route::get('/deliveries/{id}', 'DeliveriesController@show')->name('deliveries.show');
Route::post('/deliveries/{id}/edit', 'DeliveriesController@edit')->name('deliveries');



/**Email Contact */
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
