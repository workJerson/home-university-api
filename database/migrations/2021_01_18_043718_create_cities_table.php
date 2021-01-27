<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('psgcCode');
            $table->string('citymunDesc');
            $table->string('regDesc');
            $table->unsignedBigInteger('provCode');
            $table->string('citymunCode');
            $table->timestamps();

            $table->foreign('provCode')->references('provCode')->on('provinces');
            $table->index('psgcCode');
            $table->index('citymunDesc');
            $table->index('regDesc');
            $table->index('provCode');
            $table->index('citymunCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
