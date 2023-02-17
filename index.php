<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>BLOG</title>
</head>


<body>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="login.php">Login page</a>
  <a href="contect.php">Contact</a>
  <a href="about.php">About</a>
  <a href="news.php">News</a>
  <a href="post.php">Create post</a>
  <?php if(!$_SESSION["email"]):?>
<a href="sginup.php" class="gg">signup</a>
<?php endif;?>

  <!-- <a href="logout.php">logout</a> -->
  
  
  
  
  
  <!-- <a href="checksession.php">CheckLogin</a> -->

</div>
</body>
</html>