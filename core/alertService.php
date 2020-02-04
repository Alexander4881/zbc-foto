<?php
ini_set('session.gc-maxlifetime', 5);
session_start();
if (isset($_SESSION['most_recent_activity']) && 
    (time() -   $_SESSION['most_recent_activity'] > 5)) {

 //600 seconds = 10 minutes
 session_destroy();   
 session_unset();  

 }
 $_SESSION['most_recent_activity'] = time();

if (empty($_SESSION["alertMessage"])) {
    $_SESSION["alertMessage"] = "";
}

if (isset($_POST["alert"])) {
    $_SESSION["alertMessage"] = $_POST["alert"];
}

?>