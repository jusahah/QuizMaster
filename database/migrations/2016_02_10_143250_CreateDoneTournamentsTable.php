<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoneTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donetournaments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tournament_id')->unsigned();
            $table->string('name', 128);
            $table->string('description', 1024);
            $table->string('winner', 64)->nullable();  
            $table->string('second', 64)->nullable();
            $table->string('third', 64)->nullable(); 
            $table->string('standings', 64000);                                          
            $table->timestamps();

            $table->index('tournament_id');
            $table->foreign('tournament_id')->references('id')->on('tournaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donetournaments');
    }
}
