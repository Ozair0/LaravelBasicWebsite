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

// We used get Request to home,about & contact

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');


// Route for submit
Route::post('contact/submit', 'MessagesController@submit');
//Route for Getting Messages
Route::get('/messages', 'MessagesController@getMessages');