<?php  
    // Assing some global variables
    $tempImageFolder = "../temp/";
    $finalImageDestinationFolder = "C:/Photos/";

    // Start a new session, if none is attached.
    if (session_status() !== PHP_SESSION_ACTIVE) 
    {
        // Start new SESSION.
        session_start();
    }
?>