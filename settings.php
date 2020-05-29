<?php
require_once("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | MobileShop</title>
    <?php
    include "links.php";
    ?>
</head>
<body>
    <?php
    include "header.php";
    ?>
    
    <div class="container-fluid" id="content" style="margin-top: 11%;">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h2>Change Password</h2>
                    <form action="setting_script.php" method="POST" id="setting_form">
                        <div class="form-group">
                            <input type="password" class="form-control"
                            id="old-password" name="old-password"  placeholder="Old Password" required = "true">
                         

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"
                            id="new_password" name="password" placeholder="New Password" required = "true">

                            <span id="pass_match_error" class="text-danger font-weight-bold"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"
                            id="new_password1" name="password1"  placeholder="Re-type New Password" required = "true">

                            <span id="new_match_error" class="text-danger font-weight-bold">
                                
                            </span>

                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div style="position:  relative; margin-top: 11%;">
        <?php include("footer.php"); ?>
        </div>
<script >

 $(document).ready(function(){
  
   ("#new_match_error").hide;
   
	var error_new_match = false;
    $("#new_password1").focusout(function(){
		check_newpassword();
	});
	
	function check_newpassword(){
		var new_password = $("#new_password").val();
        var new_password1 = $("#new_password1").val();
        var password_length = $("#new_password").val().length;
		
		if(password_length < 8) {
			$("#new_match_error").html("At least 8 characters");
			$("#new_match_error").show();
			error_new_match = true;
		} 

		else if(new_password != new_password1){
			$("#new_match_error").html("new passwords do not match");
			$("#new_match_error").show();
			error_new_match = true;
        }
        else{
			("#new_match_error").hide();
		}
        
	}

	$("#setting_form").submit(function() {
											
		//error_pass_match = false;
		error_new_match = false;
										
		//check_oldpassword();
		check_newpassword();
        
		if(error_new_match == false) {
			
			return true;
        }
         else 
		{
			return false;	
		}

    });
});
        </script>
      
    </body>
</html>