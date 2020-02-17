// function alertService( message ) {
//     $.ajax({
//         type: "POST",
//         url: "../core/alertService.php",
//         data: {
//             "alert": message
//         }
//     }).done( function( response ) {
//         if (response == "") {
//             console.info("Alert Response is empty.");
//             return;
//         }
//         console.log(response);
//     }).fail( function( xhr, textStatus, errorThrown ) {
//         console.error( `Alert Service Data Error | Status: ${xhr.statusText} { ${textStatus} ~ ${errorThrown} }` );
//     });
// }

const alert = $('#alert');

function alertService( message ) {
    if(message.includes("Fejl")){
        alert.empty().append('<div id="Fader" class="alert alert-danger" role="alert">' + message +'</div>');
        
    }
    else if(message.includes("Success")){
        alert.empty().append('<div id="Fader" class="alert alert-success" role="alert">' + message +'</div>');

    }
    else if(message.includes("Error")){
        alert.empty().append('<div id="Fader" class="alert alert-danger" role="alert">' + message +'</div>');

    }
    alert.children().addClass("fadeout");
    alertAnimation();

    setTimeout(function(){
        alertAnimation();
        setTimeout(function(){
            alert.empty();
        },800)
    },1500);
}

function alertAnimation(){
    if ($("#Fader").hasClass("fadeout")){
        $("#Fader").removeClass("fadeout").addClass("fadein");
    }
    else{
        $("#Fader").removeClass("fadein").addClass("fadeout");
    }
}