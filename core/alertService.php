<?php

session_start();

if (empty($_SESSION["alertMessage"])) {
    $_SESSION["alertMessage"] = "";
}

if (isset($_POST["alert"])) {
    $_SESSION["alertMessage"] = $_POST["alert"];
}

?>