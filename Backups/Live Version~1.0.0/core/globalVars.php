<?php  
$tempImageFolder = "../temp/";
$finalImageDestinationFolder = "C:/Photos/";


if (session_status() !== PHP_SESSION_ACTIVE) 
{
    session_start();
}

if(!isset($_SESSION['tempPhotoId'])){
    $_SESSION['tempPhotoId'] = "alfa";
}

if(!isset($_SESSION['tempFileName'])){
    $_SESSION['tempFileName'] = "beta";
}
?>