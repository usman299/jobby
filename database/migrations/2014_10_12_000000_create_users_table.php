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
            $table->integer('check')->default(1);
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('image')->default('main/avatar.png');
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->string('gender')->nullable();
            $table->longText('professional')->nullable();
            $table->string('dob')->nullable();
            $table->string('radius')->nullable();
            $table->string('rate_per_hour')->nullable();

//            company
            $table->integer('is_company')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('vat_type')->nullable();
            $table->string('siret')->nullable();
            $table->longText('description')->nullable();
            $table->longText('device_token')->nullable();

            $table->longText('qualification')->nullable();
            $table->integer('badge')->default(1);
            $table->integer('verified')->default(0);
            $table->integer('pro')->default(0);

            $table->string('sub_date')->nullable();
            $table->string('paymant_id')->default(0);
            $table->string('offers')->default(0);
            $table->string('subscription')->default(1);
            $table->string('wallet')->nullable();

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('otp')->nullable();
            $table->string('connect_id')->nullable();
            $table->integer('connect_status')->nullable();

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
