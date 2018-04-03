<?php 
?>
<?php

$target_dir = "upload/";
// $target_file = $target_dir . "101_" .basename($_FILES["fileToUpload"]["name"]);

 $target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk = 1;
//echo $target_file;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
     // echo "#";
        $uploadOk = 0;
         exit();
    }
}

// Check file size
if ($_FILES["fileToUpload1"]["size"] > 50000000) {
    //echo "Sorry, your file is too large.";
//echo "#";
    $uploadOk = 0;
    exit();
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
&& $imageFileType != "GIF" && $imageFileType != "PDF" && $imageFileType != "DOC") {
    //echo "#";
    $uploadOk = 0;
     exit();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "#";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
//        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
       // echo "#";
    }
}
?>