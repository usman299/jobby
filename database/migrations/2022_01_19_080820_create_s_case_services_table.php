<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSCaseServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('s_case_services', function (Blueprint $table) {
            $table->id();
            $table->longtext('title')->nullable();
            $table->longtext('title1')->nullable();
            $table->longtext('title2')->nullable();
            $table->longtext('title3')->nullable();
            $table->longtext('title4')->nullable();
            $table->string('img')->nullable();
            $table->longtext('description1')->nullable();
            $table->longtext('description2')->nullable();
            $table->longtext('description3')->nullable();
            $table->longtext('description4')->nullable();

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
        Schema::dropIfExists('s_case_services');
    }
}
