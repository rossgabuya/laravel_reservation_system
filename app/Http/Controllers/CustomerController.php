<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Package;
use App\Http\Requests;
use Auth;
use DB;
use Session;
use PDF;

class CustomerController extends Controller
{
    protected function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    public function postSignUp(Request $request)
    {
    	
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
		$customer = \App\Customer::find(Auth::user()->id);
		$past_reservations = $customer->transaction;
		$count_reservations = count($past_reservations);

		$rooms = \App\Room::all();
		foreach ($rooms as $room) {
			$all_rooms = count($rooms);
			$count_rooms = $all_rooms * $room->available_units;
		}

		$data = (object) array(
			'reservations' => $count_reservations,
			'rooms' => $count_rooms
			);
		
		return view('customer.dashboard')->with('data',$data);
	}

	public function getPackageRooms($id)
	{
		$package = \App\Package::find($id);
		$rooms = $package->room;

		return view('customer.rooms')->with('rooms',$rooms);
	}

	public function postChooseRoom(Request $request)
	{
		$details = DB::table('rooms')->where('room_name',$request['room'])->first();
		
		Session::put('trans',$details);
		Session::save();

		if($details->available_units > 0){
			return view('customer.adjustments')->with('details',$details);
		}else{
			return response()->json($details);
		}
	}

	public function postPayPreview(Request $request)
	{
		if(Session::has('trans')){
			$trans = Session::get('trans');

			$no_days = $request['no_days'];
			$check_in = $request['checkin_date'];
			$check_out = $request['checkout_date'];
			$total_amount = $request['total_amount'];
			$payment_method = $request['payment_method'];
			$amenities = $request['amenities'];
			$remarks = $request['remarks'];

			$amenity_details = array();
			foreach ($amenities as $amenity) {
				$amenity_result = DB::table('amenities')->where('id',$amenity)->get();
				foreach ($amenity_result as $result) {
					array_push($amenity_details,$result);
				}
				
			}

			$package = DB::table('packages')->where('id',$trans->package_id)->first();
			
			$transaction_preview = array(
				'no_days' => $no_days,
				'check_in' => $check_in,
				'check_out' => $check_out,
				'total_amount' => $total_amount,
				'payment_method' => $payment_method,
				'amenities' => $amenity_details,
				'remarks' => $remarks,
				'room' => $trans,
				'package' =>  $package,
				'payment_method' => $payment_method
			);

			Session::put('trans_details',$transaction_preview);
			Session::save();

			return view('customer.checkout_preview')->with('details',$transaction_preview);

		}else{
			return redirect('customer/reserve/new');
		}

		
	}

	public function postPay(Request $request)
	{
		
	}

	public function getReserveContinue()
	{
		if(Session::has('trans_details')){

			Session::forget('trans');
			$customer_transaction = Session::get('trans_details');

			$trans_ref = str_random(6);

			$transaction = new \App\Transaction();
			$transaction->customer_id = Auth::user()->id;
			$transaction->package_id = $customer_transaction['package']->id;
			$transaction->room_id = $customer_transaction['room']->id;
			$transaction->transaction_ref = $trans_ref;
			$transaction->start_date = $customer_transaction['check_in'];
			$transaction->end_date = $customer_transaction['check_out'];
			$transaction->days = $customer_transaction['no_days'];
			$transaction->status = 2;
			$transaction->paid_amount = $customer_transaction['total_amount'];
			if (count($customer_transaction['amenities'])) {
				$transaction->with_amenities = 1;
			}else{
				$transaction->with_amenities = 0;
			}
			$transaction->created_at= \Carbon\Carbon::now();
            $transaction->updated_at= \Carbon\Carbon::now();
            $transaction->save();

            foreach ($customer_transaction['amenities'] as $amenity) {
            	$amenities = new \App\TransactionAmenity();
            	$amenities->transaction_id = $transaction->id;
            	$amenities->amenities_id = $amenity->id;
            	$amenities->created_at = \Carbon\Carbon::now();
            	$amenities->updated_at = \Carbon\Carbon::now();
            	$amenities->save();
            }

            Session::forget('trans_details');
			return view('customer.reserve_finish')->with('trans_ref',$trans_ref);

		}else{
			return redirect('customer/reserve/new');
		}
	}

	public function getReservationSlip($trans_ref)
	{
		$data = \App\Transaction::where(['transaction_ref' => $trans_ref, 'customer_id' => Auth::user()->id])->first();

        if ($data != null) {
            $pack = DB::table('packages')->where('id', '=', $data->package_id)->first();
            $room = DB::table('rooms')->where('id','=',$data->room_id)->first();
            $amenities = DB::table('transaction_amenities')->where('id',$data->id)->first();
            $date_printed = \Carbon\Carbon::now();

            $data['package_detail'] = $pack;
            $data['room_detail'] = $room;
            $data['date_printed'] = $date_printed;
            $data['amenities'] = $amenities;

            /*$pdf = \App::make('dompdf.wrapper');
            $pdf = \PDF::loadView('pdfs.reserve_slip', ['transactions',$data]);
            return $pdf->stream();*/

            return view('pdfs.reserve_slip')->with('transactions',$data);

        } else {
            abort('403');
        }
	}

	public function getPastReservations()
	{
		$transactions = \App\Transaction::where('customer_id',Auth::user()->id)->get();

		return view('customer.past_reservations')->with('transactions',$transactions);
	}

	public function postLogout(){
		Auth::logout();
		return redirect()->route('home')->header('Clear-Site-Data','cache','storage','executionContexts');
	}
}
