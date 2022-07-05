<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeyIdToSubpaymantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subpaymants', function (Blueprint $table) {
            $table->string('key_id')->nullable();
            $table->string('card_holder_name')->nullable();
            $table->string('paymentMethodId')->nullable();
            $table->longText('message')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subpaymants', function (Blueprint $table) {
            $table->string('key_id')->nullable();
            $table->string('card_holder_name')->nullable();
            $table->string('paymentMethodId')->nullable();
            $table->longText('message')->nullable();

        });
    }
}
