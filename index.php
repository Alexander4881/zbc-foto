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
        <div id="alert" style="height:66px; width:100%;"></div>

        <!-- Image Elements Container -->
        <div class="row mt-1">
            <div id="elements" class="col-12 text-center">
                <!-- Preparing Picture Taking | Video by WebCam -->
                <div id="screenshot">
                    <video class="videostream w-100 custom-image-width rounded" autoplay="">

                    </video>
                </div>

                <!-- Temp Image Container -->
                <div id="image" class="hide">
                    <img id="cropperImg" class="w-100 custom-image-width rounded" src="">
                </div>
            </div>
        </div>

        <!-- Cropped Image Container -->
        <div class="row mt-1">
            <div class="col-12">
                <div id="croppedImage" class="mx-auto text-center hide">
                    <img id="finalImage" class="rounded" src="">
                </div>
            </div>
        </div>

        <!-- Buttons Container -->
        <div class="row mt-3">
            <div class="col">
                <div id="containers" class="row mx-auto text-center">

                    <div id="save-picture-container" class="col-lg-12 col-md-12 col-sm-12 mb-3 hide">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupCprNumber">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control is-invalid" id="validationServerCprNumber"
                                        placeholder="CPR-Nummer" aria-describedby="inputGroupCprNumber" maxlength="10"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
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

                    <div id="controls-picture-container" class="col-lg-12 col-md-12 col-sm-12 mb-3 hide">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="row">
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

                    <div id="edit-picture-container" class="col-lg-12 col-md-12 col-sm-12 mb-3 hide">
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

                    <div id="take-picture-container" class="col-lg-12 col-md-12 col-sm-12 mb-3">
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
                <div class="alert alert-info pulse" role="alert">
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
                    <p class="mb-0">
                        Vi tillader os ikke at printe ID-kortet, hvis ikke vi synes at billedet er
                        vellignende nok.
                    </p>
                    <p class="mb-0">
                        Hvis du er navne-beskyttet og/eller adresse beskyttet. Så printer vi ikke dit kort.
                    </p>
                </div>
            </div>
        </div>

        <!-- Version Container -->
        <div class="row">
            <div class="col">
                <div class="d-flex">
                    <p class="mx-2">Version: v1.2.15</p>
                    <p class="mx-2">Dato: 22 april 2021</p>
                </div>
            </div>
        </div>
    </div>
    
    

    <script src="./javascript/jquery-3.4.1.js"></script>
    <script>
        $("body").append('<div id="loadingBox" class="w-100 h-100 position-fixed my-auto mx-auto" style="top:0;left:0;"><div class="row h-100 w-100 m-0"><div class="col-sm-12 h-100 d-table p-0"><div class="card card-block d-table-cell align-middle border-0 text-center"><div class="spinner-grow text-dark" role="status"><span class="sr-only">Loading...</span></div> <p>Loading<span id="loading"></span></p> </div></div></div>    </div>');
        let loading = ".";
        var loadingTimer = setInterval(() => {
            $("#loading").html(loading);
            loading += '.';
            if(loading.length == 5)
                loading = '';
        }, 800);
    </script>
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