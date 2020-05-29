<?php
include "dbcon.php";
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 
       Contact US | MobileShop
    </title>
    <?php
    include("links.php");
    ?>  

</head>
<body>
    <?php
    include ("header.php");  
    ?>
    <div class="row" style="margin-top: 4%;">
        <div class="container">
           <h1>LIVE SUPPORT</h1>
           <h3>24 hours | 7 days a week | 365 days a year live technical support</h3>
           <div class="row">
               <div class="col-md-9">
                <p style="font-size: 20px; color: black;">
                    It is a long established fact that a reader will be distracted by the readable content of a page  when loking at its layout. The point of using Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis laudantium fugiat beatae eaque deserunt ducimus vero consectetur iure qui! Tenetur quod non perferendis. Ut eius quaerat ad doloremque eveniet rem!
                </p>
               </div>
               <div class="col-md-3">
                <img src="images/24.7.jpg" alt="24*7">
               </div>
           </div>
           <div class="row">
               <div class="col-md-9">
                <h2>CONTACT US</h2><br>
                <form action="contactusValidation.php" method="POST">
                    <div class="form-group">
                        <label for="Email1">Email address</label>
                        <input type="email" class="form-control" id="Email1" 
                        name="email1"
                        placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <label for="Password1">Password</label>
                        <input type="password" class="form-control" id="Password1" 
                        name="pass1"
                        placeholder="Password" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="3" name = "message1" id="message" required></textarea>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                </form>
               </div>
               <div class="col-md-3">
                    <p style="font-size: 25px; color: rgb(133, 219, 133);">Company Information :</p><br>
                    <p style="font-size: 22px; color: black;">
                        500 Lorem ipsum dolor sit.<br>
                        22-56-2-9 sit amet lorem,<br>
                        USA<br>
                        Phone:(00)222 666 444<br>
                        Fax: (000) 000 00 00 0<br>
                        Email:info@mobileShop.com<br>
                        Follow on : Facebook, Twitter
                    </p>
            </div>
           </div>
        </div>
 </div>
 <div>
     <?php
     include ("footer.php");
     ?>
 </div>
</body>
</html> 