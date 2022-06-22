<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(AppSettingSeeder::class);
        $this->call(ChildCategorySeeder::class);
//        $this->call(SkilsSeeder::class);
//        $this->call(JobberRequestSeeder::class);
        $this->call(SliderGalerySeeder::class);
        $this->call(SubscriptionSeeder::class);
    }
}
