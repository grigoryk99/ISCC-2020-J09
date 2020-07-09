<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,);

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
) {
  $uploadOk = 0;
}
?>
