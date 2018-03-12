function timer(){

	var poz_czas = 15;
	var pojemnik_na_czas = $('#czas');
	var button_game = $('#button_game');
	var stoping = setInterval(function(){ countDown() }, 1000);


function countDown() {
	pojemnik_na_czas.html('Czas: ' + poz_czas + 's');
	poz_czas--;

	if (poz_czas==-1) 
		{
			button_game.html('Rozpocznij od nowa');
			clearInterval(stoping);
		}
};
	


};


