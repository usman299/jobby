<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobberServicesOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobber_services_offers', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->longText('country_id')->nullable();
            $table->longText('duration')->nullable();
            $table->string('price')->nullable();
            $table->longText('description')->nullable();
            $table->string('img')->nullable();
            $table->string('status')->default(1);
            $table->foreignId('jobber_id');
            $table->foreign('jobber_id')->references('id')->on('users');

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
        Schema::dropIfExists('jobber_services_offers');
    }
}
