// Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
$('#use-picture-button').click(function () {
  $.ajax({
      type: "POST",
      url: "core/post.php",
      data: {
        "photo": canvas.toDataURL('image/webp')
      }
    }).done(function (response) {

      if (response.includes(".jpeg")) {
        $(img).attr("src", response);
        console.log(response);
        
        alertService("Success : Dit billede er midlertidig gemt.");

      } else {
        alertService("Fejl: Billede er ikke den rigtige format.");
        // console.log(response);
      }

    })
    .fail(function () {
      alertService("Server Fejl: Kunne ikke håndtere oprettelse af billede.");
      // console.log(error);
    });
});