<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>ZBC | Foto</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf91a5a0c2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <!-- Logo Container -->
        <div class="row">
            <div class="col">
                <div id="img-container">
                    <img id="logo" src="./assets/ZBC.jpg" class="mx-auto d-block" alt="ZBC Logo">
                </div>
            </div>
        </div>

        <!-- Alerts -->
        <?php
            session_start();

            if (!empty($_SESSION['alertMessage'])) {
                echo '<div class="alert alert-primary" role="alert">';
                    echo "Fejl: " . $_SESSION['alertMessage'];
                echo '</div>';
            }
        ?>

        <!-- Image Elements Container -->
        <div class="row">
            <div class="col">

            </div>

            <div class="col">
                <div id="elements" class="img-canvas">

                    <!-- Preparing Picture Taking | Video by WebCam -->
                    <div id="screenshot" style="text-align:center;">
                        <video class="videostream" autoplay=""></video>
                    </div>

                    <!-- Save Picture if Choosed -->
                    <div id="save-image">

                    </div>

                    <!-- Temp Image Container -->
                    <div id="image">
                        <img src="">
                    </div>
                </div>
            </div>

            <div class="col">

            </div>
        </div>

        <!-- Buttons Container -->
        <div class="row mt-3">
            <div class="col">
                <div class="row">

                    <div class="col-lg-12 col-md-8 col-sm-6 mb-3">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <!-- <label for="validationServer01">CPR-Nummber</label> -->
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupCprNumber">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationServerCprNumber"
                                        placeholder="CPR-Nummer" aria-describedby="inputGroupCprNumber" maxlength="10" required>
                                    <div class="invalid-feedback">
                                        Venligst udfyld cpr-nummer.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <button id="save-image-button" type="button"
                                    class="btn btn-primary btn-lg btn-block mt-2">Gem
                                    Billede</button>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-8 col-sm-6 mb-3 hide">
                        <!-- Take New Picture -->
                        <button id="take-new-image-button" type="button" class="btn btn-secondary btn-lg mx-2">Tag Nyt
                            Billede</button>
                    </div>

                    <div class="col-lg-12 col-md-8 col-sm-6 mb-3 hide">
                        <!-- Take Picture of Current View -->
                        <button id="screenshot-button" type="button" class="btn btn-secondary btn-lg mx-2">Tag
                            Billede</button>
                    </div>

                    <div class="col-lg-12 col-md-8 col-sm-6 mb-3 hide">
                        <!-- Use Current Taken Picture -->
                        <button id="use-image-button" type="button" class="btn btn-secondary btn-lg mx-2">Brug
                            Billede</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- ReadMe Note -->
        <div class="row mt-3">
            <div class="col">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Disclaimer!</h4>
                    <p>
                        Når du uploader/afgiver dit billede, acceptere du samtidig at vi (ZBC) må bruge dette internt i
                        organisationen, samt 3. part. fx Elevplan.
                    </p>
                    <p>
                        Dit billede kommer på Elevplan, i vores protokoller, samt på dit IDkort, som også er dit
                        studiekort
                        Sørg for at have en pæn baggrund, og prøv at fylde hele billedet ud, så bliver dit ID-kort
                        pænest.
                        Som om det var et PAS-foto.
                    </p>
                    <hr>
                    <p class="mb-0">Vi tillader os ikke at printe ID-kortet, hvis ikke vi synes at billedet er
                        vellignende nok.
                    </p>
                </div>
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
    <script src="./javascript/alert.js"></script>
    <script src="./javascript/inputValidation.js"></script>

</body>

</html>