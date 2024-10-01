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

    <title>Food House - News Page</title>

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

        <header class="site-header site-news-detail-header">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2>Learning a fine dining experience</h2>
                    </div>

                </div>
            </div>
        </header>

        <section class="news-detail section-padding pt-0">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <img src="images/news/news-detail-header.jpg" class="img-fluid news-detail-image"
                            alt="fine dining experience">

                        <div class="col-lg-10 col-10 mx-auto mt-5">

                            <h4 class="mb-3">The best fine-dining experience at Food House</h4>

                            <p>The boat is in the air, but how to decorate it. But the great news, the protein and the news
                                price vulputate before. In porttitor sapien urn, eu vulputate arcu pharetra not.
                                They live and no member of the team ever lives. Everyone but Ultricies Tortor. Clinical portal
                                Pretium tellus, let it be a great vulputate of the orci.</p>

                            <ul class="list">
                                <li class="list-item">Pasta stats published in the International</li>

                                <li class="list-item">Rice flour, or legumes such as beans</li>

                                <li class="list-item">Belgian family developed major food poisoning symptoms</li>
                            </ul>

                            <p>Pasta is a type of food typically made from an unleavened dough of wheat flour mixed with
                                water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking.
                                Rice flour, or legumes such as beans or lentils, are sometimes used in place of wheat
                                flour to yield a different taste</p>

                            <div class="ratio ratio-16x9 my-5">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6vebbDZxoKE?controls=0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <p>This platform is free to use and anyone can make order of their choice by only signing up or log in for previous customer. Only you should have a network and smart devices. Please
                                <strong>click "Reservation" button</strong> on the top right to make reservation
                                for table in this FoodHouse.</p>
    
                            <p>You can make order by simpy signing up on this platform. If you have any problem you can contact our team via mail.
                                Please <a href="mailto: kalathokihem@gmail.com" target="_blank">contact us</a> for more
                                information.</p>

                            <h5 class="mt-4 mb-3">Pasta with Cream Sauce Recipe</h5>

                            <p>Pasta is a type of food typically made from an unleavened dough of wheat flour mixed with
                                water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking.
                                Rice flour, or legumes such as beans or lentils, are sometimes used in place of wheat
                                flour to yield a different taste</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="comments section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-center mb-4">Comment Box</h4>
                    </div>

                    <div class="col-lg-7 col-12 mx-auto">
                        <form class="custom-form comment-form" action="#" method="get" role="form">

                            <input type="text" name="comment-name" id="comment-name" class="form-control"
                                placeholder="Your Name" required>

                            <input type="email" name="comment-email" id="comment-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Your Email" required="">

                            <textarea class="form-control" rows="5" id="comment" name="comment"
                                placeholder="Write a comment" required></textarea>

                            <div class="col-lg-3 col-4 mx-auto">
                                <button type="submit" class="form-control" id="subscribe">Submit</button>
                            </div>
                        </form>

                        <div class="news-author d-flex flex-wrap align-items-center">
                            <img src="images/author/CEO_kalathoki.JPG"
                                class="img-fluid news-author-image" alt="">

                            <div class="ms-4 w-50">
                                <p class="mb-2">It's quite good to explore this from Food House..</p>

                                <a href="images/author/CEO_kalathoki.JPG" target="_blank">Kalathoki</a>
                            </div>

                            <span class="ms-auto">14 hours ago</span>
                        </div>

                        <div class="news-author d-flex flex-wrap align-items-center">
                            <img src="images/author/co_dhital.JPG"
                                class="img-fluid news-author-image" alt="">

                            <div class="ms-4 w-50">
                                <p class="mb-2">It's quite good to explore this from Food House.</p>

                                <a href="images/author/co_dhital.JPG" target="_blank">Dhital</a>
                            </div>

                            <span class="ms-auto">3 days ago</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="related-news section-padding bg-white">
            <div class="container">
                <div class="row">

                    <h2 class="text-center mb-lg-5 mb-4">Related News</h2>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.php">
                                <img src="images/news/gilles-lambert-S_LhjpfIdm4-unsplash.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Promotions</span>

                                <strong>12 April 2022</strong>

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
                                <img src="images/news/ella-olsson-mmnKI8kMxpc-unsplash.jpg" class="img-fluid news-image"
                                    alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Career</span>

                                <strong>18 April 2022</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.php" class="news-title-link">How to run a sushi business?</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.php">
                                <img src="images/news/louis-hansel-GiIiRV0FjwU-unsplash.jpg"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Meeting</span>

                                <strong>30 April 2022</strong>

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

        <section class="newsletter section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <img src="images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg" class="img-fluid newsletter-image"
                            alt="">
                    </div>

                    <div class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                        <div class="subscribe-form-wrap">
                            <h4 class="mb-0">Our Newsletter</h4>

                            <p>The food news every day</p>

                            <form class="custom-form subscribe-form mt-4" role="form">
                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="Your email address" required="">

                                <button type="submit" class="form-control mb-3" id="subscribe">Subscribe</button>

                                <small>By signing up, you agree to our Privacy Notice and the data policy</small>
                        </div>
                        </form>
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