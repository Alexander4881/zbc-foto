$("#validationServerCprNumber").keypress(function() {
    $("#validationServerCprNumber").addClass("is-invalid");
    $("#validationServerCprNumber").removeClass("is-valid");
    var text = $("#validationServerCprNumber").text().length;
    var i = 10;

    while (1 < text) {
        i++;
        if ( i == 10 ) {
            $("#validationServerCprNumber").removeClass("is-invalid");
            $("#validationServerCprNumber").addClass("is-valid");
        }
    }

    
})

