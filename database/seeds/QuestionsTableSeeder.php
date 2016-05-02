<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	'tournament_id' => 1,
        	'numofchoices' => 4,
            'question' => str_random(10),
            'a' => str_random(5),
            'b' => str_random(5),
            'c' => str_random(5),
            'd' => str_random(5),
            'answer' => 'a'
        ]);

        DB::table('questions')->insert([
        	'tournament_id' => 1,
        	'numofchoices' => 4,
            'question' => str_random(10),
            'a' => str_random(5),
            'b' => str_random(5),
            'c' => str_random(5),
            'd' => str_random(5),
            'answer' => 'b'
        ]);
        DB::table('questions')->insert([
            'tournament_id' => 1,
            'numofchoices' => 4,
            'question' => str_random(10),
            'a' => str_random(5),
            'b' => str_random(5),
            'c' => str_random(5),
            'd' => str_random(5),
            'answer' => 'd'
        ]);    
        DB::table('questions')->insert([
            'tournament_id' => 2,
            'numofchoices' => 4,
            'question' => str_random(10),
            'a' => str_random(5),
            'b' => str_random(5),
            'c' => str_random(5),
            'd' => str_random(5),
            'answer' => 'c'
        ]);

        DB::table('questions')->insert([
            'tournament_id' => 2,
            'numofchoices' => 4,
            'question' => str_random(10),
            'a' => str_random(5),
            'b' => str_random(5),
            'c' => str_random(5),
            'd' => str_random(5),
            'answer' => 'c'
        ]); 

    }
}
