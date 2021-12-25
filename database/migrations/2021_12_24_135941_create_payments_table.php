<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('contract_id');
            $table->integer('jobber_id');
            $table->integer('applicant_id');
            $table->string('price')->nullable();
            $table->string('type')->nullable();
            $table->string('invoice_no')->nullable();
            $table->longtext('description')->nullable();
            $table->integer('status')->default(0);//0=pending;1=compelte;2=cancel
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
        Schema::dropIfExists('payments');
    }
}
