<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'avatar',
        'discrible',
        'type',
        'status',
        'is_hot',
        'rate_point',
        'rate_count',
        'new',
        'comment_count',
    ];
    public  function Rate()
    {
        return $this->hasMany(Rate::class,'product_id','id');
    }
    public  function Comment()
    {
        return $this->hasMany(Comment::class,'product_id','id');
    }

}
