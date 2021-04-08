<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('contact_number')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('regcode')->nullable();
            $table->unsignedBigInteger('provCode')->nullable();
            $table->unsignedBigInteger('psgcCode')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('regcode')->references('regcode')->on('regions');
            $table->foreign('provCode')->references('provCode')->on('provinces');
            $table->foreign('psgcCode')->references('psgcCode')->on('cities');

            $table->index('user_id');
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
        Schema::dropIfExists('user_details');
    }
}
