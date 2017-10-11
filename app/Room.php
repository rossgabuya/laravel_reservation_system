<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    public function package()
    {
    	return $this->belongsTo('App\Package');
    }

    public function getRoomByName($room_name)
    {
    	$package = DB::table('packages')->where('room_name',$room_name)->first();
    	return $package;
    }

    
    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
