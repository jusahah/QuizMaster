<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tournament_id')->unsigned(); 
            $table->integer('numofchoices')->unsigned(); ;        
            $table->string('question', 128);
            $table->string('a', 128);      
            $table->string('b', 128);
            $table->string('c', 128);
            $table->string('d', 128); 
            $table->string('answer', 1);                                                                                     
            $table->timestamps();

            $table->index('tournament_id');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
