<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobberServicesOffers extends Model
{
    protected $fillable = [
        'title','duration','price','description','img','jobber_id','country_id','status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
