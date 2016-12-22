<?php
$target_dir = "competition/";
$reference_id = uniqid();
$ext = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
$target_file = $target_dir . $reference_id . "." . $ext;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.\n";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.\n";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType == "exe" || $imageFileType == "php" || $imageFileType == "html") {
    echo "Sorry, EXE, PHP, HTML files are allowed.\n";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.\n";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename($_FILES["fileToUpload"]["name"]) . " has been uploaded. \n Please use the following reference id to see if youhave won: " . $reference_id;
    } else {
        echo "  : " .  $_FILES["fileToUpload"]["tmp_name"] . "   -> " . $target_file . "Sorry, there was an error uploading your file.";
    }
}
?>
