<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classroom";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



  if(isset($_POST['submit'] ) || isset($_FILES['image'])){


    $title = $_POST["title"];
    $description = $_POST["desc"];
    $price = $_POST["price"];
    $filename = $_FILES['image']['name'];
    $new_name = time().$filename;         
    $path = 'images/'.$new_name;

    
    $arr= ["title"=>"", "description"=>"", "price"=>""];

    if(strlen($title)<8){
        $arr["title"]="Please enter at least 8 values";
    }
    if (strlen($description)<10) {
        $arr["description"]="Please enter at least 10 values";
    } 
    if (strlen($price)<2) {
        $arr["price"]="Please enter at least 2 values";
    }
    if(empty($arr['title']) && empty($arr['description']) && empty($arr['price'])){


     
    move_uploaded_file($_FILES['image']['tmp_name'], $path);

    $sql = "INSERT INTO `product` (`title`, `description`, `price`, `image`) VALUES('$title','$description', '$price', '$new_name')";
    $query = mysqli_query($conn,$sql);

    echo json_encode("Successfully inserted");
    
    
}
else{ 
echo   $array = json_encode($arr);
}
  }
else{
    echo json_encode("Please input at least one value");
}





?>