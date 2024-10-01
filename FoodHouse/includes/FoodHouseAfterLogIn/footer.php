<?php
error_reporting(0);
session_start();
// Check if the user is logged in (session is already started in your login file)
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // User is logged in, continue displaying the page.

?>

<footer class="site-footer section-padding">

        <div class="container">

            <div class="row">

                <div class="col-12">
                    <h4 class="text-white mb-4 me-5">Food House</h4>
                </div>

                <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                    <p>22400 Anandapur Tole, Ghorahi, Dang,Nepal</p>
                    
                    <a href="https://goo.gl/maps/ShxqoyYDkMWUuCPB8" target="_blank" class="custom-btn btn btn-dark mt-2">Directions</a>
                </div>

                <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>

                    <p class="mb-2">Sunday - Saturday</p>

                    <p>10:00 AM - 08:00 PM</p>

                    <p>Tel: <a href="tel: 9869960233" class="tel-link">9869960233</a></p>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Social</h6>

                    <ul class="social-icon">
                    <li><a href="https://www.linkedin.com/in/hemraj-kalathoki-561264219" target="_blank" class="social-icon-link bi-linkedin"></a></li>
                        <li><a href="https://www.facebook.com/hemrajkalathoki.kalathokihrkt" target="_blank" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="https://www.instagram.com/roshani.dhital/" target="_blank" class="social-icon-link bi-instagram"></a></li>

                        <<li><a href="https://twitter.com/search?q=tooplate.com&src=typed_query&f=live" target="_blank"
                                class="social-icon-link bi-twitter"></a></li>

                            <li><a href="https://youtube.com" target="_blank" class="social-icon-link bi-youtube"></a></li>
                            
                    </ul>

                    <p class="copyright-text tooplate-mt60">Copyright © 2023 Food HouseCo. Ltd.
                        <br>Design: <a rel="nofollow" href="https://www.linkedin.com/in/hemraj-kalathoki-561264219" target="_blank">Kalathoki</a>
                    </p>

                </div>

            </div><!-- row ending -->

        </div><!-- container ending -->

    </footer>
    <?php
} else {
    // User is not logged in, redirect to the login page
    header("Location: ../LoginPage/login.php");
    exit();
}
?>