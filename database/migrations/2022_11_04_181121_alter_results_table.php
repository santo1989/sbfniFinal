<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropColumn('written_pass');
            $table->dropColumn('oral_pass');
            $table->dropColumn('formative_pass');
            $table->dropColumn('practical_pass'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
            // $table->dropColumn('written_pass');
            // $table->dropColumn('oral_pass');
            // $table->dropColumn('formative_pass');
            // $table->dropColumn('practical_pass');  
        });
    }
}
