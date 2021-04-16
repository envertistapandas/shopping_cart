<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
   
    protected $table = 'products';
    use SoftDeletes;
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function brands()
    {
        return $this->hasMany('App\Brand');
    }
}
