<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Lovely Companion </title>
    <meta charset="utf-8">
</head>
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <div id="logoutmessage">
            
        </div>
            <div class="content">
                <div id="home">

                    <div id="homeupper">
                        <p> Make a pet happy today</p>
                        <img src="images/homeimage.webp" 
                            alt="Picture of a cat and a dog">
                    </div>

                    <div id = "homebottom">
                        <p> Our purpose is to give every dog and cat the home they deserve. <br /> 
                        At Lovely Companion, we offer you the opportunity to search for your ideal animal. <br /> 
                        We also share with you a few tips so you can become an expert in taking care of your furry companion.
                        </p>
                    </div>

                </div>
            </div>

            <?php include("aside.php"); ?>
            <?php include("footer.php"); ?>

    </div>
</body>
</html>