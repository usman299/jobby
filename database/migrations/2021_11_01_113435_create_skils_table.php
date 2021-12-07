<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('countory_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');


             $table->foreignId('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories');

            $table->string('title')->nullable();
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
        Schema::dropIfExists('skils');
    }
}
