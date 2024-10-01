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

<!DOCTYPE html>
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


<?php
// if (isset($_POST['update'])) {
//     // Get other form data
//     $username = $_POST['username'];
//     $phone = $_POST['phone'];
//     $email = $_POST['email'];
//     $password = md5($_POST['password']);

//     // Handle profile picture upload
//     if (isset($_FILES["profile_picture"]) && $_FILES["profile_picture"]["error"] == UPLOAD_ERR_OK) {
//         // Read the uploaded image file into a variable
//         $image_data = file_get_contents($_FILES["profile_picture"]["tmp_name"]);

//         // Check if the image data is not empty
//         if (!empty($image_data)) {
//             // Sanitize other form data (you should add more validation as needed)
//             $username = mysqli_real_escape_string($db, $username);
//             $phone = mysqli_real_escape_string($db, $phone);
//             $email = mysqli_real_escape_string($db, $email);
//             $password = mysqli_real_escape_string($db, $password);

//             // Prepare and execute the SQL query to update the user data, including the profile picture
//             $user_id = $_SESSION["user_id"];
//             $update_query = "UPDATE users SET username = '$username', phone = '$phone', email = '$email', password = '$password', profile_picture = ? WHERE u_id = ?";
            
//             // Prepare the statement
//             $stmt = mysqli_prepare($db, $update_query);
//             if ($stmt) {
//                 // Bind the image data and user ID as parameters
//                 mysqli_stmt_bind_param($stmt, "si", $image_data, $user_id);

//                 // Execute the statement
//                 if (mysqli_stmt_execute($stmt)) {
//                     // $success_message = "Profile data updated successfully!";
//                     echo("<script>alert('Profile data updated successfully!');</script>");
//                 } else {
//                     echo "<script>alert('Error updating profile data in the database: " . mysqli_error($db) . "');</script>";
//                     // $error_message = "Error updating profile data in the database: " . mysqli_error($db);
//                 }

//                 // Close the statement
//                 mysqli_stmt_close($stmt);
//             } else {
//                 // $error_message = "Error preparing the update statement: " . mysqli_error($db);
//                 echo "<script>alert('Error preparing the update statement: " . mysqli_error($db) . "');</script>";

//             }
//         } else {
//             echo("<script>alert('Error reading the uploaded image.');</script>");
//             // $error_message = "Error reading the uploaded image.";
//         }
//     } else {
//         // No new image uploaded, update other profile data without affecting the profile picture
//         $user_id = $_SESSION["user_id"];
//         $update_query = "UPDATE users SET username = '$username', phone = '$phone', email = '$email', password = '$password' WHERE u_id = $user_id";

//         if (mysqli_query($db, $update_query)) {
//             // $success_message = "Profile data updated successfully!";
//             echo("<script>alert('Profile data updated successfully!');</script>");
//         } else {
//             // $error_message = "Error updating profile data in the database: " . mysqli_error($db);
//             echo "<script>alert('Error updating profile data in the database: " . mysqli_error($db) . "');</script>";

//         }
//     }
// }
// ?>



<?php
if (isset($_POST['update'])) {
    // Get other form data
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    // Handle profile picture upload
    if (isset($_FILES["profile_picture"]) && $_FILES["profile_picture"]["error"] == UPLOAD_ERR_OK) {
        // Read the uploaded image file into a variable
        $image_data = file_get_contents($_FILES["profile_picture"]["tmp_name"]);

        // Check if the image data is not empty
        if (!empty($image_data)) {
            // Sanitize other form data (you should add more validation as needed)
            $username = mysqli_real_escape_string($db, $username);
            $phone = mysqli_real_escape_string($db, $phone);
            $email = mysqli_real_escape_string($db, $email);

            // Prepare and execute the SQL query to update the user data, including the profile picture
            $user_id = $_SESSION["user_id"];
            $update_query = "UPDATE users SET username = '$username', phone = '$phone', email = '$email', profile_picture = ? WHERE u_id = ?";
            
            // Prepare the statement
            $stmt = mysqli_prepare($db, $update_query);
            if ($stmt) {
                // Bind the image data and user ID as parameters
                mysqli_stmt_bind_param($stmt, "si", $image_data, $user_id);

                // Execute the statement
                if (mysqli_stmt_execute($stmt)) {
                    echo("<script>alert('Profile data updated successfully!');</script>");
                } else {
                    echo "<script>alert('Error updating profile data in the database: " . mysqli_error($db) . "');</script>";
                }

                // Close the statement
                mysqli_stmt_close($stmt);
            } else {
                echo "<script>alert('Error preparing the update statement: " . mysqli_error($db) . "');</script>";
            }
        } else {
            echo("<script>alert('Error reading the uploaded image.');</script>");
        }
    } else {
        // No new image uploaded, update other profile data without affecting the profile picture
        $user_id = $_SESSION["user_id"];
        $update_query = "UPDATE users SET username = '$username', phone = '$phone', email = '$email' WHERE u_id = $user_id";

        if (mysqli_query($db, $update_query)) {
            echo("<script>alert('Profile data updated successfully!');</script>");
        } else {
            echo "<script>alert('Error updating profile data in the database: " . mysqli_error($db) . "');</script>";
        }
    }
}

