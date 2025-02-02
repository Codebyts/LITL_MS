<?php 
    session_start();

    $_SESSION['status'] = 'invalid';

    unset($_SESSION['officer_id']);
    header("Location: login-page.php");
?>