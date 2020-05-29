<?php
include "dbcon.php";
$email = $_POST['email1'];
$email = mysqli_real_escape_string($con,$email);
//$password = $_POST['pass1'];
$password = mysqli_real_escape_string($con,$_POST['pass1']);
$password = password_hash($password,PASSWORD_BCRYPT);
$message = $_POST['message1'];
$message = mysqli_real_escape_string($con,$message);
$select = " SELECT Email , Password FROM user_info WHERE Email= '$email' AND Password='$password' ";
$selectResult = mysqli_query($con,$select) or die(mysqli_error($con));
$row = mysqli_num_rows($selectResult);
if($row>0){
    $query = " INSERT INTO user_info (message) VALUES  ($message)  WHERE Email = '$email' AND Password = '$password' ";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    header("location:home.php");
}
else{
    
    header("location:contactus.php");
    
}



?>