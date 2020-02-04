<?php  
$tempImageFolder = "../temp/";
$finalImageDestinationFolder = "//DESKTOP-FGEE3SE/SharedImage/";


if (session_status() !== PHP_SESSION_ACTIVE) 
{
    session_start();
}

if (isset($_SESSION['alertMessage']) || !isset($_SESSION['alertMessage'])) {
    $_SESSION['alertMessage'] = "";
}

if(!isset($_SESSION['tempPhotoId'])){
    $_SESSION['tempPhotoId'] = "alfa";
}

if(!isset($_SESSION['tempFileName'])){
    $_SESSION['tempFileName'] = "beta";
}
?>