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
        $sliderGalery = new SliderGalery;
        $sliderGalery->userRole = 2;
        $sliderGalery->img = 'admin/avatar.jpg';
        $sliderGalery->save();
    }
}
