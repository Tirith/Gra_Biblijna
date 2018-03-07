<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
								'name' => 'Tomasz Boruc',								
								'email' => 'boructomek@gmail.com',							
								'password' => bcrypt('pass'),	]);
    }
}
