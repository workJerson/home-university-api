<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('psgcCode');
            $table->string('provDesc');
            $table->unsignedBigInteger('regCode')->nullable();
            $table->unsignedBigInteger('provCode')->nullable();
            $table->timestamps();

            $table->foreign('regCode')->references('regCode')->on('regions');
            $table->index('psgcCode');
            $table->index('provDesc');
            $table->index('regCode');
            $table->index('provCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
