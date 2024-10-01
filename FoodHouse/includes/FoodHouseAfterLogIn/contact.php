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

<?php

    $full_name = $_POST["contact-name"];
    $phone_number = $_POST["contact-phone"];
    $email = $_POST["contact-email"];
    $message = $_POST["contact-message"];
    $date = date("Y-m-d H:i:s");

    if(isset($_POST['submit'])){
      if(empty($_POST["contact-name"]) || 
        empty($_POST["contact-phone"]) ||
        empty($_POST["contact-email"]) ||
        empty($_POST["contact-message"])){
        $message = "All fields must be Required!";
        } else{

          if (!filter_var($_POST['contact-email'], FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email address please type a valid email!');</script>"; 
          }
          $sql = "INSERT INTO feedback (name, number, email, message, f_time) 
                        VALUES ('$full_name', '$phone_number', '$email', '$message', '$date')";
                if (mysqli_query($db, $sql)) {
                    echo "<script>alert('Message sent successfully');</script>";
                    header("refresh:0.1;url=contact.php?userid=" . $_SESSION['user_id']);
                } else {
                    echo "<script>alert('Error: " . mysqli_error($db) . "');</script>";
                }
        }  
    }

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

    <title>Food House - Contact</title>

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

        <header class="site-header site-contact-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 mx-auto">
                        <h1 class="text-white">Say Hi</h1>

                        <strong class="text-white">We are happy to get in touch with you</strong>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </header>

        <section class="contact section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-4">Leave a message</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <form class="custom-form contact-form row" action="" method="post" role="form">
                            <div class="col-lg-6 col-6">
                                <label for="contact-name" class="form-label">Full Name</label>

                                <input type="text" name="contact-name" id="contact-name" class="form-control"
                                    placeholder="Your Name" required>
                            </div>

                            <div class="col-lg-6 col-6">
                                <label for="contact-phone" class="form-label">Phone Number</label>

                                <input type="telephone" name="contact-phone" id="contact-phone"
                                    pattern="[0-9]{3}[0-9]{7}" class="form-control"
                                    placeholder="98xxxxxxxx">
                            </div>

                            <div class="col-12">
                                <label for="contact-email" class="form-label">Email</label>

                                <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="Your Email" required="">

                                <label for="contact-message" class="form-label">Message</label>

                                <textarea class="form-control" rows="5" id="contact-message" name="contact-message"
                                    placeholder="Your Message"></textarea>
                            </div>

                            <div class="col-lg-5 col-12 ms-auto">
                                <button type="submit" name="submit" class="form-control" style="padding-bottom: 0px 0px 15px 0px;">Send</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4">

                        <h5>Weekdays</h5>

                        <div class="d-flex mb-lg-3">
                            <p>Monday to Friday</p>

                            <p class="ms-5">06:00 AM - 10:00 PM</p>
                        </div>

                        <h5>Weekends</h5>

                        <div class="d-flex">
                            <p>Saturday and Sunday</p>

                            <p class="ms-5">07:00 AM - 11:00 PM</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4 class="mt-5 mb-4">Anandapur Tole -Ghorahi,  22400, Dang Nepal</h4>

                        <div class="google-map pt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d883.9723328489565!2d82.48717494860122!3d28.033059846848378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sne!2snp!4v1689003603551!5m2!1sne!2snp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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