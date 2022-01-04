<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id', 'role','name','email','subject','message',];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
