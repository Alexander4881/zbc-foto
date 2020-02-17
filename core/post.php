<?php
// Get access to variables and the session we started.
include('globalVars.php');

// Check if the SESSION Variable isset.
if (isset($_SESSION['tempPhotoId'])) {
    // Check if the SESSION variable has an existing file.
    if (file_exists($_SESSION['tempFileName'])) {
        // Delete specified file.
        unlink($_SESSION['tempFileName']);
    }
    // Create Error message if couldnt handle request.
    else {
        error_log("### Post : Could not delete file: " . $_SESSION['tempFileName']);
    }
}

// Create a new current DateTime
$currentTime = DateTime::createFromFormat('U.u', microtime(true));
// Set an unique ID from currentTime, with uniqid function, to get a more true random value.
$_SESSION['tempPhotoId'] = $currentTime->format("d-m-Y_H_i_s_u").uniqid();
// Set the file name with path to which the file will be stored.
$_SESSION['tempFileName'] = $tempImageFolder . $_SESSION['tempPhotoId'] . '.jpg';

// On POST Request,
// Check if the value photo isset.
if (isset($_POST["photo"])) {
    // Check the position of the request, and validate it.
    if(strpos($_POST["photo"],"data:image/webp;base64") !== false){
        // Assign validated string to variable, with the POST Value,
        // which contains the base64 image for webp files.
        $imageBase64String = str_replace('data:image/webp;base64,', '', $_POST["photo"]);
    }
    else if(strpos($_POST["photo"],"data:image/png;base64") !==false){
        // Assign validated string to variable, with the POST Value,
        // which contains the base64 image for png files.
        $imageBase64String = str_replace('data:image/png;base64,', '', $_POST["photo"]);
    }

    // Create a decoded image from the base64 image.
    $imageBase64String = base64_decode($imageBase64String);
    $im = imagecreatefromstring($imageBase64String);

    // Check if the value isn't false.
    if ($im !== false) {
        // Check that the header contains an image.
        header('Content-Type: image/jpg');
        // Create a valid jpeg file with the specified file name.
        imagejpeg($im, $_SESSION['tempFileName']);
        // remove the first . int the path ../temp/Filename.jpeg
        echo(substr($_SESSION['tempFileName'],1));
        // Destroy image when done decoding.
        imagedestroy($im);  
    }
    else {
        echo "Post Not Set";
    }
}
else {
	echo "POST not set";
}

?>