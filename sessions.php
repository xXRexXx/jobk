<?php
//Start session
session_start();
//Check whether the session variable $_SESSION['user_name'] is present or not

if (!isset($_SESSION['name']) || (trim($_SESSION['name']) == '')) {
    header("location:login.php");
    exit();
}

if (!isset($_SESSION['role']) || (trim($_SESSION['role']) == '')) {
    header("location:login.php");
    exit();
}

?>