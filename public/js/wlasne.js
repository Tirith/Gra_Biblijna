function timer(){

	var poz_czas = 15;
	// var pojemnik_na_czas = $('#czas');
	var button_game = $('#button_game');
	var stoping = setInterval(function(){ countDown() }, 1000);


function countDown() {
	pojemnik_na_czas.html('Czas: ' + poz_czas + 's');
	poz_czas--;

	if (poz_czas==-1) 
		{
			button_game.html('Rozpocznij od nowa');
			clearInterval(stoping);
			disable_tiles();
		}
};
	


};

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
            var x = document.getElementById("pop").innerHTML;
            var poprawna = parseInt(x);

            function disable_tiles(){
                
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
                            } else{
                                 
                                 this.appendChild(bad);
                            } 

                    disable_tiles(); 
                    
              }

              tile[1].onclick = function() 
              {
                if (poprawna==2) {
                                 this.appendChild(good);
                            } else{
                                 
                                 this.appendChild(bad);
                            } 
                    disable_tiles();
              }

              tile[2].onclick = function() 
              {
                if (poprawna==3) {
                                 this.appendChild(good);
                            } else{
                                 
                                 this.appendChild(bad);
                            } 
                    disable_tiles();
              }

              tile[3].onclick = function() 
              {
                if (poprawna==4) {
                                 this.appendChild(good);
                            } else{
                                 
                                 this.appendChild(bad);
                            } 
                    disable_tiles();
              }


