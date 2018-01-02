$(document).ready(function(){

    setInterval( create_session, 1000 );

    function create_session() {

        var timer = $("#sessaousuario").text();
        var timer = timer.split(":", 3);

        var h = timer[0];
        var m = timer[1];
        var s = timer[2];

        if ( s < 59 ) {
            s ++;
        } else {
            s = "00";
        }

        if ( m < 59 && s == 59 ) {
            m ++;
        } else {
            m = "00";
        }

        if ( h < 59 && m == 59 ) {
            h ++;
        } else {
            h = "00";
        }

        $("#sessaousuario").empty();
        $("#sessaousuario").append( h + ":" + m + ":" + s );

    }

});
