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
        </style>

    </head>
    <body>
        <div id="pop">{{$pytanie->poprawna}}</div>
            <div class="container">

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
                        <span class="pytanie_nag" >Pytanie</span>
                    </div>

                </div >

                

                <div class="row pytanie">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <span >{{$pytanie->pytanie}}</span>
                    </div>
                </div >

                <div class="row">
                   <div class="col-sm-3 col-md-3 col-lg-3">
                    <div >
                      <div id="l1" class="odpowiedz">
                        <h5>Odpowiedź 1</h5>
                            {{$pytanie->odp1}}</br>
                           
                      </div>
                    </div>
                   </div>

                   <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="">
                      <div id="l2" class="odpowiedz">
                        <h5>Odpowiedź 2</h5>
                         {{$pytanie->odp2}}</br>
                      </div>
                    </div>
                   </div>

                    <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="">
                      <div id="l3" class="odpowiedz">
                        <h5>Odpowiedź 3</h5>
                            {{$pytanie->odp3}}</br>
                      </div>
                    </div>
                   </div>

                    <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="">
                      <div id="l4" class="odpowiedz">
                        <h5>Odpowiedź 4</h5>
                            {{$pytanie->odp4}}</br>
                      </div>
                    </div>
                   </div>
                </div>

                <div  class="row">
                      <hr noshade="noshade" />
                    <div id="czas" class="col-md-12 col-lg-12 czas">
                       Czas: 15s
                    </div>
                </div >


                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        
                       <div  class="next"> <a href="{{ url('/') }}" class="next" id="button_game">Koniec</a></div>
                    </div>
                </div >

               

                
            </div>
        
        <script src={{ url('css/bootstrap/jquery.min.js') }} type="text/javascript"></script>
        <script src={{ url('css/bootstrap/js/bootstrap.min.js') }} type="text/javascript"></script>
        <script src={{ url('js/wlasne.js') }} type="text/javascript"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
            timer();
            }, false);

            




            
               
                
        </script>
        
        
    </body>
</html>
