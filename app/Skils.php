<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skils extends Model
{
    protected $fillable = [
        'category_id', 'subcategory_id','title',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
