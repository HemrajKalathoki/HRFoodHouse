
<?php
    session_start();
    // session_destroy();
    unset($_SESSION['user_id']);
    $url = '../../';
    header('Location: ' . $url);

?>
