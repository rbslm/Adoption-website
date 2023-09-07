<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Dog Care </title>
    <meta charset="utf-8">
</head>
    
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <div class="content">
            <h3> Dog Care </h3>
            <div class="dogcatcare">

                    <img src="images/dogcare.jpg" 
                        alt="Image of a dog" id="dogcareimg"/>
               
                    <div id = "dogcarecontent"> 
                        <p><span class="dogcatcarecontenttitle"> Your dog is your friend! </span> </p><br />
                        <p> Taking care of your dog is important to keep them happy and healthy. 
                            We are excited to share with you a few resources for more informations about dog care:</p>
                        <p><a href="https://www.cdc.gov/healthypets/pets/dogs.html"> Center for Disease Control and Prevention (cdc)</a></p>
                        <p><a href="https://www.aspca.org/pet-care/dog-care/general-dog-care"> ASPCA</a></p>
                        <p><a href="https://www.pawlicy.com/blog/dog-care-tips/"> Pawlicy Advisor </a></p>
                        <p><a href="https://vcacanada.com/know-your-pet/dog-care"> VCA Canada </a></p>
                    </div>
            </div>
        </div>

        <?php include("aside.php"); ?>
        <?php include("footer.php"); ?>
     
    </div>
</body>
</html>