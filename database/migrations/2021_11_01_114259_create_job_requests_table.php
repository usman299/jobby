<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('applicant_id');
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->integer('childcategory_id')->nullable();
            $table->integer('country_id');

            $table->string('skils')->nullable();
            $table->longtext('title');
            $table->longtext('detail_description')->nullable();

            $table->string('file')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();

            $table->string('service_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('duration')->nullable();
            $table->string('hours')->nullable();
            $table->string('estimate_budget')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();

            $table->string('small')->nullable();
            $table->string('medium')->nullable();
            $table->string('large')->nullable();
            $table->string('verylarge')->nullable();
            $table->string('question')->nullable();
            $table->string('question1')->nullable();
            $table->string('question2')->nullable();
            $table->string('question3')->nullable();
            $table->string('surface')->nullable();
            $table->string('count')->nullable();
            $table->string('input')->nullable();
            $table->string('pickup_address')->nullable();
            $table->string('destination_address')->nullable();
            $table->string('dob')->nullable();
            $table->integer('jobbers')->nullable();
            $table->string('description')->nullable();


            $table->string('status')->default(1);//Active=1,close=2,
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_requests');
    }
}
