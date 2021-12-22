<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
         'title','category_id','img','backColor'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
   public function skils()
    {
        return $this->hasMany(SubCategory::class);
    }
   public function childcategories()
    {
        return $this->hasMany(ChildCategory::class);
    }

}
