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
        $skils = new Skils;
        $skils->category_id = '1';
        $skils->subcategory_id = '1';
        $skils->title = 'Skils1';
        $skils->save();
        
    }
}
