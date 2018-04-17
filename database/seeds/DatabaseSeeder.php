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

        DB::table('winners')->insert([
                                'nick' => 'Tirith',                               
                                'pkt' => 4,                          
                                  ]);



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
                                'trudnosc' => 3,                          
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
                                'poprawna' => 3,                          
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
                                'odp3' => 'Abraham',                          
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
                                'pytanie' => 'Koniec niewoli izraelitów był w roku?',                               
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
                                'pytanie' => 'Co oznacza słowo "Babel"?',                               
                                'odp1' => 'Wieża',                          
                                'odp2' => 'Miasto',                          
                                'odp3' => 'Zamieszanie',                          
                                'odp4' => 'Rozproszenie',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 3,                          
                                   ]);

          DB::table('questions')->insert([
                                'pytanie' => 'Kto został nazwany "Przyjacielem Jehowy"?',                               
                                'odp1' => 'Abraham',                          
                                'odp2' => 'Noe',                          
                                'odp3' => 'Izajasz',                          
                                'odp4' => 'Jan',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 1,                          
                                   ]);

           DB::table('questions')->insert([
                                'pytanie' => 'Dawid był?',                               
                                'odp1' => 'Ojcem Saula',                          
                                'odp2' => 'Wodzem Armii',                          
                                'odp3' => 'Prorokiem',                          
                                'odp4' => 'Pierwszym królem Izraela',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 2,                          
                                   ]);

            DB::table('questions')->insert([
                                'pytanie' => 'Kto był przyjacielem Dawida?',                               
                                'odp1' => 'Saul',                          
                                'odp2' => 'Mefiboszet',                          
                                'odp3' => 'Uriasz',                          
                                'odp4' => 'Jonatan',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 1,                          
                                   ]);

             DB::table('questions')->insert([
                                'pytanie' => 'Podczas panowania jakiego króla Izrael został podzielony?',                               
                                'odp1' => 'Salomon',                          
                                'odp2' => 'Dawid',                          
                                'odp3' => 'Saul',                          
                                'odp4' => 'Jeroboam',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 4,                          
                                   ]);

              DB::table('questions')->insert([
                                'pytanie' => 'Jak poprawnie brzmi imie dowódcy wojsk Syrii?',                               
                                'odp1' => 'Naaman',                          
                                'odp2' => 'Namaan',                          
                                'odp3' => 'Namman',                          
                                'odp4' => 'Namann',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 3,                          
                                   ]);

               DB::table('questions')->insert([
                                'pytanie' => 'Kto ujżał ogniste rydwany Jehowy?',                               
                                'odp1' => 'Eliasz',                          
                                'odp2' => 'Elizeusz',                          
                                'odp3' => 'Jeroboam',                          
                                'odp4' => 'Jechoszafat',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 3,                          
                                   ]);

                DB::table('questions')->insert([
                                'pytanie' => 'Kim była Atalia?',                               
                                'odp1' => 'Córką Jezebel',                          
                                'odp2' => 'Siostrą Jezebel',                          
                                'odp3' => 'Matką Jezebel',                          
                                'odp4' => 'Służącą Jezebel',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 5,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Po przyjściu do Niniwy Jonasz powiedział mieszkańcom?',                               
                                'odp1' => 'Jehowa postanowił was oszczędzić',                          
                                'odp2' => 'Jonasz nie był w Niniwie',                          
                                'odp3' => 'Niniwa zostanie zniszczona za 40 dni',                          
                                'odp4' => 'Jehowa sprowadzi na was klęskę głodu',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile talentów otrzymali słudzy z przypowieści Jezusa?',                               
                                'odp1' => '1, 2, 3',                          
                                'odp2' => '1, 2, 4',                          
                                'odp3' => '1, 4, 6',                          
                                'odp4' => '1, 2, 5',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 4,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Czyim ojcem jest diabeł?',                               
                                'odp1' => 'Kłamstwa',                          
                                'odp2' => 'Pieniędzy',                          
                                'odp3' => 'Kradzieży',                          
                                'odp4' => 'Śmierci',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Co przedstawiało królestwo Nebukadnecara w jego śnie?',                               
                                'odp1' => 'Wielka góra',                          
                                'odp2' => 'Wielkie drzewo',                          
                                'odp3' => 'Wielka rzeka',                          
                                'odp4' => 'Wielka ryba',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Który król babilonu zobaczył pismo na ścianie?',                               
                                'odp1' => 'Artakserkses',                          
                                'odp2' => 'Nebukadnecar',                          
                                'odp3' => 'Baltazar',                          
                                'odp4' => 'Kserkses',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 4,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Co oznaczały słowa na ścianie "MENE, MENE, TEKEL, PARSIN"?',                               
                                'odp1' => 'Medowie i Persowie podbiją Babilon',                          
                                'odp2' => 'Ty królu stracisz życie',                          
                                'odp3' => 'Twoje królesto będzie istnieć bardzo długo',                          
                                'odp4' => 'Ty królu będzisz niezwyciężonym wodzem',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Który król ogłosił postanowienie o odbudowie Jerozolimy?',                               
                                'odp1' => 'Dariusz I',                          
                                'odp2' => 'Kambyzes',                          
                                'odp3' => 'Cyrus',                          
                                'odp4' => 'Achaszwerosz',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile aniołów zobaczyli pasterze zaraz po narodzinach Jezusa?',                               
                                'odp1' => '1',                          
                                'odp2' => '2',                          
                                'odp3' => '12',                          
                                'odp4' => 'Bardzo dużo',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'W jakiej porze roku urodził się Jezus?',                               
                                'odp1' => 'Wiosna',                          
                                'odp2' => 'Lato',                          
                                'odp3' => 'Jesień',                          
                                'odp4' => 'Zima',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kto ochrzcił Jezusa?',                               
                                'odp1' => 'Mateusz',                          
                                'odp2' => 'Marek',                          
                                'odp3' => 'Łukasz',                          
                                'odp4' => 'Jan',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Czyją córką była Dina?',                               
                                'odp1' => 'Jakuba',                          
                                'odp2' => 'Labana',                          
                                'odp3' => 'Hioba',                          
                                'odp4' => 'Mojżesza',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 5,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kto jako pierwszy został powołany na apostołów?',                               
                                'odp1' => 'Piotr i Mateusz',                          
                                'odp2' => 'Piotr i Andrzej',                          
                                'odp3' => 'Jan i Tomasz',                          
                                'odp4' => 'Judasz i Szymon',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile osób Jezus nakramił pięcioma chlebami i dwoma rybami??',                               
                                'odp1' => '120',                          
                                'odp2' => 'około 100',                          
                                'odp3' => 'około 500',                          
                                'odp4' => 'około 5000',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Mateusz był...?',                               
                                'odp1' => 'Rybakiem',                          
                                'odp2' => 'Lekarzem',                          
                                'odp3' => 'Poborcą podatków',                          
                                'odp4' => 'Krawcem',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Jaką część owocu ducha symbolizuje tarcza?',                               
                                'odp1' => 'Miłość',                          
                                'odp2' => 'Wiara',                          
                                'odp3' => 'Dobroć',                          
                                'odp4' => 'Radość',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Która ewangelia została napisana przez lekarza?',                               
                                'odp1' => 'Mateusza',                          
                                'odp2' => 'Marka',                          
                                'odp3' => 'Łuaksza',                          
                                'odp4' => 'Jana',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile apostołów miał Jezus?',                               
                                'odp1' => '2',                          
                                'odp2' => '6',                          
                                'odp3' => '12',                          
                                'odp4' => '24',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Czym Jezus nakarmił 5000 ludzi?',                               
                                'odp1' => 'Chleby i ryby',                          
                                'odp2' => 'Chleby i figi',                          
                                'odp3' => 'Ryby i warzywa',                          
                                'odp4' => 'Owoce i warzywa',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Co Jezus zrobił dla Łazarza?',                               
                                'odp1' => 'Dał mu pieniądze',                          
                                'odp2' => 'Pomógł mu przy budowie domu',                          
                                'odp3' => 'Wskrzesił go z martwych',                          
                                'odp4' => 'Uzdrowił go',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 1,                          
                                   ]);

                

                 DB::table('questions')->insert([
                                'pytanie' => 'Jakiego zawodu Jezus nauczył się od Józefa?',                               
                                'odp1' => 'Drwal',                          
                                'odp2' => 'Lekarz',                          
                                'odp3' => 'Rolnik',                          
                                'odp4' => 'Cieśla',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kto chciał zabić Jezusa gdy był dzieckiem?',                               
                                'odp1' => 'Herod',                          
                                'odp2' => 'Piłat',                          
                                'odp3' => 'Faraon',                          
                                'odp4' => 'Cezar',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'W którym dniu stworzenia został uczyniony człowiek?',                               
                                'odp1' => 'Drugim',                          
                                'odp2' => 'Trzecim',                          
                                'odp3' => 'Piątym',                          
                                'odp4' => 'Szóstym',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'W jakim języku został spisany tzw. Stary Testament?',                               
                                'odp1' => 'Hebrajskim',                          
                                'odp2' => 'Greckim',                          
                                'odp3' => 'Łacińskim',                          
                                'odp4' => 'Egipskim',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kim był Jakub dla Abrahama?',                               
                                'odp1' => 'Synem',                          
                                'odp2' => 'Ojcem',                          
                                'odp3' => 'Wnuczkiem',                          
                                'odp4' => 'Zięciem',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Które plemie izraela nie otrzymało swojej ziemi?',                               
                                'odp1' => 'Beniamina',                          
                                'odp2' => 'Lewiego',                          
                                'odp3' => 'Judy',                          
                                'odp4' => 'Rubena',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Jakiego ptaka Mojżesz najpierw wypuścił z arki?',                               
                                'odp1' => 'Gołąb',                          
                                'odp2' => 'Papuga',                          
                                'odp3' => 'Wróbel',                          
                                'odp4' => 'Kruk',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Jaki kolor miał sznur spuszczony przez Rachab?',                               
                                'odp1' => 'Zelony',                          
                                'odp2' => 'Czerwony',                          
                                'odp3' => 'Czarny',                          
                                'odp4' => 'Brązowy',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Co zrobili Józefowi jego bracia?',                               
                                'odp1' => 'Zabili',                          
                                'odp2' => 'Pobili',                          
                                'odp3' => 'Sprzedali do niewoli',                          
                                'odp4' => 'Wtrącili do więzienia',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Dlaczego Kain zabił Abla?',                               
                                'odp1' => 'Abel nie oddał mu pieniędzy',                          
                                'odp2' => 'Abel ukradł mu coś wartościowego',                          
                                'odp3' => 'Kain zrobił to nieumyślnie',                          
                                'odp4' => 'Kain był zazdrosny',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Przed jaką katastrofą Józef uratował Egipt?',                               
                                'odp1' => 'Klęska głodu',                          
                                'odp2' => 'Powódź',                          
                                'odp3' => 'Najazd wrogów',                          
                                'odp4' => 'Zamordowanie Faraona',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Jak nazywała się żona Abrahama?',                               
                                'odp1' => 'Estera',                          
                                'odp2' => 'Sara',                          
                                'odp3' => 'Noemi',                          
                                'odp4' => 'Rut',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile miał lat Abraham jak dotarł do Kanaanu?',                               
                                'odp1' => '75',                          
                                'odp2' => '49',                          
                                'odp3' => '56',                          
                                'odp4' => '74',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 4,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Czy Marek był apostołem?',                               
                                'odp1' => 'Tak',                          
                                'odp2' => 'Nie',                          
                                'odp3' => 'Nie wiadomo',                          
                                'odp4' => 'Prawdopodobnie, nie',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kim była Hagar?',                               
                                'odp1' => 'Drugą żoną Abrahama',                          
                                'odp2' => 'Służącą Abrahama',                          
                                'odp3' => 'Siostrą Abrahama',                          
                                'odp4' => 'Matką Abrahama',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Jaki był pierwszy cud dokonany przez Jezusa?',                               
                                'odp1' => 'Wskrzesił Łazarza',                          
                                'odp2' => 'Nakarmił tłumy ludzi',                          
                                'odp3' => 'Chodził po wodzie',                          
                                'odp4' => 'Zamienił wodę w wino',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Co oznacza słowo "mesjasz"?',                               
                                'odp1' => 'Wybawca',                          
                                'odp2' => 'Król',                          
                                'odp3' => 'Pomazaniec',                          
                                'odp4' => 'Syn',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile lat wcześniej było zapisane proroctwo o miejscu narodzin Jezusa?',                               
                                'odp1' => '100 lat',                          
                                'odp2' => '300 lat',                          
                                'odp3' => '500 lat',                          
                                'odp4' => '700 lat',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 4,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile dzieci zostało zabitych przez niedźwiedzia za czasów Elizeusza?',                               
                                'odp1' => '12',                          
                                'odp2' => '20',                          
                                'odp3' => '42',                          
                                'odp4' => '53',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 5,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Jak miał na imię człowiek który zabrał ciało Jezusa po jego śmierci?',                               
                                'odp1' => 'Józef',                          
                                'odp2' => 'Szymon',                          
                                'odp3' => 'Zebedeusz',                          
                                'odp4' => 'Gamaliel',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 5,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kto walczył z aniołem?',                               
                                'odp1' => 'Abraham',                          
                                'odp2' => 'Izaak',                          
                                'odp3' => 'Jakub',                          
                                'odp4' => 'Ezaw',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Czy "Septuaginta" to?',                               
                                'odp1' => 'Hebrajska wersja nowego testamentu',                          
                                'odp2' => 'Grecka wersja starego testamentu',                          
                                'odp3' => 'Łacińska wersja biblii',                          
                                'odp4' => 'Angielska wersja biblii',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 4,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Jak nazywał się ojciec Abrahama?',                               
                                'odp1' => 'Lamech',                          
                                'odp2' => 'Nie jest znany z imienia',                          
                                'odp3' => 'Izaak',                          
                                'odp4' => 'Terach',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile lat spisywano biblię?',                               
                                'odp1' => 'około 200 lat',                          
                                'odp2' => 'około 500 lat',                          
                                'odp3' => 'około 1000 lat',                          
                                'odp4' => 'około 1500 lat',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Jak nazywał się ojciec Aarona?',                               
                                'odp1' => 'Amram',                          
                                'odp2' => 'Lewi',                          
                                'odp3' => 'Nadab',                          
                                'odp4' => 'Nie jest znany z imienia',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 5,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kto podpierał ręce Mojżeszowi podczas bitwy z Amalekitami?',                               
                                'odp1' => 'Aaron i Abichu',                          
                                'odp2' => 'Aaron i Chur',                          
                                'odp3' => 'Abichu i Chur',                          
                                'odp4' => 'Itamar i Chur',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 5,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ile lat izraelici błąkali się po pustkowiu?',                               
                                'odp1' => '4',                          
                                'odp2' => '14',                          
                                'odp3' => '40',                          
                                'odp4' => '44',                          
                                'poprawna' => 3,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Którzy synowie Aarona ponieśli śmierć z wyroku Jehowy??',                               
                                'odp1' => 'Nadab i Abichu',                          
                                'odp2' => 'Nadab i Eleazar',                          
                                'odp3' => 'Itamar i Abichu',                          
                                'odp4' => 'Itamar i Eleazar',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 4,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kim jest "Anioł Otchłani"?',                               
                                'odp1' => 'Jehowa',                          
                                'odp2' => 'Jezus',                          
                                'odp3' => 'Szatan',                          
                                'odp4' => 'Demony',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 5,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Abraham urodził się w...?',                               
                                'odp1' => '2018r p.n.e',                          
                                'odp2' => '1513r p.n.e',                          
                                'odp3' => '1900r p.n.e',                          
                                'odp4' => '3000r p.n.e',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 5,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Ilu żołnierzy asyryjskich zabił jeden anioł jednej nocy?',                               
                                'odp1' => '10 000',                          
                                'odp2' => '55 000',                          
                                'odp3' => '125 000',                          
                                'odp4' => '185 000',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Na jakiej górze osiadła arka po potopie?',                               
                                'odp1' => 'Synaj',                          
                                'odp2' => 'Ararat',                          
                                'odp3' => 'Moria',                          
                                'odp4' => 'Hermon',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Z jakiego drewna była wykonana arka przymierza?',                               
                                'odp1' => 'Akacja',                          
                                'odp2' => 'Sosna',                          
                                'odp3' => 'Dąb',                          
                                'odp4' => 'Drzewo żywiczne',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 4,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kto był założycielem Babilonu?',                               
                                'odp1' => 'Nebukadnecar',                          
                                'odp2' => 'Hammurabi',                          
                                'odp3' => 'Nabopolasar',                          
                                'odp4' => 'Nimrod',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kim była Cyppora?',                               
                                'odp1' => 'Żona Mojżesza',                          
                                'odp2' => 'Matka Mojżesza',                          
                                'odp3' => 'Siostra Abrahama',                          
                                'odp4' => 'Matka Lota',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 3,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Kto był założycielem Babilonu?',                               
                                'odp1' => 'Nebukadnecar',                          
                                'odp2' => 'Hammurabi',                          
                                'odp3' => 'Nabopolasar',                          
                                'odp4' => 'Nimrod',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 2,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'Co oznacza słowo "Ewangelia"?',                               
                                'odp1' => 'Dobra nowina',                          
                                'odp2' => 'Księga',                          
                                'odp3' => 'Proroctwo',                          
                                'odp4' => 'Sprawozdanie',                          
                                'poprawna' => 1,                          
                                'trudnosc' => 1,                          
                                   ]);

                 DB::table('questions')->insert([
                                'pytanie' => 'W jakim zborze była Dorkas?',                               
                                'odp1' => 'Korynt',                          
                                'odp2' => 'Efez',                          
                                'odp3' => 'Tesalonika',                          
                                'odp4' => 'Joppa',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 5,                          
                                   ]);

                                   DB::table('questions')->insert([
                                'pytanie' => 'Kto spisał księgi Kronik?',                               
                                'odp1' => 'Elizeusz',                          
                                'odp2' => 'Ezdrasz',                          
                                'odp3' => 'Dawid',                          
                                'odp4' => 'Salomon',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 5,                          
                                   ]);

                                   DB::table('questions')->insert([
                                'pytanie' => 'Kto spisał księgę Estery?',                               
                                'odp1' => 'Estera',                          
                                'odp2' => 'Mardocheusz',                          
                                'odp3' => 'Natan',                          
                                'odp4' => 'Ezdrasz',                          
                                'poprawna' => 2,                          
                                'trudnosc' => 4,                          
                                   ]);

                                   DB::table('questions')->insert([
                                'pytanie' => 'Kto spisał Dzieje Apostolskie',                               
                                'odp1' => 'Piotr',                          
                                'odp2' => 'Jan',                          
                                'odp3' => 'Paweł',                          
                                'odp4' => 'Łukasz',                          
                                'poprawna' => 4,                          
                                'trudnosc' => 3,                          
                                   ]);


















                


    }

    
}
