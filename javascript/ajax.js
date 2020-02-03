// Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
$(screenshotButton).click(function () {
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

        ShowTempImage();

      } else {
        // TODO make a error service thingy Tobias ;)
        alertService(response);
        // console.log(response);
      }

    })
    .fail(function (error) {
      alertService(error);
      // console.log(error);
    });
});