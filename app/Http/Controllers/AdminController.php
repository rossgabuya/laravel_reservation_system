<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
class AdminController extends Controller
{
    public function postSignIn(Request $request)
    {
    	if (Auth::guard('admins')->attempt(['email' => $request['login_email'], 'password' => $request['password']])) {
            return redirect('/admin/dashboard');
        }
        return redirect('admin/login')->with('status', 'Invalid login credentials');
    }

    public function getDashboard()
    {
    	return view('admin.dashboard');
    }

    public function getReservationList()
    {
    	$transactions = \App\Transaction::where('status','2')->get();

		return view('admin.reservation_list')->with('transactions',$transactions);
    }

    public function getConfirmReservation($trans_id,$trans_ref)
    {
    	$transaction = \App\Transaction::where(['id' => $trans_id,'transaction_ref' => (string)$trans_ref])->first();

    	$transaction->status = 1;
    	$transaction->save();
    	
    	return redirect()->back();
    }

    public function getVoidReservation($trans_id,$trans_ref)
    {
    	$transaction = \App\Transaction::where(['id' => $trans_id,'transaction_ref' => (string)$trans_ref])->first();

    	$transaction->status = 3;
    	$transaction->save();
    	
    	return redirect()->back();
    }

    public function postLogout(){
		Auth::guard('admins')->logout();
		return redirect()->route('home')->header('Clear-Site-Data','cache','storage','executionContexts');
	}
}
