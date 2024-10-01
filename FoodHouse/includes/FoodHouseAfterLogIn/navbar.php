<?php
    // include("product-action.php");
    ?>
    <?php
error_reporting(0);
session_start();
// Check if the user is logged in (session is already started in your login file)
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // User is logged in, continue displaying the page.
    include("../../connection/connect.php"); 
        $loginquery = "SELECT * FROM users WHERE u_id = {$_SESSION['user_id']}";
    
        $result = mysqli_query($db, $loginquery);

        $rows = mysqli_fetch_array($result);

?>
<nav class="navbar navbar-expand-lg bg-white shadow-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>">
                FoodHouse
            </a>

            <div class="d-lg-none">
                <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- <i class="fa fa-user" aria-hidden="true" style="font-size: 1.78rem;"></i> -->
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['profile_picture']); ?>" class="img-thumbnail border border-primary" alt="Profile Picture" style="width: 40px; height: 40px; border-radius: 50px;">
                </a>

                <div class="dropdown-menu dropdown-menu-right animated zoomIn" style="width: 20%;">
                    <ul class="dropdown-user" style="list-style: none;">
                        <li><a href="profile.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>"><i class="fa fa-user text-primary" aria-hidden="true"></i> Profile</a></li>
                        <li>
                            <a href="cart.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>">
                                <i class="fa fa-cart-arrow-down text-primary" aria-hidden="true"></i> 
                                Cart <sup>
                                    <span id="cartItemCount" style="border: 1px solid orange; background-color: #f44749;" class="cartnum bg-danger p-1">
                                        <small class="" style="color: white; font-weight: 800; font-ize: 0.7123rem; padding: 0.15rem;"><?php echo $cartItemCount;  ?>
                                        </small>
                                    </span>
                                </sup>
                            </a>
                        </li>
                        <li><a href="your_orders.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>"><i class="fa fa-shopping-cart text-primary" aria-hidden="true"></i> MyOrders</a></li>
                        <li><a href="logout.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>"><i class="fa fa-power-off text-primary"></i> Logout</a></li>
                        
                    </ul>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="menu.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>">Menu</a>
                    </li>
                    
                    <li class="nav-item d-none d-lg-block">
                        <a href="cart.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>" class="nav-link">
                            <i class="fa fa-cart-arrow-down text-primary" aria-hidden="true"></i> 
                            <span>cart</span>
                            <sup>
                                <span style="border: 1px solid orange; background-color: #f44749; position: relative;" class="cartnum">
                                    <small style="color: white; font-weight: 800; font-size: 0.7123rem; padding: 0.15rem;">
                                        <?php echo $cartItemCount; ?>
                                    </small>
                                </span>
                            </sup>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="news.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>">Our Updates</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="contact.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>">Contact</a>
                    </li>
                    
                </ul>
            </div>

            <div class="d-none d-lg-block">
                <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <!-- <i class="fa fa-2x fa-user" aria-hidden="true"></i> -->
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['profile_picture']); ?>" class="img-thumbnail border border-primary" alt="Profile Picture" style="width: 40px; height: 40px; border-radius: 50px;"> 
                </a>

                <div class="dropdown-menu dropdown-menu-right animated zoomIn pl-3" style="width: 20%;">
                    <ul class="dropdown-user" style="list-style: none;">
                        <li><a href="profile.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>"><i class="fa fa-user text-primary" aria-hidden="true"></i> Profile</a></li>

                        <li class="d-lg-none">
                            <a href="cart.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>">
                                <i class="fa fa-cart-arrow-down text-primary" aria-hidden="true"></i> 
                                Cart <sup>
                                    <span id="cartItemCount" style="border: 1px solid orange; background-color: #f44749;" class="cartnum bg-danger p-1">
                                        <small class="" style="color: white; font-weight: 800; font-ize: 0.7123rem; padding: 0.15rem;"><?php echo $cartItemCount ;  ?>
                                        </small>
                                    </span>
                                </sup>
                            </a>
                        </li>

                        <li><a href="your_orders.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>"><i class="fa fa-shopping-cart text-primary" aria-hidden="true"></i> MyOrders</a></li>

                        <li><a href="logout.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>"><i class="fa fa-power-off text-primary"></i> Logout</a></li>
                        
                    </ul>
                </div>

            </div>

                <!-- <button type="button" class="custom-btn btn fas fa-user"></button> -->
        </div>
    </nav>

    <?php
} else {
    // User is not logged in, redirect to the login page
    header("Location: ../LoginPage/login.php");
    exit();
}
?>