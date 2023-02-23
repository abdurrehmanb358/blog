<?php
include("config.php");
?>

<?php

$uname = $_POST["fname"];
$username = $_POST["lname"];
$lastname = $_POST["uname"];
$email = $_POST["email"];
$password = $_POST["pass"];
$password = $_POST["cpass"];
// var_dump($uname);exit;
// print_r($_POST);exit;
$getUser = "SELECT * FROM users where username = '$uname'";
$resultUser = $conn->query($getUser);

if ($resultUser->num_rows > 0) {
   echo 1;
} else {
$sql = "INSERT INTO users (username,firstname, lastname ,email, password )
    VALUES ( '$uname', '$username' , '$lastname','$email','$password')";

  if ($conn->query($sql) === TRUE) {

    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>
