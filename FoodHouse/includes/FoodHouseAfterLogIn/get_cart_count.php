<?php
session_start();

if(isset($_SESSION["cart_item"])) {
    $cartItemCount = count($_SESSION["cart_item"]);
} else {
    $cartItemCount = 0;
}
?>



<!-- 


<script>
    function updateCartItemCount() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cartItemCount").innerText = this.responseText;
            }
        };
        xhttp.open("GET", "get_cart_count.php", true);
        xhttp.send();
    }

    // Call the function when the page loads
    window.addEventListener('load', updateCartItemCount);

    // Call the function when the window is resized
    window.addEventListener('resize', updateCartItemCount);
</script> -->

    <!-- Include jQuery library -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- Use JavaScript and AJAX to dynamically update the cart item count -->
<!-- <script>
    function updateCartItemCount() {
        $.ajax({
            url: 'get_cart_count.php',
            method: 'GET',
            success: function(response) {
                $('#cartItemCount small').html(response);
            },
            error: function() {
                console.log('Error fetching cart item count.');
            }
        });
    }

    // Call the function when the page loads
    $(document).ready(function() {
        updateCartItemCount();
    });

    // Update the cart item count whenever an action is taken that might change it
    // For example, after adding/removing an item from the cart
    // Call updateCartItemCount() after performing the action that modifies the cart

</script> --> 
