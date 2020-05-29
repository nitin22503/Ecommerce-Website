<?php
  require "dbcon.php";
  if(isset($_SESSION['Email'])){
    header ('location: home.php');
  }
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 
        Sign Up | MobileShop
    </title>
    <?php
    include("links.php");
    ?> 
    </script>
</head>
<body>
    <?php
    include("header.php");
    ?>
   
    <div class="container" style="padding-top: 7%;">
        <div class="row">
            <div class="col-md-4">
                <img src="images/signup.jpg" alt="sign up Here">

            </div>
            <div class="col-md-8">
                <h2 style="font-weight: bolder;">SIGN UP</h2>
                <form method="POST" action="signUpValidation.php" id="signup_form">
                    <div class="form-group signupform">
                        <input type="text" class="form-control" id="Name" placeholder="Name" name="Username" required = "true">


                        <span id="username_error" class="error-form"></span>
                      </div>

                    <div class="form-group">
                      <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required="true">
                      
                      <span id="email_error" class="text-danger font-weight-bold"></span>
                      <span id="email_exist_error" class="error-form"></span>
                    
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" required="true">
                      <span id="password_error" class="error-form"></span>

                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="Contact" placeholder="Contact" name="Contact" maxlength="10" size="10" required="true">
                        <span id="contact_error" class="error-form"></span>
                       
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="City" placeholder="City" name="City" required="true">
                        
                       
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="Address" placeholder="Address" name="Address" required="true">
                    
                      </div>
                      <button type="submit" id="signupSubmitButton" name="submit">Submit

                      </button>
                    </form>
            </div>
        </div>

    </div>
    


   <div style="position: relative; margin-top: 59px;">
       <?php
       include("footer.php");
       ?>
   </div>
   <script src="js/script.js"></script>
</body>
</html> 