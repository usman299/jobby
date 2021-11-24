<?php

use Illuminate\Database\Seeder;
use App\JobRequest;

class JobberRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $jobRequest = new JobRequest;
        $jobRequest->applicant_id = 2;
        $jobRequest->category_id = 1;
        $jobRequest->subcategory_id = 1;
        $jobRequest->skils = 'Skils';
        $jobRequest->title = 'JobRequestTitle';
        $jobRequest->estimate_time = '4h';
        $jobRequest->max_price = 50;
        $jobRequest->min_price = 60;
        $jobRequest->description = 'JobRequestTitlefilefile';
        $jobRequest->file = 'admin/avatar.jpg';
        $jobRequest->save();
    }
}
