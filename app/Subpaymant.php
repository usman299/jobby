<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpaymant extends Model
{
    public function subscription()
    {
        return $this->belongsTo(Subscribe::class, 'sub_id');
    }
}
