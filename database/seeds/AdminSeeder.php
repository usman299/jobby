<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->fname = 'Admin';
        $admin->lname = 'Admin';
        $admin->email = 'admin@gmail.com';
       
         $admin->role = '0';
        
        $admin->password = bcrypt('password');

        $admin->save();
    }
}
