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
            <h3> Login </h3>
            <div id="logininvalid"></div>
            <div id="login">
                <form id="form4" action="log_in.php" method="post">
                    <h3> Log in </h3>
                    <p> Enter your username:</p><br />
                    <input type="text" name="username" id="username" placeholder="username"/> <br /><br />

                    <p> Enter your password:</p> <br />
                    <input type="password" name="password" id="password" placeholder="password"/>

                    <input type="submit" value="Login" name="submit" id="submit" />
                    <input type="reset" value="Reset" name="reset" id="reset" />
                </form>
            </div>
        </div>

        <?php include("aside.php"); ?>
        <?php include("footer.php"); ?>

    </div>
    
</body>
</html>

