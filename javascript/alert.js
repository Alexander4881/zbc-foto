/*
    ############# ALERT SERVICE #############

    This javascript, handles a basic alert and checks for what it contains.
    Alerts Accepted :
        * Fejl
        * Success
        * Error
        * Warning
    If none of these are provided in the message,
    the service takes it as just an info message.

    Every Alert should disappear after 5000 miliseconds / 5 seconds.
    And after the timeout, the container get's set to empty after 800 miliseconds / 0.8 seconds.
*/

const alert = $('#alert');

function alertService( message ) {
    if(message.includes("Fejl")){
        alert.empty().append('<div id="Fader" class="alert alert-danger d-flex align-items-center" role="alert">' + message +'</div>');
        
    }
    else if(message.includes("Success")){
        alert.empty().append('<div id="Fader" class="alert alert-success d-flex align-items-center" role="alert">' + message +'</div>');

    }
    else if(message.includes("Error")){
        alert.empty().append('<div id="Fader" class="alert alert-danger d-flex align-items-center" role="alert">' + message +'</div>');

    }
    else if(message.includes("Warning")){
        alert.empty().append('<div id="Fader" class="alert alert-warning d-flex align-items-center" role="alert">' + message +'</div>');

    }
    else{
        alert.empty().append('<div id="Fader" class="alert alert-info d-flex align-items-center" role="alert">' + message +'</div>');

    }
    alert.children().addClass("fadeout");
    alertAnimation();

    setTimeout(function(){
        alertAnimation();
        setTimeout(function(){
            alert.empty();
        },800)
    },5000);
}

function alertAnimation(){
    if ($("#Fader").hasClass("fadeout")){
        $("#Fader").removeClass("fadeout").addClass("fadein");
    }
    else{
        $("#Fader").removeClass("fadein").addClass("fadeout");
    }
}