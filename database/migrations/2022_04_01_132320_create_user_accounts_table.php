<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email');
            $table->string('passwd');
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->string('mobile');
            $table->string('nationality');
            $table->string('street');
            $table->string('dno');
            $table->string('zipcode');
            $table->string('city');
            $table->string('country');
            $table->string('fromDate');
            $table->string('toDate');
            $table->string('acceptTerms');
            $table->string('acceptPrivacy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_accounts');
    }
}
