<?php
session_start();
$_SESSION['logout'] = "Successfully logged out.";
$_SESSION['logged_out'] = true;
//session_destroy();
unset($_SESSION['username']);
unset($_SESSION['password']);
header("Location: home.php");
?>