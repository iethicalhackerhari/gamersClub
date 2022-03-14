<?php

include "dbcon.php";

$dev=$_POST['dev'];
$game=$_POST['game'];
$descp=$_POST['description'];
// $tbn=$_FILES['name'];
// $apk=$_FILES['apk'];



// upload files

$target_dir_img = "uploads/img/";
$target_dir_apk = "uploads/apk/";
$target_file_img = $target_dir_img . basename($_FILES["img"]["name"]);
$target_file_apk = $target_dir_apk . basename($_FILES["apk"]["name"]);

$uploadOk = 1;


// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["img"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["img"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file}

  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file_img)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (move_uploaded_file($_FILES["apk"]["tmp_name"], $target_file_apk)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["apk"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

// upload files end
// if ($_FILES['img']['name']==='') {
    # code...
    // $tar = 'uploads/img/apk.jpg';
  //  $query=$conn->query("INSERT INTO gamedata (dev,game,descp,thumbnail,apk) VALUES ('$dev','$game','$descp', '$tar','$target_file_apk')");

// }
// else if ($_FILES['img']['name']!=''){
    $query=$conn->query("INSERT INTO gamedata (dev,game,descp,thumbnail,apk) VALUES ('$dev','$game','$descp','$target_file_img','$target_file_apk')");

// }
if($query){
header("location:index.php");
}
else{
die(mysqli_error($conn));
}

?>