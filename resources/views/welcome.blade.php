<?php 
session_start();
$_SESSION['losuj'] = 1;
$_SESSION['poziom'] = 1;
$_SESSION['poprawne_odp'] = 0;

if (!isset($_SESSION['nick']))
{
  $_SESSION['nick'] = "";
}
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ url('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ url('css/animate.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ url('css/wlasne.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Styles -->
        <style>

        </style>

        <script type="text/javascript">    
            //localStorage.setItem('refresh', 0);
        </script>

    </head>
    <body>
        
            <div class="container "> 
               <h2 class="logo">Biblijny Quiz</h2>
               


               <div class="col-md-12 col-lg-12 name text-center">
                   <form id="start" action="{{ url('/pytania') }}" class="form_nick" enctype="multipart/form-data">
                     {{csrf_field()}}
                     {{method_field('GET')}}
                      <div class="form-group">
                        
                        <input type="text" class="form-control " name="nick" value="{{$_SESSION['nick']}}" placeholder="Twój nick">
                        
                      </div>
                      
                      <button type="submit" class="btn btn-success  btn-lg">START</button>
                    </form>


               </div>
               <div class="row">
                <div class="col-md-12 col-lg-12 text-center zasady_nag">Zasady</div>
               </div>

               <div class="row">
                <div class="col-md-12 col-lg-12 zasady">   
      
                            1. Po pięciu poprawnych odpowiedziach zwiększa się poziom trudności o jeden (max:5)
                        <br>2. Każda poprawna odpowiedź dodaje jeden punkt
                        <br>3. Na każde pytanie masz 20 sekund
                        <br>4. Błędna odpowiedź lub jej brak kończy grę.
                        <br>5. Każde pytanie ma tylko jedną poprawną odpowiedź. 
                </div>
              </div>
              
            </div>
        
        <script src={{ url('css/bootstrap/jquery.min.js') }} type="text/javascript"></script>
        <script src={{ url('css/bootstrap/js/bootstrap.min.js') }} type="text/javascript"></script>
        
        <script type="text/javascript">
            var start_game = $('#start');
            //----------------------Init game-----------------------------------

start_game.click(function () 
{ 
    localStorage.setItem('refresh', 0);
    sessionStorage.clickcount = 0;
});
        </script>

        
        
    </body>
</html>
