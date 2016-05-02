<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Note that if users can create their own tournaments,
        // then we have to have uid field here so we can see who
        // has right to admin a particular tournament
        Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('isAllocated');  
            $table->integer('maxPlayers')->unsigned(); ;  
            $table->integer('startsAt')->unsigned(); ; // Pure timestamp  
            $table->integer('timeBetweenQuestions')->unsigned(); 
            $table->integer('timeToAnswer')->unsigned();   
            $table->string('allocationCode', 16)->nullable();        
            $table->string('name', 128);
            $table->string('description', 1024);
            $table->string('password', 32);
            $table->string('allocatedToServer', 64);                                        
            $table->timestamps();

            $table->index('startsAt');
        });

        Schema::create('servers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tournaments');
        Schema::drop('servers');
    }
}
