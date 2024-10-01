<?php

session_start();
include("../../connection/connect.php"); 


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
                $user_id = $_SESSION["user_id"];
                $new_key = md5($new_password);
                $update_query = "UPDATE users SET password = '$new_key' WHERE u_id = $user_id";

                if (mysqli_query($db, $update_query)) {
                    echo("<script>alert('Password changed successfully!');</script>");
                    header("location: profile.php?userid=".$_SESSION['user_id']);
                } else {
                    echo "<script>alert('Error changing password data in the database: " . mysqli_error($db) . "');</script>";
                    // header("location: profile.php?userid=".$_SESSION['user_id']);
                }
            } else{
                echo("<script>alert('Incorret old Password!');</script>");
                // header("location: profile.php");
            }
            
        } else{
            echo("<script>alert('Enter same password for confirmation!');</script>");
            // header("location: profile.php?userid=".$_SESSION['user_id']);
        }
    }
}  


?>