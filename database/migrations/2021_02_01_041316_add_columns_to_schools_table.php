<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->string('school_email')->nullable()->after('name');
            $table->string('image_path')->nullable()->after('user_id');
            $table->integer('order')->default(0)->after('image_path');

            $table->unsignedBigInteger('regcode')->nullable();
            $table->unsignedBigInteger('provCode')->nullable();
            $table->unsignedBigInteger('psgcCode')->nullable();

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
        Schema::table('schools', function (Blueprint $table) {
        });
    }
}
