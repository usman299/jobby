<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notfication extends Model
{
    protected $fillable = [
        'sender_id', 'reciver_id','generate_id','message','activity','category_id','subcategory_id',
        'country_id','status'
    ];
}
