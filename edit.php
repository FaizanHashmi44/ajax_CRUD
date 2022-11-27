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
 
  $query = "SELECT * FROM product WHERE id = {$id}";
  $result = mysqli_query($conn, $query) or die("SQLI Query failed");
  echo json_encode(mysqli_fetch_assoc($result));
  

?>