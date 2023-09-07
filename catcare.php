<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Cat Care </title>
    <meta charset="utf-8">
</head>
    
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <div class="content">
            <h3> Cat Care </h3>
            <div class="dogcatcare">

                    <div id = "catcarecontent"> 
                        <p><span class="dogcatcarecontenttitle"> Your Cat is your friend ! </span> </p><br />
                        <p> Taking care of your cat is important to keep them happy and healthy. 
                            We are excited to share with you a few resources for more informations about cat care:</p>
                        <p><a href="https://www.cdc.gov/healthypets/pets/cats.html"> Center for Disease Control and Prevention (cdc)</a></p>
                        <p><a href="https://www.aspca.org/pet-care/cat-care/general-cat-care"> ASPCA</a></p>
                        <p><a href="https://www.petsafe.net/learn/cats-101-basic-health-care-tips-to-keep-your-cat-healthy"> PetSafe</a></p>
                        <p><a href="https://www.fourpaws.com/pets-101/cat-corner/cat-care-101"> Four Paws </a></p> 
                    </div>

                    <img src="images/catcare.jpg" 
                        alt="Image of a cat" id="catcareimg"/>
            </div>
        </div>

        <?php include("aside.php"); ?>

        <?php include("footer.php"); ?>

    </div>
</body>
</html>