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
<body>
<?php
    include "header.php";
    ?>
    
    <div class="modal" id="modalLogin" style="background-color:unset;">
        <div class="modal-dialog modal-dialog-centered" style="background-color: white;">
            <div class="model-content">
                <div class="model-header">
                    <h2 class="text-primary" id="login" style="text-align: center;">
                       Login
                    </h2>  
                    <button type="button" class="close" data-dismiss="modal" style="padding-right: 20px;">&times;</button>
                   
                </div>
                <div class="modalbody container">
                    <h2 style="font-size: 16px;">Don't have an acount ? <a href="signup.php"><i style="color: red;">Register</i></a></h2>
                    <form action="loginValidation.php" method="POST" id="loginModal">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-envelope increase"></span>
                            <label for="email">
                                <h2>
                                    Email :
                                </h2> 
                                
                            </label>
                            <input type="email" name="email" class="form-control" id="email" style="width: inherit;">
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-lock increase"></span>
                            <label for="pass">
                                <h2>
                                    Password :
                                </h2> 
                                
                            </label>
                            <input type="password" name="pass" class="form-control" id="pass" style="width: inherit;">
                            <span class="error_form" id="email_or_password"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn btn-danger"
                    data-dismiss="modal" type="submit" name="submit" style="float: left;">
                       Login
                    </button>
                    <button type="button" data-dismiss="modal" class=" btn btn-primary close"
                    ><i style="color: red;">close</i></button>

                </div>
                <div class="container">
                    <h4><a href="settings.php"><i style="color: red;">forget password ?</i></a></h4>
                </div>
            </div>

        </div>
    </div>

</body>
</html>