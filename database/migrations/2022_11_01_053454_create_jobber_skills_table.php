<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobberSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobber_skills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jobber_id');
            $table->integer('main_category');
            $table->integer('sub_category')->nullable();
            $table->longText('skills')->nullable();
            $table->longText('job_type')->nullable();
            $table->longText('equipments')->nullable();
            $table->longText('engagments')->nullable();
            $table->longText('description')->nullable();
            $table->string('diploma')->default("");
            $table->string('diploma_name')->default("");
            $table->string('experience')->default("");
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
        Schema::dropIfExists('jobber_skills');
    }
}
