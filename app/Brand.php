<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Brand extends Model
{
    protected $table = 'brands';
    use SoftDeletes;

    public function product()
    {
        return $this->hasOne('App\Product');
    }
    /*public function product()
    {
        return $this->belongsTo('App\Product');
    }*/
}
