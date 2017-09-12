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
})->name('home');

Route::get('/features', function() {
	return view('features');
});

Route::get('/about',function() {
	return view('about');
});

//-----------Customer public routes--------------

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

Route::get('/customer/dashboard',function(){
	return view('customer.dashboard');
});

Route::get('/customer/reservations',function(){
	return view('customer.past_reservations');
});

Route::get('/customer/settings',function(){
	return view('customer.settings');
});

Route::get('/customer/reserve/new',function(){
	return view('customer.packages');
});

Route::post('/customer/logout',[
	'uses' => 'CustomerController@postLogout',
	'as'	=> 'customer.logout'
	]);

//----------End of Customer public routes-----------

//----------Admin public routes---------------------

Route::get('/admin/login',function(){
	return view('admin.form_login');
});	