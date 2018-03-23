<?php 
session_start();
$_SESSION['losuj'] = 1;
$_SESSION['poziom'] = 1;
$_SESSION['poprawne_odp'] = 0;




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

    </head>
    <body>
        
            <div class="container">

               
               <h2 class="logo">Biblijny Quiz</h2>

              <div id="start" class="start"> <a href="{{ url('/pytania') }}" class="start">START</a></div>
      
               
            </div>
        
        <script src={{ url('css/bootstrap/jquery.min.js') }} type="text/javascript"></script>
        <script src={{ url('css/bootstrap/js/bootstrap.min.js') }} type="text/javascript"></script>
        
        <script type="text/javascript">
            var start_game = $('#start');
            //----------------------Init game-----------------------------------

start_game.click(function () 
{
    
    sessionStorage.clickcount = 0;
});
        </script>

        
        
    </body>
</html>
