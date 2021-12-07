<?php

use Illuminate\Database\Seeder;

use App\Skils;
class SkilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skils::create([
            'category_id' => "1",
            'countory_id'=> "5",
            'subcategory_id' => "1",
            'title' => "Compétences1",
        ]);
        Skils::create([
            'category_id' => "1",
            'subcategory_id' => "2",
            'countory_id'=> "5",
            'title' => "Compétences2",
        ]);
        Skils::create([
            'category_id' => "1",
            'subcategory_id' => "3",
            'countory_id'=> "5",
            'title' => "Compétences3",
        ]);
        Skils::create([
            'category_id' => "2",
            'subcategory_id' => "1",
            'countory_id'=> "4",
            'title' => "Compétences1",
        ]);
        Skils::create([
            'category_id' => "2",
            'subcategory_id' => "2",
            'countory_id'=> "4",
            'title' => "Compétences2",
        ]);
        Skils::create([
            'category_id' => "2",
            'subcategory_id' => "3",
            'countory_id'=> "4",
            'title' => "Compétences3",
        ]);
        Skils::create([
            'category_id' => "3",
            'subcategory_id' => "1",
            'countory_id'=> "3",
            'title' => "Compétences1",
        ]);
        Skils::create([
            'category_id' => "3",
            'subcategory_id' => "2",
            'countory_id'=> "3",
            'title' => "Compétences2",
        ]);
        Skils::create([
            'category_id' => "3",
            'subcategory_id' => "3",
            'countory_id'=> "3",
            'title' => "Compétences3",
        ]);
        Skils::create([
            'category_id' => "4",
            'subcategory_id' => "1",
            'countory_id'=> "3",
            'title' => "Compétences1",
        ]);
        Skils::create([
            'category_id' => "4",
            'subcategory_id' => "2",
            'countory_id'=> "3",
            'title' => "Compétences2",
        ]);
        Skils::create([
            'category_id' => "4",
            'subcategory_id' => "3",
            'countory_id'=> "2",
            'title' => "Compétences3",
        ]);
        Skils::create([
            'category_id' => "5",
            'subcategory_id' => "1",
            'countory_id'=> "2",
            'title' => "Compétences1",
        ]);
        Skils::create([
            'category_id' => "5",
            'subcategory_id' => "2",
            'countory_id'=> "2",
            'title' => "Compétences2",
        ]);
        Skils::create([
            'category_id' => "5",
            'subcategory_id' => "3",
            'title' => "Compétences3",
        ]);
        Skils::create([
            'category_id' => "6",
            'subcategory_id' => "1",
            'countory_id'=> "2",
            'title' => "Compétences1",
        ]);
        Skils::create([
            'category_id' => "6",
            'subcategory_id' => "2",
            'countory_id'=> "2",
            'title' => "Compétences2",
        ]);
        Skils::create([
            'category_id' => "6",
            'subcategory_id' => "3",
            'countory_id'=> "2",
            'title' => "Compétences3",
        ]);
        Skils::create([
            'category_id' => "7",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'title' => "Compétences1",
        ]);
        Skils::create([
            'category_id' => "7",
            'subcategory_id' => "2",
            'countory_id'=> "1",
            'title' => "Compétences2",
        ]);
        Skils::create([
            'category_id' => "7",
            'subcategory_id' => "3",
            'countory_id'=> "1",
            'title' => "Compétences3",
        ]);
        Skils::create([
            'category_id' => "8",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'title' => "Compétences1",
        ]);
        Skils::create([
            'category_id' => "8",
            'subcategory_id' => "2",
            'countory_id'=> "1",
            'title' => "Compétences2",
        ]);
        Skils::create([
            'category_id' => "8",
            'subcategory_id' => "3",
            'countory_id'=> "1",
            'title' => "Compétences3",
        ]);


    }
}
