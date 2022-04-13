<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_Of_Birth');
            $table->string('Phone');
            $table->string('nationality');
            $table->string('street');
            $table->string('doorNumber');
            $table->string('zipcode');
            $table->string('city');
            $table->string('country');
            $table->string('fromDate');
            $table->string('toDate');
            $table->string('termsAcceptance');
            $table->string('privacyAcceptance');
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
