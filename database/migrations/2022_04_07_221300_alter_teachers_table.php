<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->integer('knowledge')->default(0);
            $table->integer('experience')->default(0);
            $table->integer('communication')->default(0);
            $table->integer('leadership')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('knowledge');
            $table->dropColumn('experience');
            $table->dropColumn('communication');
            $table->dropColumn('leadership');
        });
    }
}
