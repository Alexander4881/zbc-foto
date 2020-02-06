<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>ZBC | Foto</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/cropper.min.css">

    <script src="./javascript/bf91a5a0c2.js"></script>
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
        <span id="alert"></span>

        <!-- Image Elements Container -->
        <div class="row mt-1">

            <!-- <div class="col-3"></div> -->

            <div id="elements" class="col-8">
                <!-- Preparing Picture Taking | Video by WebCam -->
                <div id="screenshot">
                    <video class="videostream" autoplay="">

                    </video>
                </div>

                <!-- Temp Image Container -->
                <div id="image" class="hide">
                    <img id="cropperImg" src="">
                </div>
            </div>

            <div class="col-4">
                <div id="preview-card" class="card justify-content-center hide">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-8">
                                <div class="text-center">
                                    <h5 class="card-title">
                                        Studiekort
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <strong>ZBC</strong>
                                        <strong>R</strong>ingsted
                                    </h6>
                                </div>

                                <hr>

                                <p class="card-text">
                                    Preview Studiekort
                                </p>

                                <p class="card-text">
                                    <small class="text-muted d-block">
                                        Date of Birth : 01.01.1995
                                    </small>
                                    <small class="text-muted d-block">
                                        Expirary Date : 11.10.2025
                                    </small>
                                </p>

                            </div>

                            <div class="col-4">

                                <div class="mb-2">
                                    <img src="./assets/zbc_black.jpg" class="card-img" alt="ZBC Preview Card Logo">
                                </div>

                                <div class="preview" style="width: 100%; height: auto;"></div>
                            </div>
                        </div>

                        <!-- <h5 class="card-title">Medarbejder Status</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <strong>ZBC</strong>
                            <strong>Z</strong>ealand
                            <strong>B</strong>usiness
                            <strong>C</strong>ollege
                        </h6>
                        <div class="row">
                            <div class="col col-3">
                                <div class="preview" style="width: 64px; height: 36px;"></div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Cropped Image Container -->
        <div class="row mt-1">
            <div class="col-12">
                <div id="croppedImage" class="mx-auto text-center hide">
                    <img id="finalImage" src="">
                </div>
            </div>
        </div>

        <!-- Buttons Container -->
        <div class="row mt-3">
            <div class="col">
                <div id="containers" class="row mx-auto text-center">

                    <div id="save-picture-container" class="col-lg-12 col-md-8 col-sm-6 mb-3 hide">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupCprNumber">@</span>
                                    </div>
                                    <input type="text" class="form-control is-invalid" id="validationServerCprNumber"
                                        placeholder="CPR-Nummer" aria-describedby="inputGroupCprNumber" maxlength="10"
                                        required>
                                    <div class="invalid-feedback">
                                        Venligst udfyld cpr-nummer.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <button id="save-picture-button" disabled type="button"
                                    class="btn btn-success btn-block mt-2">
                                    <i class="fas fa-save"></i>
                                    Gem Billedet
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="controls-picture-container" class="col-lg-12 col-md-8 col-sm-6 mb-3 hide">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="row">
                                    <!-- <div class="col-4">
                                        <button id="use-picture-button" type="button" class="btn btn-primary btn-block">
                                            <i class="fas fa-images"></i>
                                            Brug Billede
                                        </button>
                                    </div> -->
                                    <div class="col-6">
                                        <button id="edit-picture-button" type="button"
                                            class="btn btn-primary btn-block">
                                            <i class="fas fa-images"></i>
                                            Beskær Billedet
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button id="discard-picture-button" type="button"
                                            class="btn btn-danger btn-block">
                                            <i class="fas fa-recycle"></i>
                                            Kassere Billedet
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="edit-picture-container" class="col-lg-12 col-md-8 col-sm-6 mb-3 hide">
                        <!-- Take Picture of Current View -->
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <button id="use-edited-picture-button" type="button" class="btn btn-primary btn-block">
                                    <i class="fas fa-camera"></i>
                                    Brug Billedet
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="take-picture-container" class="col-lg-12 col-md-8 col-sm-6 mb-3">
                        <!-- Take Picture of Current View -->
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <button id="take-picture-button" type="button" class="btn btn-primary btn-block">
                                    <i class="fas fa-camera"></i>
                                    Tag Billede
                                </button>
                            </div>
                        </div>
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

    <script src="./javascript/jquery-3.4.1.js"></script>
    <script src="./javascript/popper.min.js"></script>
    <script src="./javascript/bootstrap.min.js"></script>
    <script src="./javascript/cameraSetup.js"></script>
    <script src="./javascript/ajax.js"></script>
    <script type="module" src="./javascript/cropperTest.js"></script>
    <script type="module" src="./javascript/onClickFunctions.js"></script>
    <script src="./javascript/alert.js"></script>
    <script src="./javascript/inputValidation.js"></script>

</body>

</html>