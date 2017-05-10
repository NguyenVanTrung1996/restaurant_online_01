<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'total_product_price',
        'ship_price',
        'discout',
        'order_time',
        'ship_time',
        'status',
    ];
    public  function person()
    {
        return $this->belongsTo(Persons::class,'user_id','id');
    }
    public  function order_detail()
    {
        return $this->hasMany(Order_detail::class,'order_id','id');
    }
}
