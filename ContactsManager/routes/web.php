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
Auth::routes();

Route::redirect('/','/contact');

//Contacts
Route::get('/contact', 'ContactsController@index')->name('contact.index')->middleware('auth');
Route::get('/contact/create', 'ContactsController@create')->name('contact.create')->middleware('auth');
Route::post('/contact', 'ContactsController@store')->middleware('auth');

Route::get('/contact/edit/{contact}','ContactsController@edit')->name('contact.edit')->middleware('auth');
Route::patch('/contact/{contact}','ContactsController@update')->name('contact.update')->middleware('auth');
Route::delete('/contact/{contact}', 'ContactsController@destroy')->middleware('auth');

Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');