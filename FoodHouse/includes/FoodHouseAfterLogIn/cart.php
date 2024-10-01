<?php
error_reporting(0);
session_start();
// Check if the user is logged in (session is already started in your login file)
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // User is logged in, continue displaying the page.
    include("../../connection/connect.php"); 
    include_once 'product-action.php';
    include("links.php");
    include("get_cart_count.php");

?>


<!doctype html>
<html lang="en">

    <?php
        // include("links.php");
        // include("get_cart_count.php");

    ?>

    <?php
        // include("../../connection/connect.php"); 
        

        // include_once 'product-action.php'; 

    ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>FoodHouse -For Best food</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- boostrap css file -->
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <!-- custom css file -->
    <link href="css/customStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsiveStyle.css">

    <!-- <link href="forback/css/bootstrap.min.css" rel="stylesheet">
    <link href="forback/css/font-awesome.min.css" rel="stylesheet">
    <link href="forback/css/animsition.min.css" rel="stylesheet"> -->
    <!-- <link href="forback/css/animate.css" rel="stylesheet"> -->
    <link href="forback/css/style.css" rel="stylesheet">

    <style>
        /* .no-gutter div{
            display: inline;
        } */
    </style>

    

<!-- <div class="form-group row no-gutter">
            <div class="col-xs-6">
                <input type="text" class="form-control b-r-0" value=?php echo "$".$item["price"]; ?> readonly id="exampleSelect1">
            </div>
            <div class="col-xs-6">
                <input class="form-control" type="text" readonly value='?php echo $item["quantity"]; ?>' id="example-number-input">
            </div>
        </div> -->

</head>
<body>
    

    <?php
        include("navbar.php");
    ?>


    <main>
    

        <header class="site-header site-menu-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">Shopping Cart</h1>

                        <strong class="text-white">Perfect for all Breakfast, Lunch and Dinner</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <?php 
            $ress= mysqli_query($db,"select * from dishes   where d_id='$_GET[d_id]'");
            $rows=mysqli_fetch_array($ress);
										  
        ?>

       <section class="menu section-padding">
        <div class="container m-t-30">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="widget widget-cart">
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                                Your Cart
                            </h3>


                            <div class="clearfix"></div>
                        </div>
                        <div class="order-row bg-white">
    <div class="widget-body">
        <?php
            $item_total = 0;
            foreach ($_SESSION["cart_item"] as $item) {
        ?>
        <div class="title-row">
            <?php echo $item["title"]; ?>
            <a href="cart.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>">
                <i class="fa fa-trash pull-right"></i>
            </a>
        </div>
        <div class="form-group row no-gutter">
            <div class="col-xs-12">
                <div class="d-flex justify-content-between">
                    <span class="form-control" style="flex: -1; background-color: lightgray;" id="exampleSelect1"><?php echo "$" . $item["price"]; ?></span>
                    <span class="form-control" style="flex: 0; background-color: lightgray;" id="example-number-input"><?php echo $item["quantity"]; ?></span>
                </div>
            </div>
        </div>
        <?php
            $item_total += ($item["price"]*$item["quantity"]); 
            }
        ?>
    </div>
</div>





            <div class="widget-body">
                <div class="price-wrap text-xs-center">
                    <p>TOTAL</p>
                    <h3 class="value"><strong><?php echo "$".$item_total; ?></strong></h3>
                    <p>Free Delivery!</p>
                    <?php
                            if($item_total==0){
                            ?>


                    <a href="checkout.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>" class="btn btn-danger btn-lg disabled">Checkout</a>

                    <?php
                            }
                            else{   
                            ?>
                    <a href="checkout.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?> " class="btn btn-success btn-lg active">Checkout</a>
                    <?php   
                            }
                            ?>

                </div>
            </div>

        </div>
    </div>


     
<div class="col-md-8">
<div class="menu-widget" id="2">
    <div class="widget-heading">
        <h3 class="widget-title text-dark pl-3 pt-3">
            MENU
        
        <button class="btn btn-link pull-right menu-toggle-button collapsed mt-2" type="button" data-toggle="collapse" data-target="#popular2" aria-expanded="false">
            <i class="fa fa-angle-right pull-right"></i>
            <i class="fa fa-angle-down pull-right"></i>
        </button>
        </h3>
        <div class="clearfix"></div>
    </div>
    <div class="collapse show" id="popular2" style="max-height: 600px; overflow-y: auto;">
            <?php  
            $stmt = $db->prepare("SELECT * FROM dishes");
            $stmt->execute();
            $products = $stmt->get_result();
            if (!empty($products)) 
            {
                foreach($products as $product)
                {
            ?>
            
            <div class="food-item">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-8">
                        <!-- Display menu item details here -->
                        <div class="rest-logo pull-left">
                            <a class="restaurant-logo pull-left" href="#"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['image']);?>" alt=""></a>
                        </div>

                        <div class="rest-descr">
                            <h6><a href="#"><?php echo $product['title']; ?></a></h6>
                            <p><?php echo $product['slogan']; ?></p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-lg-3 pull-right item-cart-info">
                        <span class="price pull-left">$<?php echo $product['price']; ?></span>
                        <form method="post" action='cart.php?action=add&id=<?php echo $product['d_id']; ?>'>
                            <input class="b-r-0" type="text" name="quantity" style="margin-left:30px;" value="1" size="2" />
                            <input type="submit" class="btn theme-btn" style="margin-left:40px;" value="Add To Cart" onclick="count_cart();" />
                        </form>
                    </div>
                </div>
            </div>
            
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
            </div>

        </div>
       </section>

    </main>


    <?php
        include("footer.php");
    ?>

    



    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- custom js file -->
    <script src="js/custom.js"></script>

    
    


<script>
    var menuWidgets = document.querySelectorAll(".menu-widget");
    var menuToggleButtons = document.querySelectorAll(".menu-toggle-button");

    menuToggleButtons.forEach(function(button, index) {
        button.addEventListener("click", function() {
            menuWidgets.forEach(function(widget, widgetIndex) {
                var collapse = widget.querySelector(".collapse");
                if (widgetIndex === index) {
                    collapse.classList.toggle("show");
                    if (collapse.classList.contains("show")) {
                        button.innerHTML = '<i class="fa fa-angle-right pull-right"></i>';
                    } else {
                        button.innerHTML = '<i class="fa fa-angle-down pull-right"></i>';
                    }
                } else {
                    collapse.classList.remove("show");
                    menuToggleButtons[widgetIndex].innerHTML = '<i class="fa fa-angle-down pull-right"></i>';
                }
            });
        });
    });
</script>

<script>
    var menu = document.getElementById("popular2");
var menuToggle = document.querySelector(".menu-toggle-button");

menuToggle.addEventListener("click", function () {
    menu.classList.toggle("show");
    menuToggle.classList.toggle("collapsed");
});
 
function cart_count(){
    <?php
session_start();

if(isset($_SESSION["cart_item"])) {
    $cartItemCount = count($_SESSION["cart_item"]);
} else {
    $cartItemCount = 0;
}
?>
}
</script>

</body>
</html>


<?php
} else {
    // User is not logged in, redirect to the login page
    header("Location: ../LoginPage/login.php");
    exit();
}
?>