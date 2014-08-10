<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('contact', 'Contact');

Route::group(array('before' => 'auth'), function(){

  //Contacts list
  Route::get('/', 'ContactsController@showAllContacts');

  //Add Contact
  Route::get('contact/add', 'ContactsController@getCreateContact');
  Route::post('contact/add', 'ContactsController@postCreateContact');

  //Delete Contact
  Route::get('contact/delete/{contact}', 'ContactsController@deleteContact');
});

// Authentication
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');


// Create Account
Route::get('account/create', 'AccountController@getCreateAccount');
Route::post('account/create', 'AccountController@postCreateAccount');
