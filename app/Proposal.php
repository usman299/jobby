<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
   protected $fillable = [
        'job_req_id', 'jober_id','status','description','time_limit','price','description',
    ];
     
}

 