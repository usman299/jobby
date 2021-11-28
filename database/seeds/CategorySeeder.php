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

        Category::create([
            'title' => "Nettoyage",
            'backColor' => "#FF5733",
            'img' => "admin/icons/002-plumber.png",
           
            ]);
            Category::create([
                'title' => "Ménage",
                'backColor' => "#335EFF",
                'img' => "admin/icons/001-household.png",
                
               
                ]);
            Category::create([
                'title' => "Electricienne",
                'backColor' => "#FFAF33",
                'img' => "admin/icons/003-electrician.png",
                
                ]);
            Category::create([
                'title' => "Peintre",
                'backColor' => "#FF3933",
                'img' => "admin/icons/004-painter.png",
                
                ]);
            Category::create([
                'title' => "Se réconcilier",
                'backColor' => "#FF3361 ",
                'img' => "admin/icons/006-makeup.png",
                
                ]);
            Category::create([
                'title' => "Méditation",
                'backColor' => "#FFAF33",
                'img' => "admin/icons/005-meditation.png",
                
                ]);
            Category::create([
                'title' => "Ménage",
                'backColor' => "#FF5733",
                'img' => "admin/icons/001-household.png",
                
                ]);
            Category::create([
                'title' => "Annonce",
                'backColor' => "#FFAF33",
                'img' => "admin/icons/announcement.png",
                
                ]);
            
    }
}
