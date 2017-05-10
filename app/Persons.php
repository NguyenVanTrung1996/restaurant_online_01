<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $table = "persons";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phone',
        'sex',
        'brithday',
        'avatar',
        'address',
        'role',
    ];
    public  function order()
    {
        return $this->hasMany(Order::class,'user_id','id');
    }
    public  function Rate()
    {
        return $this->hasMany(Rate::class,'user_id','id');
    }
    public  function Comment()
    {
        return $this->hasMany(Order::class,'user_id','id');
    }
    public  function Suggest()
    {
        return $this->hasMany(Suggest::class,'user_id','id');
    }
}
