<?php

include ("dbcon.php");
      $name =  mysqli_real_escape_string($con,$_POST['Username']);
      $email = mysqli_real_escape_string($con,$_POST['Email']);
      $password = mysqli_real_escape_string($con,$_POST['Password']);
      $contact =  mysqli_real_escape_string($con,$_POST['Contact']);
      $city =  mysqli_real_escape_string($con,$_POST['City']);
      $address =  mysqli_real_escape_string($con,$_POST['Address']);
      $pass = password_hash($password,PASSWORD_BCRYPT);
      $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
      $regex_num = "/^[789][0-9]{9}$/";
      $email_exist ="SELECT * FROM user_info WHERE Email='$email'";
      $query_result = mysqli_query($con,$email_exist)or die(mysqli_error($con));
      $rows = mysqli_num_rows($query_result);
      if($rows!=0){
        echo "email exist";
        
      }
      else{
        $query = "INSERT INTO user_info(Name, Email, Password, Contact_Number, City, Address)VALUES('" . $name . "','" . $email . "','" . $pass . "','" . $contact . "','" . $city . "','" . $address . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['Email'] = $email;
        $_SESSION['id'] = $user_id;
        header('location: home.php');
      }
      
 ?>



