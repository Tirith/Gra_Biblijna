//----------------------Zmienne i stałe-----------------------------------
var czas_stop = false;
var x = document.getElementById("pop").innerHTML;
var poprawna = parseInt(x);
var button_game = $('#button_game');
var nast = 'Następne pytanie';
var koniec = 'Rozpocznij od nowa';
var tile = document.querySelectorAll('.odpowiedz');
const good = document.createElement('span');
const bad = document.createElement('span');
var pojemnik_na_czas = $('#czas');
	good.classList.add("glyphicon");
    good.classList.add("glyphicon-ok");
    good.classList.add("good");
    good.style.setProperty("color", "#1C9B07");

    bad.classList.add("glyphicon");
    bad.classList.add("glyphicon-remove");
    bad.classList.add("bad");
    bad.style.setProperty("color", "#F50B16");

//----------------------Odmierzanie czasu-----------------------------------
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
//-------------------Deaktywacja kafli z odpowiedziami-----------------------------------
            function disable_tiles()
            {
                czas_stop = true;
                for (var i = 1; i < 5; i++) {
                    	var pre = 'l'+i.toString();
                     	document.getElementById(pre).onclick = '';    
                    }
                    pojemnik_na_czas.addClass("zanikanie");
             }
//----------------------Sprawdzanie odpowiedzi-----------------------------------
            
            tile[0].onclick = function() 
              {
              	
                if (poprawna==1) {
                                 this.appendChild(good);
                                 button_game.html(nast);
                                 
                            } else{
                                 
                                 this.appendChild(bad);
                                 button_game.html(koniec);
                            } 

                    disable_tiles(); 
                    
              }

              tile[1].onclick = function() 
              {
                if (poprawna==2) {
                                 this.appendChild(good);
                                 button_game.html(nast);
                            } else{
                                 
                                 this.appendChild(bad);
                                 button_game.html(koniec);
                            } 
                    disable_tiles();
              }

              tile[2].onclick = function() 
              {
                if (poprawna==3) {
                                 this.appendChild(good);
                                 button_game.html(nast);
                            } else{
                                 
                                 this.appendChild(bad);
                                 button_game.html(koniec);
                            } 
                    disable_tiles();
              }

              tile[3].onclick = function() 
              {
                if (poprawna==4) {
                                 this.appendChild(good);
                                 button_game.html(nast);
                            } else{
                                 
                                 this.appendChild(bad);
                                 button_game.html(koniec);
                            } 
                    disable_tiles();
              }


