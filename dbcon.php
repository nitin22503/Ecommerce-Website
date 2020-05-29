<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "mobileshop";
$con = mysqli_connect('localhost','root','','mobileshop') or die(mysqli_error($con));
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>