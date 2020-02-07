import {
    instantiateCrop,
    cropper
} from './cropperTest.js';

// Click Function,
// On click of use this picture button,
// will show container for saving the choosen picture.
$("#use-image-button").click(function () {
    ShowSaveImage();
});

// Click Function,
// On click of choosen to discard the taken picture,
// will show the take picture button again.
$("#discard-picture-button").click(function () {
    alertService("Success : Kasseret Billedet.");
    ChangeContainerState($("#take-picture-container"), true);
    ChangeContainerState($("#controls-picture-container"), false);
    ChangeContainerState($("#screenshot"), true);
    ChangeContainerState($("#image"), false);
    ChangeContainerState($("#take-picture-container"), true);
});

// Click Function,
// On click of take picture,
// will show the controls of the current
// taken picture.
$("#take-picture-button").click(function () {
    //insert the screenshot on the img element
    $('#cropperImg').attr('src', canvas.toDataURL('image/webp'));
    alertService("Success : Billedet Blev Taget.");
    ChangeContainerState($("#preview-card"), false);
    ChangeContainerState($("#take-picture-container"), false);
    ChangeContainerState($("#image"), true);
    ChangeContainerState($("#screenshot"), false);
    ChangeContainerState($("#controls-picture-container"), true);
});

// Click Fuction
// On click of Brug Billed
// will show the #save-picture-container div
$("#use-picture-button").click(function () {
    alertService("Billedet er nu i brug.");
    ChangeContainerState($("#controls-picture-container"), false);
    ChangeContainerState($("#save-picture-container"), true);
});

// Click Function
// On Click of Beskær Billed
// Will show #edit-picture-container
$('#edit-picture-button').click(function () {
    alertService("Redigere Billedet.");
    instantiateCrop();
    ChangeContainerState($("#preview-card"), true);
    ChangeContainerState($("#controls-picture-container"), false);
    ChangeContainerState($("#edit-picture-container"), true);
});

$('#use-edited-picture-button').click(function () {
    ChangeContainerState($("#preview-card"), false);
    uploadTempImage(cropper);

    $('.cropper-container').remove();
    $('.cropper-hidden').removeClass('cropper-hidden');
    ChangeContainerState($("#save-picture-container"), true);
    ChangeContainerState($("#edit-picture-container"), false);
    ChangeContainerState($("#croppedImage"), true);
    ChangeContainerState($("#image"), false);
});

$('#save-picture-button').click(function () {
    alertService('Success : Gemmer Billed...<div class="spinner-border ml-auto" role="status"><span class="sr-only">Loading...</span></div>');
    saveFinalImage($('#validationServerCprNumber').val());
});

// remove hide class or add show class
function ChangeContainerState(container, state) {
    if (Boolean(state) === true) {
        $(container).addClass("show");
        $(container).removeClass("hide");
    }
    if (Boolean(state) === false) {
        $(container).addClass("hide");
        $(container).removeClass("show");
    }
}