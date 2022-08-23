<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id')->unsigned();
            $table->string('img1');
            $table->text('script1');
            $table->string('img2');
            $table->text('script2');
            $table->string('gl_img1');
            $table->string('gl_img2');
            $table->string('gl_img3');
            $table->string('gl_img4');
            $table->string('gl_img5');
            $table->string('gl_img6');
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
        Schema::dropIfExists('news');
    }
}
