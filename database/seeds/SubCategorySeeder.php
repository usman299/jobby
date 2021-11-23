<?php

use Illuminate\Database\Seeder;
use App\SubCategory;
class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategory = new SubCategory;
        $subCategory->title = 'SubCategory';
        $subCategory->category_id = 1;
        $subCategory->backColor = '#ff0000';
        $subCategory->img = 'admin/avatar.jpg';
        $subCategory->save();
    }
}
