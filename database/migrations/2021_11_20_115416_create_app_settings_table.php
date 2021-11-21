<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id();
            $table->string('mainScreen')->nullable();
            $table->string('appLogo')->nullable();
            $table->string('jooberIntroScreen1')->nullable();
            $table->string('jooberIntroScreen2')->nullable();
            $table->string('jooberIntroScreen3')->nullable();
            $table->string('applicantIntroScreen1')->nullable();
            $table->string('applicantIntroScreen2')->nullable();
            $table->string('applicantIntroScreen3')->nullable();
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
        Schema::dropIfExists('app_settings');
    }
}
