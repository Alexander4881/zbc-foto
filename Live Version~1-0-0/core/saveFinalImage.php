<?php
include("globalVars.php");

if(isset($_SESSION['tempFileName']) && isset($_POST['cprNumber'])){
    if (file_exists($_SESSION['tempFileName'])) {
        rename($_SESSION['tempFileName'],$finalImageDestinationFolder . $_POST['cprNumber'] . '.jpg');
    }
}
?>