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
            $table->string('proposal_id')->nullable();
            $table->string('jober_id')->nullable();
            $table->string('applicant_id')->nullable();  
            $table->string('s_time')->nullable();
            $table->string('e_time')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->nullable();   //Active=1,complete=2,cancel=0
            $table->string('review_id_applicant')->nullable();
            $table->string('jobber_id_applicant')->nullable();
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
