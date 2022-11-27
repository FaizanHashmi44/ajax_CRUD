<?php

$servername = "localhost";
$username = "root";
$password = "";   
$dbname = "classroom";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

  if(isset($_POST['edit_value']) || isset($_POST['title']) || isset($_POST['description'])  || isset($_POST['price'])   || isset($_POST['hid-image']) || isset($_FILES['image']['name'])){
    $id = $_POST['edit_value'];
    $title = $_POST['title'];  
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_avalible = $_POST['hid-image'];
    $image = $_FILES['image']['name'];
    $new_name = time().$image;  
    if(!$image){                 

      $query = "UPDATE product SET id= '$id', title= '$title', description='$description', price='$price', image = '$image_avalible' WHERE id = $id";
      mysqli_query($conn, $query);

    }
else{   
   //echo $id ." " . $title ." " . $description ." " . $price ." " . $image_avalible ." " . $image;

    move_uploaded_file($_FILES['image']['tmp_name'], "images/".$new_name);

    $query = "UPDATE product SET id= '$id', title= '$title', description='$description', price='$price', image = '$new_name' WHERE id = $id";
    mysqli_query($conn, $query);
}
    echo 1;
  }
  else{ 
    echo 0;
   }

?>