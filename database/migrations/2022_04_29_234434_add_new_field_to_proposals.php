<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldToProposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proposals', function (Blueprint $table) {
            $table->string('hours')->nullable()->after('status');
            $table->string('duration')->nullable();
            $table->string('total_hours')->nullable();
            $table->string('service_price')->nullable();
            $table->string('tax')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proposals', function (Blueprint $table) {
            $table->string('hours')->nullable()->after('status');
            $table->string('duration')->nullable();
            $table->string('total_hours')->nullable();
            $table->string('service_price')->nullable();
            $table->string('tax')->nullable();
        });
    }
}
