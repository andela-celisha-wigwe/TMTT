<!DOCTYPE html>
<html>
    <head>
        <title>TMTT</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <style>

            @import url(https://fonts.googleapis.com/css?family=Roboto:300);

            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                /*font-weight: 100;*/
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .inputs,
            .outputs {
                font-family: Roboto;
                font-size: x-large;
            }

            .outputs {
                background: #26a69a;
                color: white;
                font-size: 50px;
            }

            input#speech-time {
                text-align: center;
                font-size: 50px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">TMTT</div>

                <div class="inputs">
                    Set Time (in minutes):
                    <input type="number" id="speech-time" min="0" required value="2" placeholder="Set the time for each speech" id="speech-time" name="speech-time">
                    <button type="" class="waves-effect waves-light btn" id="start-time">Start</button>
                </div>

                <div class="time outputs" id="timer"></div>

            </div>
        </div>
    </body>

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/timer.jquery.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script> -->


    <script type="text/javascript">

        $(document).ready( function () {

            $('#start-time').click( function (e) {
                e.preventDefault();

                var inputTime = $('input[type=number]#speech-time');

                time = inputTime.val();
                var duration = time + 'm00s' ;
                var duration = '0m10s' ;

                $('.inputs').hide(600);
                
                //start a timer
                $("div#timer").timer({
                    countdown: true,
                    duration: duration,
                    callback: function() {
                        // This will execute after the duration has elapsed
                        console.log('Time up!');
                        $(this).html("TIME UP!!!");
                    }
                });
            });
        });

    </script>
</html>
