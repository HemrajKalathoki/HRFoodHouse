
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"DELETE FROM feedback WHERE f_id = '".$_GET['feedback_del']."'");
header("location:feedback.php");  

?>
 