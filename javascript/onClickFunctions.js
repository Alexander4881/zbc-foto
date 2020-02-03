const elements = $("#elements").children();

// show cpr
$("#use-image-button").click(function(){
    ShowSaveImage();
});

// show take image
$("#take-new-image-button").click(function(){
    console.log("take new picture");
    ShowVideo();
});

// show the kamera
function ShowVideo() {

    ChangeElementSate($("#screenshot"));
}

// show the image om the server
function ShowTempImage() {
    ChangeElementSate($("#use-image"),$("#image"));

}

// Show Save Image changes
function ShowSaveImage() {
    ChangeElementSate($("#save-image"));
    $("#use-image img").addClass("show");
}



// compress function
function ChangeElementSate(element1, element2){
    ResetAllElements();
    HideAllElements();
    $(element1).addClass("show");
    $(element2).addClass("show");
}

// remove all show hide classes
function ResetAllElements() {
    elements.each(function(){
        $(this).removeClass("hide");
        $(this).removeClass("show");
    });
}

function HideAllElements(){
    elements.each(function(){
        $(this).addClass("hide");
    });
}