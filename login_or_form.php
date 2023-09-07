<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    include_once("haveAPetToGiveAway.php");
} else {
    include_once("login.php");
}
?>