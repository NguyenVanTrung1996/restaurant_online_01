<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = "rates";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'point',
    ];
    public  function person()
    {
        return $this->belongsTo(Persons::class,'user_id','id');
    }
    public  function product()
    {
        return $this->belongsTo(Persons::class,'product_id','id');
    }
}
