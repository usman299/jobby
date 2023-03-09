<?php

use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Subscribe::create([
            'name' => 'Novice',
            'fee' => '10',
            'price' => '0',
            'offers' => '15',
            'plan_id' => 'none'
        ]);

        \App\Subscribe::create([
            'name' => 'Intermediate',
            'fee' => '10',
            'price' => '9.99',
            'offers' => 'unlimited',
            'plan_id' => 'price_1MiWZRAByTzdY5hNN4AIdfeC'
        ]);

        \App\Subscribe::create([
            'name' => 'Pro',
            'fee' => '5',
            'price' => '29.99',
            'offers' => 'unlimited',
            'plan_id' => 'price_1MiWb2AByTzdY5hNKDWSJpwL'
        ]);


    }
}
