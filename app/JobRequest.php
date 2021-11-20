<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{

	protected $fillable = [
        'applicant_id', 'category_id','subcategory_id','title','estimate_time','max_price','min_price','description','file','status',
    ];

}
     
