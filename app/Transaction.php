<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    public function customer($value='')
    {
    	return $this->belongsTo('App\Customer');
    }

    public function package()
    {
    	return $this->belongsTo('App\Package');
    }

    public function room()
    {
    	return $this->belongsTo('App\Room');
    }
}
