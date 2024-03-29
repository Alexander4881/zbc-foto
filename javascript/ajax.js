// Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
function uploadTempImage(cropper) {
  data = cropper.getCroppedCanvas({
    width: 343,
    height: 453
  }).toDataURL("image/png");

  console.log(data);

  $.ajax({
      type: "POST",
      url: "core/post.php",
      data: {
        "photo":data
      }
    }).done(function (response) {
      console.log(response);

      if (response.includes(".jpg")) {
        
        $(croppedImg).attr("src", response);

        alertService("Warning : Dit billede er midlertidig gemt.");

      } else {
        console.log(response)
        alertService("Fejl: Billede er ikke den rigtige format.");
      }

    })
    .fail(function (fail) {
      alertService(fail);
    });
}

// Save the Final Image, renamed with the coresponding CPR-Number.
function saveFinalImage(cprNummer) {
  $.ajax({
      type: "POST",
      url: "core/saveFinalImage.php",
      data: {
        "cprNumber":cprNummer
      }
    }).done(function (response) {
      alertService("Success : Billedet er blevet gemt.");
      
      setTimeout(function(){
        location.reload();
      },4000);

    })
    .fail(function () {
      alertService("Server Fejl: Kunne ikke håndtere oprettelse af det endelige billede.");
    });
}