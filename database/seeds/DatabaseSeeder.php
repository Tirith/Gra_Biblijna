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

        DB::table('questions')->insert([
                                'pytanie' => 'Ile osób przeżyło potop?',                               
                                'odp1' => '1',                          
                                'odp2' => '4',                          
                                'odp3' => '8',                          
                                'odp4' => '24',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 1,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Z czego był znany Samson?',                               
                                'odp1' => 'Był przystojny',                          
                                'odp2' => 'Żył bardzo długo',                          
                                'odp3' => 'Był uczniem Jezusa',                          
                                'odp4' => 'Był bardzo silny',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 1,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'W jakim mieście urodził się Jezus?',                               
                                'odp1' => 'Betlejem',                          
                                'odp2' => 'Nazaret',                          
                                'odp3' => 'Kana Galilejska',                          
                                'odp4' => 'Efez',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 1,                          
                                   ]);
    }

    
}
