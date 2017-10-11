<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class Customer extends Model implements AuthenticatableContract, 
                                    CanResetPasswordContract {
    use Authenticatable, CanResetPassword;
    
    protected $table = 'perma_customer_acc';

    public function transaction()
    {
    	return $this->hasMany('App\Transaction');
    }
}
