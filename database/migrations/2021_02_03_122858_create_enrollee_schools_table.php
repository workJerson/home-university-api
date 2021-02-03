<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolleeSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollee_schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year_graduated')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('type');
            $table->unsignedBigInteger('enrollee_id')->nullable();
            $table->timestamps();

            $table->foreign('enrollee_id')->references('id')->on('enrollees');
            $table->index('enrollee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollee_schools');
    }
}
