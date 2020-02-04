function alertService( message ) {
    $.ajax({
        type: "POST",
        url: "../core/alertService.php",
        data: {
            "alert": message
        }
    }).done( function( response ) {
        if (response == "") {
            console.info("Alert Response is empty.");
            return;
        }
        console.log(response);
    }).fail( function( xhr, textStatus, errorThrown ) {
        console.error( `Alert Service Data Error | Status: ${xhr.statusText} { ${textStatus} ~ ${errorThrown} }` );
    });
}