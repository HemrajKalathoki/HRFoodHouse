<?php
session_set_cookie_params(0);
session_start();

// Check if the user is already logged in.
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // User is logged in, redirect to the home page.
    header("Location: ../FoodHouseAfterLogIn/index.php?userid=".$_SESSION['user_id']);
    exit();

?>
<?php
  } else{

    ?>
    <!DOCTYPE html>
    <html lang="en">
          <?php
          
            // error_reporting(E_ALL);
            ini_set('display_errors','On'); 
            include("../../connection/connect.php");
            if(isset($_POST['login'])) {
              $mail = $_POST['mail'];  
              $key = md5($_POST['key']);
              
              if(!empty($_POST["login"])){
                $loginquery ="SELECT * FROM users WHERE email='$mail' && password='$key'";
    
                $result = mysqli_query($db, $loginquery);
    
                $row = mysqli_fetch_array($result);
    
                if(is_array($row)){
                  $_SESSION["user_id"] = $row['u_id'];
                  $user_identy = $row["u_id"];
                  header("refresh:1; url=../FoodHouseAfterLogIn/index.php?userid=".$user_identy);
    
                } else{
                  echo("<script>alert('Invalid username or Password!');</script>");
                }
              }
            }
    
            // <?php
            //   session_start();
    
            //   // Check if the user is logged in. You may have your own authentication logic here.
            //   if (!isset($_SESSION['user_id'])) {
            //       // User is not logged in, redirect to the login page.
            //       header("Location: login.php");
            //       exit;
            //   }
    
            //   // Continue processing for logged-in users.
            //   ?>
    
    
    
    
       
            <!-- //     session_start();
        // include("../../connection/connect.php");
    
        // if(isset($_POST['login'])) {
        //     $mail = $_POST['mail'];
        //     $key = md5($_POST['key']);
            
        //     $loginquery = "SELECT * FROM users WHERE email='$mail' AND password='$key'";
        //     $result = mysqli_query($db, $loginquery);
    
        //     if($result && mysqli_num_rows($result) === 1) {
        //         $row = mysqli_fetch_assoc($result);
        //         $_SESSION["user_id"] = $row['u_id'];
        //         header("Location: ../FoodHouseAfterLogIn");
        //         exit();
        //     } else {
        //       echo("<script>alert('Invalid username or Password');</script>");
        //     }
        // }
    
          ?> -->
    
    
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Food House Log In</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
        <link rel="stylesheet" href="login.css" />
        <style>
          nav ul{
            display: inline-flex;
          }
        </style>
      </head>
      <body>
        <form action="" method="post">
              <div class="login_form_container">
                <div class="login_form">
                  <h2>Login</h2>
                  <div class="input_group">
                    <i class="fa fa-user"></i>
                    <input type="email" placeholder="Username" class="input_text" name="mail" autocomplete="off" required/>
                  </div>
                  <div class="input_group">
                    <i class="fa fa-unlock-alt"></i>
                    <input type="password" placeholder="Password" class="input_text" name="key" autocomplete="off" id="password" minlength="8" maxlength="16" oninput="buttonVisibility()" required/>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                      <i id="toggleIcon" class="fas fa-eye"></i>
                    </span>
                  </div>
                  <div class="button_group" id="login_button">
                    <input type="submit" value="Login" name="login">
                    
                  </div>
                  <div class="fotter">
                    <a href="#">Forgot Password ?</a>
                    <a href="../signUpForm/signup.php">SignUp</a>
                  </div>
                </div>
              </div>
            </form>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="login.js"></script>
      </body>
    </html>


<?php
  }
?>

