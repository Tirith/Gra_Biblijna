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
                                'pytanie' => 'Co połknęło Jonasza?',                               
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
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Jaka była druga plaga egipska?',                               
                                'odp1' => 'Ciemności',                          
                                'odp2' => 'Komary',                          
                                'odp3' => 'Śmierć zwierząt',                          
                                'odp4' => 'Żaby',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Jaka była piąta plaga egipska?',                               
                                'odp1' => 'Ciemności',                          
                                'odp2' => 'Komary',                          
                                'odp3' => 'Śmierć zwierząt',                          
                                'odp4' => 'Żaby',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 4,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto został wybrany zamiast Judasza?',                               
                                'odp1' => 'Piotr',                          
                                'odp2' => 'Szymon',                          
                                'odp3' => 'Maciej',                          
                                'odp4' => 'Mateusz',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 3,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto spisał księgę Hioba?',                               
                                'odp1' => 'Hiob',                          
                                'odp2' => 'Mojżesz',                          
                                'odp3' => 'Dawid',                          
                                'odp4' => 'Salomon',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 4,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Jaką ofiarę złożył Jehowie Kain?',                               
                                'odp1' => 'Warzywa',                          
                                'odp2' => 'Baranka',                          
                                'odp3' => 'Oliwę',                          
                                'odp4' => 'Chleb',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto wdrapał się na drzewo aby zobaczyć Jezusa?',                               
                                'odp1' => 'Symeon',                          
                                'odp2' => 'Imię nie zostało podane',                          
                                'odp3' => 'Ananiasz',                          
                                'odp4' => 'Zacheusz',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 4,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto głosił Etiopczykowi który czytał zwój Izajasza?',                               
                                'odp1' => 'Jan',                          
                                'odp2' => 'Piotr',                          
                                'odp3' => 'Paweł',                          
                                'odp4' => 'Filip',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 4,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kim był Gamaliel?',                               
                                'odp1' => 'Uczeń Jezusa',                          
                                'odp2' => 'Członek Sanhedrynu',                          
                                'odp3' => 'Skazał Jezusa',                          
                                'odp4' => 'Brał udział w kamienowaniu Pawła',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 4,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto podstępem zawarł przymierze z Izraelem?',                               
                                'odp1' => 'Hetyci',                          
                                'odp2' => 'Moabici',                          
                                'odp3' => 'Gibeonici',                          
                                'odp4' => 'Filistyni',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 4,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Ile było miast schronienia?',                               
                                'odp1' => '2',                          
                                'odp2' => '4',                          
                                'odp3' => '6',                          
                                'odp4' => '8',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 4,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto pomógł zwiadowcom w Jerychu?',                               
                                'odp1' => 'Rachab',                          
                                'odp2' => 'Jonasz',                          
                                'odp3' => 'Abracham',                          
                                'odp4' => 'Nikt im nie pomógł',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 1,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Co uratowało trzech hebrajczyków od kary wrzucenia do pieca?',                               
                                'odp1' => 'Uratował ich anioł',                          
                                'odp2' => 'Król zmienił decyzje',                          
                                'odp3' => 'Uciekli',                          
                                'odp4' => 'Nic ich nie uratowało',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 1,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Ile miał lat Adam jak został wypędzony z raju?',                               
                                'odp1' => 'powyżej 500 lat',                          
                                'odp2' => 'Nie więcej niż 40 lat',                          
                                'odp3' => 'Między 200 a 300 lat',                          
                                'odp4' => '120 lat',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 5,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Ile było pieczęci otwieranych przez anioła wspomnianych w księdze Objawienia?',                               
                                'odp1' => '2',                          
                                'odp2' => '6',                          
                                'odp3' => '7',                          
                                'odp4' => '12',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 5,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Jaki wiatr rozdzielił morze czerwone?',                               
                                'odp1' => 'Zachodni',                          
                                'odp2' => 'Wschodni',                          
                                'odp3' => 'Północny',                          
                                'odp4' => 'Południowy',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 5,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Gdzie jest napisane że "Noe chodził z prawdziwym Bogiem"?',                               
                                'odp1' => 'Rodzaju 2:15',                          
                                'odp2' => 'Rodzaju 6:9',                          
                                'odp3' => 'Wyjścia 4:2',                          
                                'odp4' => 'Jouzuego 1:1',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 1,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Jak nazywali się synowie Noego?',                               
                                'odp1' => 'Szadrach, Meszach i Abed-Nego',                          
                                'odp2' => 'Paweł, Mateusz, Jan',                          
                                'odp3' => 'Sem, Cham i Jafet',                          
                                'odp4' => 'Józef, Jakub i Ezaw',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 1,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Które zdanie jest prawdziwe?',                               
                                'odp1' => 'Abel żył dłużej niż Kain',                          
                                'odp2' => 'Jezus był kuszony trzy razy',                          
                                'odp3' => 'Mojżesz w Egipcie dokonał 10 cudów',                          
                                'odp4' => 'Estera była przybraną córką Mardocheusza',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 3,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Które zdanie jest prawdziwe?',                               
                                'odp1' => 'Niektóre demony są w stanie zwanym Tartar',                          
                                'odp2' => 'Jezus został sprzedany za 30 złotych monet',                          
                                'odp3' => 'Adam został zwiedziony przez szatana',                          
                                'odp4' => 'Arka miała około 300m długości',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 3,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Co to jest tartar?',                               
                                'odp1' => 'Miasto w starożytnym Izraelu',                          
                                'odp2' => 'Inaczej zawód drwala',                          
                                'odp3' => 'Złota grecka moneta',                          
                                'odp4' => 'Stan bytu',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 5,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Konec niewoli izraelitów był w roku?',                               
                                'odp1' => '535 p.n.e',                          
                                'odp2' => '537 p.n.e',                          
                                'odp3' => '536 p.n.e',                          
                                'odp4' => '670 p.n.e',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Gdzie zapisana jest defnicja wiary?',                               
                                'odp1' => 'Hebr 1:1',                          
                                'odp2' => 'Hebr 1:11',                          
                                'odp3' => 'Hebr 11:1',                          
                                'odp4' => 'Hebr 11:11',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 3,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Kto był pierworodnym synem Noego?',                               
                                'odp1' => 'Sem',                          
                                'odp2' => 'Cham',                          
                                'odp3' => 'Jafet',                          
                                'odp4' => 'Nie wiadomo',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 3,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Set był synem?',                               
                                'odp1' => 'Adama i Ewy',                          
                                'odp2' => 'Noego',                          
                                'odp3' => 'Kaina',                          
                                'odp4' => 'Jakuba',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 2,                          
                                   ]);

        DB::table('questions')->insert([
                                'pytanie' => 'Gdzie zapisana jest defnicja wiary?',                               
                                'odp1' => 'Hebr 1:1',                          
                                'odp2' => 'Hebr 1:11',                          
                                'odp3' => 'Hebr 11:1',                          
                                'odp4' => 'Hebr 11:11',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 3,                          
                                   ]);






    }

    
}
