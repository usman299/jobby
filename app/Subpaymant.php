<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpaymant extends Model
{
    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'sub_id');
    }
}
