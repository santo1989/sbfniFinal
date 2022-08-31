<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('currentcourse_id');
            $table->unsignedBigInteger('year');
            $table->string('course_year');
            $table->integer('prepared');
            $table->integer('knows_subject');
            $table->integer('organized');
            $table->integer('assignment');
            $table->integer('flexible');
            $table->integer('directions');
            $table->integer('active');
            $table->integer('time_management');
            $table->integer('homework_time');
            $table->integer('classroom_procedure');
            $table->integer('grading');
            $table->integer('learning');
            $table->integer('teacher_feedback');
            $table->integer('creativity');
            $table->integer('presentation');
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
        Schema::dropIfExists('evaluations');
    }
}
