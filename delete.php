<?php

$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "classroom";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $id = $_POST["id"];

    $query = "DELETE FROM product ";
    $query .="WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if($result){
        echo 1;
    }else{
        echo 0;
    }




?>