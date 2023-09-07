<?php
    include("createanaccount.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $errors = array();

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if(strlen($password) < 4){
        $errors[] ="Password must be at least 4 characters long";
    }

    if(!preg_match("/^[A-Za-z0-9]+$/", $username)){
        $errors[] ="Username must contain only letters (uppercase or lowercase) and digits";
    }

    if(!preg_match("/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{4,}$/", $password)){
        $errors[] ="Password must contain letters and digits only, with at least one letter and at least one digit";
    }

    if (empty($errors)) {
        $existUsers = file("login.txt", FILE_IGNORE_NEW_LINES); 
        foreach ($existUsers as $user) {
            $username_password_arr = explode(":", $user);
            if ($username_password_arr[0] === $username) {
                $errors[] = "Username already exists. Please try a new username.";
                break;
            }
        }
    }

    if (empty($errors)) {
        $file = fopen("login.txt", "a"); 
        fwrite($file, $username . ":" . $password . "\n"); 
        fclose($file);
        echo "<script>document.getElementById('form3').innerHTML = '<p>Account created successfully.<br /><br /> You are now ready to login.</p>';</script>";
    } else {
        $errorString = ""; 
        foreach ($errors as $error) {
            $errorString .= $error . "<br><br>"; 
        }
        echo "<script>document.getElementById('formInvalid').innerHTML = '$errorString';</script>";
    }
?>