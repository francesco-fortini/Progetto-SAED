<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToCorsosciiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corsoscii', function (Blueprint $table) {
            $table->time('orario_inizio')->after('membriMax');
            $table->time('orario_fine')->after('orario_inizio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corsoscii', function (Blueprint $table) {
            //
        });
    }
}
