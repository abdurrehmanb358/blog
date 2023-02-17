<?php
include("config.php");
?>

<?php
// print_r($_POST);EXIT;
$email = $_POST["email"];
$password = $_POST["pass"];
$getUser = "SELECT * FROM users where email = '$email'  and   password = '$password'";
$resultUser = $conn->query($getUser);
// print_r($resultUser->num_rows > 0);EXIT;
if ($resultUser->num_rows > 0) {
  session_start();
  $_SESSION['email'] = "email";
  
  header("location:home.php");
} else {
  header("location:login.php");
}
$conn->close();
?>

