// Checks if the Input Field for CPR-Number is valid.
// Disables field if the nothing is entered correct.
$("#validationServerCprNumber").keyup(function() {    
    if($(this).val().length >= 10){
        $(this).addClass("is-valid");
        $(this).removeClass("is-invalid");
        $("#save-picture-button").attr("disabled", false);
    }else{
        $(this).addClass("is-invalid");
        $(this).removeClass("is-valid");
        $("#save-picture-button").attr("disabled", true);
    }
});

$("#loadingBox").remove();
clearInterval(loadingTimer);