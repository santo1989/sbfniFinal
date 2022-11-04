<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCourseNameToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('written_pass')->nullable();
            $table->integer('oral_pass')->nullable();
            $table->integer('formative_pass')->nullable();
            $table->integer('practical_pass')->nullable();
            $table->integer('total_written')->nullable();
            $table->integer('total_oral')->nullable();
            $table->integer('total_formative')->nullable();
            $table->integer('total_practical')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('written_pass');
            $table->dropColumn('oral_pass');
            $table->dropColumn('formative_pass');
            $table->dropColumn('practical_pass');
            $table->dropColumn('total_written');
            $table->dropColumn('total_oral');
            $table->dropColumn('total_formative');
            $table->dropColumn('total_practical');
        });
    }
}
