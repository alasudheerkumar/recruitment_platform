<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Job_Title');
            $table->string('Job_Requirements');
            $table->string('Job_Work');
            $table->string('Job_Expectations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_jobs');
    }
}
