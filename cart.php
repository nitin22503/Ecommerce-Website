<?php
require("dbcon.php");
if (!isset($_SESSION['Email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart|MobileShop</title>
    <?php
    include "links.php";
    ?>
</head>
<body>
    <?php
    include "header.php";
    ?>
    <div class="container-fluid" id="content" style="margin-top: 5%;">
    <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                       
                        $sum = 0;
                        $user_id = $_SESSION['id'];
                        $query = "SELECT mobileshopitems.price AS Price, mobileshopitems.item_number, mobileshopitems.item_name AS Name FROM cart JOIN mobileshopitems ON cart.item_id = mobileshopitems.item_number WHERE cart.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                         ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <?php
                                
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row['Price'];
                                    $id = $row["item_number"];
                                    echo "<tr>
                                    <td>" . "#" . $row["item_number"] . "</td>
                                    <td>" . $row['Name'] . "</td>
                                    <td>Rs " . $row['Price'] . "
                                    </td>
                                    <td>
                                    <a href='remove_from_cart.php?id={$row['item_number']}' class='remove_item_link'> Remove</a>
                                    </td>
                                    </tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?item_id=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php 
                            
                        } else {
                            echo "<h1>Add items to the cart first!</h1>";
                        }
                    ?>
                    </table>
                </div>
            </div>

    </div>
<div style=" position:fixed;
   bottom:0; width:100%">
<?php
    include "footer.php";
    ?>
</div>
    
</body>
</html>