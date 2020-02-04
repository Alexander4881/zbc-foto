const elements = $("#elements").children();
const containers = $("#containers").children();
console.info(elements);
console.info(containers);

// Click Function,
// On click of use this picture button,
// will show container for saving the choosen picture.
$("#use-image-button").click(function(){
    ShowSaveImage();
});

// Click Function,
// On click of choosen to discard the taken picture,
// will show the take picture button again.
$("#discard-picture-button").click(function(){
    alertService("Success : Kasseret Billedet.");
    ShowVideo();
});

// Click Function,
// On click of take picture,
// will show the controls of the current
// taken picture.
$("#take-picture-button").click(function() {
    alertService("Success : Billedet Blev Taget.");
    ChangeContainerState($("#take-picture-container"), false);
    ShowPictureControls();
});

function ShowPictureControls() {
    ChangeContainerState($("#controls-picture-container"), true);
}

// show the kamera
function ShowVideo() {
    ChangeElementState($("#screenshot"));
}

// show the image om the server
function ShowTempImage() {
    ChangeElementState($("#use-image"),$("#image"));
}

// Show Save Image changes
function ShowSaveImage() {
    ChangeElementState($("#save-image"));
    $("#use-image img").addClass("show");
}

function ChangeContainerState(container, state) {
    console.info(`Changed State of ${container} to ${Boolean(state)}.`);
    if (Boolean(state) === true) {
        $(container).addClass("show");
    }
    if (Boolean(state) === false) {
        $(container).addClass("hide");
    }
}

// compress function
function ChangeElementState(element1, element2){
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