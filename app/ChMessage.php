<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChMessage extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'from_id');
    }
}
