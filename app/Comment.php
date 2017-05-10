<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";
    protected $fillable = [
        'comment',
        'id',
    ];
    public $timestamps = true;

    public function person()
    {
        return $this->belongsTo(Persons::class ,'user_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
