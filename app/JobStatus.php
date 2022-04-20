<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobStatus extends Model
{
    public function sub()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category');
    }
    public function child()
    {
        return $this->belongsTo(ChildCategory::class, 'child_category');
    }
}
