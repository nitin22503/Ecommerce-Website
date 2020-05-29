<?php

require("dbcon.php");
if (isset($_GET['item_number']) && is_numeric($_GET['item_number'])) {
    $item_id = $_GET['item_number']; 
    $user_id = $_SESSION['id'];
    
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM cart WHERE item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
   ?>
   <script>
   alert("removed successfully");
</script>
   <?php
    header("location:cart.php");
}
?>