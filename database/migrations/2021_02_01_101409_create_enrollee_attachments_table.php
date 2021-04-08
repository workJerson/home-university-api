<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolleeAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollee_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('file_type');
            $table->string('file_name');
            $table->string('file_path');
            $table->unsignedBigInteger('enrollee_id');
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
        Schema::dropIfExists('enrollee_attachments');
    }
}
