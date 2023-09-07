<!DOCTYPE html>
<html lang="en">
<head>
<script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Lovely Companion </title>
    <meta charset="utf-8">
</head>
<body>
<aside class="aside">
            <ul>
                <li> <a href = "home.php"> Home </a> </li>
                <li> <a href = "findaDogCat.php"> Find a dog/cat </a> </li>
                <li> <a href = "dogcare.php"> Dog Care </a> </li>
                <li> <a href = "catcare.php"> Cat Care </a> </li>
                <li> <a href = "contactus.php"> Contact Us </a> </li>
                <?php 
                    if (!(isset($_SESSION['username']) && isset($_SESSION['password']))) {
                        echo "<li> <a href = 'createanaccount.php'> Create an account </a> </li>";
                    }
                ?>
                <?php 
                    if ((isset($_SESSION['username']) && isset($_SESSION['password']))) {
                        echo "<li> <a href = 'login_or_form.php'> Have a pet to give away </a> </li>";
                    }
                    else {
                        echo "<li> <a href = 'login_or_form.php'> Login </a> </li>";
                    }
                ?>
                <?php 
                if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                    echo "<li> <a href = 'logout.php'> Logout </a> </li>";
                }
                ?>
            </ul>
        </aside>
</body>
</html>
    