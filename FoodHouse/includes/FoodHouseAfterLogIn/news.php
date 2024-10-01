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
        // // session_start();

        // include_once 'product-action.php'; 

    ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food House - News Section</title>

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

        <header class="site-header site-news-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">News &amp; Events</h1>

                        <strong class="text-white">our latest updates, news, events and special promotions</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <section class="news section-padding bg-white">
            <div class="container">
                <div class="row">

                    <h2 class="mb-lg-5 mb-4">Latest Updates</h2>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.php">
                                <img src="images/news/healthy-life-living.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info news-text-info-large">
                                <span class="category-tag bg-danger">Featured</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">How to make a healthy diet?</a>
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
                                    <a href="news-detail.php" class="news-title-link">Happy Living and happy eating
                                        tips</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="news section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">News &amp; Events</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.php">
                                <img src="images/news/coconut.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Promotions</span>

                                <strong>05 June 2023</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">Is Coconut good for your
                                        health?</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.php">
                                <img src="images/news/sushi-business.jpg" class="img-fluid news-image"
                                    alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Career</span>

                                <strong>10 June 2023</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">How to run a sushi business?</a>
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

                                <strong>15 June 2023</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">Learning a fine dining
                                        experience</a>
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