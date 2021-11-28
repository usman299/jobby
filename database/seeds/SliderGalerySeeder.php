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
            'img' => "admin/slider/S2.jpg",
        ]);
        SliderGalery::create([
        'userRole' => "2",
        'img' => "admin/slider/S3.jpg",
        ]);
        SliderGalery::create([
            'userRole' => "2",
            'img' => "admin/slider/S4.jpg",
        ]);
        SliderGalery::create([
        'userRole' => "2",
        'img' => "admin/slider/S1.jpg",
        ]);
        SliderGalery::create([
            'userRole' => "1",
            'img' => "admin/slider/S2.jpg",
        ]);
        SliderGalery::create([
        'userRole' => "1",
        'img' => "admin/slider/S3.jpg",
        ]);
        SliderGalery::create([
            'userRole' => "1",
            'img' => "admin/slider/S4.jpg",
        ]);
        SliderGalery::create([
        'userRole' => "1",
        'img' => "admin/slider/S1.jpg",
        ]);
    }
}
