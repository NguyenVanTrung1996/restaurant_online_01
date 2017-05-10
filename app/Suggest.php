<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $table = "suggests";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name_product',
        'status',
    ];
    public  function person()
    {
        return $this->belongsTo(Persons::class,'user_id','id');
    }
}
