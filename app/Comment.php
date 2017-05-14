<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comment";
    public  function person()
    {
        return $this->belongsTo('app\Persons','user_id','id');
    }
    public  function product()
    {
        return $this->belongsTo('app\Product','product_id','id');
    }
}
