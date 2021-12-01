<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
   protected $fillable = [
        'jobRequest_id', 'jobber_id','status','description','time_limit','price',
    ];
     
}

 