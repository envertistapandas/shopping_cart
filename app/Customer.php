<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	 protected $table = 'customers';
    //use SoftDeletes;
    public function oder()
    {
        return $this->hasMany('App\Order');
    }
}
