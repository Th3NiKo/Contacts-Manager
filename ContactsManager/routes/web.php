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

Route::get('/home', 'HomeController@index')->name('home');

//Contacts
Route::get('/contact', 'ContactsController@index')->name('contact.index');
Route::get('/contact/create', 'ContactsController@create')->name('contact.create');
Route::post('/contact', 'ContactsController@store');
Route::delete('/contact/{contact}', 'ContactsController@destroy');