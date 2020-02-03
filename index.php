<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZBC Foto</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bf91a5a0c2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div id="elements" class="position-absolute">

            <div id="screenshot" class="show position-absolute" style="text-align:center;">
                <video class="videostream" autoplay=""></video>
                <button id="screenshot-button">Take screenshot</button>
            </div>

            <div id="use-image" class="hide position-absolute">
                <button id="use-image-button">brug billed</button>
                <button id="take-new-image-button">tag nyt billed</button>
            </div>

            <div id="save-image" class="hide position-absolute">
                <input id="cpr-number" type="text">
                <button id="use-image">gem</button>
            </div>
            <div id="image" class="hide position-absolute">
                <img src="">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js"></script>
    <script src="./javascript/cameraSetup.js"></script>
    <script src="./javascript/ajax.js"></script>
    <script src="./javascript/onClickFunctions.js"></script>
</body>

</html>