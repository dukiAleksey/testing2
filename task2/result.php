<?php
// upload directory
$target_dir = "img/";
// File name
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// error var
$uploadOk = 1;
// Check Image type var
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check Image type
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        //get TEXT
        $text = $_POST['labeltext'];

        //get TEXT Size
        $fontsize = $_POST['fontsize'];

        // Create image form file
        $im = imageCreateFromJpeg($target_file);
        
        // Set font
        $font = 'Arial';

        // Text color
        $black = imagecolorallocate($file, 0, 0, 0);

        // Print TEXT on image
        imagettftext($im, $fontsize, 0, 10, 40, $black, $font, $text);

        Header("Content-type: image/jpg");

        // Show image
        imageJpeg($im);

        // reset
        imageDestroy($im);

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>