//----------------------Zmienne i stałe-----------------------------------
localStorage.setItem('refresh', 1); //zmienna do blokowania odswierzania strony
var pojemnik_na_pkt = $('.pkt');
var czas_stop = false;
var x = document.getElementById("pop").innerHTML;
var zapis = document.getElementById("zapis");
var score = document.getElementById("score");
var poprawna = parseInt(x);
var button_game = $('#button_game');
var main_button = document.getElementById('main_button');

var nast = 'Następne pytanie';
var koniec = 'Rozpocznij od nowa';
var tile = document.querySelectorAll('.odpowiedz');

var pojemnik_na_czas = $('#czas');
var bad_color =  "#C03030";
var good_color = "#5C9A36";
var wynik = 0;


function zapis_button()
{
	zapis.style.visibility = "visible";
	score.value = wynik;

}
//----------------------Create main button---------------------------
//----------------------Gra w toku-----------------------------------
function progress()
{
	main_button.innerHTML = "";
	const in_progress = document.createElement('a');
	// in_progress.setAttribute('href', "");
	in_progress.classList.add("next");
	in_progress.textContent = "Podaj odpowiedź";
	main_button.appendChild(in_progress);
}

//----------------------Next question-----------------------------------
function next_quest()
{
	localStorage.setItem('refresh', 0);
	main_button.innerHTML = "";
	const next_quest = document.createElement('a');
	next_quest.setAttribute('href', "");
	next_quest.classList.add("next");
	next_quest.textContent = "Następne pytanie";
	main_button.appendChild(next_quest);
}

//----------------------New game-----------------------------------
function new_game()
{
	wynik = sessionStorage.clickcount;
	
	sessionStorage.clickcount = 0;
	main_button.innerHTML = "";
	const new_game = document.createElement('a');
	new_game.setAttribute('href', "http://localhost/Gra_Biblijna/public/");
	new_game.classList.add("next");
	new_game.textContent = "Nowa gra";
	main_button.appendChild(new_game);
	
}

//----------------------Count time-----------------------------------
function timer(){
	var poz_czas = 20; //Ilość czasu na odpowiedź
	var pojemnik_na_czas = $('#czas');
	var stoping = setInterval(function(){ countDown() }, 1000);

	function countDown() {
		pojemnik_na_czas.html('<span class="glyphicon glyphicon-time"> </span> ' + poz_czas + 's');
		poz_czas--;
	
		if (poz_czas==-1 || czas_stop == true) 
			{

				clearInterval(stoping);
				disable_tiles();
				if (poz_czas == -1) 
				{
					for (var i = 1; i < 5; i++) 
					{
						wynik = sessionStorage.clickcount;
             	zapis_button();
                    	var pre = 'l'+i.toString();    
                     	document.getElementById(pre).style.opacity = "0.5";   
                    }
					new_game();
				}
			}	
	};	
};
//-------------------Deactivation button with answers-----------------------------------
            function disable_tiles()
            {
                czas_stop = true;
                for (var i = 1; i < 5; i++) 
                	{
                    	var pre = 'l'+i.toString();
                     	document.getElementById(pre).onclick = '';	 
                    }


                    pojemnik_na_czas.addClass("zanikanie");
             }

//-------------------Score count-----------------------------------
             function score_count() 
             {
             	 if (sessionStorage.clickcount) 
                	 			 {
								    sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
								} else {
								    sessionStorage.clickcount = 0;
								    disable_tiles();
								    new_game();
								}
								pojemnik_na_pkt.html('Wynik: ' + sessionStorage.clickcount + ' pkt');
								

             }
//-------------------Reset score-----------------------------------
             function score_reset() 
             {
             	wynik = sessionStorage.clickcount;
             	zapis_button();
             	console.log('1'+wynik);
				sessionStorage.clickcount = 0;					
             }
//----------------------Sprawdzanie odpowiedzi-----------------------------------
            
            tile[0].onclick = function() 
              {
              	
                if (poprawna==1) { 
	                                 this.style.backgroundColor = good_color;
	                                 button_game.html(nast);
	                                 score_count();
	                                 next_quest()
                            } else{
	                            	 this.style.backgroundColor = bad_color;
	                                 score_reset();
	                                 new_game();
                            } 

                    disable_tiles(); 
                    
              }

              tile[1].onclick = function() 
              {
                if (poprawna==2) {
                                 	this.style.backgroundColor = good_color;
                                 	button_game.html(nast);
                                 	score_count();
                                 	next_quest();
                            } else{
	                                 score_reset();
	                                 this.style.backgroundColor = bad_color;
	                                 new_game();
                            } 
                    disable_tiles();
              }

              tile[2].onclick = function() 
              {
                if (poprawna==3) {
	                                 this.style.backgroundColor = good_color;
	                                 button_game.html(nast);
	                                 score_count();
	                                 next_quest();
                            } else{
	                                 score_reset()
	                                 this.style.backgroundColor = bad_color;
	                                 new_game();
                            } 
                    disable_tiles();
              }

              tile[3].onclick = function() 
              {
                if (poprawna==4) {
	                                 this.style.backgroundColor = good_color;
	                                 button_game.html(nast);
	                                 score_count();
	                                 next_quest();
                            } else{
	                                 score_reset();
	                                 this.style.backgroundColor = bad_color;
	                                 new_game();
                            } 
                    disable_tiles();
              }


