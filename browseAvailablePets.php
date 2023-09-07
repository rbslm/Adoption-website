<!DOCTYPE html>
<html lang="en">
<head>
    <script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Browse Available Pets </title>
    <meta charset="utf-8">
</head>
     
<body>
    <div class="container">
        <?php include("header.php"); ?> 
        <div class="content">
            <h3> Browse Available Pets</h3>
            <div id="availablePets">
                <div id="availablePets1to3">
                <div id="maika">
                    <img src="images/maika.webp"
                    alt="First Available Pet"/>
                    <p>Name: Maika</p>
                    <p>Animal: Dog</p>
                    <p>Breed: Labrador</p>
                    <p>Age: 5 years old</p>
                    <p>Gender: female</p>
                    <p>Gets along with other dogs: Yes</p>
                    <p>Gets along with other cats: Yes</p>
                    <p>Gets along with small children: Yes</p>
                    <p> <button class="interested">Interested</button> </p>
                </div>
                <div id="cooper">
                    <img src="images/cooper.jpg"
                    alt="Second Available Pet"/>
                    <p>Name: Cooper</p>
                    <p>Animal: Dog</p>
                    <p>Breed: Pomeranian</p>
                    <p>Age: 3 years old</p>
                    <p>Gender: Male</p>
                    <p>Gets along with other dogs: No</p>
                    <p>Gets along with other cats: No</p>
                    <p>Gets along with small children: No</p>
                    <p> <button class="interested">Interested</button> </p>
                </div>
                <div id="lola">
                    <img src="images/lola.png"
                    alt="Third Available Pet"/>
                    <p>Name: Lola</p>
                    <p>Animal: Dog</p>
                    <p>Breed: Poodle </p>
                    <p>Age: 1 year old</p>
                    <p>Gender: Female</p>
                    <p>Gets along with other dogs: Yes</p>
                    <p>Gets along with other cats: Yes</p>
                    <p>Gets along with small children: Yes</p>
                    <p> <button class="interested">Interested</button> </p>
                </div>
            </div>
            
            <div id="availablePets4to6">
                <div id="oscar">
                    <img src="images/oscar.jpg"
                    alt="Fourth Available Pet"/>
                    <p>Name: Oscar</p>
                    <p>Animal: Cat</p>
                    <p>Breed: Persian</p>
                    <p>Age: 4 years old</p>
                    <p>Gender: Male</p>
                    <p>Gets along with other dogs: No</p>
                    <p>Gets along with other cats: No</p>
                    <p>Gets along with small children: No</p>
                    <p> <button class="interested">Interested</button> </p>
                </div>
                <div id="angela">
                    <img src="images/angela.jpg"
                    alt="Fifth Available Pet"/>
                    <p>Name: Angela</p>
                    <p>Animal: Cat</p>
                    <p>Breed: Siamese </p>
                    <p>Age: 11 months old</p>
                    <p>Gender: Female</p>
                    <p>Gets along with other dogs: Yes</p>
                    <p>Gets along with other cats: Yes</p>
                    <p>Gets along with small children: Yes</p>
                    <p> <button class="interested">Interested</button> </p>
                </div>
                <div id="felix">
                    <img src="images/felix.jpg"
                    alt="Sixth Available Pet"/>
                    <p>Name: Felix</p>
                    <p>Animal: Cat</p>
                    <p>Breed: Abyssinian  </p>
                    <p>Age: 2 years old</p>
                    <p>Gender: Male</p>
                    <p>Gets along with other dogs: Yes</p>
                    <p>Gets along with other cats: Yes</p>
                    <p>Gets along with small children: Yes</p>
                    <p> <button class="interested">Interested</button> </p>
                </div>
            </div>
            </div>
        </div>

        <?php include("aside.php"); ?>
        <?php include("footer.php"); ?>

    </div>
</body>
</html>