<?php
// error_reporting(0);
session_start();
// Check if the user is logged in (session is already started in your login file)
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // User is logged in, continue displaying the page.
    include("../../connection/connect.php"); 
    include_once ('product-action.php');
    // include("links.php");
    // include("get_cart_count.php");

?>

<!doctype html>
<html lang="en">

<?php
        // include("links.php");
        // include("get_cart_count.php");

    ?>

    <?php
        // include("../../connection/connect.php"); 
        // error_reporting(0);
        // session_start();

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

    <style>
        .dropdown-menu ul li a{
            padding: 5px 0px;
        }
        .dropdown-menu ul li a{
            display: block;
        }
        .dropdown-menu ul li a:hover{
            text-decoration: none;
            background-color: whitesmoke;
        }
        
    </style>

</head>

<body>

    <?php
        include("navbar.php");
    ?>

    <main>

        <section class="hero">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 m-auto">
                        <div class="heroText">

                            <h1 class="text-white mb-lg-5 mb-3">Delicious Steaks</h1>

                            <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h4 class="text-white mb-0 me-3">4.4/5</h4>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                                </div>

                                <p class="text-white w-100">From <strong>1,206+</strong> Customer Reviews</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/hero-carosol-1.jpg"
                                            class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <span class="text-white">
                                            <i class="bi-geo-alt me-2"></i>
                                            -Ghorahi -Dang, Nepal
                                        </span>

                                        <h4 class="hero-text">Fine Dining Restaurant</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/hero-carosol-2.jpg"
                                            class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <div class="d-flex align-items-center">
                                            <h4 class="hero-text">Steak</h4>

                                            <span class="price-tag ms-4"><small>$</small>26.50</span>
                                        </div>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="reviews-text mb-0 me-3">3.8/5</h5>

                                            <div class="reviews-stars">
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/hero-carosol-3.jpg"
                                            class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <div class="d-flex align-items-center">
                                            <h4 class="hero-text">Sausage Pasta</h4>

                                            <span class="price-tag ms-4"><small>$</small>18.25</span>
                                        </div>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="reviews-text mb-0 me-3">4.2/5</h5>

                                            <div class="reviews-stars">
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/production-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="overlay"></div>
        </section>

        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-center mb-lg-5 mb-4">Special Menus</h2>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/breakfast/morning-fresh.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Breakfast</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Morning Fresh</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>12.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                    <a href="#" class="btn btn-primary mb-0 ms-4">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
            <?php 					
                $query_res = mysqli_query($db, "select * from dishes order by d_id ASC LIMIT 6");
                while ($r = mysqli_fetch_array($query_res)) {
                    echo '
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap img-fluid">
                                <img src="data:image/jpg;charset=utf8;base64, ' . base64_encode($r['image']) . '"
                                    class="img-fluid menu-image" alt="" />
                                <span class="menu-tag bg-warning">' . $r['item_type'] . '</span>
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
                            <div class="menu-image-wrap">
                                <img src="images/lunch/toolpate-soup.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Lunch</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Tooplate Soup</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>24.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">50 Reviews</p>
                                    <a href="#" class="btn btn-primary mb-0 ms-4">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/dinner/premium-steak.jpg" class="img-fluid menu-image"
                                    alt="">

                                <span class="menu-tag bg-warning">Dinner</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Premium Steak</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>45</span>

                                <del class=""><small>$</small>150</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">86 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/dinner/sea-food-set.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Dinner</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Seafood Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>86</span>

                                <del class="ms-4"><small>$</small>124</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">44 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/breakfast/burger-set.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Breakfast</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Burger Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>20.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

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
                            <div class="menu-image-wrap">
                                <img src="images/lunch/healthy-soup.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Lunch</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Healthy Soup</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>34.20</span>

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

                </div>
            </div>
        </section>

        <section class="BgImage"></section>

        <section class="news section-padding">
            <div class="container">
                <div class="row">

                    <h2 class="text-center mb-lg-5 mb-4">News &amp; Events</h2>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.php">
                                <img src="images/news/healthy-life-living.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info news-text-info-large">
                                <span class="category-tag bg-danger">Featured</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">Healthy Lifestyle and happy
                                        living tips</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.php">
                                <img src="images/news/healthy-meal.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info news-text-info-large">
                                <span class="category-tag bg-danger">Featured</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">How to make a healthy meal</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="news-thumb mb-lg-0 mb-lg-4 mb-0">
                            <a href="news-detail.php">
                                <img src="images/news/coconut.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Promotions</span>

                                <strong>8 April 2022</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">Is Coconut good for you?</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="news-thumb mb-lg-0 mb-lg-4 mb-2">
                            <a href="news-detail.php">
                                <img src="images/news/salmon-steak.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag">News</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">Salmon Steak Noodle</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.php">
                                <img src="images/news/making-healthy-salad.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Meeting</span>

                                <strong>30 April 2022</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">Making a healthy salad</a>
                                </h5>
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

    <!-- Modal -->
     <!-- <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
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
    </div> -->

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- custom js file -->
    <script src="js/custom.js"></script>



    <!-- js and jquery -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>

<?php
} else {
    // User is not logged in, redirect to the login page
    header("Location: ../LoginPage/login.php");
    exit();
}
?>