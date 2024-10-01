<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password ='';
$database = 'foodTest';

// Create a new database connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Signup form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists in the database
    $checkQuery = "SELECT * FROM users WHERE email = '$email'";
    $checkResult = $conn->query($checkQuery);
    if ($checkResult->num_rows > 0) {
        die('Email already exists');
    }

    // Insert the new user into the database
    $insertQuery = "INSERT INTO users (full_name, email, password) VALUES ('$fullName', '$email', '$password')";
    if ($conn->query($insertQuery) === true) {
        echo 'User registered successfully';
    } else {
        echo 'Error during signup: ' . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wrapper">
    <div class="form signup">
        <header>Signup</header>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="fullName" placeholder="Full name" required>
            <input type="text" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="checkbox">
                <input type="checkbox" id="signupCheck" required>
                <label for="signupCheck">I accept all terms & conditions</label>
            </div>
            <input type="submit" value="Signup">
        </form>
    </div>

    <div class="form login">
        <header>Login</header>
        <form action="#">
            <input type="text" placeholder="Email address" required>
            <input type="password" placeholder="Password" required>
            <a href="#">Forgot password?</a>
            <input type="submit" value="Login">
        </form>
    </div>

    <script>
        const wrapper = document.querySelector(".wrapper");
        const signupHeader = document.querySelector(".signup header");
        const loginHeader = document.querySelector(".login header");

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
