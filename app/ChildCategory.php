<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    protected $fillable = [
        'title','category_id','img','backColor','subcategory_id',
    ];
}
