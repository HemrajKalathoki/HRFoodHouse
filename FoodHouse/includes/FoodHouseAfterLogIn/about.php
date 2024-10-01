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
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>About -Food House</title>

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

        <header class="site-header site-about-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">About Food House</h1>

                        <strong class="text-white">This is how our House evolved in new digital era</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <section class="about section-padding bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-2">
                        <h4 class="mb-3">Food House is the latest online platform to orders foods and reserve the tables provided by Kalathoki Team</h4>

                        <a href="news.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>" class="custom-btn btn btn-dark mt-3">Check out News</a>

                        <a href="contact.php<?php if(isset($_SESSION['user_id'])) echo '?userid=' . $_SESSION['user_id']; ?>" class="custom-btn btn btn-danger mt-3 ms-3">Say Hi</a>
                    </div>

                    <div class="col-lg-6 col-12">

                        <p>This platform is free to use and anyone can make order of their choice by only signing up or log in for previous customer. Only you should have a network and smart devices. Please
                            <strong>click "Cart" button</strong> on the top center of the navigation bar to make Order from FooHouse</p>

                        <p>You can make order by simpy signing up on this platform. If you have any problem you can contact our team via mail.
                            Please <a href="mailto: kalathokihem@gmail.com" target="_blank">contact us</a> for more
                            information.</p>

                    </div>

                </div>
            </div>
        </section>

        <section class="about section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5">Team Members</h2>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="team-thumb">
                            <img src="images/team/CEO_kalathoki.JPG"
                                class="rounded team-image" alt="" style="max-width: 100%; height: 300px;">

                            <div class="team-info">
                                <h4 class="mt-3 mb-0">HR. Kalathoki</h4>

                                <p>CEO &amp; Founder</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="team-thumb">
                            <img src="images/team/co_dhital.JPG" class="rounded team-image" style="max-width: 100%; height: 300px;"
                                alt="">

                            <div class="team-info">
                                <h4 class="mt-3 mb-0">R. Dhital</h4>

                                <p>Co. Founder</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="team-thumb">
                            <img src="images/team/Manager_Dhanmala.JPG" class="rounded team-image" alt="" style="max-width: 100%; height: 300px;">

                            <div class="team-info">
                                <h4 class="mt-3 mb-0">D. Giri</h4>

                                <p>Team Manager</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="newsletter section-padding bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <img src="images/about_us_newsletter.jpg" class="img-fluid newsletter-image"
                            alt="">
                    </div>

                    <div class="col-lg-6 col-12 d-flex align-items-center mt-5 mt-lg-0 mx-auto">
                        <div class="subscribe-form-wrap">
                            <h4 class="mb-0">Our Newsletter</h4>

                            <p>The food news every day</p>

                            <form class="custom-form subscribe-form mt-4" role="form">
                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="Your email address" required="">

                                <button type="submit" class="form-control" style="padding: 0px 0px 3px 0px;" id="subscribe">Subscribe</button>

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
                                <button type="submit" class="form-control">Order Foods</button>
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
    header("location: ../LoginPage/login.php");
    exit();
}
?>
