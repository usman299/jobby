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

            $table->longText('skills1')->nullable();
            $table->longText('skills2')->nullable();

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

            $table->longText('equipement1')->nullable();
            $table->longText('equipement2')->nullable();
            $table->longText('equipement3')->nullable();
            $table->longText('equipement4')->nullable();
            $table->longText('equipement5')->nullable();
            $table->longText('equipement6')->nullable();
            $table->longText('equipement7')->nullable();
            $table->longText('equipement8')->nullable();
            $table->longText('equipement9')->nullable();
            $table->longText('equipement10')->nullable();
            $table->longText('equipement11')->nullable();
            $table->longText('equipement12')->nullable();
            $table->longText('equipement13')->nullable();
            $table->longText('equipement14')->nullable();
            $table->longText('equipement15')->nullable();
            $table->longText('equipement16')->nullable();

            $table->longText('eng1')->nullable();
            $table->longText('eng2')->nullable();
            $table->longText('eng3')->nullable();
            $table->longText('eng4')->nullable();
            $table->longText('eng5')->nullable();
            $table->longText('eng6')->nullable();
            $table->longText('eng7')->nullable();
            $table->longText('eng8')->nullable();
            $table->longText('eng9')->nullable();
            $table->longText('eng10')->nullable();
            $table->longText('eng11')->nullable();
            $table->longText('eng12')->nullable();
            $table->longText('eng13')->nullable();
            $table->longText('eng14')->nullable();
            $table->longText('eng15')->nullable();
            $table->longText('eng16')->nullable();

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
