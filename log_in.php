<?php
session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $userFound = false;

    if(!file_exists("login.txt")){
        include("login.php");
        echo "<script>document.getElementById('loginInvalid').innerHTML = 'User not found';</script>";
    }

    $existUsers = file("login.txt", FILE_IGNORE_NEW_LINES); 
    

    foreach ($existUsers as $user) {
        $username_password_arr = explode(":", $user);
        $name = $username_password_arr[0];
        $pass = $username_password_arr[1];

        if ($name === $username && $pass === $password) {
            unset($_SESSION['logout']);
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
           include("haveAPetToGiveAway.php");
            $userFound = true;
            break;
        }
        else{
            continue;
        }
    }
    
    if(!($userFound)) {
        include("login.php");
        echo "<script>document.getElementById('logininvalid').innerHTML = 'Invalid username or password<br/><br/>Try again';</script>";
    }


?>