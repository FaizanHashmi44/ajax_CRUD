<?php
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
}
else{
    echo "Sorry Bro";
}

?>