<?php

use Illuminate\Database\Seeder;

class UserCountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usercounts')->insert([
            'usercount' => 4,
            'serverkey' => 'eldorado5'
        ]);   
    }
}
