<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorsosciiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corsoscii', function (Blueprint $table) {
            $table->increments('idCorso');
            $table->integer('tipo')->unsigned();
            $table->string('nome');
            $table->integer('membriMax');
            $table->date('inizio');
            $table->date('fine');
            $table->timestamps();
        });

        Schema::table('corsoscii', function(Blueprint $table){
            $table->foreign('tipo')
                ->references('idCorso')->on('tipo')
                ->onDelete('cascade');
            
            //$table->primary('idCorso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corsoscii');
    }
}
