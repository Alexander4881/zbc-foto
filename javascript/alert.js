function alertService( message ) {
    $.ajax({
        type: "POST",
        url: "../core/alertService.php",
        data: {
            "alert": message
        }
    }).done( function( response ) {
        console.info( `Alert Service Data Saved : ${response}` ); 
    }).fail( function( xhr, textStatus, errorThrown ) {
        console.error( `Alert Service Data Error | Status: ${xhr.statusText} { ${textStatus} ~ ${errorThrown} }` );
    });
}