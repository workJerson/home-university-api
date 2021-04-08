<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToEnrolleesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enrollees', function (Blueprint $table) {
            $table->renameColumn('email_address', 'primary_email');
            $table->string('secondary_email')->nullable()->after('course_id');
            $table->integer('age')->nullable()->after('secondary_email');
            $table->string('department')->nullable()->after('secondary_email');
            $table->string('address')->nullable()->after('department');
            $table->string('zip')->nullable()->after('address');
            $table->string('profile_picture')->nullable()->after('zip');
            $table->string('professional_license')->nullable()->after('profile_picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enrollees', function (Blueprint $table) {
        });
    }
}
