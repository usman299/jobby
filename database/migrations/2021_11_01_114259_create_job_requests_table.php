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
            $table->string('applicant_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('subcategory_id')->nullable();   
            $table->longtext('title')->nullable();
            $table->string('estimate_time')->nullable();
            $table->string('max_price')->nullable();
            $table->string('min_price')->nullable();
            $table->longtext('description')->nullable();
            $table->string('file')->nullable();
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
