<?php
    // Includes GlobalVars to get the SESSION Information.
    include("globalVars.php");

    // Check if SESSION TempFileName AND CPR-Number isset for any values.
    if(isset($_SESSION['tempFileName']) && isset($_POST['cprNumber'])){
        // Check if there is any files currently existing with the SESSION Name
        if (file_exists($_SESSION['tempFileName'])) {
            // Rename the existing file, to the new coresponding file name.
            rename($_SESSION['tempFileName'], $finalImageDestinationFolder . $_POST['cprNumber'] . '.jpg');
        }
    }
?>