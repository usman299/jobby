<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->title = 'Category1';
        $category->backColor = '#ff0000';
        $category->img = 'admin/avatar.jpg';
        $category->save();
    }
}
