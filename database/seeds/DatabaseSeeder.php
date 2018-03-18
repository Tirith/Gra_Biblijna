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

        DB::table('questions')->insert([
                                'pytanie' => 'Do jakiego miasta miał pójść Jonasz aby ogłosić wyrok?',                               
                                'odp1' => 'Jerycho',                          
                                'odp2' => 'Niniwa',                          
                                'odp3' => 'Kanaan',                          
                                'odp4' => 'Jerozolima',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Ile było herubów pilnujących ogród Eden?',                               
                                'odp1' => '1',                          
                                'odp2' => '2',                          
                                'odp3' => '3',                          
                                'odp4' => '4',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto przeżył podbicie Jerycho?',                               
                                'odp1' => 'Sara',                          
                                'odp2' => 'Debora',                          
                                'odp3' => 'Estera',                          
                                'odp4' => 'Rachab',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Co połkneło Jonasza?',                               
                                'odp1' => 'Lew',                          
                                'odp2' => 'Niedźwiedź',                          
                                'odp3' => 'Ryba',                          
                                'odp4' => 'Aligator',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 1,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto zabił Goliata?',                               
                                'odp1' => 'Mojżesz',                          
                                'odp2' => 'Jozue',                          
                                'odp3' => 'Salomon',                          
                                'odp4' => 'Dawid',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 1,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Za co Daniel został wrzucony do lwiej jamy?',                               
                                'odp1' => 'Za kradzież',                          
                                'odp2' => 'Za obrażenie króla',                          
                                'odp3' => 'Za modlitwę do Boga',                          
                                'odp4' => 'Za nie płacenie podatków',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Jakiego cudu nie dokonał Jezus?',                               
                                'odp1' => 'Uzdrowienie',                          
                                'odp2' => 'Zamienił wodę w wino',                          
                                'odp3' => 'Wskrzeszenie',                          
                                'odp4' => 'Zamienił kamień w chleb',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Jaką wizję miał Nebukadnecar?',                               
                                'odp1' => 'Zniszczenie posągu przez kamień',                          
                                'odp2' => 'Kobieta zamienia się w słup soli',                          
                                'odp3' => 'Armia Jehowy',                          
                                'odp4' => 'Drewniana laska zamienia się w węża',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 3,                          
                                   ]);


    }

    
}
