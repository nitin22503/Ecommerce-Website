<?php

// This page updates the user password
require("dbcon.php");
if (!isset($_SESSION['Email'])) {
    header('location: index.php');
}

$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass =password_hash($old_pass,PASSWORD_BCRYPT);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass =password_hash($new_pass,PASSWORD_BCRYPT);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = password_hash($new_pass1,PASSWORD_BCRYPT);

$query = "SELECT Password FROM user_info WHERE Email ='" . $_SESSION['Email'] . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['Password'];

    if (  $old_pass == $orig_pass) {
        $query = "UPDATE user_info SET Password = '" . $new_pass . "' WHERE Email = '" . $_SESSION['Email'] . "'";
        mysqli_query($con, $query) or die(mysqli_error($con));
         header('location: home.php');
    }
     else
     {
        
       // header('location: settings.php');
       header('location: wwww.php');
     }
?>