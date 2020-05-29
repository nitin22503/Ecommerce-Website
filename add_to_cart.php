<?php
require("dbcon.php");
if (isset($_GET['item_number']) && is_numeric($_GET['item_number'])) {
    $item_id = $_GET['item_number'];
    $user_id = $_SESSION['id'];
    $query = "INSERT INTO Cart(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: home.php');
}
?>   