?>


<?php

if (isset($_POST['change'])) {
    // Get other form data
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];


    $loginquery ="SELECT * FROM users WHERE u_id = ".$_SESSION['user_id'];
    
    $result = mysqli_query($db, $loginquery);
    
    $row = mysqli_fetch_array($result);

    // Handle profile picture upload
    if (empty($_POST['old_password']) || empty($_POST['new_password']) || empty($_POST['confirm_password'])) {
        echo("<script>alert('All Fields required to change password!');</script>");
        // var_dump($_POST);
    } else{
        if($new_password === $confirm_password){
            if(md5($old_password) === $row['password']){
                if(md5($new_password) === $row['password']){
                    echo("<script>alert('Enter different password!');</script>");
                } else{
                    $user_id = $_SESSION["user_id"];
                    $new_key = md5($new_password);
                    $update_query = "UPDATE users SET password = '$new_key' WHERE u_id = $user_id";

                    if (mysqli_query($db, $update_query)) {
                        echo("<script>alert('Password changed successfully!');</script>");
                    } else {
                        echo "<script>alert('Error changing password data in the database: " . mysqli_error($db) . "');</script>";
                    }
                }
            } else{
                echo("<script>alert('Incorret old Password!');</script>");
            }
            
        } else{
            echo("<script>alert('Enter same password for confirmation!');</script>");
        }
    }
}  


?>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>My Profile</title>
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

</head>

<body>

<?php
        include("navbar.php");
    ?>

    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <h1 class="text-white">Your Profile</h1>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </header>

    <?php
        // $loginquery ='SELECT * FROM users WHERE u_id = $_SESSION["user_id"]';
        $loginquery = "SELECT * FROM users WHERE u_id = {$_SESSION['user_id']}";
    
        $result = mysqli_query($db, $loginquery);

        $rows = mysqli_fetch_array($result);
    ?>

    <section class="section-padding">
        <div  class="mx-5 p-4">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['profile_picture']); ?>" class="img-thumbnail float-start border border-primary rounded-circle" alt="Profile Picture" style="width: 100px; height: 100px;">
        </div>
        <div class="container">
            <table cellpadding="15">
                <form action="" method="post" enctype="multipart/form-data">
                    <tr>
                        <td>Profile Picture: </td>
                        <td>
                            <input type="file" name="profile_picture" accept="image/*">
                        </td>
                    </tr>
                    <tr>
                        <td>UserName: </td>
                        <td><input type="text" name="username" value="<?php echo $rows['username']; ?>" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Mobile: </td>
                        <td><input type="text" name="phone" value="<?php echo $rows['phone']; ?>" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="email" value="<?php echo $rows['email']; ?>" class="form-control" /></td>
                    </tr>
                    <!-- <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" value="?php echo ($rows['password']); ?>" class="form-control" /></td>
                    </tr> -->
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="update" value="Update" class="btn btn-primary" />
                            <input type="reset" value="Cancel" class="btn border form" />
                        </td>
                    </tr>
                </form>
                <form action="" method="post">
                    <tr>
                        <td>Current Password: </td>
                        <td><input type="text" name="old_password" value="" class="form-control" required/></td>
                    </tr>
                    <tr>
                        <td>New Password: </td>
                        <td><input type="text" name="new_password" value="" class="form-control"  required/></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="text" name="confirm_password" value="" class="form-control" required/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="change" value="Change" class="btn btn-primary" />
                            <input type="reset" value="Cancel" class="btn border form" />
                        </td>
                    </tr>
                </form>
            </table>
            
        </div>
    
    </section>

    <?php
        include("footer.php");
    ?>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
<?php
// }
?>

<?php
} else {
    // User is not logged in, redirect to the login page
    header("Location: ../LoginPage/login.php");
    exit();
}
?>