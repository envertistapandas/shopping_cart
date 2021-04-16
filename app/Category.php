<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    protected $table = 'categorys';
    use SoftDeletes;
    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
