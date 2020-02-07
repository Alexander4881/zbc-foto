<?php
include("globalVars.php");

if(isset($_SESSION['tempFileName']) && isset($_POST['cprNumber'])){
    if (file_exists($_SESSION['tempFileName'])) {

        exec("net use P: \\\zbc-fil.efif.dk\Gruppe\Fotoautomat\Billeder /user:efif\zbc-service dild3and46");

        rename($_SESSION['tempFileName'], "P:" . $_POST['cprNumber'] . '.jpg');

        exec("net use /delete P:");
    }
}
?>