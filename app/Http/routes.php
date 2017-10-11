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


Route::group(['middleware' => array('web','auth')],function(){


		Route::get('/customer/dashboard','CustomerController@getDashboard');

		Route::get('/customer/reservations','CustomerController@getPastReservations');

		Route::get('/customer/settings',function(){
			return view('customer.settings');
		});

		Route::get('/customer/reserve/new',function(){
			return view('customer.packages');
		});

		Route::get('/customer/reserve/new/{id}','CustomerController@getPackageRooms');

		Route::post('/customer/logout',[
			'uses' => 'CustomerController@postLogout',
			'as'	=> 'customer.logout'
			]);

		Route::post('/customer/choose/room',[
			'uses' => 'CustomerController@postChooseRoom',
			'as'   => 'customer.chooseRoom'
			]);

		Route::post('/customer/reserve/preview',[
			'uses' => 'CustomerController@postPayPreview',
			'as'   => 'customer.pay_preview'
			]);

		Route::get('/customer/reserve/finish','CustomerController@getReserveContinue');

		Route::get('/customer/reserve/slip/{trans_ref}','CustomerController@getReservationSlip');
});


//----------End of Customer public routes-----------

//----------Admin public routes---------------------

Route::get('/admin/login',function(){
	return view('admin.form_login');
});	

Route::post('/signin/admin',[
	'uses' => 'AdminController@postSignIn',
	'as' => 'admin.signin'
]);

Route::group(['middleware' => 'admin'],function(){

		Route::get('/admin/dashboard','AdminController@getDashboard');

		Route::post('/admin/logout',[
			'uses' => 'AdminController@postLogout',
			'as'	=> 'admin.logout'
			]);

		Route::get('/admin/reservations','AdminController@getReservationList');

		Route::get('/admin/rooms',function()
		{
			return view('admin.room_management');
		});

		Route::get('/admin/promos',function()
		{
			return view('admin.promos');
		});

		Route::get('/admin/reserve/confirm/{trans_id}/{trans_ref}','AdminController@getConfirmReservation');

		Route::get('/admin/reserve/void/{trans_id}/{trans_ref}','AdminController@getVoidReservation');

});