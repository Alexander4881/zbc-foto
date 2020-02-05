$("#validationServerCprNumber").keyup(function() {
    
    if(CheckRegex($(this).val())){
        $(this).addClass("is-valid");
        $(this).removeClass("is-invalid");
        $("#save-picture-button").attr("disabled", false);
    }else{
        $(this).addClass("is-invalid");
        $(this).removeClass("is-valid");
        $("#save-picture-button").attr("disabled", true);
    }
});

function CheckRegex(checkString){
    console.log(checkString);
    var myRegex = new RegExp('^(?:(?:31(?:0[13578]|1[02])|(?:30|29)(?:0[13-9]|1[0-2])|(?:0[1-9]|1[0-9]|2[0-8])(?:0[1-9]|1[0-2]))[0-9]{2}\s?-?\s?[0-9]|290200-?[4-9]|2902(?:(?!00)[02468][048]|[13579][26])\s?-?\s?[0-3])[0-9]{3}|000000\s?-?\s?0000$','igm');
    return myRegex.test(checkString);
}