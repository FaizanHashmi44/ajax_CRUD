<?php

$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "classroom";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    echo "DB connected";
  }
  if(isset($_FILES['file'])){

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    
    if(move_uploaded_file($file_tmp, "images/". $file_name)){
        echo "Your image is uploaded successfully";
    }else{
        echo "Try again your image is not uploaded";
    }
}


?>