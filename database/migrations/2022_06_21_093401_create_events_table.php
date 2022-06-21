<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->integer('jober_id')->nullable();
            $table->string('title')->nullable();
            $table->string('s_time')->nullable();
            $table->string('e_time')->nullable();
            $table->string('price')->nullable();
            $table->string('contract_id')->nullable();
            $table->integer('status')->default(1);   //Active=1,complete=2,cancel=0

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
        Schema::dropIfExists('events');
    }
}
