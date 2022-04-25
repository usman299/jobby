<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardPaymantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_paymants', function (Blueprint $table) {
            $table->id();
            $table->integer('card_id')->nullable();
            $table->integer('card_number')->nullable();
            $table->string('sendername')->nullable();
            $table->string('senderphone')->nullable();
            $table->string('r_name')->nullable();
            $table->string('r_email')->nullable();
            $table->longText('message')->nullable();
            $table->string('price')->nullable();
            $table->integer('paymentstatus')->default('0');
            $table->integer('valid')->default('0');
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
        Schema::dropIfExists('card_paymants');
    }
}
