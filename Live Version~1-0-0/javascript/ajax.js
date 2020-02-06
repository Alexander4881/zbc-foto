// Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
function uploadTempImage(cropper) {
  $.ajax({
      type: "POST",
      url: "core/post.php",
      data: {
        "photo": cropper.getCroppedCanvas({
          width: 343,
          height: 453
        }).toDataURL("image/png")
      }
    }).done(function (response) {

      if (response.includes(".jpg")) {
        $(img).attr("src", response);
        alertService("Success : Dit billede er midlertidig gemt.");
      } else {
        alertService("Fejl: Billede er ikke den rigtige format.");
      }

    })
    .fail(function () {
      alertService("Server Fejl: Kunne ikke håndtere oprettelse af billede.");
    });
}

function saveFinalImage(cprNummer) {
  $.ajax({
      type: "POST",
      url: "core/saveFinalImage.php",
      data: {
        "cprNumber":cprNummer
      }
    }).done(function (response) {

      setTimeout(function(){
        location.reload();
      },4000);

    })
    .fail(function () {
      alertService("Server Fejl: Kunne ikke håndtere oprettelse af billede.");
    });
}