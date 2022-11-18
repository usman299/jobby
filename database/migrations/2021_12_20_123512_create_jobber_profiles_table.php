<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobberProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobber_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('jobber_id');
            //Timing
            $table->string('monday')->nullable();
            $table->string('tuesday')->nullable();
            $table->string('wednesday')->nullable();
            $table->string('thersday')->nullable();
            $table->string('friday')->nullable();
            $table->string('saturday')->nullable();
            $table->string('sunday')->nullable();

            //Progress of service
            $table->longText('answer1')->nullable();
            $table->longText('answer2')->nullable();
            $table->longText('answer3')->nullable();
            $table->longText('answer4')->nullable();

            //Insurance of service
            $table->longText('insurance1')->nullable();
            $table->longText('insurance2')->nullable();
            $table->longText('insurance3')->nullable();
            $table->longText('insurance4')->nullable();

            //Rules
            $table->longText('rules1')->nullable();
            $table->longText('rules2')->nullable();
            $table->longText('rules3')->nullable();
            $table->longText('rules4')->nullable();

            $table->integer('score')->nullable();

            $table->string('eu_id_card_front')->nullable();
            $table->string('eu_id_card_back')->nullable();
            $table->string('eu_id_driving_front')->nullable();
            $table->string('eu_id_driving_back')->nullable();
            $table->string('eu_id_passport_front')->nullable();
            $table->string('eu_id_passport_back')->nullable();
            $table->string('eu_id_residence_permit_front')->nullable();
            $table->string('eu_id_residence_permit_back')->nullable();

            $table->string('vital_card')->nullable();
            $table->string('vital_card_number')->nullable();
            $table->string('social_security_certificate')->nullable();
            $table->string('social_security_number')->nullable();


            $table->string('jobber_category_id');
            $table->longText('diploma')->nullable();
            $table->longText('diploma_name')->nullable();
            $table->longText('experince')->nullable();
            $table->longText('personal_description')->nullable();
            $table->longText('certifie')->nullable();

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
        Schema::dropIfExists('jobber_profiles');
    }
}
