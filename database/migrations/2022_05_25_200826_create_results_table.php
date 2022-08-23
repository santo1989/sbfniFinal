<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('currentcourse_id');
            $table->unsignedBigInteger('year');
            $table->unsignedBigInteger('course_year');
            $table->string('grade')->nullable();
            $table->float('written')->nullable();
            $table->float('oral')->nullable();
            $table->float('formative')->nullable();
            $table->float('practical')->nullable();
            $table->float('written_pass')->nullable();
            $table->float('oral_pass')->nullable();
            $table->float('formative_pass')->nullable();
            $table->float('practical_pass')->nullable();
            $table->float('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
