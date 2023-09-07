<!DOCTYPE html>
<html lang="en">
<head>
    <script type = "text/javascript" src="lovelycompanion.js"></script>
    <link rel="stylesheet" type="text/css" href="lovelycompanion.css">
    <title> Contact Us </title>
    <meta charset="utf-8">
</head>
    
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <div class="content"> 
            <h3> Create an account </h3>
            <div id="formInvalid"></div>
            <div id="createanaccount">
                <form id="form3" action="create_account.php" method="post">
                    <h3> Create an account </h3>
                    <p> Enter a username:</p><br />
                    <input type="text" name="username" id="username" placeholder="username"/> 
                    <p id="usernamespecification">letters and digits only</p> <br />

                    <p> Enter a password:</p> <br />
                    <input type="password" name="password" id="password" placeholder="password"/>
                    <p id="passwordspecification">
                        * at least 4 characters long<br />
                        * letters and digits only<br />
                        * at least 1 letter and at least 1 digit
                    </p>
                    <input type="submit" value="Create account" name="submit" id="submit" />
                    <input type="reset" value="Reset" name="reset" id="reset" />
                </form>
            </div>
        </div>

        <?php include("aside.php"); ?>
        <?php include("footer.php"); ?>

    </div>
    
</body>
</html>