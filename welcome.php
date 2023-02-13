<?php

include("index.php");
?>
<?php
session_start();
echo $_SESSION['fname'];
echo $_SESSION['lname'];
echo $_SESSION['email'];
echo $_SESSION['pass'];
if(isset($_REQUEST['logout'])){
session_unset();
session_destroy();
     header("location:users.php");
      
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="" method="POST">
  <input type="submit" value="Logout" name="logout">
  </form>

</body>
</html>