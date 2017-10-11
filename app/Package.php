<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';

    public function room()
    {
    	return $this->hasMany('App\Room');
    }

    public function transaction()
    {
    	return $this->hasMany('App\Transaction');
    }
}
