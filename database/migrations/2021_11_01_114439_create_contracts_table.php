<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->integer('proposal_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('jober_id')->nullable();
            $table->integer('applicant_id')->nullable();
            $table->string('s_time')->nullable();
            $table->string('e_time')->nullable();
            $table->string('price')->nullable();
            $table->string('contract_no')->nullable();
            $table->longtext('description')->nullable();
            $table->integer('status')->default(1);   //Active=1,complete=2,cancel=0
            $table->string('review_id_applicant')->nullable();
            $table->string('jobber_id_applicant')->nullable();
            $table->integer('jobRequest_id')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
