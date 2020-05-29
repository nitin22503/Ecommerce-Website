   <div class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><p><img id="logo" src="images/logo.png">MobileShop</p></a>
        </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(!isset($_SESSION['Email']))
                    {

                    
                    ?>
                    <li class=""><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
                    </li>
                    <li>
                       <a href="login.php">
                        <span class="glyphicon glyphicon-log-in"></span> Login</a>
                
                    </li>
                    
                    <li class=""><a href="AboutUs.php"><span class="glyphicon glyphicon-sort-by-alphabet"></span> About Us</a>
                    </li>
                    <li class=""><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a>
                    </li>
                    <?php
                    }
                    else{
                        ?>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                        
                    <?php

}
?>
                </ul>
            </div>
        </div>
</div>
<!--
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
                    <form   method="POST"  action="loginValidation.php" id="loginModal">
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
                   
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn btn-danger"
                    data-dismiss="modal" type="submit" name="submit" style="float: left;">
                       Login
                    </button>
                    <button type="button" data-dismiss="modal" class=" btn btn-primary close"
                    ><i style="color: red;">close</i></button>

                </div>
                </form>
                <div class="container">
                    <h4><a href="settings.php"><i style="color: red;">forget password ?</i></a></h4>
                </div>
            </div>

        </div>
    </div>-->
                    
