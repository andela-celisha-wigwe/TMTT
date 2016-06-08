<!DOCTYPE html>
<html>
    <head>
        <title>TMTT</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/tmtt.css')}}"  media="screen,projection"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img class="responsive-img" id="logo" src="{{ asset('img/andelaTMTT.png') }}">
                <div class="title">TMTT</div>

                <div class="inputs">
                    

                    <div class="input-field">
                      <input type="number" id="speech-time" min="0" required value="2" id="speech-time" name="speech-time">
                      <label for="speech-time">Set Speech Time (in minutes):</label>
                    </div>
                    <button type="" class="waves-effect waves-light btn" id="start-time">Start</button>
                </div>

                <div class="time outputs" id="timer"></div>
                <div class="time outputs" id="timeup"></div>
                
                <a href="{{ url('/') }}"><div class="time outputs" hidden id="start-again"> Click to Restart</div></a>

                <p id="brief">Your thoughts and contributions are welcome.</p>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/timer.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tmtt.js') }}"></script>

</html>
