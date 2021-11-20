<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
     protected $fillable = [
        'proposal_id', 'jober_id','applicant_id','s_time','e_time','price','status','review_id_applicant','jobber_id_applicant',
    ];
}
