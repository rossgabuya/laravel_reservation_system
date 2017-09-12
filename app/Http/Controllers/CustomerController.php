<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Http\Requests;
use Auth;

class CustomerController extends Controller
{
    protected function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    public function postSignIn(Request $request)
	{
		
		$this->validate($request,[
			'login_email' => 'required|email',
			'password'	=>	'required'
			]);

		
		if(Auth::attempt(['email' => $request['login_email'],'password' => $request['password']])){
			return redirect('/customer/dashboard');

		}
		return redirect()->back();

	}

	public function getDashboard(Request $request)
	{
		return view('customer.dashboard');
	}

	public function postLogout(){
		Auth::logout();
		return redirect()->route('home')->header('Clear-Site-Data','cache','storage','executionContexts');
	}
}
