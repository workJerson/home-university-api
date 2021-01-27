<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolleesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollees', function (Blueprint $table) {
            $table->id();
            $table->string('email_address');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('contact_number')->nullable();
            $table->unsignedBigInteger('regcode')->nullable();
            $table->unsignedBigInteger('provCode')->nullable();
            $table->unsignedBigInteger('psgcCode')->nullable();
            $table->unsignedInteger('years_in_government')->nullable();
            $table->string('current_employment')->nullable();
            $table->string('position')->nullable();
            $table->unsignedTinyInteger('enrollment_status')->default(0);
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('regcode')->references('regcode')->on('regions');
            $table->foreign('provCode')->references('provCode')->on('provinces');
            $table->foreign('psgcCode')->references('psgcCode')->on('cities');

            $table->index('regcode');
            $table->index('provCode');
            $table->index('psgcCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollees');
    }
}
