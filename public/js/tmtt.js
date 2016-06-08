$(document).ready( function () {

    $('#start-time').click( function (e) {
        e.preventDefault();


        var inputTime = $('input[type=number]#speech-time');

        time = inputTime.val();
        var duration = time + 'm00s' ;

        $('.inputs').hide(600);
        
        $("div#timer").timer({
            countdown: true,
            duration: duration,
            callback: function() {
                blink('div.outputs#timeup');
                $('#start-again').fadeToggle(600);
            }
        });
    });
});

var blink = function (selector){
    $(selector).html('TIME UP!!!');
    $(selector).animate({opacity:0}, 100, "linear", function(){
        $(this).delay(800);
        $(this).animate({opacity:1}, 100, function(){
            blink(this);
        });
        $(this).delay(800);
    });
}