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
        // // error_reporting(0);
        // session_start();

        // include_once 'product-action.php'; 

    ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food House -Menu</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- boostrap css file -->
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <!-- custom css file -->
    <link href="css/customStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsiveStyle.css">


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
                        <h1 class="text-white">Our Menus</h1>

                        <strong class="text-white">Perfect for all Breakfast, Lunch and Dinner</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">Breakfast Menu</h2>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <img src="images/breakfast/morning-fresh.jpg"
                                class="img-fluid menu-image" alt="">

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Fresh Start</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>24.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.4/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">128 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                    <?php 					
                $query_res = mysqli_query($db, "select * from dishes where item_type = 'Breakfast' order by d_id ASC");
                while ($r = mysqli_fetch_array($query_res)) {
                    echo '
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap img-fluid">
                                <img src="data:image/jpg;charset=utf8;base64, ' . base64_encode($r['image']) . '"
                                    class="img-fluid menu-image" alt="" />
                            </div>
                    
                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">' . $r['title'] . '</h4>
                    
                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>' . $r['price'] . '</span>
                    
                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>
                    
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                                    <a href="cart.php" class="btn btn-primary mb-0 ms-4">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }	
            ?>

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <img src="images/breakfast/baked-creamy.jpg"
                                class="img-fluid menu-image" alt="">

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Baked Creamy</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>16.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">64 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <img src="images/breakfast/burger-set.jpg"
                                class="img-fluid menu-image" alt="">

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Burger Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>24.50</span>

                                <del class="ms-4"><small>$</small>36.50</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">32 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </section>

        <section class="menu section-padding bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">Lunch Menu</h2>
                    </div>

                    <?php 					
                $query_res = mysqli_query($db, "select * from dishes where item_type = 'Lunch' order by d_id ASC LIMIT 6");
                while ($r = mysqli_fetch_array($query_res)){
                    echo '
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap img-fluid">
                                <img src="data:image/jpg;charset=utf8;base64, ' . base64_encode($r['image']) . '"
                                    class="img-fluid menu-image" alt="" />
                            </div>
                            
                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">' . $r['title'] . '</h4>
                    
                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>' . $r['price'] . '</span>
                    
                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>
                    
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                    
                                    <a href="cart.php" class="btn btn-primary mb-0 ms-4">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }	
            ?>

                    <!-- <div class="col-lg-6 col-12">
                        <div class="menu-thumb">
                            <img src="images/lunch/super-steak-set.jpg" class="img-fluid menu-image"
                                alt="">

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Super Steak Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>32.75</span>

                                <del class="ms-4"><small>$</small>55</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.2/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">66 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-6 col-12">
                        <div class="menu-thumb">
                            <img src="images/lunch/bread-and-steak-set.jpg" class="img-fluid menu-image"
                                alt="">

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Bread &amp; Steak Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>42.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">84 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </section>

        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">Dinner Menu</h2>
                    </div>

                    <?php 					
                $query_res = mysqli_query($db, "select * from dishes where item_type = 'Dinner' order by d_id ASC LIMIT 6");
                while ($r = mysqli_fetch_array($query_res)) {
                    echo '
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap img-fluid">
                                <img src="data:image/jpg;charset=utf8;base64, ' . base64_encode($r['image']) . '"
                                    class="img-fluid menu-image" alt="" />
                            </div>
                    
                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">' . $r['title'] . '</h4>
                    
                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>' . $r['price'] . '</span>
                    
                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>
                    
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                    
                                    <a href="cart.php" class="btn btn-primary mb-0 ms-4">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }	
            ?>
                    

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <img src="images/dinner/sea-food-set.jpg"
                                class="img-fluid menu-image" alt="">

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Seafood Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>65.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.4/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <img src="images/dinner/premium-steak.jpg" class="img-fluid menu-image"
                                alt="">

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Premium Steak</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>74.25</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">56 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <img src="images/dinner/salmon-set.jpg"
                                class="img-fluid menu-image" alt="">

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Salmon Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>60</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">76 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </section>

    </main>

    <?php
        include("footer.php");
    ?>

    <!-- Modal -->
    <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-0">Reserve Table</h3>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex flex-column justify-content-center">
                    <div class="booking">

                        <form class="booking-form row" role="form" action="#" method="post">
                            <div class="col-lg-6 col-12">
                                <label for="name" class="form-label">Full Name</label>

                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="email" class="form-label">Email Address</label>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                    placeholder="your@email.com" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="phone" class="form-label">Phone Number</label>

                                <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}[0-9]{7}"
                                    class="form-control" placeholder="98xxxxxxxx">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="people" class="form-label">Number of persons</label>

                                <input type="text" name="people" id="people" class="form-control"
                                    placeholder="12 persons">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="date" class="form-label">Date</label>

                                <input type="date" name="date" id="date" value="" class="form-control">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="time" class="form-label">Time</label>

                                <select class="form-select form-control" name="time" id="time">
                                    <option value="5" selected>5:00 PM</option>
                                    <option value="6">6:00 PM</option>
                                    <option value="7">7:00 PM</option>
                                    <option value="8">8:00 PM</option>
                                    <option value="9">9:00 PM</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Special Request</label>

                                <textarea class="form-control" rows="4" id="message" name="message"
                                    placeholder=""></textarea>
                            </div>

                            <div class="col-lg-4 col-12 ms-auto">
                                <button type="submit" class="form-control">Order Food</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer"></div>

            </div>

        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>

<?php
} else {
    // User is not logged in, redirect to the login page
    header("Location: ../LoginPage/login.php");
    exit();
}
?>