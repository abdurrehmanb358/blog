<?php
include("config.php");
?>


<?php

    $title =$_POST['title'];
    $content =$_POST['content'];
     $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
      $pic= move_uploaded_file($file_tmp ,"img/". $file_name);  
$destination = $file_name; 
      
$sql = "INSERT INTO  posts  (title , content , image )
 
    VALUES  ('$title' , '$content' , '$destination' )";

if ($conn->query($sql) === TRUE) {
 
 header("location:home.php");
 
}

$conn->close();
?>
