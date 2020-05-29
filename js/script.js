$(document).ready(function(){
    ("#username_error").hide;
    ("#email_error").hide;
    ("#password_error").hide;
	("#contact_error").hide;
	("#email_exist_error").hide;

    var error_username = false;
    var error_email = false;
    var error_password = false;
	var error_contact = false;
	//var exist_email = false;

    $("#Name").focusout(function(){
        check_username();
    });
    $("#Email").focusout(function(){
		check_Email();
		
		//check_email_exists();
		
    });
    $("#Password").focusout(function(){
        check_password();
    });
    $("#Contact").focusout(function(){
        check_contact();
    });
    function check_username() {
	
		var username_length = $("#Name").val().length;
		
		if(username_length < 5 || username_length > 20) {
			$("#username_error").html("Should be between 5-20 characters");
			$("#username_error").show();
			error_username = true;
		} else {
			$("#username_error").hide();
		}
	
    }
    function check_Email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#Email").val())) {
			$("#email_error").hide();
			//check_email_exists();
			
		} else {
			$("#email_error").html("Invalid email address");
			$("#email_error").show();
			error_email = true;
			
		}
	
	}
	
	/*function check_email_exists(){
		
		
			$("#email_exist_error").html("Email Already Exists");
			$("#email_exist_error").show();
			
	
	}*/

    function check_password() {
	
		var password_length = $("#Password").val().length;
		
		if(password_length < 8) {
			$("#password_error").html("At least 8 characters");
			$("#password_error").show();
			error_password = true;
		} else {
			$("#password_error").hide();
		}
	
    }
    function check_contact() {

		var pattern = new RegExp(/^[789][0-9]{9}$/);
	
		if(pattern.test($("#Contact").val())) {
			$("#contact_error").hide();
		} else {
			$("#contact_error").html("Invalid Mobile Number");
			$("#contact_error").show();
			error_contact = true;
		}
	
    }
    $("#signup_form").submit(function() {
											
		error_username = false;
		error_password = false;
		error_email = false;
		//exists_email = false;
		error_contact = false;
											
        check_username();
        check_Email();
        check_password();
		check_contact();
		//check_email_exists();
		
		
		if(error_username == false && error_password == false && error_email == false && error_contact == false) {
			//window.location.href="home.php";
			return true;
		} else {
			return false;	
		}

    });
});

//for SETTING PAGE
/*
$(document).ready(function(){
   ("#pass_match_error").hide();
   ("#new_match_error").hide();
   var error_pass_match = false;
	var error_new_match = false;
	$("#new_password").focusout(function(){
        check_oldpassword();
    });
    $("#new_password1").focusout(function(){
		check_newpassword();
	});
	function check_oldpassword(){
		var old_password = $("#old-password").val;
		var new_password = $("#new_password").val;
		if(old_password==new_password){
			("#pass_match_error").hide();
		}
		else{
			$("#pass_match_error").html("old and new password does not match");
			$("#pass_match_error").show();
			error_pass_match = true;
		}
	}
	function check_newpassword(){
		var new_password = $("#new_password").val;
		var new_password1 = $("#new_password1").val;
		if(new_password==new_password1){
			("#new_match_error").hide();
		}
		else{
			$("#new_match_error").html("new passwords does not match");
			$("#new_match_error").show();
			error_new_match = true;
		}
	}

	$("#setting_form").submit(function() {
											
		error_pass_match = false;
		error_new_match = false;
										
		check_oldpassword();
		check_newpassword();
        
		if(error_pass_match == false &&
			error_new_match == false) {
			
			return true;
		} else 
		{
			return false;	
		}

    });
});*/



/*$(document).ready(function(){
	$("#email_or_password").hide;
	var email_password_mismatch_error = false;

	$("#pass").focusout(function(){
		check_mismatch();
	});
	function check_mismatch(){
		var num = "<?php echo $num;?>";
		if(num == 0){
			alert("email or Password Mismatch");
			$("#email_or_password").html("Invalid Mobile Number");
			$("#email_or_password").show();
			email_password_mismatch_error = true;

		}
		else{
			$("#email_or_password").hide();

		}
	}
	$("#loginModal").submit(function() {
											
		email_password_mismatch_error = false;
											
		check_mismatch();
		
		
		if(email_password_mismatch_error == false) {
			return true;
		} else {
			return false;	
		}

	});
});*/
