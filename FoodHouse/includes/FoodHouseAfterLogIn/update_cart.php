<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['action']) && $_GET['action'] == 'add') {
    $product_id = $_GET['id'];
    $quantity = $_POST['quantity'];

    // Assuming $_SESSION["cart_item"] is an array that holds cart items

    // If the product is already in the cart, update the quantity
    if (isset($_SESSION["cart_item"][$product_id])) {
        $_SESSION["cart_item"][$product_id]['quantity'] += $quantity;
    } else {
        // Otherwise, add a new item to the cart
        $_SESSION["cart_item"][$product_id] = array(
            'quantity' => $quantity,
            // You can include other product details here
        );
    }
}

// Redirect back to the page
header("Location: ".$_SERVER['HTTP_REFERER']);
?>
