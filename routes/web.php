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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactController@index')->name('contact.index');
/* Route::get('/contacts/{id}', 'ContactController@view'); */
Route::get('/contacts/{id}/edit', 'ContactController@edit')->name('contact.edit');
Route::get('/contacts/create', 'ContactController@create');
Route::get('/contacts/{id}/view', 'ContactController@view')->name('contact.view');
Route::post('/contacts', 'ContactController@store')->name('contact.store');
Route::post('/contacts/{id}/update', 'ContactController@update')->name('contact.update');
Route::post('/contact/{id}/delete', 'ContactController@delete')->name('contact.delete');
