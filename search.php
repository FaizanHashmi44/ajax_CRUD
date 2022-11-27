<?php

$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "classroom";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $search_data = $_POST['searchID'];
  $query = "SELECT * FROM product WHERE title LIKE '%{$search_data}%' OR description LIKE '%{$search_data}%' OR price LIKE '%{$search_data}%'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result)>0){
    $output = '';
    while($row = mysqli_fetch_assoc($result)){
      $output .= "<tr><td>{$row["id"]}</td><td>{$row["title"]}</td><td>{$row["description"]}</td><td>{$row["price"]}</td><td id='imgshow' ><img src='/CRUD_ajax2/images/{$row["image"]}' width='100px'></td>
      <td>
      <a href='#editEmployeeModal' data-eid='{$row['id']}' class='edit edit_btn' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
      <a href='#deleteEmployeeModal' data-id='{$row['id']}' class='delete_btn' class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
    </td></tr>";
    };
    $output .= '';
    mysqli_close($conn);

    echo $output;
}
else{
    echo "No record found";
}


?>