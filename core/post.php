<?php
include('globalVars.php');


if (isset($_SESSION['tempPhotoId'])) {
    if (file_exists($_SESSION['tempFileName'])) {
        unlink($_SESSION['tempFileName']);
    }
    else {
        error_log("### Post : Could not delete file: " . $_SESSION['tempFileName']);
    }
}

$currentTime = DateTime::createFromFormat('U.u', microtime(true));
$_SESSION['tempPhotoId'] = $currentTime->format("d-m-Y_H_i_s_u").uniqid();
$_SESSION['tempFileName'] = $tempImageFolder . $_SESSION['tempPhotoId'] . '.jpeg';


if (isset($_POST["photo"])) {
    if(strpos($_POST["photo"],"data:image/webp;base64") !== false){
        $imageBase64String = str_replace('data:image/webp;base64,', '', $_POST["photo"]);
    }
    else if(strpos($_POST["photo"],"data:image/png;base64") !==false){
        $imageBase64String = str_replace('data:image/png;base64,', '', $_POST["photo"]);
    }

    $imageBase64String = base64_decode($imageBase64String);

    $im = imagecreatefromstring($imageBase64String);

    if ($im !== false) {
        header('Content-Type: image/jpeg');
        imagejpeg($im, $_SESSION['tempFileName']);
        // remove the first . int the path ../temp/Filename.jpeg
        echo(substr($_SESSION['tempFileName'],1));
        imagedestroy($im);        
    }
}

?>