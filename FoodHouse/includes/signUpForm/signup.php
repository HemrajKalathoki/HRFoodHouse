<!DOCTYPE html>
<html lang="en">

  <?php
    session_start();
    error_reporting(0);
    include("../../connection/connect.php");

    $username = $_POST['fullName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if(isset($_POST['submit'])){
      if(empty($_POST['fullName']) || 
        empty($_POST['email']) ||
        empty($_POST['password'])){
          $message = "All fields must be Required!";
        } else{
          $check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['fullName']."' ");
	        $check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");


          if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email address please type a valid email!');</script>"; 
          }
          elseif(mysqli_num_rows($check_username) > 0) {
            echo "<script>alert('Username Already exists!');</script>"; 
          }
	        elseif(mysqli_num_rows($check_email) > 0) {
            echo "<script>alert('Email Already exists!');</script>"; 
          }

          else{
            $mql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
            mysqli_query($db, $mql);
            
            header("refresh:0.1;url=../LoginPage/login.php");
          }
        }  
    }

  ?>

      <?php
        error_reporting(0); 
        session_start(); 
        include("../../connection/connect.php");
        if(isset($_POST['login'])) {

          $mail = $_POST['mail'];  
          $key = md5($_POST['key']);
          
          if(!empty($_POST["login"])){
            $loginquery ="SELECT * FROM users WHERE email='$mail' && password='".$key."'";

            $result = mysqli_query($db, $loginquery);

            $row = mysqli_fetch_array($result);

            if(is_array($row)){
              $_SESSION["user_id"] = $row['u_id'];
              header("refresh:1; url=../FoodHouseAfterLogIn/index.php?userid=".$row['u_id']);
            } else{
              echo("<script>alert('Invalid username or Password!');</script>");
            }
          } else {
            echo("<script>alert('Both email and password are required');</script>");
          }
        }

      ?>      


  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>FoodHouse -SignUP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form action="" method="post">
          <input type="text" placeholder="Full name" name="fullName" required  />
          <input type="email" placeholder="Email address" name="email" required />
          <input type="password" placeholder="Password" name="password" required />
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" required/>
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <input type="submit" name="submit" value="Signup" />
        </form>
      </div>

      

      <div class="form login">
        <header>Login</header>
        <form action="" method="post">
          <input type="email" placeholder="Email address" required name="mail" />
          <input type="password" placeholder="Password" required name="key" />
          <a href="#">Forgot password?</a>
          <input type="submit" value="Login" name="login" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
  </body>
</html>