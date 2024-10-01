<?php
error_reporting(0);
session_start();
// Check if the user is logged in (session is already started in your login file)
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // User is logged in, continue displaying the page.
    include("../../connection/connect.php"); 
    include_once 'product-action.php';
    include("links.php");
    // include("get_cart_count.php");

?>


<?php
// error_reporting(0);
// session_start();

// if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // User is logged in, continue displaying the page.

    // Initialize item_total before the loop
    // $item_total = 0;

    // foreach ($_SESSION["cart_item"] as $item) {
    //     $item_total += ($item["price"] * $item["quantity"]);
    // }

    // // Check if the form has been submitted
    // if (isset($_POST['submit'])) {
    //     var_dump($_POST);
    //     // Check if address and contact phone are empty
    //     if (empty($_POST["contact-address"]) || empty($_POST["contact-phone"])) {
    //         echo "<script>alert('Enter address and contact number for the order');</script>";
    //     } else {
    //         $address = mysqli_real_escape_string($db, $_POST["contact-address"]);
    //         $contact = mysqli_real_escape_string($db, $_POST["contact-phone"]);

    //         // Place the order for each item in the cart
    //         foreach ($_SESSION["cart_item"] as $item) {
    //             $SQL = "INSERT INTO users_orders(u_id, title, quantity, price, address, contact) VALUES ('".$_SESSION["user_id"]."', '".$item["title"]."', '".$item["quantity"]."', '".$item["price"]."', '$address', '$contact')";
    //             if (mysqli_query($db, $SQL)) {
    //                 // Order successfully placed
    //                 unset($_SESSION["cart_item"]);
    //                 $success = "Thank you. Your order has been placed!";
    //                 echo "<script>alert('$success');</script>";
    //             } else {
    //                 // Handle the case where the database query fails
    //                 echo "<script>alert('Error placing the order: " . mysqli_error($db) . "');</script>";
    //             }
    //         }
    //     }
    // }

?>
<!-- Rest of your HTML and form here -->

<?php 
    if(!empty($_SESSION['cart_item'])){

    
        
?>

<!DOCTYPE html>
<html lang="en">

    <?php

        // include("links.php");

    ?>

<?php


function function_alert() { 
      

    echo "<script>alert('Thank you. Your Order has been placed!');</script>"; 
    echo "<script>window.location.replace('your_orders.php');</script>"; 
} 



										  
    foreach ($_SESSION["cart_item"] as $item)
    {

    $item_total += ($item["price"]*$item["quantity"]);

    // $address = $_POST["contact-address"];
    // $contact = $_POST["contact-phone"];
        if(isset($_POST['submit']))
        {
            // var_dump($_POST);

            if (empty($_POST["contact-address"]) || empty($_POST["contact-phone"])) {
                        echo "<script>alert('Enter address and contact number for the order');</script>";
            } else {
                $address = mysqli_real_escape_string($db, $_POST["contact-address"]);
                $contact = mysqli_real_escape_string($db, $_POST["contact-phone"]);
    
            $SQL="insert into users_orders(u_id,title,quantity,price,address,contact) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."','$address','$contact')";
            echo("<script>confirm('Do you want to confirm the order?');</script>");
            mysqli_query($db,$SQL);
            
            
            unset($_SESSION["cart_item"]);
            unset($item["title"]);
            unset($item["quantity"]);
            unset($item["price"]);
            $success = "Thank you. Your order has been placed!";

            function_alert();

        }
            
            
        }
    }


?>




    <?php
        if(empty($_SESSION["user_id"]))
        {
            header("./");
        }
    ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Checkout || Online Food Ordering System -FoodHouse </title>
    <link href="forback/css/bootstrap.min.css" rel="stylesheet">
    <link href="forback/css/font-awesome.min.css" rel="stylesheet">
    <link href="forback/css/animsition.min.css" rel="stylesheet">
    <link href="forback/css/animate.css" rel="stylesheet">
    <link href="forback/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/customStyle.css">
    <link rel="stylesheet" href="responsiveStyle.css">
</head>

<body>

    <?php
        include("navbar.php");
    ?>
  
        
    <div class="">

            <div class="container">

                <span style="color:green;">
                    <?php echo $success; ?>
                </span>

            </div>


           

            <div class="container m-t-30" style="margin-top: 150px">
                <!-- <form action="" method="post"> -->
                    <div class="widget clearfix">

                        <div class="widget-body">
                            <form method="post" action="">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="cart-totals margin-b-20">
                                            <div class="cart-totals-title">
                                                <h4>Cart Summary</h4>
                                            </div>
                                            <div class="cart-totals-fields">

                                                <table class="table">
                                                    <tbody>

                                                        <tr>
                                                            <td>Cart Subtotal</td>
                                                            <td> <?php echo "$".$item_total; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Delivery Charges</td>
                                                            <td>Free</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-color"><strong>Total</strong></td>
                                                            <td class="text-color"><strong> <?php echo "$".$item_total; ?></strong></td>
                                                        </tr>
                                                    </tbody>

                                                 


                                                </table>
                                            </div>
                                        </div>
                                        <div class="payment-option">
                                            <ul class=" list-unstyled">

                                                <li>
                                                <div class="col-lg-6 col-6">
                                                    <label for="contact-address" class="form-label">Address</label>
                                                    <input type="text" name="contact-address" id="contact-address" class="form-control" placeholder="Enter detail address">
                                                </div>

                                                <div class="col-lg-6 col-6">
                                                    <label for="contact-phone" class="form-label">Phone Number</label>
                                                    <input type="telephone" name="contact-phone" id="contact-phone" pattern="[0-9]{3}[0-9]{7}" class="form-control" placeholder="98xxxxxxxx">
                                                </div>

                                                </li>

                                                <li>
                                                    <label class="custom-control custom-radio  m-b-20">
                                                        <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Cash on Delivery</span>
                                                    </label>
                                                </li>
                                                
                                                <li>
                                                    <label class="custom-control custom-radio  m-b-10">
                                                        <input name="mod" type="radio" value="paypal" disabled class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal <img src="images/paypal.jpg" alt="" width="90"></span> </label>
                                                </li>
                                            </ul>
                                            <p class="text-xs-center"> <input type="submit" name="submit" class="btn btn-success btn-block" value="Order Now"/> </p>
                                        </div>
                            </form>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>



<?php
    } else{
        header("Location: cart.php?userid=".$_SESSION['user_id']);
    }
?>

<?php
} else {
    // User is not logged in, redirect to the login page
    header("Location: ../LoginPage/login.php");
    exit();
}
?>