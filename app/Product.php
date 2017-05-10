<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    public  function Rate()
    {
        return $this->hasMany('app\Rate','product_id','id');
    }
    public  function Comment()
    {
        return $this->hasMany('app\Comment','product_id','id');
    }

}
