<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    const  TABLE = 'subscribes';
    protected  $table = self::TABLE;
    protected $fillable = [
        'name','price','fee','offers',
    ];
}
