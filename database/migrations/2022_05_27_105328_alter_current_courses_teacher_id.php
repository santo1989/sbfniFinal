<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCurrentCoursesTeacherId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currentcourses', function (Blueprint $table) {
            $table->dropColumn('course_teacher');
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->dropColumn('course_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currentcourses', function (Blueprint $table) {
            $table->string('course_teacher');
            $table->dropColumn('teacer_id');
            $table->string('course_name');
            $table->dropColumn('course_id');
        });
    }
}
