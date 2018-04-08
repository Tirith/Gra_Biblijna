<?php
if (!isset($pytanie))
{
    header('location: http://localhost/Gra_Biblijna/public/');
    exit();
} else 

  ?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblijny Quiz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ url('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ url('css/animate.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ url('css/wlasne.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Styles -->
        <style>
            

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #pop{
                visibility: hidden;
            }

            #zapis{
                visibility: hidden;
            }
        </style>

        <script type="text/javascript">
             
            if (localStorage.getItem('refresh')==1)
            {
                location.href="http://localhost/Gra_Biblijna/public/";

            }
        </script>

    </head>
    <body>
        <div id="pop">{{$pytanie->poprawna}}</div>
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-lg-12 ">
                        <a href="{{ url('/') }}"><div class="off"><span class="glyphicon glyphicon-off"></span> </div></a> <div class="off">  {{$_SESSION['nick']}}</div>
                    </div>
                

                <div class="row">
                    <div class="col-md-12 col-lg-12 ">
                                    <div class="menu-container question_count">
                                            <ul class="">
                                                <li class="js_nav-item nav-item">Ilość pytań w bazie
                                                     <ul>
                                                       <li><i class="margin-r-10 color-base icon-call-out"></i>Poziom 1: {{$quest_dif_1}}</li>
                                                       <li><i class="margin-r-10 color-base icon-call-out"></i>Poziom 2: {{$quest_dif_2}}</li>
                                                       <li><i class="margin-r-10 color-base icon-call-out"></i>Poziom 3: {{$quest_dif_3}}</li>
                                                       <li><i class="margin-r-10 color-base icon-call-out"></i>Poziom 4: {{$quest_dif_4}}</li>
                                                       <li><i class="margin-r-10 color-base icon-call-out"></i>Poziom 5: {{$quest_dif_5}}</li>
                                                                                       
                                                     </ul>
                                                </li>
                                            </ul>
                                    </div>
                    </div>
                </div>




                </div>
                

                <div class="row">
                    <div class="col-lg-12">
                        
                        
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-lg-12 logo">
                       Biblijny Quiz 
                    </div>
                </div >

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 flex-center ">
                        <span class="pytanie_nag" >PYTANIE</span>
                    </div>

                </div >

                

                <div class="row pytanie">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <span >{{$pytanie->pytanie}}</span>
                    </div>
                </div >

                <div class="row">
                   <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div >
                      <div id="l1" class="odpowiedz">
                        <h5>Odpowiedź 1</h5>
                            {{$pytanie->odp1}}</br>
                           
                      </div>
                    </div>
                   </div>

                   <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="">
                      <div id="l2" class="odpowiedz">
                        <h5>Odpowiedź 2</h5>
                         {{$pytanie->odp2}}</br>
                      </div>
                    </div>
                   </div>

                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="">
                      <div id="l3" class="odpowiedz">
                        <h5>Odpowiedź 3</h5>
                            {{$pytanie->odp3}}</br>
                      </div>
                    </div>
                   </div>

                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="">
                      <div id="l4" class="odpowiedz">
                        <h5>Odpowiedź 4</h5>
                            {{$pytanie->odp4}}</br>
                      </div>
                    </div>
                   </div>
                </div>

                <div  class="row belka">
                    <div id="czas" class="col-md-4 col-lg-4 czas">
                       <span class="glyphicon glyphicon-time"></span> 
                    </div>


                    <div  class="col-md-4 col-lg-4 poziom">
                       Poziom: {{$_SESSION['poziom']}}
                    </div>

                    <div  class="col-md-4 col-lg-4 pkt">

                       
                    </div>
                <div class="name text-center">
                   <form id="start" action="{{ url('/winners/1') }}" method="post" class="" enctype="multipart/form-data">
                     {{csrf_field()}}
                     {{method_field('PATCH')}}
                      <div class="form-group">
                        
                        <input id="score" name="invisible" type="hidden" value="secret">
                        
                      </div>
                      <button id="zapis" type="submit" class="btn btn-warning pull-right">Zapisz wynik</button>
                    </form>
               </div>

                </div >

                


                <div class="row main_button_row">
                    <div class="col-md-12 col-lg-12 text-center">
                        
                       <div id="main_button"> </div>
                    </div>
                </div >

                <div class="row main_button_row">
                    <h3 class="wyniki_nag text-center">Najlepsze wyniki</h3>
                    <div class="col-md-12 col-lg-12 text-center wyniki">
                       
                        @foreach ($winners as $winner_list)
                           <div> {{ $winner_list->nick }} - {{ $winner_list->pkt }} </div>
                        @endforeach
                      
                    </div>
                </div >  
            </div>
        
        <script src={{ url('css/bootstrap/jquery.min.js') }} type="text/javascript"></script>
        <script src={{ url('css/bootstrap/js/bootstrap.min.js') }} type="text/javascript"></script>
        <script src={{ url('js/wlasne.js') }} type="text/javascript"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
            timer();
            progress();
            pojemnik_na_pkt.html('Wynik: ' + sessionStorage.clickcount + ' pkt');
            }, false);       
        </script>
        
        
    </body>
</html>
