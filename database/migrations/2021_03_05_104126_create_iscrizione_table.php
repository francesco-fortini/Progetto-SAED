<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIscrizioneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iscrizione', function (Blueprint $table) {
            $table->integer('idCorso')->unsigned();
            $table->bigInteger('idUtente')->unsigned();
            $table->timestamps();
        });

        Schema::table('iscrizione', function(Blueprint $table){
            
            $table->primary(['idCorso','idUtente']);
            
            $table->foreign('idCorso')
                ->references('idCorso')->on('corsoscii')
                ->onDelete('cascade');
            
            $table->foreign('idUtente')
                ->references('id')->on('users')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iscrizione');
    }
}
