<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id')->unsigned();
            $table->string('img1');
            $table->text('description');
            $table->date('date');
            $table->time('time');
            $table->float('fee');
            $table->string('location', 255)->nullable();
            $table->text('bring');
            $table->string('lecturer_name', 255);
            $table->string('lecturer_phone', 15)->nullable();
            $table->string('lecturer_email')->nullable();
            $table->string('lecturer_img');
            $table->text('lecturer_description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
