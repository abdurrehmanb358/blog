 <?php
// remove all session variables

unset($_SESSION['email']);

unset($_SESSION['pass']);

// destroy the session
session_destroy();
header("location:login.php");


?> 