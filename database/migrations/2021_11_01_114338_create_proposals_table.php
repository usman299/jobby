<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->integer('jobRequest_id')->nullable();
            $table->integer('jobber_id')->nullable();
            $table->integer('status')->default(1);   //Active=1,Accept=2,reject=0
            $table->longtext('description')->nullable();
            $table->string('time_limit')->nullable();
            $table->string('price')->nullable();
            $table->string('hours')->nullable();
            $table->string('duration')->nullable();
            $table->string('total_hours')->nullable();
            $table->string('service_price')->nullable();
            $table->string('tax')->nullable();
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
        Schema::dropIfExists('proposals');
    }
}
