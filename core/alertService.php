<?php

session_start();

if (isset($_POST["alert"])) {
    $_SESSION["alertMessage"] = $_POST["alert"];
}

?>