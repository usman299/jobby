<?php

use Illuminate\Database\Seeder;
use App\SliderGalery;
class SliderGalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        SliderGalery::create([
            'userRole' => "2",
            'countory_id'=> "1",
            'img' => "admin/images/1640343489img.jpg",
        ]);
        SliderGalery::create([
        'userRole' => "2",
            'countory_id'=> "1",
        'img' => "admin/images/1640343505img.jpg",
        ]);
        SliderGalery::create([
            'userRole' => "2",
            'countory_id'=> "1",
            'img' => "admin/images/1640343534img.jpg",
        ]);
        SliderGalery::create([
        'userRole' => "2",
            'countory_id'=> "1",
        'img' => "admin/images/1640343567img.jpg",
        ]);
        SliderGalery::create([
            'userRole' => "1",
            'countory_id'=> "1",
            'img' => "admin/images/1640343489img.jpg",
        ]);
        SliderGalery::create([
        'userRole' => "1",
            'countory_id'=> "1",
        'img' => "admin/images/1640343505img.jpg",
        ]);
        SliderGalery::create([
            'userRole' => "1",
            'countory_id'=> "1",
            'img' => "admin/images/1640343534img.jpg",
        ]);
        SliderGalery::create([
        'userRole' => "1",
            'countory_id'=> "1",
        'img' => "admin/images/1640343567img.jpg",
        ]);
    }
}
