<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class
CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email',128)->unique();
            $table->integer('role');   // joober=1; Applicant=2;

            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('image')->default('main/avatar.png');
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();

            $table->string('skils')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('rate_per_hour')->nullable();
            $table->integer('is_company')->nullable();
            $table->string('company_name')->nullable();
            $table->string('siret')->nullable();
            $table->longText('description')->nullable();

            $table->longText('questions')->nullable();
            $table->longText('answers')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
