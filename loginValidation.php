<?php

include "dbcon.php";
$email = $_POST['Email'];
$email = mysqli_real_escape_string($con,$email);
$pass = $_POST['Password'];
$pass = mysqli_real_escape_string($con,$pass);
$pass = password_hash($pass,PASSWORD_BCRYPT);
$query = "SELECT id, Email FROM user_info WHERE Email ='$email' AND Password = '$pass'";
$Query_result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($Query_result);
if ($num == 0) {
    header('location: loginerror.php');
  } 
  else {  
    $row = mysqli_fetch_array($Query_result);
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['id'] = $row['id'];
    header('location: home.php');
  }
 
?>
