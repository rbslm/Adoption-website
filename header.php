<!DOCTYPE html>
<html lang="en">
<head>
<script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Lovely Companion </title>
    <meta charset="utf-8">
</head>
<body>
        <header class="header">
            <p id="time"></p>
            <a href = "home.php"> 
                <img src ="images/logo.png" 
                alt = "logo" /> 
            </a>
            <h2> Lovely Companion 
            <?php 
                if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                    $user = $_SESSION['username'];
                    echo "<div id='displayUsername'>  Hello $user! </div>";
                }
                if(isset($_SESSION['logout']) && isset($_SESSION['logged_out']) && $_SESSION['logged_out'] === true){
                $logoutMessage = $_SESSION['logout'];
                echo "<div id='displayUsername'> $logoutMessage </div>";
                unset($_SESSION['logged_out']);
                }
            ?>
            </h2> 
        </header>
</body>
</html>
    