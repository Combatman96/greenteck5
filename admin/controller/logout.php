<?php
    include('../../config/constant.php');
    session_start();

    unset($_SESSION['logged_in']);
    session_destroy();

    header('location:'.SITEURL.'login');
    exit();
?>