<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('years', function (Blueprint $table) {
            $table->dropColumn('year_name');
            $table->dropColumn('course_name');
            $table->dropColumn('mark_distribution_id');
            $table->unsignedBigInteger('student_id');
            $table->string("year");
            $table->string("course_year");
            $table->string("section")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('years', function (Blueprint $table) {
            //
        });
    }
}
