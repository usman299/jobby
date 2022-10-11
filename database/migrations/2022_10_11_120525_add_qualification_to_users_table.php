<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQualificationToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->longText('qualification')->nullable();
            $table->integer('badge')->default(1);
            $table->integer('verified')->default(0);
            $table->integer('pro')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->longText('qualification')->nullable();
            $table->integer('badge')->default(1);
            $table->integer('verified')->default(0);
            $table->integer('pro')->default(0);
        });
    }
}
