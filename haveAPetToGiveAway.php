<!DOCTYPE html>
<html lang="en">
<head>
    <script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Have a Pet to Give Away </title>
    <meta charset="utf-8">
</head>
     
<body>
    <div class="container">
    <?php include("header.php"); ?>
        <div class="content">              
            <div id="hptga">
                <h3> Have a Pet to Give Away </h3>

                <div id="form2">
                    <h3> Please fill the form below </h3>
                    <form action="have_pet_to_give_away.php" method="post">
                        <p> Are you giving away a dog or a cat? </p> <br />
                        <label><input type="radio" name="dogcat" value="Dog" id="dog"> Dog </label><br />
                        <label><input type="radio" name="dogcat" value="Cat" id="cat"> Cat </label> <br /><br />
                
                        <p> What is your animal's breed? </p> <br />
                        <label>
                            <input type="radio" name="breedForm2" value="Breed" id="breedradio" /> Breed: 
                        </label>
                            <input type="text" name="breedText1" id="breedText1" />    <br /><br />
                        <label>
                            <input type="radio" name="breedForm2" value="Mix Breed" id="mixbreedradio"> Mix Breed: 
                        </label>
                            <input type="text" name="breedText2" id="breedText2" />    
                        <br /> <br />
                
                        <p> What is your animal's age? </p> <br />
                        <label>
                            Age: <input type="text" name="preferredage" id="preferredage" />
                        </label>    
                        <br /><br />
                            
                        <p> What is your animal's gender? </p> <br />
                            <label><input type="radio" name="gender" value="Male" id="male" /> Male </label> <br />
                            <label><input type="radio" name="gender" value="Female" id="female" /> Female </label> <br /><br />
                
                        <p> Does the animal get along with...</p> <br />
                        <label><input type="checkbox" name="getAlong[]" value="Other Dogs" id="otherdogs" /> Other Dogs </label> <br />
                        <label><input type="checkbox" name="getAlong[]" value="Other Cats" id="othercats" /> Other Cats </label> <br />
                        <label><input type="checkbox" name="getAlong[]" value="Small Children" id="smallchildren" /> Small Children </label> <br /><br />
                
                        <p> Tell us more about your animal below: </p> <br />
                        <textarea name="moreinfo"></textarea> <br /><br />
                
                        <p> Enter your first and family names:</p> <br />
                        <label>First Name: <input type="text" name="firstName" id="firstName" /> </label> <br /><br />
                        <label>Family Name: <input type="text" name="familyName" id="familyName" /> </label> <br /><br />
                            
                        <p> Enter your email:</p> <br />
                        <label> Email: <input type="text" name="email" id="email" /></label> <br /><br />
                            
                        <input type="submit" value="Submit" name="submit" id="submit" onclick="return validateForm2()" />
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