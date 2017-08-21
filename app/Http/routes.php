<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/features', function() {
	return view('features');
});

Route::get('/about',function() {
	return view('about');
});

Route::get('/customer/login', function(){
	return view('customer.form_login');
});

Route::get('/customer/signup', function() {
	return view('customer.form_signup');
});

Route::post('/signin/customer',[
	'uses' => 'CustomerController@postSignIn',
	'as' => 'customer.signin'
]);
	