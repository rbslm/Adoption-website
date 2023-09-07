<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Find a Dog/Cat </title>
    <meta charset="utf-8">
</head>
    
<body>
    <div class="container">
    <?php include("header.php"); ?>
        <div class="content">              
            <div id="fadc">
                <h3> Find a Dog or Cat </h3>

                <div id="form1">
                    <h3>Please fill the form below</h3> 
                    <form action="browseAllPets.php" method="post">
                        <input type="submit" name="submit" value="Browse all pets available pets" id="browseallpets">
                    </form>
                    <form action="find_dog_cat.php" method="post">
                        <p> Are you looking for a dog or a cat? </p> 
                        <br />
                        <label><input type="radio" name="dogcat" value="Dog" id="dog" /> Dog </label> 
                        <br />
                        <label><input type="radio" name="dogcat" value="Cat" id="cat" /> Cat </label> 
                        <br /><br />

                        <p> What dog or cat breed are you looking for? </p> 
                        <br />
                        <label><input type="radio" name="breed" value="breed" id="breedchoice"> Breed:</label>
                        <input type="text" name="breedtxt" id="breed" />   
                        <br />
                        <label><input type="radio" name="breed" value="Does not matter" id="doesnotmatter1" /> Does not matter </label> <br /><br />

                        <p> What is your preferred age of the animal? </p> <br />
                        <select name="preferredage" id="preferredage">
                            <option> Choose an option </option>
                            <option id="option1"> 0 to 1.5 years old </option>
                            <option id="option2"> 1.5 to 3.5 years old </option>
                            <option id="option3"> 3.5 years old and more </option>
                            <option id="option4"> Does not matter</option>
                        </select> 
                        <br /><br />
            
                        <p> What is your preferred gender of the animal? </p> 
                        <br />
                        <label><input type="radio" name="gender" value="Male" id="male" /> Male </label> 
                        <br />
                        <label><input type="radio" name="gender" value="Female" id="female" /> Female </label> 
                        <br />
                        <label><input type="radio" name="gender" value="Does not matter" id="doesnotmatter2" /> Does not matter </label> 
                        <br /><br />

                        <p> Does the animal need to get along with other dogs, other <br /> cats and small children?</p> 
                        <br />
                        <label><input type="radio" name="yesno" value="Yes" id="yes" /> Yes </label> 
                        <br />
                        <label><input type="radio" name="yesno" value="No" id="no" /> No </label> 
                        <br /><br />

                        <input type="submit" value="Submit" name="submit" id="submit" onclick= "return validateForm1()" />
                        <input type="reset" value="Reset" name="reset" id="reset" />

                    </form>
                </div>
            </div>
        </div>
    
        <?php include("aside.php"); ?>
        <?php include("footer.php"); ?>

    </div>
</body>
</html>