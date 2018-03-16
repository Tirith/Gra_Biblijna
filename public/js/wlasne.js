//----------------------Zmienne i stałe-----------------------------------

var pojemnik_na_pkt = $('.pkt');
var czas_stop = false;
var x = document.getElementById("pop").innerHTML;
var poprawna = parseInt(x);
var button_game = $('#button_game');
var main_button = document.getElementById('main_button');

var nast = 'Następne pytanie';
var koniec = 'Rozpocznij od nowa';
var tile = document.querySelectorAll('.odpowiedz');
const good = document.createElement('span');
const bad = document.createElement('span');
	good.classList.add("glyphicon");
    good.classList.add("glyphicon-ok");
    good.classList.add("good");
    good.style.setProperty("color", "#1C9B07");

    bad.classList.add("glyphicon");
    bad.classList.add("glyphicon-remove");
    bad.classList.add("bad");
    bad.style.setProperty("color", "#F50B16");

var pojemnik_na_czas = $('#czas');
//----------------------Create main button---------------------------
//----------------------Gra w toku-----------------------------------
function progress()
{
	main_button.innerHTML = "";
	const in_progress = document.createElement('a');
	// in_progress.setAttribute('href', "");
	in_progress.classList.add("next");
	in_progress.textContent = "Gra w toku";
	main_button.appendChild(in_progress);
}

//----------------------Next question-----------------------------------
function next_quest()
{
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
	main_button.innerHTML = "";
	const new_game = document.createElement('a');
	new_game.setAttribute('href', "");
	new_game.classList.add("next");
	new_game.textContent = "Nowa gra";
	main_button.appendChild(new_game);
}

//----------------------Count time-----------------------------------
function timer(){
	var poz_czas = 15;
	var pojemnik_na_czas = $('#czas');
	var stoping = setInterval(function(){ countDown() }, 1000);

	function countDown() {
		pojemnik_na_czas.html('Czas: ' + poz_czas + 's');
		poz_czas--;
	
		if (poz_czas==-1 || czas_stop == true) 
			{
				clearInterval(stoping);
				disable_tiles();
			}	
	};	
};
//-------------------Deactivation button with answers-----------------------------------
            function disable_tiles()
            {
                czas_stop = true;
                for (var i = 1; i < 5; i++) {
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
								}
								pojemnik_na_pkt.html('Wynik: ' + sessionStorage.clickcount + ' pkt');
             }
//-------------------Reset score-----------------------------------
             function score_reset() 
             {
				sessionStorage.clickcount = 0;					
             }
//----------------------Sprawdzanie odpowiedzi-----------------------------------
            
            tile[0].onclick = function() 
              {
              	
                if (poprawna==1) {
                                 this.appendChild(good);
                                 button_game.html(nast);
                                 score_count();
                                 next_quest()


                            } else{
                                 score_reset()
                                 this.appendChild(bad);
                                 new_game()
                            } 

                    disable_tiles(); 
                    
              }

              tile[1].onclick = function() 
              {
                if (poprawna==2) {
                                 	this.appendChild(good);
                                 	button_game.html(nast);
                                 	score_count();
                                 	next_quest()
                            } else{
                                 score_reset()
                                 this.appendChild(bad);
                                 new_game()
                            } 
                    disable_tiles();
              }

              tile[2].onclick = function() 
              {
                if (poprawna==3) {
                	 			
                                 this.appendChild(good);
                                 button_game.html(nast);
                                 score_count();
                                 next_quest()
                            } else{
                                 score_reset()
                                 this.appendChild(bad);
                                 new_game()
                            } 
                    disable_tiles();
              }

              tile[3].onclick = function() 
              {
                if (poprawna==4) {
                	 			 
                                 this.appendChild(good);
                                 button_game.html(nast);
                                 score_count();
                                 next_quest()
                            } else{
                                 score_reset()
                                 this.appendChild(bad);
                                 new_game()
                            } 
                    disable_tiles();
              }


