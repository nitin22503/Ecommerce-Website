<?php
include "dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login|MobileShop</title>
    <?php
    include "links.php";
    ?>
</head>
<body style="background: linear-gradient(to left, rgba(255,0,0,0.2), rgba(255,0,0,0));">
<?php
    include "header.php";
    ?>
    <div class="container-fluid" style="margin-top: 4%;">
        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <h1 class="text-center" id="login">Login Here</h1>
            </div>
            <div class="row">
            <h2 style="font-size: 16px;">Don't have an acount ? <a href="signup.php"><i style="color: red;">Register</i></a></h2>
            <form method="POST" action="loginValidation.php"  id="loginform">
            <div class="form-group">
                            <span class="glyphicon glyphicon-envelope increase"></span>
                            <label for="email">
                                <h2>
                                    Email :
                                </h2> 
                                
                            </label>
                            <input type="email" name="Email" class="form-control" id="Email">
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-lock increase"></span>
                            <label for="pass">
                                <h2>
                                    Password :
                                </h2> 
                                
                            </label>
                            <input type="password" name="Password" class="form-control" id="pass" style="background: linear-gradient(to right, rgba(255,0,0,0.2), rgba(255,0,0,0));">
                        </div>
                        <div class="row">
           
           
                <button class="btn btn-danger" style="float: left; margin-top:15px;"type="submit" name="submit"> Login
                   
             </button>
           
             </div>
            </form>
            </div>
            
             <div class="row" style="margin-top: 15px;">
            <h4><a href="settings.php"><i style="color: red;">forget password ?</i></a></h4>
           </div>
            
        </div>
    </div>

<div style="position:relative; margin-top:2.5%;">
    <?php
    include "footer.php";
    ?>
</div>
</body>
</html>