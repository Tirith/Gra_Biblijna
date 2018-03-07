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

        DB::table('questions')->insert([
                                'pytanie' => 'Kto zbudował arkę?',                               
                                'odp1' => 'Mojżesz',                          
                                'odp2' => 'Noe',                          
                                'odp3' => 'Jezus',                          
                                'odp4' => 'Judasz',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 1,                          
                                   ]);
    }

    
}
