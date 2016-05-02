<?php

use Illuminate\Database\Seeder;

class TournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name3 = str_random(10);
        $description3 = str_random(40);

        DB::table('tournaments')->insert([
            'name' => str_random(10),
            'description' => str_random(40),
            'maxPlayers' => 5,
            'startsAt' => time() + 600,
            'timeBetweenQuestions' => 3000,
            'timeToAnswer' => 2000,
            'password' => '',
        ]);    	
        DB::table('tournaments')->insert([
            'name' => str_random(10),
            'description' => str_random(40),
            'maxPlayers' => 10,
            'startsAt' => time() + 840,
            'timeBetweenQuestions' => 5000,
            'timeToAnswer' => 10000,
            'password' => '',
        ]);  

        DB::table('tournaments')->insert([
            'name' => $name3,
            'description' => $description3,
            'isAllocated' => true,
            'maxPlayers' => 10,
            'startsAt' => time() - 3600,
            'timeBetweenQuestions' => 5000,
            'timeToAnswer' => 10000,
            'password' => '',
        ]);  

        DB::table('donetournaments')->insert([
            'tournament_id' => 3,
            'name' => $name3,
            'description' => $description3,
            'winner' => 'Joonas_83',
            'second' => 'yh1978',
            'third' => 'goneGirlGG',
            'created_at' => time(),
            'standings' => '[{
                "name": "Joonas_83",
                "points": 507
            }, {
                "name": "yh1978",
                "points": 504
            }, {
                "name": "goneGirlGG",
                "points": 501
            }, {
                "name": "Joonas_84",
                "points": 484
            }]'
        ]);  
    }
}
