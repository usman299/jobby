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
        \App\Subscription::create([
            'name' => 'Novice',
            'fee' => '10',
            'price' => '0',
            'offers' => '15'
        ]);

        \App\Subscription::create([
            'name' => 'Intermediate',
            'fee' => '10',
            'price' => '9.99',
            'offers' => 'unlimited'
        ]);

        \App\Subscription::create([
            'name' => 'Pro',
            'fee' => '5',
            'price' => '29.99',
            'offers' => 'unlimited'
        ]);


    }
}
