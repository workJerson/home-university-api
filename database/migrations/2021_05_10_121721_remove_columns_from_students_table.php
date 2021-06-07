<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('students_course_id_foreign');
            $table->dropForeign('students_program_id_foreign');
            $table->dropForeign('students_school_id_foreign');

            $table->dropColumn([
                'years_in_government',
                'current_employment',
                'position',
                'school_id',
                'program_id',
                'course_id',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedInteger('years_in_government')->nullable();
            $table->string('current_employment')->nullable();
            $table->string('position')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('course_id');

            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('course_id')->references('id')->on('courses');

            $table->index('school_id');
            $table->index('program_id');
            $table->index('course_id');
        });
    }
}
